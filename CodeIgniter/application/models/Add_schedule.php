<?php

class Add_schedule extends CI_Model
{
	public function add($data)
	{
		$this->load->database();
		$count = $this->db->insert('schedule',$data);
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