<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM sp_form WHERE id = :id";
    $pre = $PDO->prepare($sql);
    if($pre->execute(['id' => $id])){
        echo "<script>alert('Data Deleted Successfully!'); window.location=('form-manage.php');</script>";
        exit();
    }
}

?>