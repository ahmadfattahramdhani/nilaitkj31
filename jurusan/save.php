<?php
if (isset($_POST['save'])) {
    include_once('config.php');
    $name = $_POST['name'];
    $capacity = $_POST['capacity'];
    $fill = $_POST['fill'];

    $sql ="INSERT INTO majors SET name='$name', capacity='$capacity', fill='$fill'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=jurusan');
    } else {
        include('index.php?m=jurusan');
        echo '<script language="javascript">';
            echo 'alert("Data gagal ditambah")';
        echo '</script>';
    }
    
} else {
    echo "Jangan Langsung Eksekusi ke File Ini, klik <a herf='?m=jurusan&s=add'>disini</a>";
}


