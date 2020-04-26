
<div class="header-regis">
	<div><h2 class="text-center">INI REGISTRASI</h2><br></div>
</div>
<!-- untuk searching -->
<form>
  <div class="form-row align-items-center">
<div>
  <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Username</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
      </div>
    </div>
</div>
 </div>
</form>
<!-- tutup searching -->
<div>
<form>
	<!-- nama -->
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
  </div>
  <!-- akhir nama -->
  <!-- Jeniskel -->
  <fieldset class="form-group">
    <label>Jenis Kelamin</label>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="laki" id="laki">
          <label class="form-check-label" for="laki">Laki-Laki</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="perempuan" id="perempuan">
          <label class="form-check-label" for="perempuan">Perempuan</label>
        </div>
      </div>
  </fieldset>
  <!--akhir Jeniskel -->
 <!-- tgl -->
 <div class="form-group">
    <label for="tgl">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Masukan tanggal lair">
  </div>
 <!-- akhir tgl -->
 <!-- email -->
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email">
  </div>
 <!-- akhir email -->
 <!-- no hp -->
 <div class="form-group">
    <label for="hp">No. Hp</label>
    <input type="text" class="form-control" id="text" name="text" placeholder="Masukan No. Hp">
  </div>
 <!-- akhir hp -->
 <!-- alamat -->
 <div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat"></textarea>
  </div>
 <!-- akhir alamat -->
 <button type="submit" name="submit" class="btn btn-primary">REGISTRASI</button>
 <button type="reset" name="reset" class="btn btn-danger">RESET</button>
</form>
</div>