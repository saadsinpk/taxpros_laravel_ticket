<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Ticket;
use App\Models\Fileupload;
use App\Models\Ticket_status;

class DashboardController extends Controller
{
    //

    public function index()
    {
        if(auth()->user()) {
            if(auth()->user()->hasRole("admin")) {
                $admin_access = $this->get_current_admin_access();

                $userId = auth()->user()->id;

                if (isset($admin_access['assign_user'])) {
                    $users = User::role('user')->where("verify", "=", "1")->get();
                } else {
                    $users = User::role('user')
                                ->where('verify', '=', '1')
                                ->join('tickets', 'users.id', '=', 'tickets.user_id')
                                ->join('ticket_assign', 'tickets.id', '=', 'ticket_assign.ticket_id')
                                ->where('ticket_assign.user_id', '=', $userId)
                                ->get();
                }


                if (isset($admin_access['assign_user'])) {
                    $tickets_new = Ticket::with("user", "category")->where("status", '1')->where("show_ticket", '1')->orderBy("ischecked", "ASC", "created_at", "DESC")->get();
                } else {
                    $tickets_new = Ticket::with("user", "category")
                    ->where("status", '1')
                    ->where("show_ticket", '1')
                    ->where(function ($query) use ($userId) {
                        $query->whereHas('ticketAssign', function ($subquery) use ($userId) {
                            $subquery->where('user_id', $userId);
                        })->orWhere('user_id', $userId);
                    })
                    ->orderBy("ischecked", "ASC")
                    ->orderBy("created_at", "DESC")
                    ->get();
                }
                foreach ($tickets_new->toArray() as $key => $ticket_new) {
                    if(is_array($ticket_new['user']) > 0) {
                    } else {
                        unset($tickets_new[$key]);
                    }
                }
                $tickets_new = $tickets_new->count();

                if (isset($admin_access['assign_user'])) {
                    $tickets_opening = Ticket::with("user", "category")->where("status", '2')->where("show_ticket", '1')->orderBy("ischecked", "ASC", "created_at", "DESC")->get();
                } else {
                    $tickets_opening = Ticket::with("user", "category")
                    ->where("status", '2')
                    ->where("show_ticket", '1')
                    ->where(function ($query) use ($userId) {
                        $query->whereHas('ticketAssign', function ($subquery) use ($userId) {
                            $subquery->where('user_id', $userId);
                        })->orWhere('user_id', $userId);
                    })
                    ->orderBy("ischecked", "ASC")
                    ->orderBy("created_at", "DESC")
                    ->get();
                }

                foreach ($tickets_opening->toArray() as $key => $ticket_opening) {
                    if(is_array($ticket_opening['user']) > 0) {
                    } else {
                        unset($tickets_opening[$key]);
                    }
                }
                $tickets_opening = $tickets_opening->count();


                if (isset($admin_access['assign_user'])) {
                    $tickets_reply = Ticket::with("user", "category")->where("status", '3')->where("show_ticket", '1')->orderBy("ischecked", "ASC", "created_at", "DESC")->get();
                } else {
                    $tickets_reply = Ticket::with("user", "category")
                    ->where("status", '3')
                    ->where("show_ticket", '1')
                    ->where(function ($query) use ($userId) {
                        $query->whereHas('ticketAssign', function ($subquery) use ($userId) {
                            $subquery->where('user_id', $userId);
                        })->orWhere('user_id', $userId);
                    })
                    ->orderBy("ischecked", "ASC")
                    ->orderBy("created_at", "DESC")
                    ->get();
                }
                foreach ($tickets_reply->toArray() as $key => $ticket_reply) {
                    if(is_array($ticket_reply['user']) > 0) {
                    } else {
                        unset($tickets_reply[$key]);
                    }
                }
                $tickets_reply = $tickets_reply->count();


                if (isset($admin_access['assign_user'])) {
                    $tickets_processing = Ticket::with("user", "category")->where("status", '6')->where("show_ticket", '1')->orderBy("ischecked", "ASC", "created_at", "DESC")->get();
                } else {
                    $tickets_processing = Ticket::with("user", "category")
                    ->where("status", '6')
                    ->where("show_ticket", '1')
                    ->where(function ($query) use ($userId) {
                        $query->whereHas('ticketAssign', function ($subquery) use ($userId) {
                            $subquery->where('user_id', $userId);
                        })->orWhere('user_id', $userId);
                    })
                    ->orderBy("ischecked", "ASC")
                    ->orderBy("created_at", "DESC")
                    ->get();
                }
                foreach ($tickets_processing->toArray() as $key => $ticket_processing) {
                    if(is_array($ticket_processing['user']) > 0) {
                    } else {
                        unset($tickets_processing[$key]);
                    }
                }
                $tickets_processing = $tickets_processing->count();


                if (isset($admin_access['assign_user'])) {
                    $tickets_pending = Ticket::with("user", "category")->where("status", '4')->where("show_ticket", '1')->orderBy("ischecked", "ASC", "created_at", "DESC")->get();
                } else {
                    $tickets_pending = Ticket::with("user", "category")
                    ->where("status", '4')
                    ->where("show_ticket", '1')
                    ->where(function ($query) use ($userId) {
                        $query->whereHas('ticketAssign', function ($subquery) use ($userId) {
                            $subquery->where('user_id', $userId);
                        })->orWhere('user_id', $userId);
                    })
                    ->orderBy("ischecked", "ASC")
                    ->orderBy("created_at", "DESC")
                    ->get();
                }

                foreach ($tickets_pending->toArray() as $key => $ticket_pending) {
                    if(is_array($ticket_pending['user']) > 0) {
                    } else {
                        unset($tickets_pending[$key]);
                    }
                }
                $tickets_pending = $tickets_pending->count();


                if (isset($admin_access['assign_user'])) {
                    $tickets_complete = Ticket::with("user", "category")->where("status", '5')->where("show_ticket", '1')->orderBy("ischecked", "ASC", "created_at", "DESC")->get();
                } else {
                    $tickets_complete = Ticket::with("user", "category")
                    ->where("status", '5')
                    ->where("show_ticket", '1')
                    ->where(function ($query) use ($userId) {
                        $query->whereHas('ticketAssign', function ($subquery) use ($userId) {
                            $subquery->where('user_id', $userId);
                        })->orWhere('user_id', $userId);
                    })
                    ->orderBy("ischecked", "ASC")
                    ->orderBy("created_at", "DESC")
                    ->get();
                }

                foreach ($tickets_complete->toArray() as $key => $ticket_complete) {
                    if(is_array($ticket_complete['user']) > 0) {
                    } else {
                        unset($tickets_complete[$key]);
                    }
                }
                $tickets_complete = $tickets_complete->count();

                return view("dashboard", compact("users", "tickets_new", "tickets_opening", "tickets_reply", "tickets_processing", "tickets_pending", "tickets_complete", "admin_access"));
            }else {
                $categories = Category::all();
                return view("user.ticket", compact("categories"));
            }
        }else {
            $categories = Category::all();
            return view("user.ticket", compact("categories"));
        }
    }

    public function fileUpload(Request $request)
    {   
        $admin_access = $this->get_current_admin_access();
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads/attached'),$fileName);
        
        $fileupload = new Fileupload();

        $fileupload->file_name = $fileName;
        $fileupload->save();

        return response()->json(['file_name'=>$fileName]);

        dd($request->all());
    }

    public function fileRemove(Request $request) 
    {
        $admin_access = $this->get_current_admin_access();
        $filename =  $request->get('filename');
        Fileupload::where('file_name', "=", $filename)->delete();
        
        $path=public_path().'/uploads/attached/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    } 

    public function searchTicket(Request $request)
    {
        $admin_access = $this->get_current_admin_access();
        $tickets = Ticket::with("user")->with("ticket_status")->where('subject', 'like', '%'.$request->searchVal.'%')->where('user_email', 'like', '%'.$request->searchVal.'%')->orWhere('number', 'like', '%'.$request->searchVal.'%')->orWhere('description', 'like', '%'.$request->searchVal.'%')->get();
        if(isset($admin_access['read_ticket'])) {
            return response()->json($tickets);
        } else {
            return response()->json(array());
        }
    }
}
