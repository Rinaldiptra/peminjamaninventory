



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
<form action="{{route('storepeminjaman')}}" method="post">
	@csrf
  <div class="pull-left">
     <h2>Add peminjaman</h2>
 
  
<div class="container">
<div class="mt-5">
	<div class="card">
  <div class="card-body">
    <form>
  <div class="form-group">
    <label for="id_peminjaman"> id peminjaman</label>
    <input type="text" class="form-control" id="" name="id_peminjaman">
  </div>
  <div class="form-group">
    <label for="tanggal_pinjam">tanggal_pinjam</label>
    <input type="date" class="form-control" id="" name="tanggal_pinjam">
  </div>
<div class="form-group">
    <label for="tanggal_kembali">tanggal kembali</label>
    <input type="date" class="form-control" id="" name="tanggal_kembali">
  </div>
  <div class="form-group">
    <label for="status_peminjaman">Status peminjaman</label>
    <input type="text" class="form-control" id="" name="status_peminjaman">
  </div>
  <div class="form-group">
    <label for="id_petugas">id petugas</label>
    <input type="text" class="form-control" id="" name="id_petugas">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="back" href="http://127.0.0.1:8000/karyawan" class="btn btn-primary">Back</a>
</form>

  </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </form>