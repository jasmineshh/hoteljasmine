 <div class="container">
 	<div class="card mb-3">
 		<img src="https://www.e-architect.com/wp-content/uploads/2016/08/fairmont-pacific-rim-hotel-j190816-f2.jpg" class="card-img-top" alt="..." style="max-height: 50vh;">
 		<div class="card-body">
 			<h5 class="card-title">Cari Data</h5>
 			<p class="card-text">
 			Masukan Code Booking :
 			<form  action="<?=base_url('/Resp/datatrack')?>" method="get">
 				<input type="text" name="ref" class="form-control">
 				<button type="submit" class="btn btn-primary col-md-12 mt-2">Cari</button>
 			</form>
 			</p>
 		</div>
 	</div>
 </div>