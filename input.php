<?php 
    include("database.php");
    $query = " SELECT * from HealthcareProvider ";
    $result = mysqli_query($connection,$query);
    $query1 = " SELECT * from Doctor ";
    $result1 = mysqli_query($connection,$query1);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
            $hospital_type = $_POST["hospital_type"];
            $speciality = $_POST["speciality"];
            $location = $_POST["location"];
            $rating = $_POST["rating"];
            $price = $_POST["price"];
        }

        
    mysqli_close($connection);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Project 329</title>
    <link rel="icon" href="images/logo.png" sizes="16x16" type="image/png" />
    <link rel="icon" href="images/logo.png" sizes="32x32" type="image/png" />
    <link rel="apple-touch-icon" href="images/logo.png" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,500,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="cost.css" />
  </head>
  <body>
    <header>
      <div class="logo">Project 329</div>
      <nav>
        <ul>
            <li><a href="Cost.php">Back</a></li>
            <li><a href="index.html">Home</a></li>
        </ul>
      </nav>
    </header>

    <section>
      <h2> The form elements are: </h2>
      <p> <?php
        echo $hospital_type;
        echo $speciality;
        echo $location;
        echo $rating;
        echo $price;
        echo $_POST["hospital_type"];
        echo $_POST["speciality"];
      ?>
      </p>
        
      <h1 class="desire">Best Matches</h1>

      <!-- New table section -->
      <div class="table-container" style="padding: 20px">
        <table class="data-table">
          <thead>
            <tr>
              <th>Hospital Name</th>
              <th>Hospital ID</th>
              <th>Hospital Type</th>
              <th>Hospital Address</th>
              <th>Hospital Bill</th>
              <th>Doctor ID</th>
              <th>Hospital ID</th>
              <th>Doctor Name</th>
              <th>Doctor Specialization</th>
              <th>Cost of Visit</th>
              <th>Take Appoinment</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr>
              <td>Data 1</td>
              <td>Data 2</td>
              <td>Data 3</td>
              <td>Data 3</td>
              <td>Data 3</td>
              <td>Data 3</td>
              <td>Data 3</td>
              <td>Data 3</td>
              <td>Data 3</td>
              <td>Data 3</td>
              <td>
                <button class="submitbutton" onclick="openForm()">
                  Click Here
                </button>
              </td>
            </tr>
            <!-- Add more rows as needed -->
            <!-- Row 2 -->
            <tr>
              <td>Data 4</td>
              <td>Data 5</td>
              <td>Data 6</td>
            </tr>
            <!-- ... -->
          </tbody>
        </table>
      </div>
    </section>
    <footer>
      <div class="footer-content">
        <p>Project 329</p>
        <p>©2023 Group 38</p>
      </div>
    </footer>
  </body>
</html>