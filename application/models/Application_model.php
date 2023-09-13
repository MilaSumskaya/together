<?php
    class Application_model extends CI_Model {
//Просмотр выполненных заявок на главной странице 
        public function select_application() {
            $sql = "SELECT application.*, category.name FROM `application`, category WHERE  application.status = 1 and application.id_category = category.id_category ORDER BY application.completion_date DESC LIMIT 4";

            $result = $this->db->query($sql);
           return $result->result_array();
        }
        public function ins_application($id_user, $app_name, $description, $before_photo, $category){
            // $sql = "call insert_application(?,?,?,?,?)";
            $sql = "INSERT INTO `application`(`submission_date`, `app_name`, `description`, `before_photo`, `id_category`, `id_user`, `status`) VALUES (CURRENT_DATE(),?,?,?,?,?,0)";
            $result = $this->db->query($sql, array($app_name, $description, $before_photo, $category, $id_user));
            
            return $this->db->insert_id();
        }
        //Удалить заявку у пользователя
        public function del($id){
            $sql = "DELETE FROM `application` WHERE application.id = ?";

            $this->db->query($sql, array($id));
        }
        //Просмотр заявок\
                public function select_all_application() {
                    $sql = "SELECT application.*, category.name, user.full_name FROM `application`, category, user WHERE application.id_category = category.id_category AND application.id_user = user.id_user";
        
                    $result = $this->db->query($sql);
                   return $result->result_array();
                }
    }
?>