<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_controller extends CI_Controller {

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
		$this->load->view('user_view');
	}

	public function authenticate()
	{
		$datos = $_POST['user_view'];
		var_dump($datos);
		die;
		if(!empty($datos['nombre'])&&!empty($datos['contraseña']))
		{
			echo "Datos guardados exitosamente";
		}
		else{
			echo "Lo sentimos, se necesita que todas las casillas esten completas";
		}
		die;
		$this->load->view('user_view');
	}


	public function error() 
	{
		echo "Error 404, try again later";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */