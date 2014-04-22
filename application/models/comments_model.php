<?php 


class Comments_model extends CI_Model {

    /**
     * Get subdomain name for a especified account
     * @param account_id
     * @return subdomain name found
     */ 
    function add($id_post, $autor, $comment)
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
        $query = $this->db->get("comments");
        return $query->result_array();
           
    }

    function changeState($id,$boton)
    {         
        $data = array(
            'estado' => $boton,
        );
        $this->db->where('id', $id);
        $this->db->update('comments', $data);
           
    }


    function getAllActivate($id)
    {         
        $sentencia = "SELECT * FROM comments WHERE id_entrie = ".$id." and estado = 'Activado'"; 
        $query = $this->db->query("$sentencia");
        return $query->result_array();
           
    }
}


?>