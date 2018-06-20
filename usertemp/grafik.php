<?php
  session_start();
  include '../config/config.php'; 
  require '../config/koneksi.php';
//$con = mysqli_connect("localhost", "root", "", "casheycash");
  function date_str($date)
  {
    $exp = explode('-',$date);
    if (count($exp)==3) {
      $date = $exp[2].'/'.$exp[1].'/'.$exp[0];
    }
    return $date;
  }
  $nominalfix = array(0,0,0,0,0,0,0,0,0,0,0,0);
  $tampil = array(0,0,0,0,0,0,0,0,0,0,0,0);
  //$email = $_SESSION["email"];
  //echo $email;
   $email = "sitialifah303@gmail.com";
   $hasil = mysqli_query($link,"SELECT * FROM pemasukan WHERE email='$email'");
   //die();
//   $cek = "SELECT * FROM pemasukan WHERE email='$email'";
  $index =0;
  //$hasil = mysqli_query($cek);
  // $jsonArray = array();
  while ($result = mysqli_fetch_array($hasil)) {
    $tanggal = $result['time'];
    $x[$index] = date('M/Y', strtotime($tanggal));
    $banding[$index] = date('M', strtotime($tanggal));
    $nominal[$index] = $result['nominal'];
    if ($index==0) {
      $tmp = date('Y', strtotime($tanggal));
      $tampil[0] = $tmp."-1";
      $tampil[1] = $tmp."-2";
      $tampil[2] = $tmp."-3";
      $tampil[3] = $tmp."-4";
      $tampil[4] = $tmp."-5";
      $tampil[5] = $tmp."-6";
      $tampil[6] = $tmp."-7";
      $tampil[7] = $tmp."-8";
      $tampil[8] = $tmp."-9";
      $tampil[9] = $tmp."-10";
      $tampil[10] = $tmp."-11";
      $tampil[11] = $tmp."-12";
    }
    if ($banding[$index]=='Jan') {
      $nominalfix[0]=$nominalfix[0]+$nominal[$index];
    }
    elseif ($banding[$index]=='Feb') {
    $nominalfix[1]=$nominalfix[1]+$nominal[$index];
    }
    elseif ($banding[$index]=='Mar') {
      $nominalfix[2]=$nominalfix[2]+$nominal[$index];
    }
    elseif ($banding[$index]=='Apr') {
      $nominalfix[3]=$nominalfix[3]+$nominal[$index];
    }
    elseif ($banding[$index]=='May') {
      $nominalfix[4]=$nominalfix[4]+$nominal[$index];
    }
    elseif ($banding[$index]=='Jun') {
      $nominalfix[5]=$nominalfix[5]+$nominal[$index];
    }
    elseif ($banding[$index]=='Jul') {
      $nominalfix[6]=$nominalfix[6]+$nominal[$index];
    }
    elseif ($banding[$index]=='Aug') {
      $nominalfix[7]=$nominalfix[7]+$nominal[$index];
    }
    elseif ($banding[$index]=='Sep') {
      $nominalfix[8]=$nominalfix[8]+$nominal[$index];
    }
    elseif ($banding[$index]=='Oct') {
      $nominalfix[9]=$nominalfix[9]+$nominal[$index];
    }
    elseif ($banding[$index]=='Nov') {
      $nominalfix[10]=$nominalfix[10]+$nominal[$index];
    }
    elseif ($banding[$index]=='Dec') {
      $nominalfix[11]=$nominalfix[11]+$nominal[$index];
    }
   
    $index++;
  }
  $pengeluaranfix = array(0,0,0,0,0,0,0,0,0,0,0,0);
  //$cek = "SELECT * FROM pengeluaran WHERE email='$email'";
  $hasil = mysqli_query($link,"SELECT * FROM pengeluaran WHERE email='$email'");
  $index_p =0;
  while ($result = mysqli_fetch_array($hasil)) {
    $tanggal = $result['time'];
    $x[$index_p] = date('M/Y', strtotime($tanggal));
    $pengeluaran[$index_p] = $result['nominal'];
    $banding[$index_p] = date('M', strtotime($tanggal));
    if ($banding[$index_p]=='Jan') {
      $pengeluaranfix[0]=$pengeluaranfix[0]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Feb') {
    $pengeluaranfix[1]=$pengeluaranfix[1]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Mar') {
      $pengeluaranfix[2]=$pengeluaranfix[2]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Apr') {
      $pengeluaranfix[3]=$pengeluaranfix[3]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='May') {
      $pengeluaranfix[4]=$pengeluaranfix[4]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Jun') {
      $pengeluaranfix[5]=$pengeluaranfix[5]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Jul') {
      $pengeluaranfix[6]=$pengeluaranfix[6]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Aug') {
      $pengeluaranfix[7]=$pengeluaranfix[7]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Sep') {
      $pengeluaranfix[8]=$pengeluaranfix[8]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Oct') {
      $pengeluaranfix[9]=$pengeluaranfix[9]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Nov') {
      $pengeluaranfix[10]=$pengeluaranfix[10]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Dec') {
      $pengeluaranfix[11]=$pengeluaranfix[11]+$pengeluaran[$index_p];
    }
  }
   ?>

  

  
