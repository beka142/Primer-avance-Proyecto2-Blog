<?php 


class Entries extends CI_Model {

    /**
     * Get subdomain name for a especified account
     * @param account_id
     * @return subdomain name found
     */ 
    function getAll()
    {       
        
        $query = $this->db->get('entries');
        return $query->result_array();     
    }

    function getUser()
    {         
        $query = $this->db->get('user');
        return $query->row();
           
    }

    function getIdPost($id)
    {         
        $sentencia = 'SELECT * FROM entries WHERE id = '.$id; 
        $query = $this->db->query("$sentencia");
        return $query->row();
           
    }

    function getAllComments($id)
    {         
        $sentencia = "SELECT * FROM comments WHERE id = ".$id." and estado = 'Activado'"; 
        $query = $this->db->query("$sentencia");
        return $query->result_array();
           
    }

}


?>