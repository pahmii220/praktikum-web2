<?php
if (isset($_POST['Submit'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $result = mysqli_query($con, "INSERT INTO matakuliah(kode,nama,sks,semester) 
VALUES('$kode','$nama','$sks','$semester')");
    header("Location:?page=matakuliah-show");
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data matakuliah</strong>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=matakuliah-add" class="form-horizontal">
                    <div class="form-group">
                        <label for="kode" class="ontrol-label">Masukkan Kode</label>
                        <input type="text" class="form-control" name="kode" placeholder="Masukan Kode Matkul..." required>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="control-label">Masukkan Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama..." required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="sks" class="control-label">Sks</label>
                            <input type="text" class="form-control" name="sks" placeholder="Masukan SKS..." required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="semester" class="control-label">Semester</label>
                            <input type="number" class="form-control" name="semester" placeholder="Masukan semester..." required>
                        </div>
                    </div>
                    <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                </form>
            </div>
        </div>
    </div>
</div>