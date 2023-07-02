<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'test1') or die('Connection Failed' . mysqli_connect_error());

        
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['weight']) && isset($_FILES['healthReport'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $weight = $_POST['weight'];
            
            // Handle file upload
            $healthReport = $_FILES['healthReport']['name'];
            $healthReportTmp = $_FILES['healthReport']['tmp_name'];
            
            // Move the uploaded file to a desired location
            $uploadDirectory = 'pdf/'; 
            $targetPath = $uploadDirectory . $healthReport;
            move_uploaded_file($healthReportTmp, $targetPath);
            
            $sql = "INSERT INTO `users` (`name`, `email`, `age`, `weight`, `healthReport`,`path`) VALUES ('$name', '$email', '$age', '$weight', '$healthReport','$targetPath')";
            $query = mysqli_query($conn, $sql);
            
            if ($query){
                header("Location: entrysuccess.php");
                exit;
            } else {
                header("Location: Unsuccessfull.php");
                exit;
            }
        }
    }
?>
