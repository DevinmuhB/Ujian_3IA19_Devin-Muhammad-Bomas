<?php
include 'connect.php';
?>

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
                <a class="navbar-brand" href="#">
                    <img src="logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Gunadarma University
                </a>
            </div>
        </nav>
    </header>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Tambahkan Data</a></button>
        <table class="table table-dark table-hover">
        <marquee style="color:blue"><font size="5">Welcome To Profile Mahasiswa!</font></marquee>
  <thead>
    <tr>
      <th scope="col" style="color: white">No</th>
      <th scope="col" style="color: white">NPM</th>
      <th scope="col" style="color: white">NAMA</th>
      <th scope="col" style="color: white">KELAS</th>
      <th scope="col" style="color: white"></th>
      
    </tr>
  </thead>
  <tbody>

  <?php

$sql="select * from siswa";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $npm=$row['npm'];
        $nama=$row['nama'];
        $kelas=$row['kelas'];
        echo '<tr>
        <th scope="row" style="color: white">'.$id.'</th>
        <td style="color: white">'.$npm.'</td>
        <td style="color: white">'.$nama.'</td>
        <td style="color: white">'.$kelas.'</td>
        <td style="color: white">
        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>
      </tr>';
    }
}

?>
  </tbody>
</table>
    </div>
</body>
<footer>
        <div class="text-center p-3" style="background:#e3f2fd;">
        Copyright &copy; 2023
        </div>
    </footer>
</html>