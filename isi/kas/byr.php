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
                    <div class="col-sm-3 col-form-label">Pilih Tahun : </div>
                    <div class="col-sm-4">
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
                    <div class="col-sm-3">
                      <button class="btn btn-info mr-2" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-download"></i> Download QRIS</button></div>
                </div>
                <div id="txtHint"><i>Data akan muncul ketika Anda memilih Tahun Pembayaran</i></div>
        </div>
    </div>
</div>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?php echo $xid_upload; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Payment Gateway TI.20.B.1</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                      <a href="QRIS_TI20B1.jpeg" target="_blank"><button class="btn btn-info mr-2" ><i class="fa fa-download"></i> Download QRIS</button></a>
                                        <img src="QRIS_TI20B1.jpeg" style="width:100%; height:100%; border-radius:0; max-height:800px; max-width:600px">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>