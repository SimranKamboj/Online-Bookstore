<?php include('connect.php') ?>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </header>

    <h1>Register</h1>
    <form id="register-form" action="connect.php" method="post">
        <label for="firstname">First Name:</label>
        <input type="text" name="first_name" required>
        <br><br>
        <label for="lastname">Last Name:</label>
        <input type="text" name="last_name" required>
        <br><br> 
        <label for="email">Email Address:</label>
        <input type="text" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br><br>
        <button type="submit">Register</button>
    </form>

    <footer>
        <p>&copy; 2024 Online Bookstore</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
