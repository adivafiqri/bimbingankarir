<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan_Model extends CI_Model {

public function Get($table)
  {
    $res = $this->db->get($table);
    return $res->result_array();
  }
  public function tambah($table, $data)
	{
		$tambah = $this->db->insert($table, $data);
		return $tambah;
	}
  public function hapus($table, $id)
	{
		$this->db->where('id_lowongan',$id);
		$hapus=$this->db->delete($table);
		return $hapus;
	}
    public function get_lowongan() {
        $query = $this->db->get('lowongan');
        return $query->result();
    }
}
