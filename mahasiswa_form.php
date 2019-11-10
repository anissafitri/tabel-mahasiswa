<?php
include ('mahasiswa/mahasiswa.class.php');
$mhs = new Mahasiswa();

$flag = (isset( $_GET['flag']) ? $_GET['flag'] : '');
$nim = (isset( $_GET['nim']) ? $_GET['nim'] : '');
$namamahasiswa = (isset( $_GET['nama mahasiswa']) ? $_GET['nama mahasiswa'] : '');
$jeniskelamin = (isset( $_GET['jenis kelamin']) ? $_GET['jenis kelamin'] : '');
$alamatlengkap = (isset( $_GET['alamat lengkap']) ? $_GET['alamat lengkap'] : '');
$nomerhp = (isset( $_GET['nomer hp']) ? $_GET['nomor hp'] : '');

if ($flag == 'edit' && !empty($nim)) {

    //Getting nama details by nama id
    $anamaInfo = $mhs -> getMahasiswaByNama($nim);
    $nim = (isset($anamaInfo['nim']) ? $anamaInfo['nim'] :'');
	$namamahasiswa = (isset($anamaInfo['nama mahasiswa']) ? $anamaInfo['nama mahasiswa'] :'');
	$jeniskelamin = (isset($anamaInfo['jenis kelamin']) ? $anamaInfo['jenis kelamin'] :'');
    $alamatlengkap = (isset($anamaInfo['alamat lengkap']) ? $anamaInfo['alamat lengkap'] :'');
    $nomerhp = (isset($anamaInfo['nomer hp']) ? $anamaInfo['nomer hp'] :'');
}
?>

</script>

<div class='row'>

	<div class='span'>
		<h1>nama</h1>
		<h3>Form Data Tambah Mahasiswa</h3>

		<form id='form1' class='form-horizontal' action="mahasiswa/mahasiswa_action.php" method="POST">
			<label>NIM</label>

			<div class="input-control text size2 " data-role="input-control">
				<input class='required' type="text" name='nim' value="<?php echo($nim) ?>"
				<?php echo($flag == 'edit') ? 'readonly="readonly"' : '' ?>>

			</div>

			<label>nama mahasiswa</label>
			<div class="input-control text" data-role="input-control">
				<input class='required' type="text" name='nama mahasiswa'  value="<?php echo($namamahasiswa) ?>">

			</div>

			<label>jenis kelamin</label>
			<div class="input-control text" data-role="input-control">
				<input class='required' type="text" name='jenis kelamin'  value="<?php echo($jeniskelamin) ?>">
	
			</div>

			<label>alamat lengkap</label>
			<div class="input-control text" data-role="input-control">
				<input class='required' type="text" name='alamat lengkap'  value="<?php echo($alamatlengkap) ?>">

			</div>

			</div>

			<label>nomer hp</label>
			<div class="input-control text" data-role="input-control">
				<input class='required' type="text" name='nomer hp'  value="<?php echo($nomerhp) ?>">

			</div>
			

			<input type="hidden" name="flag" value="<?php echo($flag) ?>" />
			<input name="Submit" type="submit" value="Save" />
			&nbsp;&nbsp; <a href="index.php?mod=Aksi&pg=mahasiswa_view">
			<input name="Submit" type="button" value="Cancel" />
			</a>
	</div>
	</form>

</div>
