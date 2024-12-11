<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Quản lý danh mục quần áo')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
        }

        .navbar {
            background-color: #343a40;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .nav-link {
            color: #f8f9fa;
            font-weight: 500;
            transition: color 0.3s, background-color 0.3s;
        }

        .navbar .nav-link:hover {
            background-color: #495057;
            border-radius: 5px;
        }

        .footer {
            background-color: #343a40;
            color: #f8f9fa;
            padding: 40px 20px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-section {
            margin-bottom: 20px;
        }

        .footer-section h3 {
            margin-bottom: 15px;
            font-weight: 600;
        }

        .footer-section p {
            margin: 5px 0;
        }

        .footer-section .social-icons a {
            color: #f8f9fa;
            margin-right: 10px;
            font-size: 18px;
            transition: color 0.3s;
        }

        .footer-section .social-icons a:hover {
            color: #ffc107;
        }

        .email-input {
            padding: 10px;
            border: none;
            border-radius: 3px;
            margin-right: 5px;
            outline: none;
        }

        .email-input:focus {
            border: 1px solid #ffc107;
        }

        button[type="submit"] {
            background-color: #ffc107;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #e0a800;
        }

        .header-container .menu ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        .header-container .menu ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
        }

        .header-container .menu ul li a:hover {
            color: #ffc107;
        }

        .container {
            max-width: 1200px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-white">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="asset/img/logo.png" alt="Logo" class="img-fluid" style="height: 40px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/product">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/login">Login</a>
                                <a class="dropdown-item" href="createaccount/">Sign up</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="footer-section logo">
            <h1>GN</h1>
            <p>The Devil Nest</p>
        </div>
        <div class="footer-section contact">
            <h3>Contact</h3>
            <p>+123456789</p>
            <p>thedevilnestvietnam.com</p>
            <p>88 Tran Nguyen Han, Hai Phong, Viet Nam</p>
        </div>
        <div class="footer-section openhours">
            <h3>Open Hours</h3>
            <p>Weekdays: 9:00 AM - 20:30 PM</p>
            <p>Monday: 9:00 AM - 19:00 PM</p>
            <p>Sunday: Closed</p>
        </div>
        <div class="footer-section subscribe">
            <h3>Subscribe</h3>
            <form action="#">
                <input type="email" placeholder="Your email" class="email-input">
                <button type="submit">Subscribe</button>
            </form>
            <div class="social-icons mt-3">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-square"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
