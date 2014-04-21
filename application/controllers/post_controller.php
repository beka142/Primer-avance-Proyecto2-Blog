<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_controller extends CI_Controller {

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
	public function index($id)
	{
		$data['id'] = $id;
		$data['blog_name'] = 'The Blog';
		$data['bio'] = 'The userss bio';
		$data['entries'] = $this->entries->getIdPost($id);
		$data['comments'] = $this->entries->getAllComments($id);
		$data['user'] = $this->entries->getUser();
		$this->load->view('post_view', $data);
	}


	public function postEdit($id)
	{
		$data['blog_name'] = 'Edición de Post';
		$data['id'] = $id;
		$data['entries'] = $this->entries->getIdPost($id);
		$this->load->view('postEdit_view', $data);
	}

	public function error() 
	{
		echo "Error 404, try again later";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */