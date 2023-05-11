<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Ticket_reply;
use App\Models\Category;
use DataTables;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailTicket;
use App\Models\AdminFeature;
use App\Models\Tracking;
use App\Models\TicketAssign;


class TicketController extends Controller
{
    //

    public function index()
    {
        $categories = Category::all();
        return view("user.ticket", compact("categories"));
    }

    public function verification(Request $request) {
        $message_to_display = '';
        if(isset($_POST['email'])) {
            $user = User::where("email", $_POST['email'])->where("verify", "!=", 1)->first();
            if(!empty($user)) {
                $user = $user->toArray();
                $message_to_display = 'pass';

                $mailData = [
                    'title' => trans('email.user_verify_mail_to_user_title'),
                    'description' => trans('email.user_verify_mail_to_user_description'),
                    'button' => trans('email.user_verify_mail_to_user_button'),
                    'url' => 'http://support.taxpros911.com/login/'.$user['verify_token'].'/'
                ];

                Mail::to($user['email'])->send(new EmailTicket($mailData));
                Tracking::create(["email"=>$user['email'],"button"=>json_encode($mailData)]);
            } else {
                $message_to_display = 'fail';
            }
                return response()->json(200);
        }
        return view("auth.verification", compact("message_to_display"));
    }

    public function reset(Request $request) {
        $message_to_display = '';
        if(isset($_POST['email'])) {
            $user = User::where("email", $_POST['email'])->where("verify", "!=", 1)->first();
            $token = sha1(mt_rand(1, 90000) . 'SALT');

            if(!empty($user)) {
                $user = $user->toArray();
                $message_to_display = 'pass';

                $mailData = [
                    'title' => trans('email.user_reset_mail_to_user_title'),
                    'description' => trans('email.user_reset_mail_to_user_description'),
                    'button' => trans('email.user_reset_mail_to_user_button'),
                    'url' => 'http://support.taxpros911.com/reset_password/'.$token.'/'
                ];

                Mail::to($user['email'])->send(new EmailTicket($mailData));
                Tracking::create(["email"=>$user['email'],"button"=>json_encode($mailData)]);
                $user->reset_token = $token;
                $user->save();

            } else {
                $message_to_display = 'fail';
            }
                return response()->json(200);
        }
        return view("auth.reset", compact("message_to_display"));
    }

    public function reset_password(Request $request, $id) {
        $message_to_display = '';
        if(isset($_POST['password'])) {
            if(!empty($id)) {
                $user = User::where("token", $id)->first();
                $token = sha1(mt_rand(1, 90000) . 'SALT');

                if(!empty($user)) {
                    $message_to_display = 'pass';
                    $user->password =  Hash::make($request->password);

                    $mailData = [
                        'title' => trans('email.user_reset_successfully_mail_to_user_title'),
                        'description' => trans('email.user_reset_successfully_mail_to_user_description'),
                        'button' => trans('email.user_reset_successfully_mail_to_user_button'),
                        'url' => 'http://support.taxpros911.com/login'
                    ];

                    Mail::to($user['email'])->send(new EmailTicket($mailData));
                    Tracking::create(["email"=>$user['email'],"button"=>json_encode($mailData)]);
                    $user->reset_token = '';
                    $user->save();

                } else {
                    $message_to_display = 'fail';
                }
            } else {
                $message_to_display = 'fail';
            }
            return response()->json(200);
        }
        return view("auth.reset_password", compact("message_to_display", "id"));
    }

    public function verifyuser($id) {
            $user = User::role('user')->where("verify", "!=", "1")->where("verify_token", "=", urlencode($id))->first();

            if(!empty($user)) {
                $user->verify = 1;
                $user->save();
                
                $ticket = Ticket::where("user_id", "=", $user->id)->first();
                if(!empty($ticket)) {
                    $ticket->show_ticket = 1;
                    $ticket->save();

                    $ticket_id = $ticket->id;
                    $ticket_number = $ticket->number;

                    $admin_users = User::role('admin')->where("verify", "=", "1")->get();
                    if($admin_users->count()) {
                        foreach ($admin_users as $adminkey => $adminvalue) {
                            $AdminFeature = AdminFeature::where("admin_id", "=", $adminvalue->id)->where("feature", "=", "receive_customer_reply_mail")->first();
                            if(!empty($AdminFeature)) {
                                $ticketAssign = TicketAssign::where('user_id', $adminvalue->id)
                                                            ->where('ticket_id', $ticket_id)
                                                            ->first();
                                if ($ticketAssign) {                        
                                    $mailData = [
                                        'title' => trans('email.ticket_publish_mail_to_admin_title'),
                                        'description' => str_replace('{user}',$user->name,trans('email.ticket_publish_mail_to_admin_description')),
                                        'button' => trans('email.ticket_publish_mail_to_admin_button'),
                                        'url' => 'https://support.taxpros911.com/admin/ticket/view/'.$ticket_id
                                    ];
                                    Mail::to($adminvalue->email)->send(new EmailTicket($mailData));
                                    Tracking::create(["email"=>$adminvalue->email,"button"=>json_encode($mailData)]);
                                }
                            }
                        }
                    }

                    // Send to user
                    $mailData = [
                        'title' => trans('email.ticket_publish_mail_to_user_title'),
                        'description' => str_replace(array('{user}', '{ticket}'),array($user->name, $ticket_number),trans('email.ticket_publish_mail_to_user_description')),
                        'button' => trans('email.ticket_publish_mail_to_user_button'),
                        'url' => 'https://support.taxpros911.com/user/ticket-view/'.$ticket_id
                    ];

                    Mail::to($user->email)->send(new EmailTicket($mailData));
                   Tracking::create(["email"=>$user->email,"button"=>json_encode($mailData)]);
                }

                $message_to_display = 'pass';
            } else {
                $message_to_display = 'fail';
            }
        return view("auth.login", compact("message_to_display"));
    }

