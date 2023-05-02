<?php
    $Host = "redlock-db-vlc";
    $Username = "admin";
    $Password = "kopinikmatnyamandilambung";
    $Database = "redlock-db";

    $conn = new mysqli($Host, $Username, $Password, $Database, 3306);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT ID, Nama, Alamat, Jabatan FROM Users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["ID"]. " - Name: " . $row["Nama"]. " - Alamat: " . $row["Alamat"]. " - Jabatan: " . $row["Jabatan"]. "<br>";
        }
    } 
    else {
        echo "0 results";
    }
    $conn->close();
?>