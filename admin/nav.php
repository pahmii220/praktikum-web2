<ul class="list-group">
    <li class="list-group-item"><a href="?page=dashboard">Dashboard</a></li>
    <li class="list-group-item"><a href="?page=mahasiswa-show">Data Mahasiswa</a></li>
    <li class="list-group-item"><a href="?page=mahasiswa-add">Tambah Data Mahasiswa</a></li>
    <li class="list-group-item"><a href="?page=matakuliah-show">Data matakuliah</a></li>
    <li class="list-group-item"><a href="?page=matakuliah-add">Tambah Data Matakuliah</a></li>

    <?php
    //session_start();
    if ($_SESSION['username'] == 'pahmi') {
        echo '
    <li class="list-group-item"><a href="?page=user-show">Data User</a></li>
    <li class="list-group-item"><a href="?page=user-add">Tambah Data User</a></li>
    ';
    }
    ?>

    <li class="list-group-item"><a href="logout.php ">Logout</a></li>
</ul>