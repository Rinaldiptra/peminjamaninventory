



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
<form action="{{route('storeinventaris')}}" method="post">
	@csrf
  <div class="pull-left">
     <h2>Add Ruang</h2>
 
  
<div class="container">
<div class="mt-5">
	<div class="card">
  <div class="card-body">
    <form>
  <div class="form-group">
    <label for="id_inventaris"> id iventaris</label>
    <input type="text" class="form-control" id="" name="id_inventaris">
  </div>
  <div class="form-group">
    <label for="nama">Nama invetaris</label>
    <input type="text" class="form-control" id="" name="nama">
  </div>
  <div class="form-group">
    <label for="kondisi">kondisi inventaris</label>
    <input type="text" class="form-control" id="" name="kondisi">
  </div>
  <div class="form-group">
    <label for="keterangan"> keterangan</label>
    <input type="text" class="form-control" id="" name="keterangan">
  </div>
  <div class="form-group">
    <label for="jumlah">jumlah</label>
    <input type="text" class="form-control" id="" name="jumlah">
  </div>
  <div class="form-group">
    <label for="id_jenis"> id jenis</label>
    <input type="text" class="form-control" id="" name="id_jenis">
  </div>
  <div class="form-group">
    <label for="tanggal_registrasi"> tanggal registrasi</label>
    <input type="date" class="form-control" id="" name="tanggal_registrasi">
  </div>
  <div class="form-group">
    <label for="id_ruang"> id ruang</label>
    <input type="text" class="form-control" id="" name="id_ruang">
  </div>
  <div class="form-group">
    <label for="kode_inventaris">kode inventaris</label>
    <input type="text" class="form-control" id="" name="kode_inventaris">
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