<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 


<form action="{{ url('updatepeminjaman/'.$datapeminjaman->id)}}" method="POST">
  @csrf
  @method('PUT')
  
<div class="container">
<div class="mt-5">
  <div class="pull-left">
     <h2>Edit Peminjaman</h2>
  </div>
  <div class="card">
  <div class="card-body">
  <div class="form-group">
    <label>id ruang</label>
  <input type="text" name="id_peminjaman" value="{{ $datapeminjaman->id_peminjaman}}" class="form-control" placeholder="Nip">
  </div>
 
 <div class="form-group">
    <label>Tanggal Pinjam</label>
   <input type="text" name="tanggal_pinjam" value="{{ $datapeminjaman->tanggal_pinjam}}" class="form-control" placeholder="Name">
  </div>
  
  <div class="form-group">
    <label for="no_hp">Tanggal Kembali</label>
    <input type="date" name="tanggal_kembali" value="{{ $datapeminjaman->tanggal_kembali }}" class="form-control" placeholder="no_hp">
  </div>

<div class="form-group">
    <label for="alamat">status peminjaman</label>
    <input type="text" name="status_peminjaman" value="{{ $datapeminjaman->status_peminjaman}}" class="form-control" placeholder="alamat">
  </div>
  <div class="form-group">
    <label for="id_petugas">Id Petugas</label>
    <input type="text" name="id_petugas" value="{{ $datapeminjaman->id_petugas}}" class="form-control" placeholder="alamat">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="back" href="http://127.0.0.1:8000/ruang" class="btn btn-primary">Back</a>
</div>
</div>
</div>
</form>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
