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
<?php

?>
<?php 
//Getting mahasiswas
include('mahasiswa/mahasiswa.class.php');
$mahasiswaObj = new mahasiswa();
$listMhs = $mahasiswaObj->getMahasiswa('10');
?>

<!--- kode untuk menampilkan data di table -->
<h3> Daftar mahasiswa</h3>
<a class="button success " href='index.php?mod=mahasiswa&pg=mahasiswa_form'>Form data tambah mahsiswa</a>
<p>
    
</p>
<table class="table bordered hovered">
 <thead>
       <th> nim</th>
  <th> nama lengkap</th>
  <th> jenis kelamin</th>
  <th> alamat lengkap</th>
  <th> nomer hp</th>

		<th>Aksi</th>
 </thead>
 <tbody>
   <?php 
   foreach ($listMhs as $mahasiswa) {
          $nim = $mahasiswa['nim'];   

    ?>
  <tr>
       <td><?php echo $nim ?></td>
   
   <td width="300px"><center><a href="index.php?mod=mahasiswa&pg=mahasiswa_form&flag=edit&nim=<?php echo $nim; ?>" class= 'button success'>Edit</a>&nbsp;<a href="mahasiswa/mahasiswa_action.php?flag=delete&nim=<?php echo $nim; ?>" class="button danger">Delete</a></center></td>
  </tr>
  <?php } ?>
</tbody>
</table>

