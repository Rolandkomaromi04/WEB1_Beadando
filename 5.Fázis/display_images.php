<?php
require_once('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="pictures/icon.jpg">
    <title>Uploaded Images</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .gallery div {
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .gallery img {
            display: block;
            max-width: 100%;
            max-height: 200px;
            width: auto;
            height: auto;
        }
        .gallery div span {
            display: block;
            padding: 5px;
            background-color: #007bff;
            color: white;
            text-align: center;
            font-size: 0.9em;
        }
        a {
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Uploaded Images</h1>
    <div class="gallery">
        <?php
        $result = $conn->query("SELECT * FROM uploaded_images ORDER BY uploaded_at DESC");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div><img src="pictures/' . htmlspecialchars($row['image_name']) . '" alt="Image uploaded by ' . htmlspecialchars($row['uploaded_by']) . '">';
                echo '<span>' . htmlspecialchars($row['uploaded_by']) . '</span></div>';
            }
        } else {
            echo "No images uploaded yet.";
        }
        ?>
    </div>
    <a href="index.php?oldal=uploaded">Upload Another Image</a>
</body>
</html>
