<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dbmodel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function adminLogin($email, $password)
	{
		// Query to check for user with the provided email and password
		$this->db->where('email', $email);
		$this->db->where('password', $password); // Assuming the password is hashed

		$query = $this->db->get('user'); // 'user' is your table name

		// Check if any record is returned
		if ($query->num_rows() == 1) {
			return $query->row(); // Return the user data
		} else {
			return false; // Return false if no matching user found
		}
	}
	public function getDoctors()
	{
		$query = $this->db->get('doctor');
		return $query->result(); // Return all doctor records
	}

	// Fetch a specific doctor by ID
	public function getDoctorById($doctor_id)
	{
		$this->db->where('id', $doctor_id);
		$query = $this->db->get('doctor');
		return $query->row(); // Return a single record
	}



	// Delete a doctor by ID
	public function deleteDoctor($doctor_id)
	{
		$this->db->where('id', $doctor_id);
		return $this->db->delete('doctor');
	}

	public function addDoctor($data)
	{
		return $this->db->insert('doctor', $data); // Insert the new doctor into the database
	}

	// Update doctor details
	public function updateDoctor($doctor_id, $data)
	{
		$this->db->where('id', $doctor_id);
		return $this->db->update('doctor', $data);
	}

}