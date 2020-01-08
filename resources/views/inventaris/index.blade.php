  

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 

<div class="container">

 <div class="row">
   <div class="col-lg-12 margin-tb">
  <div class="pull-left">
     <h2>Data inventaris</h2>
  </div>

	<div class="pull-right">
        <a class="btn btn-success" href="{{url('/inventaris/create')}}"> tambah jenis</a>
    </div>

<div class="mt-5">
  <div class="card">
  <div class="card-body">
 <table class="table">
  <thead >
    <tr>
      
      <th scope="col">id inventaris</th>
      <th scope="col">Nama</th>
      <th scope="col">kondisi</th>
      <th scope="col">keterangan</th>
      <th scope="col">jumlah</th>
      <th scope="col">id jenis</th>
      <th scope="col">tanggal registrasi</th>
      <th scope="col">id ruang</th>
      <th scope="col">kode inventaris</th>
      <th scope="col">id petugas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
    
    <tbody>
      @foreach ($datainventaris as $inv) 
    <tr>
      
      <td>{{$inv->id_inventaris}}</td>
      <td>{{$inv->nama}}</td>
      <td>{{$inv->kondisi}}</td>
      <td>{{$inv->keterangan}}</td>
      <td>{{$inv->jumlah}}</td>
      <td>{{$inv->id_jenis}}</td>
      <td>{{$inv->tanggal_registrasi}}</td>
      <td>{{$inv->id_ruang}}</td>
      <td>{{$inv->kode_inventaris}}</td>
      <td>{{$inv->id_petugas}}</td>

      <td>
        <a href="/inventaris/{{$inv->id}}/delete/" class="btn btn-danger"> Delete</a> 
        <a href="/inventaris/{{$inv->id}}/edit/" class="btn btn-warning"> Edit</a> 
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

