<?php
  if(isset($_POST['login'])){
    session_start();
    include("database/koneksi.php");
    $username	= $_POST['username'];
    $password	= md5($_POST['password']);
    $level		= $_POST['level'];
    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0){
      echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
    }else{
      $row = mysqli_fetch_assoc($query);
      if($row['level'] == 1 && $level == 1){
        $_SESSION['username']=$username;
        $_SESSION['level']='admin';
        echo $_SESSION['username'];
        header("Location: halaman.php");
      }else if($row['level'] == 2 && $level == 2){
        $_SESSION['username']=$username;
        $_SESSION['level']='dosen';
        header("Location: halaman.php");
      }else if($row['level'] == 3 && $level == 3){
        $_SESSION['username']=$username;
        $_SESSION['level']='mahasiswa';
        header("Location: halaman.php");
      }else{
        echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
        header("Location: login.php");
      }
    }
  }
  ?>
