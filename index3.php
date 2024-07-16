<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Booking Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h1,
        .form-container h3 {
            text-align: center;
        }

        .form-row {
            margin-bottom: 15px;
        }
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
            z-index: 1000; /* Ensure it's on top of everything */
            overflow: auto; /* Enable scrolling when modal content exceeds viewport */
        }
        
        /* Styling for modal content */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* Centered vertically and horizontally */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Adjust as needed */
            max-width: 600px; /* Max width for larger screens */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
        }
        
        /* Close button style */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Event Booking Form</h1>
        <form id="eventform" action="handle_form.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFullname">Fullname</label>
                    <input type="text" class="form-control" id="inputFullname" name="inputFullname" placeholder="FULLNAME">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPhonenum">PhoneNumber</label>
                    <input type="text" class="form-control" id="inputPhonenum" name="inputPhonenum" placeholder="PhoneNumber">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
                </div>
            </div>

            <h3>Event Details</h3>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Type of Event:</label>
                    <select name="event_type" class="form-control" required>
                        <option value="Private Party">Private Party</option>
                        <option value="Custom Party">Custom Party</option>
                        <option value="Birthday Party">Birthday Party</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            
                <div class="form-group col-md-4">
                    <label>Start Time:</label>
                    <input type="time" id="start_time" name="start_time" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                    <label>End Time:</label>
                    <input type="time" id="end_time" name="end_time" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                    <label>Number of Guests:</label>
                    <input type="number" id="guests" name="guests" class="form-control" required>
                </div>
            </div>

            <h3>Venue Information</h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Venue Name:</label>
                    <input type="text" name="venue_name" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Venue Address:</label>
                    <textarea name="venue_address" class="form-control" required></textarea>
                </div>
                <div class="form-group col-md-12">
                    <label>Special Instructions/Directions:</label>
                    <textarea name="special_instructions" class="form-control"></textarea>
                </div>
            </div>

            <h3>Party Preferences</h3>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Theme of the Party:</label>
                    <input type="text" name="theme" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Color Scheme:</label>
                    <input type="text" name="color_scheme" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="DecorationsNeededSelect">Decorations</label>
                    <select id="DecorationsNeededSelect" class="form-control" onchange="toggleOtherOption()">
                        <option value="0">Choose</option>
                        <option name="decorations[]" value="Balloons">Balloons</option>
                        <option name="decorations[]" value="Banners">Banners</option>
                        <option name="decorations[]" value="Table Centerpieces">Table Centerpieces</option>
                        <option name="decorations[]" value="Other">Other</option>
                    </select>
                    <h3 id="otherLabel" style="display: none;">Other</h3>
                    <input type="text" id="otherInput" name="other" class="form-control" style="display: none;">
                </div>
                <div class="form-group col-md-4">
                    <label for="EntertainmentNeededSelect">Entertainment:</label>
                    <select id="EntertainmentNeededSelect" class="form-control" onchange="toggleOtherOption()">
                        <option value="0">Choose</option>
                        <option name="entertainment[]" value="DJ"> DJ</option>
                        <option name="entertainment[]" value="Live Band"> Live Band</option>
                        <option name="entertainment[]" value="Magician"> Magician</option>
                        <option name="entertainment[]" value="Other">Other</option>
                    </select>
                    <h3 id="otherLabel" style="display: none;">Other</h3>
                    <input type="text" id="otherInput" name="other" class="form-control" style="display: none;">
                </div> 
            </div>
 
            <h3>Catering Details</h3>
            <div class="form-group col-md-4">
                <label for="Type of CuisineNeededSelect">Type of Cuisine:</label>
                <select id="Type of CuisineNeededSelect" class="form-control" onchange="toggleOtherOption()">
                    <option value="0">Choose</option>
                    <option name="Type of Cuisine[]" value="Buffet">Buffet</option>
                    <option name="Type of Cuisine[]" value="Sit-down Meal">Sit-down Meal</option>
                    <option name="Type of Cuisine[]" value="Finger Food">Finger Food</option>
                    <option name="Type of Cuisine[]" value="Other">Other</option>
                </select>
                <h3 id="otherLabel" style="display: none;">Other</h3>
                <input type="text" id="otherInput" name="other" class="form-control" style="display: none;">
            </div> 
            <div class="form-group col-md-4">
                <label for="Special Dietary RequirementsNeededSelect">Special Dietary Requirements:</label>
                <select id="Special Dietary RequirementsNeededSelect" class="form-control" onchange="toggleOtherOption()">
                    <option value="0">Choose</option>
                    <option name="Special Dietary Requirements[]" value="Vegetarian"> Vegetarian</option>
                    <option name="Special Dietary Requirements[]" value="Vegan"> Vegan</option>
                    <option name="Special Dietary Requirements[]" value="Gluten-free"> Gluten-free</option>
                    <option name="Special Dietary Requirements[]" value="Other">Other</option>
                </select>
                <h3 id="otherLabel" style="display: none;">Other</h3>
                <input type="text" id="otherInput" name="other" class="form-control" style="display: none;">
            </div>  
            <h3>Additional Services</h3>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Photography:</label>
                    <input type="checkbox" name="photography"> Yes
                </div>
                <div class="form-group col-md-4">
                    <label>Videography:</label>
                    <input type="checkbox" name="videography"> Yes
                </div>
                <div class="form-group col-md-4">
                    <label>Party Favors:</label>
                    <input type="checkbox" name="party_favors"> Yes
                </div>
                <div class="form-group col-md-12">
                    <label>Other Services Required:</label><br>
                    <input type="checkbox" name="other_services[]" value="Security"> Security
                    <input type="checkbox" name="other_services[]" value="Transportation"> Transportation
                    <input type="checkbox" name="other_services[]" value="Event Planning"> Event Planning
                    <input type="checkbox" name="other_services[]" value="Other"> Other
                </div>
            </div>

            <h3>Budget</h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Estimated Budget:</label>
                    <input type="text" name="estimated_budget" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Any Additional Information or Requests:</label>
                    <textarea name="additional_info" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">  I agree to these <a href="#" id="showModal">Terms and Conditions</a></label>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
    <div id="termsModal" class="modal-overlay">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2>Terms and Conditions</h2>
        <h2>1. Introduction</h2>
    <p>Welcome to YumYum! These terms and conditions outline the rules and regulations for the use of YumYum's website and services.</p>

    <h2>2. License to Use</h2>
    <p>Unless otherwise stated, YumYum and/or its licensors own the intellectual property rights for all material on YumYum. All intellectual property rights are reserved. You may view and/or print pages from https://www.yumyum.com for your own personal use subject to restrictions set in these terms and conditions.</p>

    <h2>3. Privacy Policy</h2>
    <p>YumYum is committed to protecting your privacy. Our Privacy Policy governs the use of personal information collected from or provided by you at the website. Please review our Privacy Policy at <a href="#link_to_privacy_policy">Privacy Policy</a>.</p>

    <h2>4. User Content</h2>
    <p>By submitting content on YumYum, you grant us the right to use, reproduce, modify, adapt, publish, translate, distribute, and display such content throughout the world in any media.</p>

    <h2>5. Prohibited Uses</h2>
    <p>You must not use YumYum in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website; or in any way which is unlawful, illegal, fraudulent, or harmful.</p>

    <h2>6. Limitation of Liability</h2>
    <p>In no event shall YumYum, nor any of its officers, directors, and employees, be liable to you for anything arising out of or in any way connected with your use of this website, whether such liability is under contract, tort, or otherwise.</p>

    <h2>7. Indemnification</h2>
    <p>You hereby indemnify to the fullest extent YumYum from and against any and all liabilities, costs, demands, causes of action, damages, and expenses arising in any way related to your breach of any of the provisions of these terms.</p>

    <h2>8. Severability</h2>
    <p>If any provision of these terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</p>

    <h2>9. Variation of Terms</h2>
    <p>YumYum is permitted to revise these terms at any time as it sees fit, and by using this website you are expected to review these terms on a regular basis.</p>

    <h2>10. Governing Law & Jurisdiction</h2>
    <p>These terms will be governed by and construed in accordance with the laws of [Your State/Country], and you submit to the non-exclusive jurisdiction of the state and federal courts located in [Your City] for the resolution of any disputes.</p>

    <h2>11. Entire Agreement</h2>
    <p>These terms constitute the entire agreement between YumYum and you in relation to your use of this website and supersede all prior agreements and understandings.</p>

    <h2>12. Contact Information</h2>
    <p>If you have any questions about these terms and conditions, please contact us at [email address].</p>

    <p>By using YumYum, you acknowledge that you have read, understood, and agree to be bound by these terms and conditions.</p>
    </div>
</div>
<script>
    // JavaScript to toggle modal visibility
    const modal = document.getElementById('termsModal');
    const showModalLink = document.getElementById('showModal');
    const closeModal = document.getElementById('closeModal');

    // Show modal when link is clicked
    showModalLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default anchor behavior
        modal.style.display = 'block';
    });

    // Close modal when close button is clicked
    closeModal.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    // Close modal when clicking outside the modal content
    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
</script>
    <script>
        function toggleOtherOption() {
            var selectElements = document.querySelectorAll('select');
            selectElements.forEach(function(selectElement) {
                var otherLabel = selectElement.nextElementSibling;
                var otherInput = otherLabel.nextElementSibling;
                if (selectElement.value === 'Other') {
                    otherLabel.style.display = 'block';
                    otherInput.style.display = 'block';
                } else {
                    otherLabel.style.display = 'none';
                    otherInput.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
