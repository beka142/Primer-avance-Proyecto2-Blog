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
        $sentencia = "SELECT * FROM comments WHERE id_entrie = ".$id." and estado = 'Activado'"; 
        $query = $this->db->query("$sentencia");
        return $query->result_array();
           
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

    function updateData($cedula,$nombre,$alias,$contrasena,$carrera,$direccion,$correo)
    {         
        $data = array(
            'nombre' => $nombre,
            'alias' => $alias,
            'contraseña' => $contrasena,
            'carrera' => $carrera,
            'direccion' => $direccion,
            'correo' => $correo,
        );
        $this->db->where('cedula', $cedula);
        return $this->db->update('user', $data);
           
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