<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "root", "assets");


function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $row[] = $row;
    }
    return $rows;
}


function tambah
