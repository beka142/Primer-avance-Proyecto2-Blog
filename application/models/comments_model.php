<?php 


class Comments_model extends CI_Model {

    /**
     * Get subdomain name for a especified account
     * @param account_id
     * @return subdomain name found
     */ 
    function getComment($id_post, $autor, $comment)
    {    
        $data = array(
        'id_entrie' => $id_post,
        'autor' => $autor,
        'body' => $comment,
        'estado' => 'Desactivado',
        );  
        //$consulta = "INSERT INTO comments(id_entrie,autor,body,estado) VALUES ($id_post,$autor,$comment,'Desactivado')";
         $this->db->insert('comments', $data);
        //return $this->db->insert("$consulta");
        
    }

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

    function getAllComments()
    {         
        $sentencia = "SELECT * FROM comments WHERE estado = 'Desactivado'"; 
        $query = $this->db->query("$sentencia");
        return $query->result_array();
           
    }

    
}


?>