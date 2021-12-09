<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","ajax2.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="text-align: center;">Informasi Pembayaran Uang Kas</h4>
                <p class="card-description">
                </p>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Pilih Tahun : </label>
                    <div class="col-sm-9">
                        <form>
                            <select name="tahun" class="form-select" onchange="showUser(this.value)">
                            <option value="">Pilih Tahun Pembayaran</option>
                            <option value="1">2020</option>
                            <option value="2">2021</option>
                            <option value="3">2022</option>
                            <option value="4">2023</option>
                            <option value="4">2024</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div id="txtHint"><i>Data akan muncul ketika Anda memilih Tahun Pembayaran</i></div>
        </div>
    </div>
</div>