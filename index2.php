<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>YumYum</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>
<style>
   
      .form h2 {
        margin-top: 20px;
        margin-bottom: 10px;
        font-size: 1.2em;
        text-align: left;
      }
    
      
      
    
    
    
    
</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="https://iili.io/JQxYWy7.md.jpg" alt="time" class="logo-img">
    </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about us.html">About</a></li>
          <li><a href="event.html">Events</a></li>
          <li class="dropdown"><a href="menu.html"><span>Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="menu.html">Starter</a></li>
              <li><a href="menu.html">Breakfast</a></li>
              <li><a href="menu.html">Lunch</a></li>
              <li><a href="menu.html">Dinner</a></li>
              <li><a href="#salad">Beverages</a></li>
              <li><a href="#dess">Dessert</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table">Book a Table</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
<style>
   .form-container {
        max-width: 700px;
        margin: 50px auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(97, 209, 234, 0.1);
        background: #f9f9f9;
      }
    
      .form-container h1,
      .form-container h2 {
        text-align: center;
        color: #333;
      }
      .float-container{
        position: relative;
    }
      .form-container form {
        max-width: 100%;
        margin: auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(22, 67, 192, 0.1);
      }
    
      .form-container input,
      .form-container select,
      .form-container textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      }
    
      .form-container input:focus,
      .form-container select:focus,
      .form-container textarea:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
      }
    
      .form-container .form-row {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
      }
    
      .form-container .form-group {
        flex: 1;
        min-width: 200px;
      }
    
      .form-container .submit-button {
        margin-top: 20px;
        float: left;
      }
    
      .form-container .short-input {
        width: 70%;
      }
    
      .form-container label {
        color: #333;
        font-weight: bold;
      }
      .form-group {
            margin-bottom: 15px;
        }
        .checkbox-group {
            display: flex;
            align-items: center;
        }
        .checkbox-group input[type="checkbox"] {
            margin-right: 10px;
        }
        .radio-group label {
            margin-right: 20px;
        }

      
</style>
<div class="form-container" style="margin-top: 40px;">
<h1 style="margin-top: 40px;">Table Booking</h1>
    <form action="submit_booking.php" method="post">
    <div class="form-row">

        <label for="fullname">Full Name:</label><br>
        <input type="text" id="fullname" name="fullname" required><br>

        <label for="phonenum">Phone Number:</label><br>
        <input type="text" id="phonenum" name="phonenum" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <h3>Reservation Details</h3>
        <label for="time">Time:</label><br>
        <input type="time" id="time" name="time" required><br>

        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date" required><br>

        <label for="guests">Number of Guests:</label><br>
        <input type="number" id="guests" name="guests" required><br>

        <label for="occasion">Occasion:</label><br>
        <input type="text" id="occasion" name="occasion"><br>

        <label for="dietary">Dietary Restrictions:</label><br>
        <input type="text" id="dietary" name="dietary"><br>

        <h3>Additional Requests</h3>
        <div class="form-row">
            <div class="form-group col-md-4">
              <label for="starterSelect">Preferred Seating:</label>
              <select id="starterSelect" class="form-control">
              <option value="Indoor">Indoor</option>
              <option value="Outdoor">Outdoor</option>
              <option value="Window Seat">Window Seat</option>
              <option value="Near the Bar">Near the Bar</option>
              <option value="Quiet Area">Quiet Area</option>
             
              </select>
            </div>
            <div class="form-row">
            <div class="form-group col-md-4">
              <label for="starterSelect">Confirmation Method: </label>
              <select id="starterSelect" class="form-control">
              <option value="Phone Call">Phone Call</option>
              <option value="Email">Email</option>
              
              </select>
            </div>
            <div class="form-group checkbox-group">
            <input type="checkbox" id="agreement" name="agreement" required>
            <label for="agreement">I agree to the restaurant’s booking policies and terms.</label>
        </div>


        <input type="submit" value="Submit">
    </form>
      
      <script>
      function validateForm() {
        var agreement = document.getElementById('agreement');
        var agreementError = document.getElementById('agreement-error');
        if (!agreement.checked) {
          agreementError.style.display = 'block';
          return false;
        }
        agreementError.style.display = 'none';
        return true;
      }
      </script>
    </body>
    </html>      