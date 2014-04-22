<?php 


class Blog_model extends CI_Model {

    /**
     * Get subdomain name for a especified account
     * @param account_id
     * @return subdomain name found
     */ 
    function getAll()
    {       
        
        $query = $this->db->get('blog_info');
        return $query->row();     
    }


    function updateData($id,$nombre,$detalle)
    {         
        $data = array(
            'nombre' => $nombre,
            'detalle' => $detalle,
        );
        $this->db->where('id', $id);
        return $this->db->update('blog_info', $data);
           
    }
}
?>