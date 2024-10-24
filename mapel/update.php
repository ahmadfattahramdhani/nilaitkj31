<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $hours = $_POST['hours'];

    $sql ="UPDATE subjects SET subject='$subject', hours='$hours' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=mapel');
    } else {
        include('index.php?m=mapel');
        echo '<script language="javascript">';
            echo 'alert("Data gagal diupdate")';
        echo '</script>';
    }
    
} else {
     echo "Jangan Langsung Eksekusi ke File Ini, klik <a href='?m=mapel&s=edit'>disini</a>";
}
