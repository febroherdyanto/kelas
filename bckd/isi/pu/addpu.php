<script>
var currYear = (new Date()).getFullYear();

$(document).ready(function() {
  $(".datepicker").datepicker({
    defaultDate: new Date(currYear-5,1,31),
    // setDefaultDate: new Date(2000,01,31),
    maxDate: new Date(currYear-5,12,31),
    yearRange: [1928, currYear-5],
    format: "yyyy/mm/dd"
  });
});
</script>

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h2 class="card-title"> Form Pengajuan Peminjaman Uang Kas</h2>



    </div>
    <div class="card-body">

            <form class="col s12" method="post" action="">



              <!-- CEK NIM -->
              <script type="text/javascript">
                  function isi_otomatis(){
                      var nim = $("#nim").val();
                      $.ajax({
                          url: '../../ajaxnim.php',
                          data:"nim="+nim ,
                      }).success(function (data) {
                          var json = data,
                          obj = JSON.parse(json);
                          $('#nama').val(obj.nama);
                      });
                  }
              </script>
              <div class="row">
                <div class="form-floating mb-2">
                  <input id="nim" type="text" name="nim" onkeyup="isi_otomatis()" class="form-control validate" required>
                  <label for="floatingInput">  Nomor Induk Mahasiswa *</label>
                </div>
              </div>

              <div class="row">
                <div class="form-floating mb-2">
                  <input id="nama" type="text" name="nama" class="form-control" placeholder="Kolom Tidak Boleh Diisi" readonly>
                  <label for="floatingInput">Nama Mahasiswa *</label>
                </div>
              </div>

              <div class="row">
                <div class="form-floating mb-2">
                  <input type="text" name="matkul" id="matkul" class="form-control" id="floatingInput" placeholder="  Mata Kuliah" required>
                  <label for="floatingInput">Mata Kuliah *</label>
                </div>
              </div>

              <div class="row">
                <div class="form-floating mb-2">
                  <input type="text" name="dosen" id="dosen" class="form-control" id="floatingInput" placeholder="  Nama Dosen" required>
                  <label for="floatingInput">Dosen *</label>
                </div>
              </div>

              <div class="row">
                <div class="form-floating mb-2">
                  <input type="date" name="tgl" id="tgl" class="form-control datepicker" id="floatingInput" placeholder="  Tanggal Berakhirnya Tugas" required>
                  <label for="floatingInput">Tanggal Berakhirnya Tugas *</label>
                </div>
              </div>

              <div class="row">
                <div class="form-floating mb-2">
                  <input type="time" name="jam" id="jam" class="form-control" id="floatingInput" placeholder="  Jam Berakhirnya Tugas" required>
                  <label for="floatingInput">Jam Berakhirnya Tugas *</label>
                </div>
              </div>

              <div class="row">
                <div class="form-floating mb-2">
                  <input type="text" name="folder" id="folder" class="form-control" id="floatingInput" placeholder="  Nama Dosen" required>
                  <label for="floatingInput">Folder Pengumpulan Tugas *</label>
                </div>
              </div>



              <div class="row">
                <div class="form-floating mb-2">
                  <button type="submit" name="submit" id="submit"  class="btn btn-primary">SIMPAN <i class="bi-arrow-right-circle"></i> </button>
                </div>
              </div>





    </div>
  </div>
</div>
