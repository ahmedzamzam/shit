<?php
/**
 * Created by PhpStorm.
 * User: MBRK
 * Date: 11/09/2017
 * Time: 03:19 م
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{

    public function smail(Request $req){

        $data = array('name'=>"Sam Jose", "body" => "Test mail");
        Mail::send('email.contactmail', $data, function($message) {
            $message->to('diamondcorp561@gmail.com','diamondContactus')
                ->subject('Artisans Web Testing Mail');
            $message->from('diamondcorp561@gmail.com','diamondContactus');
        });

    }
}