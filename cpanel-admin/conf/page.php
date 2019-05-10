<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];

  switch ($page) {

  // Data Galeri
  case 'data_galeri':
    include 'pages/galeri/data_galeri.php';
    break;
  case 'tambah_galeri':
    include 'pages/galeri/tambah_galeri.php';
    break;

  // Data Pekerjaan
  case 'data_pekerjaan':
    include 'pages/pekerjaan/data_pekerjaan.php';
    break;
  case 'tambah_pekerjaan':
    include 'pages/pekerjaan/tambah_pekerjaan.php';
    break;
  case 'ubah_pekerjaan':
    include 'pages/pekerjaan/ubah_pekerjaan.php';
    break;

  // Data Pendidikan
  case 'data_pendidikan':
    include 'pages/pendidikan/data_pendidikan.php';
    break;
  case 'tambah_pendidikan':
    include 'pages/pendidikan/tambah_pendidikan.php';
    break;
  case 'ubah_pendidikan':
    include 'pages/pendidikan/ubah_pendidikan.php';
    break;

  // Pengaturan
  case 'pengaturan':
    include 'pages/pengaturan.php';
    break;

  // Biodata
  case 'biodata':
    include 'pages/biodata.php';
    break;

  // Keahlian
  case 'tambah_keahlian':
    include 'pages/keahlian/tambah_keahlian.php';
    break;

  }
}else{
    include "pages/beranda.php";
  }
?>