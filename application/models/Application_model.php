<?php
    class Application_model extends CI_Model {
//Просмотр выполненных заявок на главной странице 
        public function select_application() {
            $sql = "SELECT application.*, category.name FROM `application`, category WHERE  application.status = 1 and application.id_category = category.id_category ORDER BY application.completion_date DESC LIMIT 4";

            $result = $this->db->query($sql);
           return $result->result_array();
        }
    }
?>