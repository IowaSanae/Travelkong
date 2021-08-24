<?php
session_start();
require('db.php');

if (isset($_POST['username'])) {
    // stripslashes dùng để loại bỏ dấu "\"
    $fullname = stripslashes($_REQUEST['fullname']);
    // mysqli_real_escape_string dùng để loại bỏ ký tự đặc biệt
    $fullname = mysqli_real_escape_string($mysqli, $username);
    $email = stripslashes($_REQUEST['email']);
    $email =  mysqli_real_escape_string($mysqli, $email);
    $message = stripslashes($_REQUEST['message']);
    $message = mysqli_real_escape_string($mysqli, $message);
    $insert = "INSERT INTO register (Fullname, Email, Message) VALUES ('$fullname', '$email', '$message')";
    $check_email = mysqli_query($mysqli, "SELECT * FROM register WHERE Email = '$email'");
    if (mysqli_num_rows($check_email) >= 1) {
        echo ("Email này đã được đăng ký");
        header("Refresh: 2");
    } else {
        $final = mysqli_query($mysqli, $insert);
        if ($final) {
            echo '<div id="form-message-success">' . "Tin nhắn của bạn đã được gửi!" . '</div>';
        } else {
            echo ("Có lỗi xảy ra: " . $insert);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row align-items-stretch no-gutters contact-wrap">
                <div class="col-md-12">
                    <div class="form h-100">
                        <h3>Contact us</h3>
                        <form class="mb-5" method="post" id="contactForm" name="contactForm">
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="" class="col-form-label">Tên</label>
                                    <input type="text" class="form-control" name="fullname" id="fyllname" placeholder="Your name">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="" class="col-form-label">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="message" class="col-form-label">Lời nhắn</label>
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                                    <span class="submitting"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>