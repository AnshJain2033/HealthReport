<?php
    // Assuming you have established a database connection
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'test1') or die('Connection Failed' . mysqli_connect_error());
    
    // Assuming you have received the search query with email
    if(isset($_POST['email'])){$searchEmail = $_POST['email']; // Replace with the actual email

    // Prepare and execute the database query
    $sql = "SELECT path FROM users WHERE email = '$searchEmail'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Retrieve the path of the PDF file
        $row = mysqli_fetch_assoc($result);
        $path = $row['path'];

        // Display the PDF file
        if (!empty($path)) {
             echo "<embed src='$path' type='application/pdf' width='100%' height='600px' />";
        } else {
            header("Location: pdfnf.php");
            exit;
        }
    } else {
        header("Location: emailnr.php");
        exit;
    }

    // Close the database connection
    mysqli_close($conn);
}
}
?>
