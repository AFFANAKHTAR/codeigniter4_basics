<?php
namespace App\Models;
use CodeIgniter\Model;

class BlogModel extends Model{
     protected $table = 'post';
     protected $primarykey = 'id';


     protected $allowedFields = ['post_title', 'post_content'];
     protected $useTimestamps = true;
     protected $createdField = 'post_created_at';
     protected $updatedField = 'post_updated_at';

     //model events
     // beforeInsert
     // afterInsert
     // beforeUpdate 
     // afterUpdate 
     // afterFind 
     // afterDelete 

     protected $beforeInsert = ['checkname'];

     public function checkname(array $data){
          $newtitle = $data['data']['post_title'].'Extra features';
          $data['data']['post_title'] = $newtitle;

          return $data;
     }

     public function hashPassword(array $data){
          $data['data']['password'] = password_hash($data['data']['password'],PASSWORD_DEFAULT);

          return $data;
     }

}
?>