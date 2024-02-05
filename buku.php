<?php
include 'layout/header.php';
?>

<div class="container" style="margin-top: 2rem;">
<h4>Daftar Buku</h4>
<div class="row">
    <div class="card" style="width: 14rem;">
    <img src="../asset/book1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h6 class="text-center">Tahun Terbit : 2020 </h6>
        <a href="data/detail.php" class="btn btn-warning text-white">Detail</a>
        <a href="#" class="btn btn-primary">Pinjam</a>
</div>
</div>


<div class="card" style="width: 14rem; mergin-right:10px; margin-bottom:10px;">
            <img src="../asset/book2.jpg" class="card-img-top" alt="Book 2 Cover">
            <div class="card-body">
                <h6 class="text-center">Tahun Terbit: 2022</h6>
                <a href="data/detail.php" class="btn btn-warning text-white">Detail</a>
                <a href="#" class="btn btn-primary">Pinjam</a>
            </div>
</div>

<div class="card" style="width: 14rem;">
            <img src="../asset/book3.jpg" class="card-img-top" alt="Book 3 Cover">
            <div class="card-body">
                <h6 class="text-center">Tahun Terbit: 2022</h6>
                <a href="data/detail.php" class="btn btn-warning text-white">Detail</a>
                <a href="#" class="btn btn-primary">Pinjam</a>
            </div>
</div>



<?php
include 'layout/footer.php';
?>

<?php 
session_start();
session_destroy();
header('locaton:index.php');
?>
