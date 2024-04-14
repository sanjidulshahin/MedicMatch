<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project 329</title>
    <link rel="icon" href="images/logo.png" sizes="16x16" type="image/png">
    <link rel="icon" href="images/logo.png" sizes="32x32" type="image/png">
    <link rel="apple-touch-icon" href="images/logo.png">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">MedicMatch</div>
            <div class="header-center">
                <h1>Admin Dashboard</h1>
            </div>
            <div class="header-right">
                <a href="#" class="logout-btn">Logout</a>
            </div>
        </header>
        <main>
            <section class="data-section">
                <div class="form-container">
                    <h2>Healthcare Provider</h2>
                    <form id="form1" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
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
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div class="form-container">
                    <h2>Doctor</h2>
                    <form id="form2" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
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
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </section>
        </main>
        <footer>
            <div class="footer-content">
                <p>MedicMatch</p>
                <p>&copy; 2024 Group 3</p>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const logoutButton = document.querySelector('.logout-btn');

            logoutButton.addEventListener('click', function(event) {
                event.preventDefault();
                window.location.href = 'index.html';
            });
        });
    </script>
</body>
</html>
