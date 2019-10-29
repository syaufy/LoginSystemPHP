<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styleadd.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Syanex |Pengelolaan Akun.</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top text-center" id="navbar">
      <div class="container">
    <a class="navbar-brand" href="home.html">Syaufy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#daftar">Daftar </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#login">Login<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#data">Lihat Data</a>
        </li>
        
      </ul>
    </div>
    </div>
  </nav>


  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4" data-aos="fade-up" data-aos-duration="1500">
          Hai, Selamat Datang!<br />
          Di Website Pengelola
         <br>Akun Kamu!
        </h1>
      </div>
    </div>

  <div class="row about">
    <div class="col-6" data-aos="fade-right" data-aos-duration="1200">
    <img src="about2.png" class="img1 img-fluid my-auto">
    </div>
    <div class="col-6 text1 text-center mx-auto my-auto"  data-aos="fade-left" data-aos-duration="1200">
      <h3>Kenapa Harus Ada Data?</h3>
      <p>Karena Dengan Data Kamu Bisa Mengetahui Siapa Saja
        <br>Yang Mempunyai Akun Mu lho! Keren kan?
      <br>Dengan begini Kamu Sudah Masuk Komunitas Kami!</p>
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="daftar text-center"  id="daftar"  data-aos="fade-up" data-aos-duration="1200">
    <p>Daftar Account!</p>
  </div>
  <div class="row formdaftar" data-aos="flip-up" data-aos-duration="1200">
    <div class="col-8 mx-auto" >
      <form action="add.php"  class="form" method="post" name="formdaftar">
        <p class="text-center">Daftar Yuk!</p>
        <div class="form-group">
      <label for="username">Id</label>
      <input type="number" name="id" class="form-control" id="username" placeholder="Masukan Username Kamu ">
      <small id="emailHelp" class="form-text text-muted">Masukan Id Dengan Angka.</small>
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" class="form-control" id="username" placeholder="Masukan Username Kamu ">
      <small id="emailHelp" class="form-text text-muted">Masukan Username anda dengan tanpa space ya.</small>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password Kamu">
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email Kamu">
    </div>
    <button type="submit" name="kirim" class="btn btn-lg btn-block mx-auto" onclick="Swal.fire(
  'Good job!',
  'Kamu Terdaftar',
  'success'
)" >Submit</button>
    <button type="reset" class="btn btn-lg btn-block mx-auto">Reset</button>
  </form>
    </div>
  </div>

<br>
<br>
<br>

<div class="daftar text-center"  id="login"  data-aos="fade-up" data-aos-duration="1200">
    <p>Login Account!</p>
  </div>

  <div class="row formdaftar" >
    <div class="col-8 mx-auto"  data-aos="flip-down" data-aos-duration="1200">
      <form action="login.php" class="form" method="post" name="formdaftar">
        <p class="text-center">Login Yuk!</p>
    <div class="form-group" >
      <label for="username">Username</label>
      <input type="text" name="username" class="form-control" id="username" placeholder="Masukan Username Kamu ">
      <small id="emailHelp" class="form-text text-muted">Masukan Username anda dengan tanpa space ya.</small>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" id="passee" placeholder="Masukan Password Kamu">
      <br>
      <label for="show">Lihat Password</label>
      <input type="checkbox" onclick="fs()" name="show">
    </div>
    <!-- <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email Kamu">
    </div> -->
    <button type="submit" name="kirim" class="btn btn-lg btn-block mx-auto" 
  onclick="Swal.fire(
  'Good job!',
  'Kamu Login',
  'success'
)" >Submit</button>
    <button type="reset" class="btn btn-lg btn-block mx-auto">Reset</button>
  </form>
    </div>
  </div>


  
  <div class="daftar text-center"  id="data"  data-aos="fade-up" data-aos-duration="1200">
    <p>Data Account!</p>
  </div>

  <div class="row formdaftar" data-aos="flip-down" data-aos-duration="1200">
    <div class="col-8 mx-auto">
      <form action="index.php" class="form" method="post" name="formdaftar">
        <p class="text-center">Nih List Nya!!</p>
	<br/>
	<br/>
	<table border="3" class="mx-auto table table-dark">
		<tr>
			<th scope="col">NO</th>
			<th scope="col">Id</th>
			<th scope="col">Username</th>
			<th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
    
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($mysqli,"select * from userlogin");
		while($row = mysqli_fetch_array($data)){
			?>
			<tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['id']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['password']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td>
					<a   class="btn" href="edit.php?id=<?php echo $row['id']; ?>">EDIT</a>
					<a class="btn delete-link" href="delete.php?id=<?php echo $row['id'];?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
  </form>
    </div>
  </div>

<br>
<br>
<br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.3/dist/sweetalert2.all.min.js"></script>
    <script>
        jQuery(document).ready(function($){
            $('.delete-link').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: 'Alert',
                        text: 'Hapus Data?',
                        html: true,
                        confirmButtonColor: '#d9534f',
                        showCancelButton: true,
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
	 
    </script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>
</html>


