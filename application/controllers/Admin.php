<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Dbmodel'); // Ensure your model is loaded
		$this->load->helper(array('url', 'form'));
		$this->load->library(array('form_validation', 'session'));
	}

	public function index()
	{
		$data['viewpage'] = "index";
		$this->load->view('login', $data);
	}


	public function dashboard()
	{
		$data['viewpage'] = "dashboard";
		$this->load->view('header', $data);
	}
	public function doctor()
	{
		$data['doctors'] = $this->Dbmodel->getDoctors(); // Fetch doctors from the model
		$data['viewpage'] = "doctor";
		$this->load->view('header', $data);// Load the view with doctor data
	}

	// Fetch a specific doctor by ID (for AJAX)
	public function getDoctor($doctor_id)
	{
		$doctor = $this->Dbmodel->getDoctorById($doctor_id);
		echo json_encode($doctor); // Return data as JSON
	}

	// Update doctor details
	public function updateDoctor()
	{
		$doctor_id = $this->input->post('id');
		$data = [
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'contact' => $this->input->post('contact')
		];

		$this->Dbmodel->updateDoctor($doctor_id, $data); // Update doctor in the database
		$this->session->set_flashdata('success', 'Doctor updated successfully');
		redirect(base_url('admin/doctor'));
	}

	public function addDoctor()
	{
		$data = [
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'contact' => $this->input->post('contact')
		];

		$this->Dbmodel->addDoctor($data); // Add doctor to the database
		$this->session->set_flashdata('success', 'Doctor added successfully');
		redirect(base_url('admin/doctor'));
	}
	// Delete doctor by ID
	public function deleteDoctor($doctor_id)
	{
		$this->Dbmodel->deleteDoctor($doctor_id); // Call the delete function in the model
		$this->session->set_flashdata('success', 'Doctor deleted successfully');
		redirect(base_url('admin/doctor'));
	}

	// Handle login form submission
	public function adminLogin()
	{
		// Set validation rules for email and password fields
		$this->form_validation->set_rules("email", "Email", "required|valid_email");
		$this->form_validation->set_rules("password", "Password", "required");

		// Run the validation
		if ($this->form_validation->run() === FALSE) {
			// Validation failed, reload the login page with error messages
			$this->session->set_flashdata('error', 'Please enter valid email and password.');
			$this->load->view('login');
		} else {
			// Get email and password from the form
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			// Encrypt the password (assuming using MD5)
			$encrypted_password = md5($password);

			// Verify user credentials using your model
			$user = $this->Dbmodel->adminLogin($email, $encrypted_password);

			if ($user) {
				// If user exists and credentials are valid, set session data
				$user_data = [
					'user_id' => $user->id,
					'name' => $user->name,
					'email' => $user->email,
					'login' => true
				];
				$this->session->set_userdata($user_data);

				// Success toast message
				$this->session->set_flashdata('success', 'Login successful! Welcome to the dashboard.');
				redirect(base_url('admin/dashboard'));
			} else {
				// Invalid credentials, reload login page with error message
				$this->session->set_flashdata('error', 'Invalid email or password. Please try again.');
				redirect(base_url('index'));
			}
		}
	}




}
