<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>YumYum</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
              <li><a href="Beverages.html">Beverages</a></li>
              <li><a href="Beverages.html">Dessert</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="book-a-table.html">Book a Table</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <style>
    .form-container {
      margin-top: 100px; /* Adjust this value as needed */
    }
    .short-input {
      width: 70%;
  }
  .submit-button {
    margin-top: 20px; /* Adjust the margin as needed */
    float: left; /* Aligns the button to the left */
  }
  form {
    max-width: 600px;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
input, select, textarea {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.checkoutform {
  margin-bottom: 20px;
}
  </style>
  <h1>Order Form</h1>
    <<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputtext">Fullname</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="FULLNAME">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPhonenum">PhoneNumber</label>
      <input type="phonenumber" class="form-control" id="inputPhonenum" placeholder="PhoneNumber">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="Email" class="form-control" id="inputEmail" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>

    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-row">
        <div class="form-group col-md-4">
          <label for="starterSelect">Starters</label>
          <select id="starterSelect" class="form-control">
            <option value="0">choose</option>
            <option value="2.05">Vegan pik bowl</option>
            <option value="1.97">Chicken Katsudon</option>
            <option value="2.05">Kimchi Bokumbap</option>
            <option value="2.57">Sausage</option>
            <option value="2.57">Omelette Tomato</option>
            <option value="2.23">Creamy Lemon Zucchini Pasta</option>
          </select>
         
        </div>

        <div class="form-group col-md-4">
          <label for="breakfastSelect">Breakfast</label>
          <select id="breakfastSelect" class="form-control">
            <option value="0">choose</option>
            <option value="2.05">Strawberry Banana Toast</option>
            <option value="2.57">Chicken Waffle</option>
            <option value="2.57">Gluten Pancake</option>
            <option value="2.57">Strawberry Cream</option>
            <option value="2.57">Buttermilk</option>
            <option value="2.57">Cookie Waffle</option>
          </select>
         
        </div>

        <div class="form-group col-md-4">
          <label for="lunchSelect">Lunch</label>
          <select id="lunchSelect" class="form-control">
            <option value="0">choose</option>
            <option value="3.94">Pork Teriyaki</option>
            <option value="2.57">Denver Omelet</option>
            <option value="4.28">Braciole</option>
            <option value="2.57">Sweet Potato Black Beans Meal</option>
            <option value="2.91">Lasagna</option>
            <option value="2.57">Kare Kare</option>
          </select>
          
        </div>

        <div class="form-group col-md-4">
          <label for="dinnerSelect">Dinner</label>
          <select id="dinnerSelect" class="form-control">
            <option value="0">choose</option>
            <option value="5.14">Pork Chops in Garlic Mushroom</option>
            <option value="4.28">BBQ Pork Totchos</option>
            <option value="2.57">Salmotahe Salad</option>
            <option value="2.57">Steak & Salad</option>
            <option value="2.57">Roast Beef</option>
            <option value="3.08">Gourmet Steak</option>
          </select>
          
        </div>

        <div class="form-group col-md-4">
          <label for="beverageSelect">Beverages</label>
          <select id="beverageSelect" class="form-control">
            <option value="0">choose</option>
            <option value="2.05">Beer</option>
            <option value="1.88">Soda</option>
            <option value="1.71">Juice</option>
            <option value="2.57">Coffee</option>
            <option value="2.05">Milkshake</option>
            <option value="8.56">Wine</option>
          </select>
        
        </div>
        <div class="form-group col-md-4">
          <label for="beverageSelect">Dessert</label>
          <select id="beverageSelect" class="form-control">
            <option value="0">choose</option>
            <option value="2.05">Pastel de Belém</option>
            <option value="2.57">Chocolate ice cream</option>
            <option value="2.57">Chocolate con churros</option>
            <option value="2.57">Sacher-Torte</option>
            <option value="2.57">Dobos torta</option>
            <option value="2.57">Apfelstrudel</option>
          </select>
        
        </div>
      </div>
  <button type="submit" class="btn btn-primary">Proceed To Billig</button>
</form>

        <input type="submit" value="Proceed to Billing">
</form>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
      
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
</body>
</html>