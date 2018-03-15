<?php

class add_dutystation extends CI_Model
{
	public function add($data)
	{
		$this->load->database();
		$count = $this->db->insert('duty_station',$data);
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