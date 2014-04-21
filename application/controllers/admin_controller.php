<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin_view');
	}

	public function goGestionPosts()
	{
		$this->load->view('postsAdmin_view');
	}

	public function goPost()
	{
		$data['blog_name'] = 'My Blog';
		$data['user'] = $this->entries->getUser();
		$this->load->view('postsNew_view', $data);
	}


	public function goPostEdit()
	{
		$data['blog_name'] = 'Editar post';
		$data['entries'] = $this->entries->getAll();
		$this->load->view('postsEdit_view', $data);
	}


	public function goComments()
	{
		$data['blog_name'] = 'My Blog';
		$this->load->model('comments_model');
		$data['comments'] = $this->comments_model->getAllComments();
		$this->load->view('commentsAdmin_view', $data);
	}


	public function addPost()
	{
		$title = $this->input->post("title");
		$contenido = $this->input->post("content");
        $this->entries->insertPost($title,$contenido);
        $this->load->view('prueba');       

	}


	public function activeComments($id)
	{
		$this->load->model('comments_model');
        $this->comments_model->changeState($id); 
        $data['blog_name'] = 'My Blog';
		$data['comments'] = $this->comments_model->getAllComments();
		$this->load->view('commentsAdmin_view', $data);
	}


	public function goPerfil()
	{
		$data['blog_name'] = 'Mi Perfil';
		$data['user'] = $this->entries->getUser();
		$this->load->view('perfilAdmin_view', $data);
	}


	public function updateData()
	{
		$cedula = $this->input->post("cedula");
		$nombre = $this->input->post("nombre");
		$alias = $this->input->post("alias");
		$contrasena = $this->input->post("contrasena");
		$carrera = $this->input->post("carrera");
		$direccion = $this->input->post("direccion");
		$correo = $this->input->post("correo");
		$this->entries->updateData($cedula,$nombre,$alias,$contrasena,$carrera,$direccion,$correo);
		$this->load->view('message_perfil');   
	}


	public function updatePost($id)
	{
		$title = $this->input->post("title");
		$contenido = $this->input->post("content");
		$this->entries->updatePost($id,$title,$contenido);
		$this->load->view('message_post');   
	}


	public function goPostDelete()
	{
		$data['blog_name'] = 'Eliminar post';
		$data['entries'] = $this->entries->getAll();
		$this->load->view('postsDelete_view', $data);
	}

	public function deletePost($id)
	{
		$this->entries->deletePost($id);
        $data['blog_name'] = 'Eliminar post';
		$data['entries'] = $this->entries->getAll();
		$this->load->view('postsDelete_view', $data); 
	}


	public function error() 
	{
		echo "Error 404, try again later";
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */