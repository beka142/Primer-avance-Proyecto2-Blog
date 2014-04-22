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


	public function goLogin()
	{
		$mensaje['mensaje']= '';
		$this->load->view('user_view', $mensaje);
	}


	public function authenticate()
	{
		$mensaje['mensaje']= 'Error';
		$alias = $this->input->post("alias");
		$contrasena = $this->input->post("contrasena");
		$this->load->model('user_model');
		$data['user'] = $this->user_model->getUser();

		$user=$data['user'];
		$this->load->library('encrypt');
		//$encrypted_string = $user
		$plaintext_string = $this->encrypt->decode($user->contraseña);
		
		if(($contrasena==$plaintext_string)&&($alias==$user->alias))
		{
			$this->load->view('admin_view');
			$this->user_model->updateState($alias);
		}
		else{
			$this->load->view('user_view', $mensaje);
		}
	}


	public function goGestionPosts()
	{
		if ($this->isLoguedIn()==true) {
			$this->load->view('postsAdmin_view');
		}
	}


	public function goPerfil()
	{
		if ($this->isLoguedIn()==true) {
			$data['blog_name'] = 'Mi Perfil';
			$this->load->model('user_model');
			$data['user'] = $this->user_model->getUser();
			$this->load->view('perfilAdmin_view', $data);
		}
	}


	public function updateData()
	{
		$cedula = $this->input->post("cedula");
		$nombre = $this->input->post("nombre");
		$alias = $this->input->post("alias");
		$contrasena = $this->input->post("contrasena");
		$this->load->library('encrypt');
		$contrasena = $this->encrypt->encode($contrasena);

		$carrera = $this->input->post("carrera");
		$direccion = $this->input->post("direccion");
		$correo = $this->input->post("correo");
		$redSocial = $this->input->post("redSocial");
		$this->load->model('user_model');
		$this->user_model->updateData($cedula,$nombre,$alias,$contrasena,$carrera,$direccion,$correo,$redSocial);
		$this->load->view('message_perfil');   
	}


	public function A()
	{
		$this->load->model('user_model');
		$this->user_model->close();
		redirect('/post_controller/index','location', 301);
		// redirect('/login/form/', 'refresh');
	}

	public function isLoguedIn() {
		$this->load->model('user_model');
		$data['user'] = $this->user_model->getUser();
		$user=$data['user'];

    	if ($user->estado=='Logeado') {
        	return true;
	    } else {
	        redirect('/Admin_controller/goLogin/', 'refresh');
	    }
	}

	public function error() 
	{
		echo "Error 404, try again later";
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */