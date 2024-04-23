<?php

// Getting user upload file

$namaFile = $_FILES["file"];

// Saving file in uploads folder

move_uploaded_file($files["tmp_name"], "uploads/" $namaFile["name"]);

// Redirecting back to home

header ("Location: ieLB-Copy.html");