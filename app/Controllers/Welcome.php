<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Welcome extends Controller {
    public function index()
    {
        echo "welcome to ci4";
    }

    public function test($type,$id)
    {
        echo "welcome to product type".$type."with an id".$id;
    }

    protected function admincheck()
    {
        echo "welcome to admin area";
    }

    public function shop()
    {
        return view('shop');
    }

}   
?>