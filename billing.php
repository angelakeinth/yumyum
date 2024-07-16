<?php
include 'db_connect.php';
session_start();

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Sanitize and validate input (you can add more validation as needed)
  $fullname = htmlspecialchars($_POST['inputFullname']);
  $phonenumber = htmlspecialchars($_POST['inputPhonenum']);
  $email = htmlspecialchars($_POST['inputEmail']);
  $address = htmlspecialchars($_POST['inputAddress']);
  $city = htmlspecialchars($_POST['inputCity']);
  $state = htmlspecialchars($_POST['inputState']);
  $zip = htmlspecialchars($_POST['inputZip']);
  $OrderTotal = htmlspecialchars($_POST['orderTotal']);
  $payment_method = htmlspecialchars($_POST['payment_method']);
  $cardName = isset($_POST['cardName']) ? htmlspecialchars($_POST['cardName']) : '';
  $cardNumber = isset($_POST['cardNumber']) ? htmlspecialchars($_POST['cardNumber']) : '';
  $expMonth = isset($_POST['expMonth']) ? htmlspecialchars($_POST['expMonth']) : '';
  $expYear = isset($_POST['expYear']) ? htmlspecialchars($_POST['expYear']) : '';
  $cvv = isset($_POST['cvv']) ? htmlspecialchars($_POST['cvv']) : '';

  // Insert data into database
  $sql = "INSERT INTO orders (fullname, phonenumber, email, address, city, state, zip, OrderTotal, payment_method, cardName, cardNumber, expMonth, expYear, cvv)
          VALUES ('$fullname', '$phonenumber', '$email', '$address', '$city', '$state', '$zip', '$OrderTotal', '$payment_method', '$cardName', '$cardNumber', '$expMonth', '$expYear', '$cvv')";

  if ($conn->query($sql) === TRUE) {
    header("Location: thank_you.php");
    exit(); // Make sure to call exit() after redirection to stop the script
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
