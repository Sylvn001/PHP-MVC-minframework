<?php 

namespace App\Models;

use MF\Model\Model;

class Info extends Model{
   
    public function getInfo(){
        $sql = "SELECT id, description, title FROM tb_info";
        return $this->db->query($sql)->fetchAll();
    }

}