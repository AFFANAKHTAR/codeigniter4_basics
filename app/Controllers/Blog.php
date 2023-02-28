<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Blog extends Controller{
    public function index(){
        $data = ['meta_title' => 'ci4 blog',
                'title' => 'this is a blog page'];
                $posts = ['title1','title2','title3'];
        $data['posts'] = $posts;

        echo view('templates/header',$data);
        echo view('blog');
        echo view('templates/footer');
        // return view('blog');
    }

    public function post(){
        $data = ['meta_title' => 'ci4 blog',
        'title' => 'this is a blog post page'];
        echo view('templates/header',$data);
        echo view('post');
        echo view('templates/footer');
        //return view('post');
    }
}
?>