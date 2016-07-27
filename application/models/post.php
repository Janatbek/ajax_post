<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Post extends CI_Model
{
	public function add_posts($data)
	{		
		$sql = "INSERT INTO posts 
			(description, created_at, updated_at) 
			VALUES (?, NOW(), NOW())";
		$this->db->query($sql, array(
			$data['description']
			));
	}
	public function get_all()
	{
		$sql = "SELECT * FROM posts";
		return $this->db->query($sql)->result_array();
		
	}
}