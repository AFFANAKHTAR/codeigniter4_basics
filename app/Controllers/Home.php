<?php

namespace App\Controllers;
use App\Controllers\admin\Welcome as AdminWelcome;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }


    public function bb()
    {
       echo 6;
    }

    function validation(){
        $welcome = new Welcome();
        echo $welcome -> index().'<br>';

        $adminwelcome = new AdminWelcome();
        echo $adminwelcome -> index();
    }

}
