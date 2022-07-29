<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
  
  <div class="container mt-5">
    <div class="row justify-content-center ">
       <div class="col-11">
           <div class="card">
               <div class="card-body">
                 <h1 class="text-center mb-5">Form Pemesanan</h1>
                   <form action="{{ route('simpan') }}" method="POST" class="col-7">
                       @csrf
                       
                       <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Nama Pemesan</label>
                         <input type="text" class="form-control" name="namapemesan">
                       </div>
  
                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email">
                      </div>
  
                       <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">No. Telp</label>
                           <input type="number" class="form-control" name="notelp">
                      </div>

                       <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Tamu</label>
                            <input type="text" class="form-control" name="namatamu">
                      </div>
  
                       <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
                           <select name="tipekamar" class="form-select form-control" id="" >
                               <option selected>Pilih Tipe Kamar</option>
                               <option value="1">Tipe Superior</option>
                               <option value="2">Tipe Deluxe</option>
                               <option value="3">Tipe Presidential Suite</option>
                           </select>
                      </div>
  
                       <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Tgl Check In</label>
                           <input type="date" class="form-control" name="tglcekin">
                      </div>
  
                       <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Tgl Check Out</label>
                           <input type="date" class="form-control" name="tglcekout">
                      </div>
  
                       <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jumlah Kamar</label>
                            <input type="number" class="form-control" name="jmlkamar">
                       </div>
                           
                       <button type="submit" class="btn btn-outline-dark">Pesan</button>
                     </form>
               </div>
           </div>
       </div>
    </div>
  </div>

  <div class="container-fluid mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <h1 class="text-center mb-5">Data Pemesanan</h1>

                    {{-- table --}}
                    
                    <table class="table">
                      <thead  class="">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">Email</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Nama Tamu</th>
                            <th scope="col">Tipe kamar</th>
                            <th scope="col">Tgl. Check In</th>
                            <th scope="col">Tgl. Check Out</th>
                            <th scope="col">Jml Kamar</th>
                            <th scope="col">Option</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                    
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $item->namapemesan }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->notelp }}</td>
                            <td>{{ $item->namatamu }}</td>
                            <td>{{ $item->tipekamar }}</td>
                            <td>{{ $item->tglcekin }}</td>
                            <td>{{ $item->tglcekout }}</td>
                            <td>{{ $item->jmlkamar }}</td>

                            <td>
                                <form action="{{ url('hapus', $item->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>