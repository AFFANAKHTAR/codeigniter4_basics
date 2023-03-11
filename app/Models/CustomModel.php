<?php
namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class CustomModel{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this->db = & $db;
    }

    function all(){
        $builder = $this->db->table('post');
        // $builder->join('users','post.post_author = users.id');
        $posts = $builder->get()->getResult();
        return $posts;
    }

    function where(){
        $builder = $this->db->table('post');
        // $builder->join('users','post.post_author = users.id');
        $posts = $builder
                ->where(['post.id >' => 10])
                ->where(['post.id <' => 15])
                ->where(['post.id !=' => 15])
                ->orderBy('post.id', 'DESC')
                ->get()
                // ->getResult();
                ->getRow(); //for just one row
        return $posts;
    }

    function join(){
        $builder = $this->db->table('post');
        // $builder->join('users','post.post_author = users.id');
        $posts = $builder
                ->where(['post.id >' => 10])
                ->where(['post.id <' => 15])
                ->where(['post.id !=' => 15])
                ->join('users','post.post_author = users.id','inner join')
                ->get()
                ->getResult();
                
        return $posts;
    }

    function like(){
        $builder = $this->db->table('post');
        $posts = $builder
                ->like(['post.post_title', 'new'])
                ->join('users','post.post_author = users.id','inner','both')//both is wild mask study for reference
                ->get()
                ->getResult();
                
        return $posts;
    }

    function getPosts(){
        $builder = $this->db->table('post');
        $builder->join('users','post.post_author = users.id');
        $posts = $builder->get()->getResult();
        return $posts;
    }

    function grouping(){
        $builder = $this->db->table('post');
        $posts = $builder
                ->groupStart()
                    ->where(['post.id <' => '25', 'post_created_at <' => '2008-03-21 05:40:19'])
                ->groupEnd()
                ->orWhere('post_author', 10)
                ->join('users','post.post_author = users.id','inner','both')//both is wild mask study for reference
                ->get()
                ->getResult();
                
        return $posts;
    }

    function wherein(){
        $emails = ['qgaylord@example.com', 'deron.goyette@example.org', 'cade09@example.net'];
        $builder = $this->db->table('post');
        $posts = $builder
                ->groupStart()
                    ->where(['post.id <' => '25', 'post_created_at <' => '2008-03-21 05:40:19'])
                ->groupEnd()
                ->orWhereIn('users.email', $emails)
                ->join('users','post.post_author = users.id','inner','both')//both is wild mask study for reference
                ->limit(5,4)//2nd parameter is of offset value
                ->get()
                ->getResult();
                
        return $posts;
    }
}
?>