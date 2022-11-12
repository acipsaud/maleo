<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modhalaman extends CI_Model
{
	function insert($table,$data)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id;
	}

	function update($table,$where=array(),$data=array())
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function getall($table)
	{
		$cek=$this->db->get($table);

		if ($cek->num_rows()>0)
		{
			foreach ($cek->result() as $row)
			{
				$data[]=$row;
			}
			return $data;
		}
	}

	function getall_order_by($table,$id)
	{
		$this->db->order_by($id,'ASC');
		$cek=$this->db->get($table);

		if ($cek->num_rows()>0)
		{
			foreach ($cek->result() as $row)
			{
				$data[]=$row;
			}
			return $data;
		}
	}

	function getjoin()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->join('kategori_deskripsi','kategori.id_kat=kategori_deskripsi.id_kat');
		if (!empty($where))
			$this->db->where($where);
		$this->db->order_by('kategori_deskripsi.id_kat','ASC');

		$cek=$this->db->get();

		if ($cek->num_rows()>0)
		{
			foreach ($cek->result() as $row)
			{
				$data[]=$row;
			}
			return $data;
		}
	}

	function get_all_by($table,$where=array())
	{
		$this->db->where($where);
		$cek=$this->db->get($table);

		if ($cek->num_rows()>0)
		{
			foreach ($cek->result() as $row)
			{
				$data[]=$row;
			}
			return $data;
		}
	}

	function get_row_all($table,$where)
	{
		$this->db->where($where);
		$cek=$this->db->get($table);

		return $cek->row();
	}

	function get_row($table)
	{
		$cek=$this->db->get($table);

		return $cek->row();
	}


}
