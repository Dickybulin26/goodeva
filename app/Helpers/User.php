<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class User {
    public static function tanggal_indo($tanggal, $cetak_hari = false) {

        $hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
            );

        if ($tanggal != "") {
            $bulan = array (
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );

        $split 	  = explode('-', $tanggal);
	    $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];

        if ($cetak_hari) {
            $num = date('N', strtotime($tanggal));
            return $hari[$num] . ', ' . $tgl_indo;
        }
        return $tgl_indo;
            // $pecahkan = explode('-', $tanggal);

            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun

            // return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
        }else{
            return "-";
        }


    }

    public static function GetUri()
     {
          $seg = request()->segment(2);

          return $seg;
     }

     public static function cekJudul($juduls)
     {
        $judul = $juduls;
        $hasil_kata = strlen($judul);
        if ($hasil_kata >= 34) {
               $substing = substr(strip_tags($judul),0,33);
               //echo substr(strip_tags($judul),0,70);
               //echo "...";
            //    $judul_berita_potong = preg_replace('/\W\w+\s*(\W*)$/', '$1', $substing);
               $jdls = $substing;

        }else {
             $jdls = $judul;
        }

          return $juduls;
     }

     public static function cekDeskripsi($desc)
     {
        $descs = $desc;
        $hasil_kata = strlen($descs);
        if ($hasil_kata >= 36) {
               $substing = substr(strip_tags($descs),0,35);
               //echo substr(strip_tags($judul),0,70);
               //echo "...";
            //    $judul_berita_potong = preg_replace('/\W\w+\s*(\W*)$/', '$1', $substing);
               $jdls = $substing.'..';

        }else {
             $jdls = $desc;
        }

          return $jdls;
     }
}
