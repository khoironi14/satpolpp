<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model
{
    var $table='berita';
    var $column_order=array(null,'judul','isi','tgl_terbit','kategori_berita','penulis');
    var $column_search=array('judul','kategori_berita');
    var $order=array('id'=>'desc');
    function kategori_berita(){

        return $this->db->get('kategori_berita');
    }
    function add_kategori($data){
            return $this->db->insert('kategori_berita',$data);

    }
    function tampil_edit_kategori($id){

            $this->db->where('id',$id);
            return $this->db->get('kategori_berita');
    }
    function save_edit_kategori($idku,$data){
             $this->db->where('id',$id);
            return $this->db->update('kategori_berita',$data);

    }
    function kategori(){
        
        return $this->db->get('kategori_berita');
    }
    function save_berita($data){
        return $this->db->insert('berita',$data);

    }
    function hapus_berita($id){
        $this->db->where('id',$id);
        return $this->db->delete('berita');

    }
    function save_editberita($id,$data){

            $this->db->where('id',$id);
            return $this->db->update('berita',$data);

    }
    function save_info($data){
            return $this->db->insert('info_kerja',$data);

    }
    function tampil_edit_info($id){
            $this->db->where('id',$id);
            return $this->db->get('info_kerja');

    }
    function save_edit_info($id,$data){
             $this->db->where('id',$id);
            return $this->db->update('info_kerja',$data);

    }
    function view_kerja(){

        return $this->db->get('info_kerja');
    }
    function save_pengumuman($data){
        return $this->db->insert('pengumuman',$data);


    }
    function golongan_jabatan(){
        $this->db->where('id_parent',0);

        return $this->db->get('jabatan');
    }
    function jenis_jabatan($id){
 $this->db->where('id_parent',$id);

        return $this->db->get('jabatan');

    }
    function penempatan(){
return $this->db->get('kategori_pekerjaa');

    }
    function provinsi(){

        return $this->db->get('provinces');
    }
    function kabupaten($idprov){
        $this->db->where('province_id',$idprov);
        return $this->db->get('regencies'); 
    }
    function kecamatan($idkab){
        $this->db->where('regency_id',$idkab);
        return $this->db->get('districts');

    }
    private function _get_datatables_query()
    {
        $this->db->join('kategori_berita','berita.id_kategori=kategori_berita.id');
         $this->db->select('berita.id,judul,isi,tgl_terbit,penulis,foto,view,kategori');
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    function tampil_edit($id){
            $this->db->where('id',$id);

             return   $this->db->get('berita');
    }
    function view_ipk(){

        $this->db->join('provinces','registrasi.provinsi=provinces.id');
          $this->db->join('regencies','registrasi.kabupaten=regencies.id');
        return $this->db->get('registrasi');
    }
    function cetak_kartu($id){

        $this->db->where('no_nik',$id);
       $this->db->join('provinces','registrasi.provinsi=provinces.id');
          $this->db->join('regencies','registrasi.kabupaten=regencies.id');
          $this->db->select('registrasi.id,no_nik,nama_lengkap,alamat,jenis_kelamin,agama,status_perkawinan,kecamatan,kabupaten,regencies.name as kabupaten');
        return $this->db->get('registrasi');

    }
}


?>