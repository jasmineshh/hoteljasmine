<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
		
	<nav class="navbar container navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <div class="d-flex">
        <a href="<?php echo base_url('/Auth/logout'); ?>" class="btn btn-outline-primary">logout</a>
      </div>
    </div>
  </div>
</nav>

    <div class="container">
            <?php foreach ($data as $key => $kamar): ?>
            <div class="card mb-3">
               <img src="<?=$kamar['Info_kamar']->img_room?>" class="card-img-top" alt="...">
                  <div class="card-body">
                <h5 class="card-title"><?=$kamar['Info_kamar']->Nama_room?> - Rp.<?=$kamar['Info_kamar']->harga?></h5>
              <p class="card-text">
                Fasilitas:
              </p>
              <p>
                <ul>
                <?php if(!empty($kamar['F_kamar'])): ?>
                <?php foreach ($kamar['F_kamar'] as $key2 => $F):?>
                <li><?=$F->nama_fasilitas?></li>
                <?php endforeach; ?>
                <?php endif; ?>
                </ul>
              </p>
             <p>
              <a href="<?= base_url('/tamu/detailtipe').'?id='.$kamar['Info_kamar']->Nama_room?>" class="btn btn-primary">Lihat Detail</a>
           </p>
          </div>
         </div>
         <?php endforeach ?>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
