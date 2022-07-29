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
        <a href="{{ url('tampil') }}" class="btn btn-outline-dark btn-sm">Pesan Sekarang</a>
      </div>
      
      <h1 class="text-center"><b>Tentang Kami</b> </h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sunt nam cum quod impedit. Ipsum, libero quidem iste provident cumque eaque doloremque saepe laboriosam. Non qui beatae quibusdam libero voluptatem aperiam, vitae voluptatum excepturi! Ea error laboriosam accusantium. Itaque quis voluptates aut doloribus obcaecati soluta maiores quas non cumque aperiam optio, sapiente possimus autem necessitatibus culpa ab, eligendi placeat dicta consequuntur cupiditate! Maiores ex dolorum accusantium, quo obcaecati cum omnis ratione unde hic qui inventore doloribus quisquam tempore laudantium? Praesentium, placeat ab autem reprehenderit totam magni modi? Dolores voluptates, reiciendis, totam sed hic ex quod nihil iusto beatae debitis doloremque.</p>

      <h1 class="mt-4">Fasilitas</h1>
      <div class="text-center mt-4">
        <div class="row">
          <div class="col">
            <img src="foto/fasilitas-2.jpg" class="rounded img-thumbnail" style="width: 350px;" alt="...">
          </div>
          <div class="col">
            <img src="foto/fasilitas-1.jpg" class="rounded img-thumbnail" style="width: 350px;" alt="...">
          </div>
          <div class="col">
            <img src="foto/fasilitas-meeting.jpg" class="rounded img-thumbnail" style="width: 350px; " alt="...">
          </div>
        </div>
        <div class="row mt-3">
            <div class="col">
              <img src="foto/fasilitas.jpg" class="rounded img-thumbnail" style="width: 350px;" alt="...">
            </div>
            <div class="col">
              <img src="foto/fasilitas-3.jpg" class="rounded img-thumbnail" style="width: 350px;" alt="...">
            </div>
            <div class="col">
              <img src="foto/fasilitas-4.jpg" class="rounded img-thumbnail" style="width: 350px; height: 234px;" alt="...">
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3 mb-5">
        <a href="{{ url('kamar') }}" class="btn btn-outline-dark btn-sm">Cek fasilitas kamar hotel-></a>
      </div>
        
      </div>
    
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>