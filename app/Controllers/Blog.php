<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BlogModel;
use App\Models\CustomModel;

class Blog extends Controller{
    public function index(){
        $db = db_connect();
        $model = new CustomModel($db);
        echo '<pre>';
            print_r($model->getPosts());
        echo '<pre>';

        $data = ['meta_title' => 'ci4 blog',
                'title' => 'this is a blog page'];
                $posts = ['title1','title2','title3'];
        $data['posts'] = $posts;
         return view('blog',$data);
    }

    public function post($id){
        $model = new BlogModel();
        $post = $model->find($id);
        if($post){
            $data = [
                'meta_title' => $post['post_title'],
            'title' => $post['post_title'],
            'post' => $post,
        ];            
        }else{
            $data = ['meta_title' => $post['post_title'],
            'title' => $post['post_title'],
            'post' => $post,
        ];
        }

        return view('post',$data);
    }

    public function new(){
        $data = ['meta_title' => 'ci4 blog',
        'title' => 'this is a blog post page'];

        if($this->request->getMethod() =='post'){
            $model = new BlogModel();
            $model->save($_POST);
        }
        return view('new_post',$data);
    }

    public function delete($id){
        $model = new BlogModel();
        $post = $model->find($id);
        if($post){
            $model->delete($id);
            return redirect()->to('blog');
        }
    }

    public function edit($id){
        $model = new BlogModel();
        $post = $model->find($id);
        if($post){
            $data = [
                'meta_title' => $post['post_title'],
            'title' => $post['post_title'],
            'post' => $post,
        ];            
        }else{
            $data = ['meta_title' => $post['post_title'],
            'title' => $post['post_title'],
            'post' => $post,
        ];
        }

        if($this->request->getMethod() =='post'){
            $model = new BlogModel();
            $_POST['id'] = $id;
            $model->save($_POST);
            return redirect()->to('post/'.$id);
        }
        return view('edit_post',$data);
    }

}
?>