<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

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
		$this->load->view('static');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function nimekiri()
	{
		$this->load->view('static');
		$this->load->view('nimekiri');
		$this->load->view('footer');
	}
	public function tulemused()
	{
		$this->load->view('static');
		$this->load->view('tulemused');
		$this->load->view('footer');
	}
	public function statistika()
	{
		$this->load->view('static');
		$this->load->view('statistika');
		$this->load->view('footer');
	}
	public function haaletamine()
	{
		$this->load->view('static');
		$this->load->view('hääletamine');
		$this->load->view('footer');
	}
	
	public function login(){
		$this->load->view('login');
	}
	
	public function members(){
		$this->load->view('static');
		$this->load->view('hääletamine');
		$this->load->view('footer');
	}
	
	public function login_validation(){
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('Username', 'Username', 'required|trim|xss_clean|callback_validate_credentials');
		$this->form_validation->set_rules('Password', 'Password', 'required|md5|trim');
		
		if ($this->form_validation->run()){
			redirect('site/members');
		} else {
			$this->load->view('login');
		}

	}
	
	public function validate_credentials() {
		$this->load->model('model_users');
		
		if ($this->model_users->can_log_in()) {
			return true;
		} else {
			$this->form_validation->set_message('validate_credentials', 'Incorrect username/password.');
			return false;
		}
	}
}
?>
