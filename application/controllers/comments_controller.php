<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments_controller extends CI_Controller {

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
		$this->load->model('comments_model');
		$autor = $this->input->post("autor");
		$comentario = $this->input->post("comentario");
        $this->comments_model->getComment($id,$autor,$comentario);

        include("/Users/Betzy/Sites/Proyecto2ProWeb/CodeIgniter/Email/class.phpmailer.php"); 
	    include("/Users/Betzy/Sites/Proyecto2ProWeb/CodeIgniter/Email/class.smtp.php"); 
	    $mail = new PHPMailer(); 
	    $mail->IsSMTP(); 
	    $mail->SMTPAuth = true; 
	    $mail->SMTPSecure = "ssl"; 
	    $mail->Host = "smtp.gmail.com"; 
	    $mail->Port = 465; 
	    $mail->Username = "betzykarinachiroldesleon@gmail.com";
	    $mail->Password = "beka2710442";

	    $mail->From = "betzykarinachiroldesleon@gmail.com"; 
	    $mail->FromName = "System"; 
	    $mail->Subject = "Nuevo comentario"; 
	    $mail->AltBody = "Este es un mensaje"; 
	    $mail->MsgHTML("<b>Alguien ha comentado tu post número: ".$id." </b>"); 
	    $mail->AddAttachment(""); 
	    $mail->AddAttachment(""); 
	    $mail->AddAddress("beka142@hotmail.com", "Administrador"); 
	    $mail->IsHTML(true); 
	    if(!$mail->Send()) { 
	    $mensaje['mensaje'] = "Error: " . $mail->ErrorInfo; 
	    } else { 
	    $mensaje['mensaje'] = "Se ha enviado un Mensaje acerca de tú comentario al Administrador del Blog"; 
	     }

        $this->load->view('message_comment', $mensaje);

	}

	public function error() 
	{
		echo "Error 404, try again later";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */