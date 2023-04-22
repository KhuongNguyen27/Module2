<?php
function insertValue($Country,$Medal){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inoput";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn -> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Thực hiện lệnh INSERT
    $sql = "INSERT INTO olympic (Country,Medal) VALUES ('$Country','$Medal')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Đóng kết nối
    $conn->close();
}
    $Country = file_get_contents('viettel.json');
    $Medal = file_get_contents('rank.json');
    insertValue($Country,$Medal);
?>