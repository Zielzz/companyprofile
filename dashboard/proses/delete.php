<?php

include('../../companyprofile/config/connection.php');

$id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM sign_in WHERE id='$id'");

if ($delete)
    header('Location: list.php');
else
    echo 'Delete data gagal';
    