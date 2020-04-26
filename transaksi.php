
<div class="header-regis">
	<div><h2 class="text-center">TRANSAKSI</h2><br><br></div>
</div>
<div>
<form method="get" action="index.php">
	<!-- nama -->
  <div class="form-group">
    <label for="vKet">Masukan ID User</label>
    <input type="text" class="form-control" id="vKet" name="vKet" placeholder="Masukan ID/Nama User">
  </div>
  <!-- akhir nama -->
  <!-- tabel -->
  <div id="container">
    <h6>ATAS NAMA</h6>

    <ul>
      <!-- ID -->
        <label>ID User : </label>
        <label></label><br>
      <!-- Nama -->
        <label>Nama : </label>
        <label></label><br>
      <!-- Tanggal -->
        <label>Tanggal : </label>
        <label></label>
    </ul>
  </div>
<br>
  <!-- tabel -->
 <!-- no hp -->
 <div class="form-group">
    <label for="nilaiTRX">Nilai Pembelian (Rp.)</label>
    <input type="text" class="form-control" id="nilaiTRX" name="nilaiTRX" placeholder="Masukan Nilai Pembelian">
  </div>
 <!-- akhir hp -->
 <button type="submit" name="submit" class="btn btn-primary">INPUT TRANSAKSI</button>
 <button type="reset" name="reset" class="btn btn-danger">RESET</button>
</form>
</div>

<script type="text/javascript">
var keyword = document.getElementById('vKet');
var container = document.getElementById('container');

keyword.addEventListener('keyup', function(){
  //objek ajax
  var ajax = new XMLHttpRequest();

  //cek kesiapan
  ajax.onreadystatechange = function(){
      //kesiapan sumber ada 4,inisialisasi membuka koneksi dst
      //status 200 OK
    if (ajax.readyState == 4 && ajax.status == 200){
      container.innerHTML = ajax.responseText;
    }
  }

  //eksekusinya
  ajax.open('GET','dist/ajax/ketTransaksi.php?vKet='+keyword.value, true);
  ajax.send();
});

</script>