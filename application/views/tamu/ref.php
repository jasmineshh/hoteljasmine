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
    <h1><?=$_SESSION['user']->Nama?></h1>

              <div class="container">
                    <div class="card mb-3">
                      <img src="" class="card-img-top" alt="...">
                   <div class="card-body">
              <h5 class="card-title">List Bookingmu</h5>
                  <p class="card-text">
               Kode Booking Anda:
    </p>
   <p>
              <div class="row">
                <?php  foreach($data['book'] as $key => $item):?>
            <div class="col-md-4 mb-2">
                      <div class="card">
                          <img src="img" class="card-img-top" alt="...">

           <div class="card-body">
                    <h5 class="card-title"><?=$item->Nama_room?> x <?=$item->jml_kamar?> Kamar </h5>
                    <p>Nama Tamu = <?=$item->nama_tamu?></p>
                    <p>Tgl cekin = <?=$item->tgl_cekin?></p>
                    <p>Tgl cekout = <?=$item->tgl_cekout?></p>
                    <p>Pay by = <?=$item->PayBay?></p>
                    <p>Pembayaran = 
                    <?php if($item->PayEND!=0)
                    {$pesan='belum dibayar';}
                    else{$pesan='sudah dibayar';}
                    echo $pesan;
                    ?> 
                  </p>
                  <p>
                    <strong>
              CODEBooking = <?=$item->RefPB?>
              </strong>
                  </p>
                    </div>
                  </div>
                </div>
                <?php endforeach?>
                </div>
              </p>
             <p>
           </p>
          </div>
         </div>
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