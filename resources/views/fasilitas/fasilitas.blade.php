<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <img src="{{ asset('foto/hotel.jpg') }}" class="img-fluid img-thumbnail mt-5" style="width: 100%; height: 500px;" alt="...">
        <h1 class="container mt-4">Fasilitas</h1>
        <div class="container text-center mt-4">
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
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
            <a href="{{ url('kamar') }}" class="btn btn-outline-dark btn-sm">Cek fasilitas kamar hotel-></a>
          </div>
            
          </div>
        
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>