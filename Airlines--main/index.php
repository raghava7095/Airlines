<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airlines Management System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/flight.png" type="image/x-icon">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="index.php"><img id="logo" src="images/logo.jpg"/>Airlines</a>
        </div>
        <ul class="navbar-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
        <!-- Hamburger Menu -->
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- Welcome Section -->
    <section class="welcome">
        <div class="welcome-text">
            <h1 id="typingText"></h1>
            <p>Your trusted platform for managing flights, bookings, and more.</p>
            <br/>
            <a href="login.php" class="btn">Get Started</a> 
        </div>
    </section>

    <!-- About / Services Section -->
    <section id="services" class="services">
        <h2>Our Services</h2>
        <div class="service-list">
            <div class="service" data-description="Manage all aspects of airports, including take-offs, landings, and more.">
                <a class="link" href="login.php"><img class="img" src="images/Airports.jpg" alt="Airports"><br>Manage Airports</a>
            </div>
            <div class="service" data-description="Handle airline data such as scheduling, maintenance, and management.">
                <a class="link" href="login.php"><img class="img" src="images/aielinemanage.jpg" alt="Airlines"><br>Manage Airlines</a>
            </div>
            <div class="service" data-description="Manage flights, including schedules, routes, and flight status.">
                <a class="link" href="login.php"><img class="img" src="images/flight.jpg" alt="Flights"><br>Manage Flights</a>
            </div>
            <div class="service" data-description="Manage customer bookings and reservations with ease.">
                <a class="link" href="login.php"><img class="img" src="images/th.jpg" alt="Bookings"><br>Manage Bookings</a>
            </div>
            <div class="service" data-description="Oversee the crew's schedules, assignments, and management.">
                <a class="link" href="login.php"><img class="img" src="images/crews.jpg" alt="Crew"><br>Manage Crew</a>
            </div>
            <div class="service" data-description="Ticket management: issuance, cancellations, and modifications.">
                <a class="link" href="login.php"><img class="img" src="images/ticket.jpg" alt="Tickets"><br>Manage Tickets</a>
            </div>
        </div>
        <div class="service-actions">
            <a href="login.php" class="btn">Login to Explore More</a> 
            <a href="login.php" class="btn">Get Started</a> 
        </div>
    </section>
    <!-- <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeLogin">×</span>
            <h2>Login</h2>
            <form action="login_process.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeRegister">×</span>
            <h2>Register</h2>
            <form action="register_process.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Register</button>
            </form>
        </div> -->
    </div>

    <!-- JavaScript -->
    <script src="script.js"></script> 
</body>
<!-- Footer Section -->
<footer class="footer">
    <p>&copy; 2024 Airlines Management System. All rights reserved.</p>
</footer>

</html>
