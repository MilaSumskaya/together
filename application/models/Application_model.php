<?php
    class Application_model extends CI_Model {
//Просмотр выполненных заявок на главной странице 
        public function select_application() {
            $sql = "SELECT * FROM `application` WHERE application.status = 1";

            $result = $this->db->query($sql);
           return $result->result_array();
        }
    }
?>