<?php include 'config-dashboard.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MedicMatch</title>
    <link rel="icon" href="images/logo.png" sizes="16x16" type="image/png">
    <link rel="icon" href="images/logo.png" sizes="32x32" type="image/png">
    <link rel="apple-touch-icon" href="images/logo.png">
    <link rel="stylesheet" href="dashboard.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
</head>
<body>
    <header>
        <div class="logo">MedicMatch</div>
        <div class="header-center"></div>
        <div class="header-right">
            <div class="dropdown">
                <button class="dropbtn">Add/Delete</button>
                <div class="dropdown-content">
                    <button id="addHospitalBtn">Add Hospital</button>
                    <button id="deleteHospitalBtn">Delete Hospital</button>
                    <button id="addDoctorBtn">Add Doctor</button>
                    <button id="deleteDoctorBtn">Delete Doctor</button>
                </div>
            </div>
            <button><a href="login.html" class="logout-btn">Logout</a></button>
        </div>
    </header>

    <div class="container">
        <div class="doctor-table">
            <h1>Doctor Table</h1>
           <table class="table">
                <thead>
                    <tr>
                        <th>DID</th>
                        <th>HID</th>
                        <th>NAME</th>
                        <th>SPECIALIZATION </th>
                        <th>PRICE</th>
                        
                </thead>
                <tbody>
                    <?php 
                    doctorTable(); ?>
                </tbody>
            </table>
        </div>
     
        <div class="hospital-table">
            <h1>Hospital Table</h1>
           <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>TYPE </th>
                        <th>PRICE</th>
                        
                </thead>
                <tbody>
                    <?php 
                    hospital(); ?>
                </tbody>
            </table>
        </div>
            
    </div>
    <div id="addHospitalPopup" class="popup-container">
        <div id="addHospitalForm" class="form-container hidden">
                <h2>Add Hospital</h2>
                <form id="form1" action="config-dashboard.php" method="post">
                <input type="hidden" name="form1" value="1">
                    <label for="HName">Hospital Name:</label>
                    <input type="text" id="HName" name="HName">
                    <label for="HID">Hospital ID:</label>
                    <input type="text" id="HID" name="HID">
                    <label for="HType">Hospital Type:</label>
                    <input type="text" id="HType" name="HType">
                    <label for="HAddress">Hospital Address:</label>
                    <input type="text" id="HAddress" name="HAddress">
                    <label for="HPrice">Hospital Bill:</label>
                    <input type="number" id="HPrice" name="HPrice">
                    <div class="form-button">
                        <button type="submit">Submit</button>
                        <button type="button" class="cancel-btn">Cancel</button>
                    </div>
                    

                </form>
            </div>
    </div>
    <div id="deleteHospitalPopup" class="popup-container">
       <div id="deleteHospitalForm" class="form-container hidden">
                <h2>Delete Hospital</h2>
                <form id="form4" action="config-dashboard.php" method="post">
                    <input type="hidden" name="form4" value="1">
                        <label for="HName">Hospital Name:</label>
                        <input type="text" id="HName" name="HName">
                        <label for="HID">Hospital ID:</label>
                        <input type="text" id="HID" name="HID">
                        <div class="form-button">
                            <button type="submit">Submit</button>
                            <button type="button" class="cancel-btn">Cancel</button>
                        </div>

                </form>
            </div>
    </div>
    <div id="addDoctorPopup" class="popup-container">
        <div id="addDoctorForm" class="form-container hidden">
                <h2>Add Doctor</h2>
                <form id="form2" action="config-dashboard.php" method="post">
                <input type="hidden" name="form2" value="1">
                    <label for="DID">Doctor ID:</label>
                    <input type="Number" id="DID" name="DID">
                    <label for="HID">Hospital ID:</label>
                    <input type="Number" id="HID" name="HID">
                    <label for="DName">Doctor Name:</label>
                    <input type="text" id="DName" name="DName">
                    <label for="DSpecialization">Doctor Specialization:</label>
                    <input type="text" id="DSpecialization" name="DSpecialization">
                    <label for="DPrice">Cost of Visit</label>
                    <input type="number" id="DPrice" name="DPrice">
                    <div class="form-button">
                        <button type="submit">Submit</button>
                        <button type="button" class="cancel-btn">Cancel</button>
                    </div>

                </form>
            </div>
    </div>
    <div id="deleteDoctorPopup" class="popup-container">
        <div id="deleteDoctorForm" class="form-container hidden">
                <h2>Delete Doctor</h2>
                <form id="form3" action="config-dashboard.php" method="post">
                    <input type="hidden" name="form3" value="1">
                        <label for="DID">Doctor ID:</label>
                        <input type="Number" id="DID" name="DID">
                        <label for="HID">Hospital ID:</label>
                        <input type="Number" id="HID" name="HID">
                        <div class="form-button">
                            <button type="submit">Submit</button>
                            <button type="button" class="cancel-btn">Cancel</button>
                       </div>

                </form>
         </div>
    </div>

    <!-- Overlay to darken the background when a popup is active -->
    <div id="overlay" class="overlay"></div>
    <footer>
        <div class="footer-content">
            <p>MedicMatch</p>
            <p>&copy; 2024 Group 3</p>
        </div>
    </footer> 
    <script src="dashboard.js"></script>
    
</body>
</html>
