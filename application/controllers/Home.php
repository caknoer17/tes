<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Produk');
	}


	public function index()
	{
		$queryAllProduk = $this->M_Produk->getDataProduk();
		$DATA = array('queryAllPrdk' => $queryAllProduk);
		$this->load->view('home', $DATA);
	}


	public function halaman_tambah()
	{
		$this->load->view('halaman_tambah');
	}

	public function tambah_aksi()
	{


		$id_produk = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$harga = $this->input->post('harga');
		$kategori = $this->input->post('kategori');
		$status = $this->input->post('status');

		$ArrInsert = array(
			'id_produk' => $id_produk,
			'nama_produk' => $nama_produk,
			'harga' => $harga,
			'kategori' => $kategori,
			'status' => $status
		);

		// echo "<pre>";
		// print_r($ArrInsert);
		// echo "</pre>";
		$this->M_Produk->InsertDataProduk($ArrInsert);
		redirect(base_url());
	}


	public function halaman_edit($id_produk)
	{
		$queryProdukDetail = $this->M_Produk->GetDetailDataProduk($id_produk);
		$DATA = array('queryPrdkDetail' => $queryProdukDetail);
		// echo "<pre>";
		// print_r($queryProdukDetail);
		// echo "</pre>";
		$this->load->view('halaman_edit', $DATA);
	}

	public function edit_aksi()
	{
		$id_produk = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$harga = $this->input->post('harga');
		$kategori = $this->input->post('kategori');
		$status = $this->input->post('status');

		$ArrUpdate = array(
			'id_produk' => $id_produk,
			'nama_produk' => $nama_produk,
			'harga' => $harga,
			'kategori' => $kategori,
			'status' => $status
		);

		// echo "<pre>";
		// print_r($ArrUpdate);
		// echo "</pre>";
		$this->M_Produk->UpdateDataProduk($id_produk, $ArrUpdate);
		redirect(base_url());
	}

	public function hapus_aksi($id_produk)
	{
		$this->M_Produk->DeleteDataProduk($id_produk);
		redirect(base_url());
	}
}
