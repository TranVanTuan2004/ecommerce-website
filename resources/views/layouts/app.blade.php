<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Marseille</title>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    {{-- Custom CSS --}}
    <style>
        .top-bar {
            background: #f8f9fa;
        }

        .social-icons a,
        .nav-links a,
        .actions a {
            margin-right: 15px;
            color: black;
            text-decoration: none;
        }

        .site-name h5 {
            font-weight: bold;
            margin-bottom: 0;
        }

        .site-name small {
            font-size: 0.8rem;
        }

        .left-section,
        .right-section {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .nav-links a {
            margin-right: 10px;
        }

        .actions a i {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    {{-- HEADER --}}
    <div class="top-bar py-2 border-bottom">
        <div class="container">
            <div class="row align-items-center text-center text-md-start">
                {{-- BÊN TRÁI --}}
                <div class="col-md-4 d-flex justify-content-start left-section">
                    <div class="social-icons d-flex">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="nav-links d-none d-md-flex">
                        <a href="#">Our shop</a>
                        <a href="#">About us</a>
                    </div>
                </div>

                {{-- TRUNG TÂM --}}
                <div class="col-md-4 text-center site-name">
                    <h5>Marseille</h5>
                    <small>XSTORE THEME</small>
                </div>

                {{-- BÊN PHẢI --}}
                <div class="col-md-4 nav-links d-flex justify-content-end right-section">
                    <a href="#">Contacts</a>
                    <a href="#">Search</a>
                    <a href="#">Sign In</a>
                    <a href="#"><i class="far fa-heart"></i></a>
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- NỘI DUNG --}}
    <div class="container mt-4">
        @yield('content')
    </div>
</body>

</html>