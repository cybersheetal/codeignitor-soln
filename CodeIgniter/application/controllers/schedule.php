<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('schedule_message');
		
		
}

public function add_schedule()
{
		
		$schedule_id = $this->input->post('schedule_id');
		$participant1 = $this->input->post('participant1');
		$participant2 = $this->input->post('participant2');
		$participant3 = $this->input->post('participant3');
		$participant4 = $this->input->post('participant4');
		
		$data = array('schedule_id'=>$schedule_id,'participant1'=>$participant1,'participant2'=>$participant2,'participant3'=>$participant3,'participant4'=>$participant4);
		
		$this->load->model('Add_schedule');
		
		if($this->Add_schedule->add($data))
		{
			echo "Data inserted";
		}
		else
		{
			echo "Data not inserted";
		}
		
	}
}