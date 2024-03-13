<?php

define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', '');
define ('DB_NAME', 'peminjaman_barang');
$dbconnect=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Failed to connect to MYSQL: " . mysqli_error($dbconnect));



function kuery($kueri)
{
    global $dbconnect;
    $result=mysqli_query($dbconnect, $kueri);
    $rows=[];
    while($rows=mysqli_fetch_assoc($result))
    {
        $rows[] = $rows;
    }
    return $rows;
}

function showdatauser($tablename){
    global $dbconnect;
    $result=mysqli_query($dbconnect,"select*from $tablename");
    $rows=[];
    while($rows=mysqli_fetch_assoc($result))
    {
        $rows[] = $rows;
    }
    return $rows;
}

function inputbarang($tabelname,$data1,$data2,$data3,$data4,$data5,$data6)
{
    global $dbconnect;
    $sql=mysqli_query($dbconnect, "insert into $tabelname values (null,$data1,$data2,$data3,$data4,$data5,$data6)");
    return $sql;
}

function Editdata($tablename, $id)
{
    global $dbconnect;
    $hasil=mysqli_query($dbconnect, "select * from $tablename where id='$id.'");
    return $hasil;
}

function update($table, $data, $id)
{
    global $dbconnect;
    $sql = "UPDATE $table SET nama_barang = '$data' WHERE id = '$id'";
    $hasil=mysqli_query($dbconnect, $sql);
    return $hasil;
}

function Delete($tablename, $id)
{
    global $dbconnect;
    $hasil=mysqli_query($dbconnect, "Delete from $tablename where id='$id'");
    return $hasil;
}
function cek_login($username, $password){
    global $dbconnect;
    $uname = $username;
    $upass = $password;

    $hasil = mysqli_query($dbconnect, "select * from user where username ='$uname' and password='$upass'");
    $cek = mysqli_num_rows($hasil);

    $sql = mysqli_fetch_array($hasil);
    if($cek > 0){
        $_SESSION['username'] = $sql['username'];
        $_SESSION['role'] = $sql['role'];
        return true;
    } else {
        return false;
    }
}
?>