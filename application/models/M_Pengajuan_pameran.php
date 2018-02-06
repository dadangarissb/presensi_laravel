<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_Pengajuan_pameran extends CI_Model
{

    public $table = 'pengajuan_pameran';
    public $id = 'pengajuan_pameran.id_pameran';
    public $id_pameran = 'id_pameran';
    public $id_umkm = 'pengajuan_pameran.id_umkm';
    public $id_pengajuan = 'id_pengajuan';
    public $status = 'pengajuan_pameran.status';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }


    function get_riwayat_pengajuan()
    {
        $this->db->order_by($this->id_pengajuan, $this->order);
        //$this->db->where('pengajuan_pameran.status', $this->order);
        $this->db->join('data_umkm', 'pengajuan_pameran.id_umkm= data_umkm.id_umkm');
        $this->db->join('pameran', 'pengajuan_pameran.id_pameran= pameran.id_pameran');
        //$this->db->like('status', 'Ditolak');
        return $this->db->get($this->table)->result();
    }

     function get_peserta($id)
    {

        $this->db->where($this->id_umkm, $id);
        //$this->db->like('status', 'Diterima');
        //$this->db->join('data_umkm', 'pengajuan_pameran.id_umkm= data_umkm.id_umkm');
        $this->db->join('pameran', 'pengajuan_pameran.id_pameran= pameran.id_pameran');
        $query=$this->db->get($this->table);

        if ($query->num_rows()>0) {
            return $query->result();
        }
    }

    function cek_pengajuan($data){       
        //return $this->db->get_where($table,$where);
        $this->db->where($this->id_pameran, $data['id_pameran']);
        $this->db->where($this->id_umkm, $data['id_umkm']);
        $query=$this->db->get($this->table);

         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_semua($id_pameran)
    {
        $this->db->where($this->id_pameran, $id_pameran);
        $this->db->join('data_umkm', 'pengajuan_pameran.id_umkm= data_umkm.id_umkm');
        //$this->db->join('pameran', 'pengajuan_pameran.id_pameran= pameran.id_pameran');
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        //return $this->db->get($this->table)->result();

        //$this->db->order_by($this->id, $this->order);
        $this->db->join('data_umkm', 'pengajuan_pameran.id_umkm= data_umkm.id_umkm');
        //$this->db->join('pameran', 'pengajuan_pameran.id_pengajuan= pameran.id_pameran');
        return $this->db->get($this->table)->result();


    }

    function get_by_id_pengajuan($id_pengajuan)
    {
        $this->db->where($this->id_pengajuan, $id_pengajuan);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_pengajuan', $q);
	$this->db->or_like('id_umkm', $q);
	$this->db->or_like('tgl_pengajuan', $q);
	$this->db->or_like('id_pameran', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_pengajuan', $q);
	$this->db->or_like('id_umkm', $q);
	$this->db->or_like('tgl_pengajuan', $q);
	$this->db->or_like('id_pameran', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
  function update($id_pengajuan, $data)
    {
        $this->db->where($this->id_pengajuan, $id_pengajuan);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id_pengajuan)
    {
        $this->db->where($this->id_pengajuan, $id_pengajuan);
        $this->db->delete($this->table);
    }

}

/* End of file M_Pengajuan_pameran.php */
/* Location: ./application/models/M_Pengajuan_pameran.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-10-02 20:41:10 */
/* http://harviacode.com */