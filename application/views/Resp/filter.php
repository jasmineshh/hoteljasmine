<?php $i=0;foreach ($data[0] as $key => $value){
	if ($i==0) {
		$primary=$key;
	}
	$i++;
}?>
<div class="text-left card">
	<form action="" method="POST">
		<h5>Cari Berdasarkan Nama Tamu</h5>
		<div class="row mb-4">
			<div class="col-15">
				<input type="text" name="nama_tamu" calss="form-control col-9" placeholder="Nama Tamu">
			</div>
			<div class="col-3">
				<button type="submit" class="btn btn-primary col-3">
				Cari</button>
			</div>
		</div>
	</form>
	<form action="" method="POST">
		<h5>Cari Berdasarkan Tanggal Check in</h5>
		<div class="row mb-4">
			<div class="col-9">
				<input type="date" name="tgl_cekin" class="form-control col-9" placeholder="Tanggal Check in">
			</div>
			<div class="col-3">
				<button type="submit" class="btn btn-primary col-3">
				Cari</button>
			</div>
		</div>
	</form>
	<form action="" method="POST">
		<h5>Cari Berdasarkan Email</h5>
		<div class="row mb-4">
			<div class="col-9">
				<input type="text" name="email" class="form-control col-9" placeholder="Email">
			</div>
			<div class="col-3">
				<button type="submit" class="btn btn-primary col-3">
				Cari</button>
			</div>
		</div>
	</form>
</div>
<div class="card table-responsive">
	<table class="table ">
		<thead>
		<tr>
		<?php foreach ($data[0] as $key => $value): ?>
			<th scope="col"><?=$key?></th>
		<?php endforeach ?>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $key => $value): ?>
			<?php $i=0;?>
			<tr>
				<?php foreach ($value as $key2 => $value2): ?>
					<th scope="col">
					<?=$value2?>
					</th>
				<?php endforeach ?>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
</div>
