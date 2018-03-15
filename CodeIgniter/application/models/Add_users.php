<?php

class Add_users extends CI_Model
{
	public function add($data)
	{
		$this->load->database();
		$count = $this->db->insert('participant',$data);
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