    public function store(Request $request)
    {   
        $ticket = new Ticket;
        if($request->first_name) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email|unique:users',
            ]);
    
            if ($validator->fails()) {    
                return  response()->json(['errors'=>$validator->errors()], 422);
            }
    
            $user = new User;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->company = $request->company;
            $user->address_line_one = $request->address_line_one;
            $user->address_line_two = $request->address_line_two;
            $user->country = $request->country;
            $user->city = $request->city;
            $user->state = $request->state;
            $user->postal = $request->postal_code;
            $user->email = $request->email;
            $user->password =  Hash::make($request->password);

            if(auth()->user()) {
                $user->verify = 1;
            } else {
                $user->verify = 2;
            }
            $verify_token = base64_encode(date("mdY").rand(10,100000));
            $verify_token = urlencode($verify_token);
            $user->verify_token = $verify_token;

            $user->assignRole('user');
    
            $user->save();
        }

        $ticket->subject = $request->subject;
        $ticket->category_id = $request->category_id;
        $ticket->description = $request->description;

        if(auth()->user()) {
            $ticket->user_id = auth()->user()->id;
            $ticket->user_email = auth()->user()->email;
        }else {
            $ticket->user_id = $user->id;
            $ticket->user_email = $user->email;
        }
        $ticket->status = 1;

        if(auth()->user()) {
            $ticket->show_ticket = 1;
        } else {
            $ticket->show_ticket = 2;
        }
        $ticket->flag = 1;
        $tickets = Ticket::get();
        $random_key = $tickets->count() + 1;
        
        $category = Category::find($request->category_id);

        if($request->category_id == 5) {
            $category->name = "TAX";
        }

        $ticket->number = strtoupper(substr($category->name, 0, 3)) . '-' . date("mdY") . str_pad($random_key, 2, "0", STR_PAD_LEFT);

        if($request->file_name) {
            $ticket->file_name = implode(",", $request->file_name); 
        } 
        $ticket->selected_lang = app()->getLocale();
        $ticket->save();
        $ticket_id = $ticket->id;
        $ticket_number = $ticket->number;

        if(auth()->user()) {
            $admin_users = User::role('admin')->where("verify", "=", "1")->get();
            if($admin_users->count()) {
                foreach ($admin_users as $adminkey => $adminvalue) {
                    // Send to Admin
                    $AdminFeature = AdminFeature::where("admin_id", "=", $adminvalue->id)->where("feature", "=", "receive_customer_reply_mail")->first();
                    if(!empty($AdminFeature)) {
                        $ticketAssign = TicketAssign::where('user_id', $adminvalue->id)
                                                    ->where('ticket_id', $ticket_id)
                                                    ->first();
                        if ($ticketAssign) {                        
                            $mailData = [
                                'title' => trans('email.ticket_publish_mail_to_admin_title'),
                                'description' => str_replace('{user}',auth()->user()->name,trans('email.ticket_publish_mail_to_admin_description')),
                                'button' => trans('email.ticket_publish_mail_to_admin_button'),
                                'url' => 'https://support.taxpros911.com/admin/ticket/view/'.$ticket_id
                            ];
                            Mail::to($adminvalue->email)->send(new EmailTicket($mailData));
                                    Tracking::create(["email"=>$adminvalue->email,"button"=>json_encode($mailData)]);
                        }
                    }
                }
            }

            // Send to user
            $mailData = [
                'title' => trans('email.ticket_publish_mail_to_user_title'),
                'description' => str_replace(array('{user}', '{ticket}'),array(auth()->user()->name, $ticket_number),trans('email.ticket_publish_mail_to_user_description')),
                'button' => trans('email.ticket_publish_mail_to_user_button'),
                'url' => 'https://support.taxpros911.com/user/ticket-view/'.$ticket_id
            ];

            Mail::to(auth()->user()->email)->send(new EmailTicket($mailData));
                                Tracking::create(["email"=>auth()->user()->email,"button"=>json_encode($mailData)]);
        } else {
            $mailData = [
                'title' => trans('email.user_verify_mail_to_user_title'),
                'description' => trans('email.user_verify_mail_to_user_description'),
                'button' => trans('email.user_verify_mail_to_user_button'),
                'url' => 'http://support.taxpros911.com/login/'.$verify_token.'/'
            ];

            Mail::to($request->email)->send(new EmailTicket($mailData));
                                Tracking::create(["email"=>$request->email,"button"=>json_encode($mailData)]);
        }
        


        return response()->json($ticket->id);
    }

    public function tickethistory() 
    {
        if(auth()->user()) {
            $tickets = Ticket::orderBy("last_admin_reply_date", "DESC")->with("ticket_status")->where("user_id", "=", auth()->user()->id)->get();

            if (request()->ajax()) {
                return DataTables::of($tickets)
                ->addColumn('status', function($data){
                    return $data = '<div class="badge badge-light-danger">'.$data->ticket_status->option.'</div>';
                })
                ->addColumn('category_name', function($data){
                    return $data->category->name;
                })
                ->addColumn('created_at', function ($data) {
                    $date =  $data->created_at->format("d M Y, g:i A");
                    return $date;
                })
                ->addColumn('number', function($data){
                    return $data->number;
                })
                ->addColumn('action', function ($data) {
                    $action = '<a href="'.url("/user/ticket-view/$data->id").'" class="btn btn-light btn-sm">View</a>';
    
                    return $action;
                })
    
                ->rawColumns(['created_at', 'status', 'action'])
                ->addIndexColumn()
                ->make(true);
            }   
        }
    }


    public function ticketDetail($id) {
        if(isset(auth()->user()->id)) {
            $ticket = Ticket::with("category")->with("reply")->where("id", "=", $id)->where("user_id","=", auth()->user()->id)->first();
            if(!empty($ticket)) {
                $ticket->last_admin_reply = 2;
                $ticket->save();

                return view("user.ticket_detail", compact("ticket"));
            } else {
                return abort('404');
            }
        }
    }


    public function sendAnswer(Request $request)
    {
        $ticket_reply = new Ticket_reply;
        
        $ticket = Ticket::where("id", "=", $request->ticket_id)->first();
        $ticket->ischecked = 0;

        $ticket_id = $request->ticket_id; 
        
        $admin_users = User::role('admin')->where("verify", "=", "1")->get();
        if($admin_users->count()) {
            foreach ($admin_users as $adminkey => $adminvalue) {
                // Send to Admin
                $AdminFeature = AdminFeature::where("admin_id", "=", $adminvalue->id)->where("feature", "=", "receive_customer_reply_mail")->first();
                if(!empty($AdminFeature)) {
                    $ticketAssign = TicketAssign::where('user_id', $adminvalue->id)
                                                ->where('ticket_id', $ticket_id)
                                                ->first();
                    if ($ticketAssign) {                        
                        $mailData = [
                            'title' => trans('email.user_send_reply_to_admin_title'),
                            'description' => $request->description,
                            'button' => trans('email.user_send_reply_to_admin_button_label'),
                            'url' => 'https://support.taxpros911.com/admin/ticket/view/'.$ticket_id
                        ];
                        Mail::to($adminvalue->email)->send(new EmailTicket($mailData)); 
                                    Tracking::create(["email"=>$adminvalue->email,"button"=>json_encode($mailData)]);
                    }
                }
            }
        }

        

        foreach($request->except('_token') as $key => $value)
        {
            if($key == "file_name") {
                $value = implode(",", $value);
            } 
            $ticket_reply[$key] = $value;
        }
        
        $ticket_reply->save();
        $ticket->status = 2;
        $ticket->flag = 1;
        
        $ticket->save();
   
        return response()->json(200);
    }
}
