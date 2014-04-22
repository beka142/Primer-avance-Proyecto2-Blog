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

	public function index()
	{
		$data['blog_name'] = 'The Blog ';
		$this->load->model('blog_model');
		$data['blog'] = $this->blog_model->getAll();
		$data['entries'] = $this->entries->getAll();
		$this->load->model('user_model');
		$data['user'] = $this->user_model->getUser();
		$this->load->view('home_index', $data);
	}

	public function show($id)
	{
		$data['id'] = $id;
		$data['blog_name'] = 'The Blog ';
		$this->load->model('blog_model');
		$data['blog'] = $this->blog_model->getAll();
		$data['entries'] = $this->entries->getIdPost($id);
		$this->load->model('comments_model');
		$data['comments'] = $this->comments_model->getAllActivate($id);
		$this->load->model('user_model');
		$data['user'] = $this->user_model->getUser();
		$this->load->view('post_view', $data);
	}


	public function nuevo()
	{
		$this->load->model('user_model');
		$data['user'] = $this->user_model->getUser();
		$user=$data['user'];

    	if ($user->estado=='Logeado') {
        	$data['blog_name'] = 'My Posts';
			$this->load->model('user_model');
			$data['user'] = $this->user_model->getUser();
			$this->load->view('postsNew_view', $data);
	    } else {
	        redirect('/admin_controller/goLogin/', 'refresh');
	    }	
	}

	public function add()
	{
		$title = $this->input->post("title");
		$contenido = $this->input->post("content");
        $this->entries->insertPost($title,$contenido);
        $this->load->view('prueba');       

	}


	public function goPostEdit()
	{
		$this->load->model('user_model');
		$data['user'] = $this->user_model->getUser();
		$user=$data['user'];

    	if ($user->estado=='Logeado') {	
			$data['blog_name'] = 'Editar post';
			$data['entries'] = $this->entries->getAll();
			$this->load->view('postsEdit_view', $data);
		} else {
	        redirect('/admin_controller/goLogin/', 'refresh');
	    }
	}


	public function edit($id)
	{
		$this->load->model('user_model');
		$data['user'] = $this->user_model->getUser();
		$user=$data['user'];

    	if ($user->estado=='Logeado') {	
			$data['blog_name'] = 'Edición de Post';
			$data['id'] = $id;
			$data['entries'] = $this->entries->getIdPost($id);
			$this->load->view('postEdit_view', $data);
		} else {
	        redirect('/admin_controller/goLogin/', 'refresh');
	    }
	}


	public function update($id)
	{
		$title = $this->input->post("title");
		$contenido = $this->input->post("content");
		$this->entries->updatePost($id,$title,$contenido);
		$this->load->view('message_post');   
	}


	public function goPostDelete()
	{
		$this->load->model('user_model');
		$data['user'] = $this->user_model->getUser();
		$user=$data['user'];

    	if ($user->estado=='Logeado') {	
			$data['blog_name'] = 'Eliminar post';
			$data['entries'] = $this->entries->getAll();
			$this->load->view('postsDelete_view', $data);
		}else {
	        redirect('/admin_controller/goLogin/', 'refresh');
	    }
	}

	public function delete($id)
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