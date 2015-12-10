<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Like_model extends CI_Model {

    function get_likes() {
        $query = $this->db->query('SELECT `projects`.`id`,`projects`.`name`,`projects`.`file_name`,`likes`.`likes` 
        FROM projects
        LEFT JOIN `ci_jquery`.`likes` ON `projects`.`id` = `likes`.`project_id` ');
        return $query = $query -> result_array();

    }
    function add_likes($id,$likes){
        $query = $this->db->where('project_id',$id);
        $query = $this->db->get('likes');
        if ($query->num_rows() == 0){
            //insert
            $this->db->insert('likes',array('project_id'=>$id,'likes'=>$likes));
        }else {
            //update
            $this->db->where('project_id',$id);
            $this->db->update('likes',array('likes'=>$likes));
        }
        
    }
    
    
    function java_fucntions() {
        $like_function = "
         
            
            var num_likes = (parseInt($(this).next().text()) + 1);
            
            $(this).next().text(num_likes);
            var project_id = $(this).prev().text();
           
            $.ajax({
                url:window.location,
                type:'POST',
                data:{
                    id : project_id,
                    likes : num_likes,
                },success : function (msg){
                    
                }   
            });
        
        ";
        $this -> javascript -> click('.like', $like_function);
        $this -> javascript -> compile();

    }

}

/*end of file*/
