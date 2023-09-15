<?php
    class Category_model extends CI_Model {
        public function select_category(){
        $sql = "SELECT * FROM category WHERE 1";

$result = $this->db->query($sql);
return $result->result_array();
    }
    public function ins_category($name){
    $sql = "INSERT INTO `category`(`name`) VALUES (?)";

    $this->db->query($sql, array($name));
    }
        public function del_category($id_category){
            $sql = "DELETE FROM `category` WHERE id_category = ?";

            $this->db->query($sql, array($id_category));
        }
    }
?>