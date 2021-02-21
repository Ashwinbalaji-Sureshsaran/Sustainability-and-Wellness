<?php
class Noticeboard_model extends CI_Model{
   
    public function get_school_noticeboard(){
            $q = $this->db->query("select * from jacusersd");
            return $q->result();
    }
          public function get_school_noticeboard_by_id($id){
        $q = $this->db->query("select * from notice_board where notice_id = '".$id."' limit 1");
        return $q->row();
    }
    
 
     
}
?>