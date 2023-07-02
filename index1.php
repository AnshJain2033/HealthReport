
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Form</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
    <form action="database1.php" method="post" enctype="multipart/form-data">
    <div class="card">
        <input type="text" name="name" required placeholder="Enter Your Name">
        <input type="email" name="email" required placeholder="Enter Your Email">
        <input type="number" name="age" required placeholder="Enter Your Age">
        <input type="number" name="weight" required placeholder="Enter Your Weight (in Kgs)">
        <input type="file"name="healthReport" required id='pdf-input' placeholder="Upload Health Report">
        <embed src="" id="pdf-preview-embed"
         width="100%" height="100%" type="application/pdf">
            <script>
                const pdfInput = document.getElementById('pdf-input');
                const pdfPreviewEmbed = document.getElementById('pdf-preview-embed');
        
                pdfInput.addEventListener('change', function(e) {
                    const file = e.target.files[0];
                    const fileURL = URL.createObjectURL(file);
                    pdfPreviewEmbed.setAttribute('src', fileURL);
                });
            </script>
    <input type="submit" name="submit" id="button"></input>
   <div id="search-btn"><a href="search.php">SEARCH REPORT</a></div> 
    </div>
</form>
</body>
</html>


