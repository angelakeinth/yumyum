<?php
require 'db2_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $phonenum = $_POST['phonenum'];
    $email = $_POST['email'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $guests = $_POST['guests'];
    $occasion = $_POST['occasion'];
    $dietary = $_POST['dietary'];
    $seating = $_POST['seating'];
    $confirmation = $_POST['confirmation'];
    $agreement = isset($_POST['agreement']) ? 1 : 0;

    if ($agreement) {
        $sql = "INSERT INTO bookings (fullname, phonenum, email, time, date, guests, occasion, dietary, seating, confirmation, agreement) 
                VALUES ('$fullname', '$phonenum', '$email', '$time', '$date', '$guests', '$occasion', '$dietary', '$seating', '$confirmation', '$agreement')";

if ($conn->query($sql) === TRUE) {
    header("Location: thank_you2.php");
    exit(); // Make sure to call exit() after redirection to stop the script
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

    $conn->close();
}
?>
