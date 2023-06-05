<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billet extends Model
{
    use HasFactory;
    public function register($user, $request){
        // dd($request);
        $register = new billet;
        $register->description =$request->Description;
        $register->value = $request->value;
        $register->payment_date=$request->date;
        $register->save();
        return $register;
    }
}
