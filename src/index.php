<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!--Ajax-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Import CSS and JS-->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <script type="text/javascript" src="./js/main.js"></script>
    <title>Travelkong</title>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">Travelkong</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./about.php">Về chúng tôi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./contact.php">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./blog.php">Bài viết</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <h2 class="company-name">Travelkong</h2>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../assests/pictures/buildings-6478431_1920.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../assests/pictures/maldives-1993704_1920.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../assests/pictures/plane-841441_1920.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Credits to https://webdamn.com/build-newsletter-system-with-php-and-mysql/ -->
        <div class="row">
            <div class="col-lg-12">
                <div class="main-content">
                    <div class="susbcribe-container">
                        <div class="top">
                            <h2 style="text-align: center">Bạn muốn nhận thông báo khi có bài viết mới?</h2>
                            <h3 style="text-align: center">Hãy nhập tên và email để đăng ký!</h3>
                        </div>
                        <div class="bottom">
                            <div class="status"></div>
                            <form action="./action_page.php" id="subscribeForm" method="post">
                                <input type="text" class="form-control" id="name" placeholder="Họ tên" required="">
                                <span class="text-danger hidden" id="nameError"></span><br>
                                <input type="email" class="form-control" id="email" placeholder="Email" required="">
                                <span class="text-danger hidden" id="emailError"></span><br><br>
                                <input type="button" class="button" id="subscribe" value="Gửi">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <p class="copyright">&copy; Copyrighted 2021 by Travelkong.</p>
</body>

</html>