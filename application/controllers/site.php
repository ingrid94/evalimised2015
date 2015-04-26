<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	public function __construct() {
		parent::__construct();
		session_start();
	}

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
		$data = array(
			'url' => 'site/index'
		);
		$this->session->set_userdata($data);
		$this->load->view('static');
		$this->load->view('index');
		$this->load->view('footer');
	}
 
	public function nimekiri()
	{	
		$data = array(
			'url' => 'site/nimekiri'
		);
		$this->session->set_userdata($data);
		$this->load->model('model_posts');
		$data['query'] = $this->model_posts->getPosts();
		$this->load->view('static');
		$this->load->view('nimekiri', $data);
		$this->load->view('footer');
	}
	public function tulemused()
	{
		$dataurl = array(
					'url' => 'site/tulemused'
		);
		$this->session->set_userdata($dataurl);
		$this->load->model('model_results');
		$data['query'] = $this->model_results->getVotesForFraction();
		$data2['query2'] = $this->model_results->getVotesForCandidate();
		$this->load->view('static');
		$this->load->view('tulemused', $data);
		$this->load->view('tulemused2',$data2);
		$this->load->view('footer');
	}
	public function statistika()
	{
		$dataurl = array(
			'url' => 'site/statistika'
		);
		$this->session->set_userdata($dataurl);
		$this->load->model('model_results');
		$data['query'] = $this->model_results->getVotesForFraction();
		$this->load->view('static');
		$this->load->view('statistika', $data);
		$this->load->view('footer');
	}
	public function test()
	{
		if($this->session->userdata('userID') == '4') {
			$this->load->view('static');
			$this->load->view('test');
			$this->load->view('footer');
		} else {
			redirect('site/haaletamine');
		}
		
	}
	public function haaletamine()
	{	
		$dataurl = array(
			'url' => 'site/haaletamine'
		);
		$this->session->set_userdata($dataurl);
		if($this->session->userdata('is_logged_in') == true) {
			$this->load->model('model_vote');
			$userID = $this->session->userdata('userID');
			$VoteRegion = $this->session->userdata('userRegion');
			$data['region'] = $this->model_vote->getCandidates($VoteRegion);
			$this->load->view('static');
			$this->load->view('hääletamine', $data);
			$this->load->view('footer');
		} else {
			$this->load->view('static');
			$this->load->view('hääletamine_audentimata');
			$this->load->view('footer');
		}
	}
	public function login(){
		$this->load->view('static');
		$this->load->view('login');
		$this->load->view('footer');
	}
	
	public function registreeri(){
		$this->load->view('static');
		$this->load->view('registreeri');
		$this->load->view('footer');
	}
	public function isikuandmed(){
		$this->load->model('model_users');
		$userID = $this->session->userdata('userID');
		$query = $this->model_users->show_user_settings();
		$data['row'] = $query->row($userID-1);
		$this->load->view('static');
		$this->load->view('isikuandmed', $data);
		$this->load->view('footer');
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
			$redirectlink = $this->session->userdata('url');
			if($redirectlink !== null){
				redirect($redirectlink);
			} else{
				redirect('site/haaletamine');
			}
			
		} else {
			$this->load->view('login');
		}

	}
	
	public function signup_validation(){
		$this->load->model('model_users');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Username', 'Username', 'required|trim|is_unique[Authentication.Username]');
		$this->form_validation->set_rules('Password', 'Password', 'required|trim');
		$this->form_validation->set_rules('cPassword', 'Confirm Password', 'required|trim|matches[Password]');
	
		$this->form_validation->set_message('is_unique', "See kasutaja on juba olemas!");
	
		if ($this->form_validation->run()){
			$data = array(
				'Username' => $this->input->post('Username'),
				'Password' => md5($this->input->post('Password'))
				);
			$add_user = $this->db->insert('Authentication', $data);
			$username = $this->input->post('Username');
			$id = $this->model_users->get_UserID($username);
			$data2 = array(
				'Id' => $id,
				'Admin' => 0,
				'LastName' => Vaikenimi,
				'Forename' => Vaikenimi,
				'Region' => Vaikenimi,
				'Birthday' => '1990-01-01'
				);
			$add_usersID = $this->db->insert('Users', $data2);
			if($add_user) {
				//user adding to auhentication was a success
				if($add_usersID) {
					redirect('site/login');
					return true;
				} else{
					redirect('site/haaletamine');
				return false;
				}
			} else {
				echo "something went wrong with adding data:S";
				redirect('site/registreeri');
				return false;
			}
		} else {
			redirect('site/registreeri');
		}
	}
	
	public function user_settings_validation(){
		$this->load->model('model_users');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Forename', 'Forename', 'required');
		$this->form_validation->set_rules('LastName', 'LastName', 'required');
		$this->form_validation->set_rules('Region', 'Region', 'required');
		$this->form_validation->set_rules('Birthday', 'Birthday', 'required');
		if($this->form_validation->run()){
			$session_id = $this->session->userdata('userID');
			$this->model_users->del_user_settings($session_id);
			$data = array(
				'Id' => $this->session->userdata('userID'),
				'Forename' => $this->input->post('Forename'),
				'LastName' => $this->input->post('LastName'),
				'Region' => $this->input->post('Region'),
				'Birthday' => $this->input->post('Birthday'),
				);
			$add_user_settings = $this->db->insert('Users', $data);
			redirect('site/isikuandmed');
		} else {
			$this->load->view('isikuandmed');
		}
		
	}
	
	public function validate_credentials() {
		$this->load->model('model_users');
		$query = $this->model_users->can_log_in();
		$username = $this->input->post('Username');
		$userID = $this->model_users->get_UserID($username);
		$userRegion = $this->model_users->get_User_Region($userID);
		if ($query) {
			$data = array(
				'username' => $this->input->post('Username'),
				'is_logged_in' => true,
				'userID' => $userID,
				'userRegion' => $userRegion
			);
			$this->session->set_userdata($data);
			return true;
		} else {
			$this->form_validation->set_message('validate_credentials', 'Incorrect username/password.');
			return false;
		}
	}
	public function logout(){
		session_destroy();
		$this->session->unset_userdata('userID');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_logged_in');
		redirect('site/login');
	}
}
?>
