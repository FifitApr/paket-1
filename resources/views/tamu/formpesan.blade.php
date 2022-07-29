<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <img src="{{ asset('foto/hotel.jpg') }}" class="img-fluid img-thumbnail mt-5" style="width: 100%; height: 500px;" alt="...">
  <div class="container">
      <form class=" row justify-content-center mt-3">
        <div class="col-md-3">
          <label for="inputCity" class="form-label">Tanggal Check In</label>
          <input type="date" class="form-control" id="inputCity">
        </div>
        <div class="col-md-3">
          <label for="inputCity" class="form-label">Tanggal Check Out</label>
          <input type="date" class="form-control" id="inputCity">
        </div>
        <div class="col-md-2">
          <label for="inputCity" class="form-label">Jumlah Kamar</label>
          <input type="number" class="form-control" id="inputCity">
        </div>
      </form>
      <div class="d-grid gap-2 col-3 mx-auto mt-5 mb-5">
        <a href="{{ url('tamu') }}" class="btn btn-outline-dark btn-sm">Pesan Sekarang</a>
      </div>
      
    <div class="container">
      <h2 class="mb-5">Form Pemesanan</h2>
        <form action="">
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Pemesan</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="inputPassword">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
              <input type="email" class="form-control" id="Email"  placeholder="name@example.com"  >
            </div>
          </div>

          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">No. Telp</label>
            <div class="col-sm-6">
                <input type="number" name="notelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Tamu</label>
            <div class="col-sm-6">
                <input type="text" name="notelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Tipe Kamar</label>
            <div class="col-sm-6">
              <select class="form-select" aria-label="Default select example">
                <option selected>Pilih tipe kamar</option>
                <option value="superior">Tipe Superior</option>
                <option value="deluxe">Tipe Deluxe</option>
                <option value="presidential">Tipe Presidential Suite</option>
              </select>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Check In</label>
            <div class="col-sm-6">
                <input type="date" name="notelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Check Out</label>
            <div class="col-sm-6">
                <input type="date" name="notelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah Kamar</label>
            <div class="col-sm-6">
                <input type="number" name="notelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>
          
        </form>

        <div class="d-grid gap-4 col-4 mx-auto mb-5">  
          <a href="{{ url('home') }}" class="btn btn-outline-dark btn-sm">Konfirmasi Pesanan</a>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>