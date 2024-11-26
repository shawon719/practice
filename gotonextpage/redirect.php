<?php
    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
        // Perform your logic (e.g., storing data)
        
        // Redirect to another page after processing the form
        header("Location: next_page.php");
        exit(); // Don't forget to call exit after header to stop further script execution
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>
<body>
    <!-- Simple form to submit -->
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
