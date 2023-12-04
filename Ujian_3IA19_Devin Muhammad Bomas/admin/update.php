<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from siswa where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$npm=$row['npm'];
$nama=$row['nama'];
$kelas=$row['kelas'];

if(isset($_POST['submit'])){
    $npm=$_POST['npm'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];

    $sql="update siswa set id=$id, npm=$npm, nama='$nama', kelas='$kelas' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data Berhasil Dimasukan";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style='background-image: url("R.jpeg")' >
<header>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="display.php">
                    <img src="logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Gunadarma University
                </a>
            </div>
        </nav>
    </header>

    <marquee style="color:blue"><font size="5">Welcome <?php echo $nama;?>!</font></marquee>
    
  <div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-7 col-md-5 col-lg-3 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-4 text-center">

            <div class="mb-md-1 mt-md-1 pb-1">
            
            <h2 class="fw-bold mb-2 text-uppercase">Hello User</h2>
              <p class="text-white-50 mb-5">Silahkan Update Data Dibawah</p>

            <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>NPM</label>
    <input type="number" class="form-control" placeholder="Masukkan NPM" name="npm" value=<?php echo $npm;?>> 
</div>
<div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" value=<?php echo $nama;?>>
</div>
<div class="form-group">
    <label>Kelas</label>
    <input type="text" class="form-control" placeholder="Masukkan Kelas" name="kelas" value=<?php echo $kelas;?>>
</div>
   
  <button type="submit" class="btn btn-primary my-5" name="submit">Update Data</button>
</form>
    </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </body>
</html>