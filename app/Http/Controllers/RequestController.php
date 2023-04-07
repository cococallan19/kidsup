<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Mail\Mailer;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\App;

class RequestController extends Controller
{
  protected function validator(array $data)
     {
         return Validator::make($data, [
             'name' => 'required|max:255',
             'number' => 'required|max:255',
             'zip' => 'required|max:7',
             'address' => 'required|max:255',
             'email' => 'required|email|max:255',
             'body' => 'required|max:255',
         ]);
     }

     public function getIndex() {
       return view('requests.document');
     }


     public function postIndex(Mailer $mailer,Request $request)
     {
       $validator = $this->validator($request->all());
       if ($validator->fails()) {
             $this->throwValidationException(
                 $request, $validator
             );
         }
       $data = $request->all();
       // dd($data);
       $this->sendRequestMail($mailer,$data);

       \Session::flash('flash_message', 'メッセージを送信しました。');
       return redirect('/request');
     }

     private function sendRequestMail(Mailer $mailer, $data)
       {
           $mailer->send(
               array('text' => 'emails.request'),
               $data ,
               function($message) use ($data) {
                   $message->from('hq@kids-up.jp', 'KidsUP開校準備室');
                   $message->to($data['email'], $data['name'])->bcc('hq@kids-up.jp')->subject('【KidsUP】資料請求を受け付けました');
               }
           );
       }
}
