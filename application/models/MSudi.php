<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSudi extends CI_Model
{
    function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function GetData($tabel)
    {
        $query= $this->db->get($tabel);
        return $query->result();
    }

    function GetDataWhere($tabel,$id,$nilai)
    {
        $this->db->where($id,$nilai);
        $query= $this->db->get($tabel);
        return $query;
    }

    function JoinJadwal()
    {
        $query= $this->db->query("SELECT
    tbl_jadwal.kd_jadwal,
    tbl_kelas.nama_kelas,
    tbl_mapel.nama_mapel,
    tbl_guru.nama
FROM
    tbl_jadwal, tbl_kelas, tbl_mapel, tbl_guru
WHERE
    tbl_jadwal.kd_kelas=tbl_kelas.kd_kelas AND
    tbl_jadwal.kd_mapel=tbl_mapel.kd_mapel AND
    tbl_jadwal.nip=tbl_guru.nip;");
        return $query->result();
    }

}