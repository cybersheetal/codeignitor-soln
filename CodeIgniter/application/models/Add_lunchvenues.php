<?php

class Add_lunchvenues extends CI_Model
{
	public function add($data)
	{
		$this->load->database();
		$count = $this->db->insert('lunch_venues',$data);
		if($count>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>