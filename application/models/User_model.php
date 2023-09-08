<?php
    class User_model extends CI_Model {
//Регистрация
        public function insert_user($pfio, $plogin, $pemail, $ppassword) {
            $sql = "call insert_user(?,?,?,?)";
            $result = $this->db->query($sql, array($pfio, $plogin, $pemail, $ppassword));
            
            return $this->db->insert_id();
        }
        //Авторизация участников
        public function select_login($plogin, $ppassword) {
            $sql = "select * FROM user WHERE user.login = ? and user.password = ?";

            $result = $this->db->query($sql, array($plogin, $ppassword));
            return $result->row_array();
        
        }
    }
?>