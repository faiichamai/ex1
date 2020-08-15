<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
public function index(){
    return "หน้า user";
}
 public function contact(){
return "สร้าง user";
}
public function shouldname($name){
    return "สวัสดี name";
}
public function shouldnameage($name,$age){
    return "สวัสดี $name อายุ $age";
}


