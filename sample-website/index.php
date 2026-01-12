<?php
// no backend logic needed yet
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample PHP Page</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f5f5f5;
        }

        /* Navigation bar */
        .navbar {
            background-color: #333;
            padding: 0;
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar li {
            margin: 0;
        }

        .navbar a {
            display: block;
            padding: 14px 20px;
            color: #ffffff;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #575757;
        }

        /* Page content */
        .content {
            padding: 20px;
        }

        .content ul {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            width: fit-content;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
    </nav>

    <!-- Content -->
    <div class="content">
        <h2>Sample Unordered List</h2>
        <ul>
            <li>First item</li>
            <li>Second item</li>
            <li>Third item</li>
        </ul>
    </div>

</body>
</html>
