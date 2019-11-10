<?php
include 'mahasiswa_view.php'
?>
<form action="mahasiswa_view.php"method="get">
<label>Cari :</label>
<input type="text"name="cari">
<input type="submit"value="cari">
</form>
<?php
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil Pencarian : ".$cari."</b>";
}
?>