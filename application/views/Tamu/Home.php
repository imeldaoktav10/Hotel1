<!DOCTYPE html>
<html>
<head>
	<title>Tamu</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<style type="text/css">
		.jumbotron{
			background-image: url('https://i.ibb.co/z86FkGV/image.jpg'); 
			height: 35vw;
			margin-right: 50px;
			margin-left: 50px;
			background-size: cover;
		}
		h1{
			margin-left: 30px;
		}

		ul{

		margin-right: 30px;
		}

	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <h1>Hotel Hebat</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end"  id="navbarNav">
    	
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Tamu/Kamar'); ?>">Fasilitas Hotel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Tamu/Kamar'); ?>">Reservasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Auth/login'); ?>">Tipe Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Auth/login'); ?>">Login</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
  	<img src="">
  </div>
</div>

<div class="container">
	<form class="d-flex justify-content-around ">
  <div class="mb-3 mt-3">
    <label for="exampleInputEmail1" class="form-label">Tanggal Cek In</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 mt-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Cek Out</label>
    <input type="date" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 mt-3">
    <label for="exampleInputPassword1" class="form-label">Jumlah Kamar</label>
    <input type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mt-5">
  	 <button type="submit" class="btn btn-primary">Pesan</button>
  </div>
</form>

</div>

<div class="container text-center mt-5">
	<h1>TENTANG KAMI</h1>
	<P>Lepaskan diri Anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah, danau, dan sawah menghijau. Nikmati
            sore yang hangot dengan berenang di kolam renang dengan pemandangan matahari terbenam yang memukau; Kid's Club yang
            luas - menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convention Center
            kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Bandung, mampu mengakomodasi hingga 3.000
            delegasi. Manfaatkan ruang penyelenggaraan konvensi MI.CE ataupun mewujudkan acara pernikahan adat yang mewah</P>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>