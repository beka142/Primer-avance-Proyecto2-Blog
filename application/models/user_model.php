<?php 


class User_model extends CI_Model {

    /**
     * Get subdomain name for a especified account
     * @param account_id
     * @return subdomain name found
     */ 

    function getUser()
    {         
        $query = $this->db->get('user');
        return $query->row();
           
    }


    function updateData($cedula,$nombre,$alias,$contrasena,$carrera,$direccion,$correo,$redSocial)
    {         
        $data = array(
            'nombre' => $nombre,
            'alias' => $alias,
            'contraseña' => $contrasena,
            'carrera' => $carrera,
            'direccion' => $direccion,
            'correo' => $correo,
            'red_social' => $redSocial,
        );
        $this->db->where('cedula', $cedula);
        return $this->db->update('user', $data);
           
    }

    function authenticate($alias,$contrasena)
    {         
        $sentencia = "SELECT * FROM user WHERE alias = '$alias' and contraseña = '$contrasena'"; 
        $query = $this->db->query("$sentencia");
        return $query->result_array();    
    }


    function updateState($alias)
    {         
        $data = array(
            'estado' => 'Logeado',
        );
        $this->db->where('alias', $alias);
        $this->db->update('user', $data);
           
    }


    function close()
    {         
        $data = array(
            'estado' => 'Desactivado',
        );
        $this->db->where('cedula', '207100442');
        $this->db->update('user', $data);
           
    }

}


?>