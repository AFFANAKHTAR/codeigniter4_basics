<?php namespace App\Controllers\admin;
use App\Controllers\BaseController;

class Blog extends BaseController {
    public function index()
    {
        echo "welcome to admin blog area";
    }

    public function bloglist($type,$id)
    {
        echo "welcome to blog type".$type."with an blog no.".$id;
    }

    public function blogform()
    {
        return view('blogform');
    }

    public function saveblogform()
    {
        echo '<pre>';
            print_r($_POST);
        echo '<pre>';

    }

}   
?>