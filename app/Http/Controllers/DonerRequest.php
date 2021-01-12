<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reque;


class DonerRequest extends Controller
{
    public function index(){
//        return 'In doner regest';
//        return view('doner.donerRequest');

        $RequestDataDB = Reque::all();
//        dd($RequestDataDB);
        return view('doner.donerRequest' , ['data'=> $RequestDataDB]);

    }

    public function create(){
//        return 'Hello from posting ';
//        $data = request();
        $name = request()->name;
        $address = request()->address;
        $phone = request()->phone;
        $AnotherPhone = request()->AnotherPhone;
        $bloodType = request()->bloodType;
        $timeForCall = request()->timeForCall;
//        $callW
//        dd($data);

        $post = Reque::create([
            'name'=>$name ,
            'address'=>$address ,
            'phone'=>$phone ,
            'AnotherPhone'=>$AnotherPhone ,
            'bloodType'=>$bloodType ,
            'timeForCall' =>$timeForCall
        ]);
//        dd($post);
        return redirect('/donerReq');

    }
}
