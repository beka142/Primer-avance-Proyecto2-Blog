<?php 


class Entries extends CI_Model {

    /**
     * Get subdomain name for a especified account
     * @param account_id
     * @return subdomain name found
     */ 
    function getAll()
    {       
        
        $sentencia = 'SELECT * FROM entries ORDER BY id DESC'; 
        $query = $this->db->query("$sentencia");
        return $query->result_array();     
    }


    function getIdPost($id)
    {         
        $sentencia = 'SELECT * FROM entries WHERE id = '.$id; 
        $query = $this->db->query("$sentencia");
        return $query->row();
           
    }


    function insertPost($title, $contenido)
    {    
        date_default_timezone_set("America/Costa_Rica");
        $fecha = date("Y").date("m").date("d");
        $data = array(
        'title' => $title,
        'content' => $contenido,
        'create_date' => $fecha,
        );  
         $this->db->insert('entries', $data);
        
    }


    function updatePost($id,$title,$contenido)
    {         
        $data = array(
            'title' => $title,
            'content' => $contenido,
        );
        $this->db->where('id', $id);
        return $this->db->update('entries', $data);
           
    }


    function deletePost($id)
    {         
        $this->db->where('id',$id);
        return $this->db->delete('entries');  
    }

}


?>