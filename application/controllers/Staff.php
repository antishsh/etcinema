<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login/authenticate_login');
        }
    }

    
    public function index()
    {
        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/staffpages/dashboard.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $this->load->model('staff_model');
        $data['countMovie'] = $this->staff_model->countMovie();
        $data['countCustomer'] = $this->staff_model->countCustomer();
        $data['nextMovies'] = $this->staff_model->nextMovies();
        $data['newCustomer'] = $this->staff_model->newCustomer();
         
        $this->load->view('stafftemplates/header');
        $this->load->view('staffpages/dashboard',$data);
        $this->load->view('stafftemplates/footer',$data);
    }
    public function movies()
    {
        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/staffpages/movies.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if(isset($_POST['Search'])){
			$this->load->model('staff_model');
			$data['movie'] = $this->staff_model->search_movie();
			
            $this->load->view('stafftemplates/header');
            $this->load->view('staffpages/movies',$data);
            $this->load->view('stafftemplates/footer');
			}
			
	   else{
			$this->load->model('staff_model');
			$data['movie'] = $this->staff_model->get_movie();
			
            $this->load->view('stafftemplates/header');
            $this->load->view('staffpages/movies',$data);
            $this->load->view('stafftemplates/footer');
	   }
        
    }
    public function add_movie()
    {

        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }

        $this->form_validation->set_rules('title', 'title', 'required');

        $this->form_validation->set_rules('rating_id', 'rating id', 'required');
        $this->form_validation->set_rules('trailor', 'trailor', 'required');
        $this->form_validation->set_rules('gener_id', 'gener id', 'required');
        $this->form_validation->set_rules('plot', 'plot', 'required');
        $this->form_validation->set_rules('runningtime', 'runningtime', 'required');
        $this->form_validation->set_rules('realsedate', 'realsedate', 'required');
        $this->form_validation->set_rules('language', 'language', 'required');
        $this->form_validation->set_rules('staring', 'staring', 'required');
        $this->form_validation->set_rules('subtitle', 'subtitle', 'required');
        if (empty($_FILES['userfile']['name']))
        {
          $this->form_validation->set_rules('userfile', 'Poster', 'required');
        }


        if ($this->form_validation->run() === FALSE) {
            $this->load->model('staff_model');
            $data['gener'] = $this->staff_model->get_gener();
            $data['rating'] = $this->staff_model->get_rating();

            $this->load->view('stafftemplates/header', $data);
            $this->load->view('staffpages/add_movie', $data);
            $this->load->view('stafftemplates/footer', $data);
        } else {

            $config['upload_path'] = './assets/poster';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['max_width'] = '5000';
            $config['max_height'] = '5000';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                //$post_image = 'noimage.jpg';
                $this->load->view('stafftemplates/header');
                $this->load->view('staffpages/add_movie', $error);
                $this->load->view('stafftemplates/footer');
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];
            }
            $this->load->model('staff_model');
            $this->staff_model->add_movie($post_image);
            redirect('staff/movies');
        }
    } 

    public function edit_movie($id)
    {
        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
        $this->load->model('staff_model');
        $data['records'] = $this->staff_model->getMovieRecord($id);

        if (empty($data['records'])) {
            show_404();
        }
        $data['gener'] = $this->staff_model->get_gener();
        $data['rating'] = $this->staff_model->get_rating();

        $this->load->view('stafftemplates/header', $data);
        $this->load->view('staffpages/edit_movie', $data);
        $this->load->view('stafftemplates/footer');
    }
    public function update_movie($id)
    {

        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }

        $this->form_validation->set_rules('title', 'title', 'required');

        $this->form_validation->set_rules('rating_id', 'rating id', 'required');
        $this->form_validation->set_rules('trailor', 'trailor', 'required');
        $this->form_validation->set_rules('gener_id', 'gener id', 'required');
        $this->form_validation->set_rules('plot', 'plot', 'required');
        $this->form_validation->set_rules('runningtime', 'running time', 'required');
        $this->form_validation->set_rules('realsedate', 'realse date', 'required');
        $this->form_validation->set_rules('language', 'language', 'required');
        $this->form_validation->set_rules('staring', 'staring', 'required');
        $this->form_validation->set_rules('subtitle', 'subtitle', 'required');



        if ($this->form_validation->run() === FALSE) {
            $this->edit_movie($id);
        } else {

            $config['upload_path'] = './assets/poster';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['max_width'] = '5000';
            $config['max_height'] = '5000';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                
                $this->load->view('stafftemplates/header');
                $this->load->view('staffpages/edit_movie', $error);
                $this->load->view('stafftemplates/footer');
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];
            }
            $this->load->model('staff_model');
            $this->staff_model->update_movie($post_image,$id);
            redirect('staff/movies');
        }
    } 
    public function delete_movie($id)
    {
        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
        $this->load->model('staff_model');
        $this->staff_model->deleteMovie($id);
        redirect('staff/movies');
    }
    public function showtime()
    {
        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/staffpages/showtime.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if(isset($_POST['Search'])){
			$this->load->model('staff_model');
            $data['showtime'] = $this->staff_model->search_showtime();
            $data['cinema'] =$this->admin_model->get_cinema();
		    $data['movie'] =$this->admin_model->get_movie();
			
            $this->load->view('stafftemplates/header');
            $this->load->view('staffpages/showtime',$data);
            $this->load->view('stafftemplates/footer');
			}
			
	   else{
			$this->load->model('staff_model');
            $data['showtime'] = $this->staff_model->get_showtime();
            $data['cinema'] =$this->admin_model->get_cinema();
		    $data['movie'] =$this->admin_model->get_movie();
			
            $this->load->view('stafftemplates/header');
            $this->load->view('staffpages/showtime',$data);
            $this->load->view('stafftemplates/footer');
	   }
        
    }
    public function add_showtime()
    {
        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_rules('movie', 'movie', 'required');
        $this->form_validation->set_rules('cinema', 'cinema', 'required');
        $this->form_validation->set_rules('date', 'date','required');
        $this->form_validation->set_rules('time', 'time','required');
        


        if ($this->form_validation->run() === FALSE) {

            $this->showtime();
        } else {

            $this->load->model('staff_model');
            $this->staff_model->add_showtime();
            redirect('staff/showtime');
        }
    } 
    public function edit_showtime($id)
    {
        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
        $this->load->model('staff_model');
        $data['records'] = $this->staff_model->getShowRecord($id);

        if (empty($data['records'])) {
            show_404();
        }
        $data['cinema'] =$this->admin_model->get_cinema();
        $data['movie'] =$this->admin_model->get_movie();
        
        $this->load->view('stafftemplates/header', $data);
        $this->load->view('staffpages/edit_showtime', $data);
        $this->load->view('stafftemplates/footer');
    }
    public function update_showtime($id)
    {

        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_rules('movie', 'movie', 'required');
        $this->form_validation->set_rules('cinema', 'cinema', 'required');
        $this->form_validation->set_rules('date', 'date','required');
        $this->form_validation->set_rules('time', 'time','required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->edit_showtime($id);
        } else {

            
            $this->load->model('staff_model');
            $this->staff_model->update_showtime($id);
            redirect('staff/showtime');
        }
    } 
    public function delete_showtime($id)
    {
        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
        $this->load->model('staff_model');
        $this->staff_model->deleteShowtime($id);
        redirect('staff/showtime');
    }
    public function customer()
    {
        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/staffpages/customer.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if(isset($_POST['Search'])){
			$this->load->model('staff_model');
            $data['customer'] = $this->staff_model->search_customer();
            
            $this->load->view('stafftemplates/header');
            $this->load->view('staffpages/customer',$data);
            $this->load->view('stafftemplates/footer');
			}
			
	   else{
			$this->load->model('staff_model');
            $data['customer'] = $this->staff_model->get_customer();
           
            $this->load->view('stafftemplates/header');
            $this->load->view('staffpages/customer',$data);
            $this->load->view('stafftemplates/footer');
	   }
        
    }
    public function add_customer()
    {
        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
    $this->form_validation->set_rules('fname', 'First Name', 'required');
    $this->form_validation->set_rules('lname', 'Last Name', 'required');
	$this->form_validation->set_rules('email', 'Email','required|callback_check_email');
	$this->form_validation->set_rules('phone', 'Phone Number','required|callback_check_phone');
	$this->form_validation->set_rules('date_of_birth', 'Date of Birth','required');
	$this->form_validation->set_rules('password', 'pasword','required');
	$this->form_validation->set_rules('password2', 'confirm pasword','required|matches[password]');

        


        if ($this->form_validation->run() === FALSE) {

            $this->load->view('stafftemplates/header');
            $this->load->view('staffpages/add_customer');
            $this->load->view('stafftemplates/footer');
        } else {

            $this->load->model('staff_model');
            $this->staff_model->add_customer();
            redirect('staff/customer');
        }
    } 
    public function edit_customer($id)
    {
        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
        $this->load->model('staff_model');
        $data['records'] = $this->staff_model->getCustomerRecord($id);

        if (empty($data['records'])) {
            show_404();
        }
        
        $this->load->view('stafftemplates/header', $data);
        $this->load->view('staffpages/edit_customer', $data);
        $this->load->view('stafftemplates/footer');
    }
    public function update_customer($id)
    {

        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_rules('fname', 'First Name', 'required');
    $this->form_validation->set_rules('lname', 'Last Name', 'required');
	$this->form_validation->set_rules('email', 'Email','required');
	$this->form_validation->set_rules('phone', 'Phone Number','required');
	$this->form_validation->set_rules('date_of_birth', 'Date of Birth','required');
	$this->form_validation->set_rules('password', 'Old pasword','required|callback_check_Password');
	$this->form_validation->set_rules('new_password', 'New pasword','required');
	$this->form_validation->set_rules('password2', 'confirm pasword','required|matches[new_password]');
        
        if ($this->form_validation->run() === FALSE) {
            $this->edit_customer($id);
        } else {

            
            $this->load->model('staff_model');
            $this->staff_model->update_customer($id);
            redirect('staff/customer');
        }
    } 
    public function delete_customer($id)
    {
        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/authenticate_login');
        }
        $this->load->model('staff_model');
        $this->staff_model->deleteCustomer($id);
        redirect('staff/customer');
    }
    public function check_Password($password)
	{
		$this->form_validation->set_message('check_Password', 'the password is incorect please try agin');

		$password= sha1($this->input->post('password'));
        $this->load->model('staff_model');
		if($this->staff_model->check_Password($password))
		{
			return true; 
		}else{
			return false; 
		}
	}
	public function check_email($email)
	{
		$this->form_validation->set_message('check_email', 'That email is taken. please choose a difrent one');
		
        $this->load->model('staff_model');
		if($this->staff_model->check_email($email))
		{
			return true;
		}else{
			return false; 
		}
	}
	
	public function check_phone($phone)
	{
		$this->form_validation->set_message('check_phone', 'please use differnt phone this is used before');
		$this->load->model('staff_model');
		if($this->staff_model->check_phone($phone))
		{
			return true;
		}else{
			return false; 
		}
	}
}
