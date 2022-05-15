	<div class="container">
		<div class="card mb-03">
			<img scr="https://i.ibb.co/z86FkGV/image.jpg" class="card-img-top"alt="..." style="max-height: 50vh;">
			<div class="card-body">
				<h5 class="card-title">Cari Data</h5>
				<p class="card-text">
				Masukan Code Booking :
					<form action="<?=base_url('/Resepsionis/Datatrack')?>" method="get">
						<input type="text" name="ref" class="form-control">
						<button type="submit" class="btn btn-primary col-md-12 mt-2">Cari</button>
					</form>
				</p>
			</div>
		</div>
	