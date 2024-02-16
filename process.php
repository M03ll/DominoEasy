<?php
    // Informasi koneksi ke database
    $host = "127.0.0.1";
    $db_user = "root";
    $db_password = "root";
    $db_name = "db1";
    
    // Membuat koneksi
    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);
    
    // Cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Ambil data dari formulir
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Simpan data ke dalam tabel users
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    // Eksekusi query SQL untuk menyimpan data
    $result = $conn->query($sql);
    
    if ($result) {
    header("Location: index.html");
    
  
    } else {
        // Logika jika login gagal
        echo "Login gagal. Silakan coba lagi.";
        exit();
    }
    ?>
