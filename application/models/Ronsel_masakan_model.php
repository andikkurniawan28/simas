<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ronsel_masakan_model extends CI_Model 
{
    public function tampilkan_data_tabel()
    {
        return $this->db->query("select * from `ronsel_masakan` order by `id` desc limit 0,1000");
    }

    public function tentukan_kode_masakan($jenis)
    {
        switch($jenis)
        {
            case 'R1'       : return 48; break;
            case 'R1'       : return 82; break;
            case 'R3'       : return 83; break;
            case 'A Halus'  : return 53; break;
            case 'A'        : return 65; break;
            case 'C'        : return 56; break;
            case 'D'        : return 57; break;
        }
    }

    public function cek_kode_terakhir($kode)
    {
        $range_atas     = ($kode + 1) * 10000;
        $range_bawah    = ($kode) * 10000;
        $jumlah          = $this->db->query("select `kode` from `ronsel_masakan` where `kode` between $range_bawah and $range_atas")->num_rows();

        if($jumlah == 0)
            return $range_bawah + 1;
        else
        {
            $query = $this->db->query("select max(`kode`) as `kode` from `ronsel_masakan` where `kode` between $range_bawah and $range_atas")->result();
            foreach($query as $query)
            {
                return $query->kode + 1;
            }
        }
    }

    public function insert_ronsel($id_sampel, $jenis, $pan, $palung, $volume, $masak, $turun, $tukang)
    {
        $this->db->query(
            "insert into `ronsel_masakan`
            (`kode`, `masakan`, `pan`, `palung`, `hl`, `j_masuk`, `j_turun`, `opr`) values 
            ('$id_sampel', '$jenis', '$pan', '$palung', '$volume', '$masak', '$turun', '$tukang')");
    }

    public function delete_ronsel($id)
    {
        $this->db->query("delete from `ronsel_masakan` where `id` = $id");
    }

    public function cetak_data_ronsel($id)
    {
        return $this->db->query("select * from `ronsel_masakan` where `id` = $id")->result();
    }
}
