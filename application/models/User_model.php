<?php
    class User_model extends CI_Model {
//Регистрация
        public function insert_user($pfio, $plogin, $pemail, $ppassword) {
            $sql = "INSERT INTO `user`(`full_name`, `login`, `email`, `password`, `role`) VALUES (?,?,?,?,1)";
            $result = $this->db->query($sql, array($pfio, $plogin, $pemail, $ppassword));
            
            return $this->db->insert_id();
        }
        //Авторизация участников
        public function select_login($plogin, $ppassword) {
            $sql = "select * FROM user WHERE user.login = ? and user.password = ?";

            $result = $this->db->query($sql, array($plogin, $ppassword));
            return $result->row_array();
        
        }
        public function select_application($id_user) {
            $sql = "SELECT `id`, `submission_date`, `app_name`, `completion_date`, `description`, `before_photo`, `after_photo`, application.id_category, `status`, name FROM `application`, category, user WHERE user.id_user = application.id_user and application.id_category = category.id_category AND user.id_user = ?  ORDER BY application.submission_date DESC ";

            $result = $this->db->query($sql, array($id_user));
           return $result->result_array();
        
        }
    }
?>