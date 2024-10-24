<?php
if (isset($_GET['id'])) {
    include_once('config.php');
    $id = $_GET['id'];

    $sql ="DELETE FROM majors WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=jurusan');
    } else {
        include('index.php?m=jurusan');
        echo '<script language="javascript">';
            echo 'alert("Data gagal dihapus")';
        echo '</script>';
    }
    
} else {
     echo "Jangan Langsung Eksekusi ke File Ini, klik <a href='?m=jurusan&s=edit'>disini</a>";
}
