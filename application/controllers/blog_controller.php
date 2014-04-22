<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_controller extends CI_Controller {

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
	public function goGestionBlog()
	{
		$this->load->model('user_model');
		$data['user'] = $this->user_model->getUser();
		$user=$data['user'];

    	if ($user->estado=='Logeado') {	
			$data['blog_name'] = 'My Blog';
			$this->load->model('blog_model');
			$data['blog'] = $this->blog_model->getAll();
			$this->load->view('blogAdmin_view', $data);
		}else {
	        redirect('/admin_controller/goLogin/', 'refresh');
	    }
	}


	public function updateData($id)
	{
		$nombre = $this->input->post("nombre");
		$detalle = $this->input->post("detalle");
		$this->load->model('blog_model');
		$this->blog_model->updateData($id,$nombre,$detalle);
		$this->load->view('message_blog');   
	}


	public function error() 
	{
		echo "Error 404, try again later";
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */