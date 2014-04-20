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

	public function goPost()
	{
		$data['blog_name'] = 'My Blog';
		$data['user'] = $this->entries->getUser();
		$this->load->view('postsAdmin_view', $data);
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



	public function error() 
	{
		echo "Error 404, try again later";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */