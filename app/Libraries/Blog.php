<?php
namespace App\Libraries;

class Blog{
    public function postitem($post){
        return view('components/post_item', $post);
    }
}
?>