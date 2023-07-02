<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="card">
        <h2 >PDF NOT FOUND</h2>
        <h2>Redirecting you to the Search Page...</h2>
    </div>

    <?php
        echo '<script>
            setTimeout(function() {
                window.location.href = "search.php";
            }, 5000);
        </script>';
    ?>
</body>
</html>
