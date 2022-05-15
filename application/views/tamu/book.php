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
    <h1>BOOKING PAGE</h1>

    <div class="container">
        <form method="POST" action="<?=base_url('/tamu/prosBook')?>" >
          <div class="row">
            <div class="col-md-12"></div>
            <div class="row">
               <div class="col-md-4">
                <p class="mb-1"> Tgl cekin</p>
            <input class="form-control" type="date" name="tgl_cekin" placeholder="tgl_cekin"></div>
                <div class="col-md-4">
                  <p class="mb-1"> Tgl cekout</p>
            <input class="form-control" type="date" name="tgl_cekout" placeholder= "tgl_cekout"> </div> 
                 <div class="col-md-4"> <p class="mb-1"> Jumlah kamar </p>
            <input class="form-control" type="number" name="jml_kamar" placeholder= "jml_kamar"> </div>
            </div>
            <div class="col-md-12"> <hr>    <p class="mt-5">Nama pemesan</p>
            <input class="form-control" type="text" name="nama_pemesan" placeholder="nama_pemesan" value="<?=$data['user']->Nama;?>" readonly>
                  <p class="mt-3"> Email </p>
            <input class="form-control" type="email" name="email" placeholder= "email">      
             <    <p class="mt-3"> No hp </p>
            <input class="form-control" type="number" name="no_hp" placeholder= "no_hp" value="<?=$data['user']->nowa;?>">      
                  <p class="mt-3"> Nama tamu </p>
            <input class="form-control" type="text" name="nama_tamu" placeholder= "nama_tamu">   
        
                        <p class="mt-3"> Pilih Kamar </p>
                         <select class="form-select"  name="id_kamar">    
              <option value="<?= $data['kamar'][0]['Info_kamar']->id?>"><?= $data['kamar'][0]['Info_kamar']->Nama_room?></option>
              <?php foreach($data['alltipe'] as $key => $item):?>
              <option value="<?= $item ->id?>"><?= $item ->Nama_room?></option>
               <?php endforeach;?>
          </select>

                  <p class="mt-3"> PayBay </p>
          <select class="form-select"  name="PayBay"> 
              <option>Bayar Ditempat</option>
              <option>Transfer bank</option>
          </select>
        </div>
          </div>
        <button type="submit">Kirim</button>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>