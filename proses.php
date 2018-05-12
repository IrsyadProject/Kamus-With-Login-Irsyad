<?php
// koneksi ke database
$conn=mysqli_connect('localhost','root','');
$ps=0; 
if (! $conn){
$ps++;
}

$pilihDB=mysqli_select_db($conn,'kamus');

$kata=$_GET['kata'];
$bahasa=$_GET['bahasa'];

if($ps==0){

if($bahasa=="indonesia"){
$cari=mysqli_query($conn,"SELECT * FROM translate WHERE indonesia='$kata'");
} else if($bahasa=="inggris"){
$cari=mysqli_query($conn,"SELECT * FROM translate WHERE inggris='$kata'");
}

$jum=mysqli_num_rows($cari);

if($jum==0){
print("kata tidak tersedia");
}else{

$data=mysqli_fetch_array($cari);

if($bahasa=="indonesia"){
print($data['inggris']);
} else if($bahasa=="inggris"){
print($data['indonesia']);
}
}
}
?>