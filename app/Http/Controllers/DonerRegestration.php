<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rege;

class DonerRegestration extends Controller
{
    public function index(){
//        return 'In doner regest';
        $RegesterationDataDB = Rege::all();
//        dd($RegesterationDataDB);
        return view('doner.donerRegs' , ['data'=> $RegesterationDataDB]);
    }

    public function  create(){
        $data = request();
        $name = request()->name;
        $address = request()->address;
        $phone = request()->phone;
        $AnotherPhone = request()->AnotherPhone;
        $age = request()->age;
        $weight = request()->weight;
        $bloodType = request()->bloodType;
        $smoking = request()->smoking;
        $timeForCall = request()->timeForCall;

        $post = Rege::create([
            'name'=>$name ,
            'address'=>$address ,
            'phone'=>$phone ,
            'AnotherPhone'=>$AnotherPhone ,
            'age'=>$age ,
            'weight'=>$weight ,
            'bloodType'=>$bloodType ,
            'smoking' =>$smoking ,
            'timeForCall' =>$timeForCall
        ]);
//        dd($post);

        return redirect('/donerRegs');
    }
}
