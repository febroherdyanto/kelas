<?php ob_start();
$getid = addslashes($_GET['xid']);
$qcektugas = mysqli_query($xkon, "select * from tugas where id_tugas=$getid");
while($dtugas = mysqli_fetch_array($qcektugas)){
    $xfolder = $dtugas['folder'];
    $xtugas = $dtugas['nama_tugas'];

?>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Download Data Mahasiswa yang telah mengumpulkan tugas : <?php echo $xtugas ?></h4>
                  <p class="card-description">
                      Mata Kuliah : <?php echo $dtugas['matkul']; ?> <br>
                      Dosen Pengampu : <?php echo $dtugas['dosen']; ?>
                  </p>
                  
<?php
if(isset($_POST['files'])){
    $error = ""; //error holder
    if(isset($_POST['createzip'])){
        $post = $_POST; 
        $file_folder = "isi/tugas/XFILES/".$xfolder."/"; // folder to load files
        if(extension_loaded('zip')){ 
            // Checking ZIP extension is available
            if(isset($post['files']) and count($post['files']) > 0){ 
                // Checking files are selected
                $zip = new ZipArchive(); // Load zip library 
                $zip_name = $xtugas." - TI.20.B.1.zip"; // Zip name
                if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE){ 
                    // Opening zip file to load files
                    $error .= "* Sorry ZIP creation failed at this time";
                }
                foreach($post['files'] as $file){ 
                    $zip->addFile($file_folder.$file); // Adding files into zip
                } $zip->close();
                if(file_exists($zip_name)){
                    header('Content-type: application/zip');
                    header('Content-Disposition: attachment; filename="'.$zip_name.'"');
                    readfile($zip_name);
                    // remove zip file is exists in temp path
                    unlink($zip_name);
                }
            }else $error .= "* Please select file to zip ";
        }else $error .= "* You dont have ZIP extension";
    }
}
?>


                  <div class="table-responsive">
                    <table class="table table-striped" id="tabelku">
                    <thead>
                        <form method="post" action="" name="zips">
                        <tr>
                            <td colspan="5" style="text-align:right">
                                <input type="submit" id="submit" class="btn btn-sm btn-primary" name="createzip" value="Download Semua File" >
                            </td>
                            <td><input type="checkbox" id="checkAll"><label>Select All</label></td>
                        </tr>

                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Tanggal Upload</th>
                            <th>Waktu Upload</th>
                            <th>Nama File</th>
                        </tr>
                    </thead>
                    <tbody>                        
                        <?php 
                        $query = mysqli_query($xkon, "select * from pengumpulan where id_tugas=$getid");
                        $no = 0;
                        while($data = mysqli_fetch_array($query)){
                            $id_mhs = $data['id_mhs'];
                            $tgl = $data['tgl'];
                            $file = $data['file'];
                            $no++;
                            
                            $qcekmhs = mysqli_query($xkon, "select * from mahasiswa where id_mhs=$id_mhs");
                            $dmhs = mysqli_fetch_array($qcekmhs);
                            $nim = $dmhs['nim'];
                            $nama = $dmhs['nama_lengkap'];
                        ?>
                        <tr>
                                
                            
                                <td><?php echo $no; ?></td>
                                <td><?php echo $nim; ?></td>
                                <td><?php echo $nama; ?></td>
                                <td><?php echo date("d F Y", strtotime($tgl)); ?></td>
                                <td><?php echo $data['jam']; ?> WIB</td>
                                <td>
                                    <input class="chk" type="checkbox" name="files[]" value="<?php echo $file; ?>"><label><?php echo $file; ?></label>
                                </td>
                            </form>
                        </tr>
                        <?php } ?>
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

<?php } ?>
<script type="text/javascript">
    $('#submit').prop("disabled", true);
    $("#checkAll").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
        $('#submit').prop("disabled", false);
        if ($('.chk').filter(':checked').length < 1){
                $('#submit').attr('disabled',true);}
    });

    $('input:checkbox').click(function() {
            if ($(this).is(':checked')) {
                $('#submit').prop("disabled", false);
            } else {
            if ($('.chk').filter(':checked').length < 1){
                $('#submit').attr('disabled',true);}
            }
    });
</script>