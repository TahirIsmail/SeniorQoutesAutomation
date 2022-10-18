<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Validator;
use Alert;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function data(Request $req)
    {
        $jornaya = [];
        // dd($req->all());
        $rules = array(
            "first_name" => "required",
            "last_name" => "required",
            "email_adress" => "required",
            "phone_number" => "required",
            "state" => "required",
            "zip_code" => "required",
            "birthday" => "required",

        );
        $check = Validator::make($req->all(), $rules);
        if ($check->fails()) {
            return response()->json($check->errors(), 401);
        } else {
            $jornaya = [
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
                'email_adress' => $req->email_adress,
                'phone_number' => $req->phone_number,
                'state' => $req->state,
                'zip_code' => $req->zip_code,
                'birthday' => $req->birthday,
                'universal_leadid' => $req->universal_leadid,
            ];
        }

        // dd($jornaya);
        $result = lead::create($jornaya);
        Alert::success('Congrats', 'You\'ve Successfully Registered');

        if ($result) {
            // dd($req->all());
            return redirect()->back();
        } else {
            // dd('failed');
            return ["message" => "Created failed"];
        }

        // $lead = new Lead;
        // $lead->first_name = $req->first_name;
        // $lead->last_name = $req->last_name;
        // $lead->email_address = $req->email_address;
        // $lead->phone_number = $req->phone_number;
        // $lead->state = $req->state;
        // $lead->zip_code = $req->zip_code;
        // $lead->month = $req->month;
        // $lead->day = $req->day;
        // $lead->year = $req->year;
        // $lead->universal_leadid = $req->universal_leadid;


        // $result = $lead->save();
        // if ($result) {
        //     return  redirect()->back();
        // } else {
        //     return response()->json(["result"=> "FAILED"]);
        // }

    }


    public function contactForm(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'number' => 'required|numeric',
            'email' => 'required|email',
            'subject' => 'required',
            'Message' => 'required',
        ]);

        $data = [
            'name' => $req->name,
            'number' => $req->number,
            'email' => $req->email,
            'subject' => $req->subject,
            'Message' => $req->Message,
        ];

        $headers = "From: info@theseniorquote.com";
        $body = "Name:" . $data['name'] . ": Email:" . $data['email'] . " Number:" . $data['number'] . " Message:" . $data['Message'];


        mail($data['email'], $data['subject'], $body, $headers);
        // Mail::send('form',$data,function($message) use ($data){
        //     $message->to($data['email'])->subject($data['subject']);
        // });
        return back()->with(['message' => 'Form submitted successfully.']);
    }
    public function saveAutomationForm(Request $request)
    {
        dd($request->all());
    }
}
