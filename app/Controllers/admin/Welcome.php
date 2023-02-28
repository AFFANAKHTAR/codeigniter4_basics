<?php namespace App\Controllers\admin;
use App\Controllers\BaseController;

class Welcome extends BaseController {
    public function index()
    {
        echo "welcome to admin ci4";
    }

    public function test($type,$id)
    {
        echo "welcome to product type".$type."with an id".$id;
    }

    public function shop()
    {
        return view('shop');
    }

}   
?>