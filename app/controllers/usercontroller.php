<?php

namespace MVC\controllers;
use MVC\core\controller;


class UserController extends Controller{
  
    public function index(){
    echo "Welcome";
}

public function login(){    
$this->view('home/login' ,['title' => 'Login']);
}


public function postlogin(){ 
}

}