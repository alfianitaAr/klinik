<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' - About';
$this->breadcrumbs = array(
	'About',
);
?>
<h1>About</h1>

<p>Ketentuan aplikasi secara umum yang dibuat terdiri dari :</p>

<ul>
	<li>1. Terdapat user login berdasarkan hak aksesnya (SRBAC)</li>
	<li>2. Terdapat master CRUD untuk pembuatan master wilayah, user, dan pegawai, tindakan, obat</li>
	<li>3. Terdapat menu transaksi untuk pendaftaran pasien</li>
	<li>4. Terdapat menu transaksi untuk memberikan tindakan dan obat pada pasien</li>
	<li>5. Terdapat menu informasi untuk melakukan pembayaran tagihan pasien</li>
	<li>6. Terdapat menu laporan yang dapat ditampilkan dengan grafik</li>
</ul>



<p>Aplikasi yang dibuat menggunakan Framework Yii-1 menggunakan database sql.
</p>