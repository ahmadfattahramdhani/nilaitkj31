<?php
if (isset($_POST['save'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $hours = $_POST['hours'];

    $sql ="INSERT INTO subjects SET id='$id' subject='$subject', hours='hours'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=mapel');
    } else {
        include('index.php?m=mapel');
        echo '<script language="javascript">';
            echo 'alert("Data gagal ditambah")';
        echo '</script>';
    }
    
} else {
    echo "Jangan Langsung Eksekusi ke File Ini, klik <a href='?m=mapel&s=add'>disini</a>";
}

