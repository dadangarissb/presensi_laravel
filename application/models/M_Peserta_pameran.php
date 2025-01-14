<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_Peserta_pameran extends CI_Model
{

    public $table = 'peserta_pameran';
    public $id = 'pameran.id_pameran';
    public $id_peserta = 'id_peserta';
    public $id_umkm = 'id_umkm';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
        $this->db->join('data_umkm', 'peserta_pameran.id_umkm= data_umkm.id_umkm');
        $this->db->join('pameran', 'peserta_pameran.id_pameran= pameran.id_pameran');
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        //$this->db->like('status', 'Diterima');
        $this->db->join('data_umkm', 'peserta_pameran.id_umkm= data_umkm.id_umkm');
        $this->db->join('pameran', 'peserta_pameran.id_pameran= pameran.id_pameran');
        return $this->db->get($this->table)->result();

    }

    function get_by_id_peserta($id_peserta)
    {
        $this->db->where($this->id_peserta, $id_peserta);
        //$this->db->like('status', 'Diterima');
        $this->db->join('data_umkm', 'peserta_pameran.id_umkm= data_umkm.id_umkm');
        $this->db->join('pameran', 'peserta_pameran.id_pameran= pameran.id_pameran');
        return $this->db->get($this->table)->row();

    }

    function get_by_id_delete($id_peserta)
    {
        $this->db->where($this->id_peserta, $id_peserta);
        //$this->db->like('status', 'Diterima');
        // $this->db->join('data_umkm', 'peserta_pameran.id_umkm= data_umkm.id_umkm');
        // $this->db->join('pameran', 'peserta_pameran.id_pameran= pameran.id_pameran');
        return $this->db->get($this->table)->row();
    }

    function get_peserta($id)
    {
        $this->db->where($this->id_umkm, $id);
        return $this->db->get($this->table)->result();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_peserta', $q);
	$this->db->or_like('id_umkm', $q);
	$this->db->or_like('id_pameran', $q);
	$this->db->or_like('penjualan_barang', $q);
	$this->db->or_like('order_barang', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_peserta', $q);
	$this->db->or_like('id_umkm', $q);
	$this->db->or_like('id_pameran', $q);
	$this->db->or_like('penjualan_barang', $q);
	$this->db->or_like('order_barang', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id_peserta, $data)
    {
        $this->db->where($this->id_peserta, $id_peserta);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id_peserta)
    {
        $this->db->where($this->id_peserta, $id_peserta);
        $this->db->delete($this->table);
    }

}

/* End of file M_Peserta_pameran.php */
/* Location: ./application/models/M_Peserta_pameran.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-10-04 08:30:36 */
/* http://harviacode.com */