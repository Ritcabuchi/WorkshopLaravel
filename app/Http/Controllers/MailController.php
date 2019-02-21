<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
    public function basic_email(Request $request) {
        $nameofReceiver = $request->nameofReceiver;
        $emailofReceiver = $request->emailofReceiver;
        $messages = $request->textArea;
        $topic_message = $request->topic_message;



        $data = array('messages'=>$messages);
        $datarespon = array($nameofReceiver,$emailofReceiver,$topic_message);

        Mail::send(['text'=>'mail'], $data, function($message) use ($datarespon) {
         $message->to($datarespon[1], $datarespon[0])->subject
            ($datarespon[2]);
         $message->from('5835512044@psu.ac.th','Riduwan');
        });

        echo "ได้ส่งข้อความของคุณเรียบร้อยแล้ว";
   }
//    public function html_email() {
//       $data = array('name'=>"Virat Gandhi");
//       Mail::send('mail', $data, function($message) {
//          $message->to('abc@gmail.com', 'Tutorials Point')->subject
//             ('Laravel HTML Testing Mail');
//          $message->from('xyz@gmail.com','Virat Gandhi');
//       });
//       echo "HTML Email Sent. Check your inbox.";
//    }
//    public function attachment_email() {
//       $data = array('name'=>"Virat Gandhi");
//       Mail::send('mail', $data, function($message) {
//          $message->to('abc@gmail.com', 'Tutorials Point')->subject
//             ('Laravel Testing Mail with Attachment');
            // $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
//          $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
//          $message->from('xyz@gmail.com','Virat Gandhi');
//       });
//       echo "Email Sent with attachment. Check your inbox.";
//    }
}
