<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanahan_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function _get_details_one($id){
    $this->db->select('mohon.*, p.no_nik, p.nama, p.alamat, p.agama, p.tempat_lahir, 
    p.tanggal_lahir, p.pekerjaan, p.status, p.jenis_kelamin, dsn.nama_dusun, d.nama_desa, d.alamat_desa, u.fullname, kec.nama_kecamatan, kab.nama_kabupaten');
    $this->db->from('permohonan_pertanahan mohon, master_data_penduduk_ p, dusun dsn, desa d, users u, kecamatan kec, kabupaten kab');
    $this->db->where('mohon.kependudukan_id=p.id');
    $this->db->where('mohon.dusun_id=dsn.id');
    $this->db->where('dsn.desa_id=d.id');
    $this->db->where('d.uid=u.id');
    $this->db->where('d.kecamatan_id=kec.id');
    $this->db->where('kec.kabupaten_id=kab.id');
    $this->db->where('mohon.time', $id);
    return $this->db->get();
  }

  public function _get_pernyataan_one($id){
    $this->db->select('per.*, mohon.type_yang_disetujui, mohon.lokasi, mohon.utara, mohon.selatan, mohon.timur, mohon.barat, mohon.status_tanah, mohon.peruntukan_tanah, mohon.luas, mohon.tahun_kelola, p.no_nik, p.nama, p.alamat, p.agama, p.tempat_lahir, 
    p.tanggal_lahir, p.pekerjaan, p.status, p.jenis_kelamin, dsn.nama_dusun, d.nama_desa, d.alamat_desa, u.fullname, kec.nama_kecamatan, kab.nama_kabupaten');
    $this->db->from('pernyataan_pertanahan per, permohonan_pertanahan mohon, master_data_penduduk_ p, dusun dsn, desa d, users u, kecamatan kec, kabupaten kab');
    $this->db->where('mohon.id=per.permohonan_id');
    $this->db->where('mohon.kependudukan_id=p.id');
    $this->db->where('mohon.dusun_id=dsn.id');
    $this->db->where('dsn.desa_id=d.id');
    $this->db->where('d.uid=u.id');
    $this->db->where('d.kecamatan_id=kec.id');
    $this->db->where('kec.kabupaten_id=kab.id');
    $this->db->where('per.id', $id);
    return $this->db->get();
  }

  public function _get_permohonan(){
    $this->db->select('mohon.*, p.no_nik, p.nama, p.alamat, p.no_kk');
    $this->db->from('permohonan_pertanahan mohon, master_data_penduduk_ p');
    $this->db->where('mohon.kependudukan_id=p.id');
    return $this->db->get();
  }

  public function _post_permohonan($insert){
    return $this->db->insert('permohonan_pertanahan', $insert);
  }

  public function _post_pernyataan($insert){
    return $this->db->insert('pernyataan_pertanahan', $insert);
  }

  public function _get_pernyataan($id){
    return $this->db->get_where('pernyataan_pertanahan', array('permohonan_id'=>$id));
  }

  public function _setujui_permohonan($id, $setujui){
    $this->db->where('id', $id);
    return $this->db->update('permohonan_pertanahan', $setujui);
  }

  public function _post_berita_acara($insert){
    return $this->db->insert('berita_acara_pertanahan', $insert);
  }

  public function get_bap_list(){
    $this->db->select('bap.* ,desa.nama_desa, mohon.type_yang_disetujui, mohon.lokasi, mohon.luas, p.no_nik, p.nama, p.alamat, p.no_kk');
    $this->db->from('permohonan_pertanahan mohon, master_data_penduduk_ p, berita_acara_pertanahan bap, desa desa');
    $this->db->where('mohon.kependudukan_id=p.id');
    $this->db->where('bap.permohonan_id=mohon.id');
    return $this->db->get();
  }


  public function _get_bap_details($id){
    $query = "SELECT bap.id as id,
      kabupaten.nama_kabupaten as nama_kabupaten, 
      kecamatan.nama_kecamatan as nama_kecamatan, desa.nama_desa as nama_desa,
      dusun.nama_dusun as nama_dusun, penduduk.no_nik as no_nik, penduduk.nama as nama,
      penduduk.alamat as alamat, mohon.lokasi as lokasi, 
      mohon.luas as luas,
      mohon.peruntukan_tanah as peruntukan_tanah,
      mohon.type_yang_disetujui as type_yang_disetujui,
      mohon.status_tanah as status_tanah,
      mohon.lokasi as lokasi,
      mohon.tahun_kelola as tahun_kelola,
      mohon.utara as batas_utara, mohon.selatan as batas_selatan,
      mohon.barat as batas_barat, mohon.timur as batas_timur,
      mohon.time as time_permohonan,
      mohon.scan_link as lampiran_permohonan,
      mohon.pbb as scan_bukti_pbb,
      mohon.ktp as ktp,
      mohon.qr_link as permohonan_qr,
      pernyataan.saksi1_nama as saksi1_nama,
      pernyataan.saksi1_alamat as saksi1_alamat,
      pernyataan.saksi1_pekerjaan as saksi1_pekerjaan,
      pernyataan.saksi2_nama as saksi2_nama,
      pernyataan.saksi2_alamat as saksi2_alamat,
      pernyataan.saksi2_pekerjaan as saksi2_pekerjaan,
      pernyataan.saksi3_nama as saksi3_nama,
      pernyataan.saksi3_alamat as saksi3_alamat,
      pernyataan.saksi3_pekerjaan as saksi3_pekerjaan,
      pernyataan.saksi4_nama as saksi4_nama,
      pernyataan.saksi4_alamat as saksi4_alamat,
      pernyataan.saksi4_pekerjaan as saksi4_pekerjaan,
      pernyataan.time as time_pernyataan,
      pernyataan.qr_link as pernyataan_qr,
      bap.qr_link as bap_qr,
      bap.pemeriksa_1 as ketua_pemeriksa_id,
      bap.pemeriksa_2 as pemeriksa_1_id,
      bap.pemeriksa_3 as pemeriksa_2_id,
      bap.pemeriksa_4 as pemeriksa_3_id,
      bap.pemeriksa_5 as pemeriksa_4_id
     FROM 
      berita_acara_pertanahan as bap, permohonan_pertanahan as mohon,
      pernyataan_pertanahan as pernyataan, master_data_penduduk_ as penduduk,
      dusun as dusun, desa as desa, kecamatan as kecamatan, kabupaten as kabupaten
     WHERE 
      mohon.kependudukan_id = penduduk.id AND 
      bap.permohonan_id = mohon.id AND bap.pernyataan_id = pernyataan.id AND 
      mohon.dusun_id = dusun.id AND
      dusun.desa_id = desa.id AND
      desa.kecamatan_id = kecamatan.id AND 
      kecamatan.kabupaten_id = kabupaten.id AND 
      bap.time_input=$id";
    return $this->db->query($query);
  }

  public function _get_data_patok($id){
    return $this->db->get_where('data_koordinat', array('id_data_link'=>$id));
  }

  public function _get_data_link($id){
    return $this->db->get_where('data_link', array('tanah_id'=>$id));
  }

}

/*    Pertanahan Model
===========================================


==========================================
*/
