<?php
include("koneksi.php");
if(isset($_POST['kirim_data'])){
    $nama=$_POST['nama'];
    $jb=$_POST['jb'];

$sql="INSERT INTO tb_tambah(nama,jb) VALUES ('$nama','$jb')";
$query=mysqli_query($koneksi,$sql);

}else{
    ("akses dilarang");
}
?>