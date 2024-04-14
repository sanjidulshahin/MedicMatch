<?php
    include 'database.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST['form1'])) {
            $HName = filter_input(INPUT_POST, "HName", FILTER_SANITIZE_SPECIAL_CHARS);
            $HID = filter_input(INPUT_POST, "HID", FILTER_SANITIZE_SPECIAL_CHARS);
            $HType = filter_input(INPUT_POST, "HType", FILTER_SANITIZE_SPECIAL_CHARS);
            $HAddress = filter_input(INPUT_POST, "HAddress", FILTER_SANITIZE_SPECIAL_CHARS);
            $HPrice = filter_input(INPUT_POST, "HPrice", FILTER_SANITIZE_SPECIAL_CHARS);
            
            /*echo "Name is $HName";
            echo "HID is $HID";
            echo "Type is $HType";
            echo "Address is $HAddress";
            echo "Price is $HPrice";*/

            if(empty($HName)){
                echo"Please enter an Name$HName";
            }
            elseif(empty($HID)){
                echo"Please enter a Cost$HID";
            }
            elseif(empty($HType)){
                echo"Please enter a Cost$HType";
            }
            elseif(empty($HAddress)){
                echo"Please enter a Cost$HAddress";
            }
            elseif(empty($HPrice)){
                echo"Please enter a Price$HPrice";
            }
            else{
                $sql = "INSERT INTO HealthcareProvider (ID, Name, Address, Type, Price)
                        VALUES ('$HID','$HName', '$HAddress', '$HType', '$HPrice')";
                
                mysqli_query($connection, $sql);
                header('location:Dashboard.php'); 
               
            }
        }
        if (isset($_POST['form2'])) {
            
            $DID = filter_input(INPUT_POST, "DID", FILTER_SANITIZE_SPECIAL_CHARS);
            $HID = filter_input(INPUT_POST, "HID", FILTER_SANITIZE_SPECIAL_CHARS);
            $DName = filter_input(INPUT_POST, "DName", FILTER_SANITIZE_SPECIAL_CHARS);
            $DSpecialization = filter_input(INPUT_POST, "DSpecialization", FILTER_SANITIZE_SPECIAL_CHARS);
            $DPrice = filter_input(INPUT_POST, "DPrice", FILTER_SANITIZE_SPECIAL_CHARS);
            
            /*echo "Name is $HName";
            echo "HID is $HID";
            echo "Type is $HType";
            echo "Address is $HAddress";
            echo "Price is $HPrice";*/

            if(empty($DID)){
                echo"Please enter a Doctor ID$DID";
            }
            elseif(empty($HID)){
                echo"Please enter a Hospital ID$HID";
            }
            elseif(empty($DName)){
                echo"Please enter a Name$DName";
            }
            elseif(empty($DSpecialization)){
                echo"Please enter a Specialization $DSpecialization";
            }
            elseif(empty($DPrice)){
                echo"Please enter a Price$DPrice";
            }
            else{
                $sql = "INSERT INTO Doctor (DID, HID, Name, Specialization, Price)
                        VALUES ('$DID','$HID', '$DName', '$DSpecialization', '$DPrice')";
                
                try{
                    mysqli_query($connection, $sql);
                    header('location:Dashboard.php'); 
                }
                catch(mysqli_sql_exception){
                    echo"Form 2 Could not be entered into database :((";
                }
            }

        }
        if (isset($_POST['form3'])) {
            
            $DID = filter_input(INPUT_POST, "DID", FILTER_SANITIZE_SPECIAL_CHARS);
            $HID = filter_input(INPUT_POST, "HID", FILTER_SANITIZE_SPECIAL_CHARS);
           
            /*echo "Name is $HName";
            echo "HID is $HID";
            echo "Type is $HType";
            echo "Address is $HAddress";
            echo "Price is $HPrice";*/

            if(empty($DID)){
                echo"Please enter a Doctor ID$DID";
            }
            elseif(empty($HID)){
                echo"Please enter a Hospital ID$HID";
            }
          
            else{
                $sql = "DELETE FROM DOCTOR
                WHERE DID = $DID AND HID = $HID;
                ";
                
                try{
                    mysqli_query($connection, $sql);
                    header('location:Dashboard.php'); 
                }
                catch(mysqli_sql_exception){
                    echo"Doctor could not be deleted:((";
                }
            }

        }

        if (isset($_POST['form4'])) {
            
            $HName = filter_input(INPUT_POST, "HName", FILTER_SANITIZE_SPECIAL_CHARS);
            $HID = filter_input(INPUT_POST, "HID", FILTER_SANITIZE_SPECIAL_CHARS);
           
            

            if(empty($HName)){
                echo"Please enter hospital name";
            }
            elseif(empty($HID)){
                echo"Please enter a Hospital ID";
            }
          
            else{
                $sql = "DELETE FROM healthcareprovider
                WHERE Name = '$HName' AND ID = $HID;
                ";
                
                try{
                    mysqli_query($connection, $sql);
                    header('location:Dashboard.php'); 
                }
                catch(mysqli_sql_exception){
                    echo"Hospital could not be deleted:((";
                }
            }

        }
    }
    mysqli_close($connection);
?>