<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Produk extends CI_Model
{
	function getDataProduk()
	{
		$query = $this->db->query("SELECT * FROM `produk` WHERE status = 'bisa dijual';");
		return $query->result();
	}

	function InsertDataProduk($data)
	{
		$this->db->insert('produk', $data);
	}

	function GetDetailDataProduk($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$query = $this->db->get('produk');
		return $query->row();
	}

	function UpdateDataProduk($id_produk, $data)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->update('produk', $data);
	}

	function DeleteDataProduk($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$query = $this->db->delete('produk');
	}
}
