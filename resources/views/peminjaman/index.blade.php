  

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 

<div class="container">

 <div class="row">
   <div class="col-lg-12 margin-tb">
  <div class="pull-left">
     <h2>Data peminjaman</h2>
  </div>

	<div class="pull-right">
        <a class="btn btn-success" href="{{url('/peminjaman/create')}}"> tambah peminjaman</a>
    </div>

<div class="mt-5">
  <div class="card">
  <div class="card-body">
 <table class="table">
  <thead >
    <tr>
      
      <th scope="col">id peminjaman</th>
      <th scope="col">tanggal peminjaman</th>
      <th scope="col">tanggal kembali</th>
      <th scope="col">status peminjaman</th>
      <th scope="col">id pegawai</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
    
    <tbody>
      @foreach ($datapeminjaman as $peminjam) 
    <tr>
      
      <td>{{$peminjam->id_peminjaman}}</td>
      <td>{{$peminjam->tanggal_pinjam}}</td>
      <td>{{$peminjam->tanggal_kembali}}</td>
      <td>{{$peminjam->status_peminjaman}}</td>
      <td>{{$peminjam->id_petugas}}</td>
      <td>
        <a href="/peminjaman/{{$peminjam->id}}/delete/" class="btn btn-danger"> Delete</a> 
        <a href="/peminjaman/{{$peminjam->id}}/edit/" class="btn btn-warning"> Edit</a> 
    </td>  
    </tr>
    @endforeach    
</tbody>
</table>
</div>
 
  </div>
 <a type="back" href="http://127.0.0.1:8000/home" class="btn btn-primary">Back</a>
</div>




 



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

