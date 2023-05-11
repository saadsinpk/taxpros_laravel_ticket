<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\EmailTicket;
use picqer\Barcode;
 
class LabelController extends Controller
{
    public function __construct()
    { }
 
    public function download($number)
    {
        if(Auth::user()) {
        }
        return response()->json(['message' => 'Page not found.'], 404);
    }
}