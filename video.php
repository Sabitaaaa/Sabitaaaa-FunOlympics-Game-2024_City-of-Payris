<?php
session_start(); //to start the session 
?>

<!doctype html>
<html lang="en">

<head>
    <title>Welcome to Fun Olympic Games 2024</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="United Limited| Real State Business| Buy House| Buy Land">
    <meta name="description" content="United Limited| Real State Business| Buy House| Buy Land">
    <meta name="author" content="Asbin Magar">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo2.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Monoton&family=Roboto:wght@100;300;400&display=swap"
        rel="stylesheet">
    <style>
      .comment-box {
    width: 52%;
    margin-bottom: 52px; /* You can adjust this value as needed */
    height: 10rem; /* 96 in Tailwind converted to rem */
    background-color: #1f2937; /* bg-gray-800 in Tailwind */
    color: white; /* text-white in Tailwind */
    border-radius: 0.5rem; /* rounded-lg in Tailwind */
}

.comment-box-heading {
    font-size: 1.125rem; /* text-lg in Tailwind */
    font-weight: 600; /* font-semibold in Tailwind */
    margin-bottom: 0.5rem; /* mb-2 in Tailwind */
}

.comment-box-textarea {
    width: 100%;
    height: 10rem; /* 80 in Tailwind converted to rem */
    background-color: #4b5563; /* bg-gray-900 in Tailwind */
    color: white; /* text-white in Tailwind */
    padding: 0.5rem; /* p-2 in Tailwind */
    border-radius: 0.375rem; /* rounded-md in Tailwind */
    resize: none; /* resize-none in Tailwind */
}

    </style>
</head>

<body>
    <?php
    if (!isset($_SESSION['username'])) {
        include 'header.php';
    } else {
    include 'userheader.php';
    }
    ?>

    <div class="jumbotron jumbotron-fluid mb-0 " style="margin-top: 5%; padding: 2rem 2rem;">
        <div class="container text-center">
            <h1 class="display-4"> Live Videos</h1>
        </div>
    </div>
    <!-- main body start  -->
    <div class="container-fluid bg-white py-5">
        <div class="container-fuild">
            <div class="row">
                <div class="col-md-9 pl-5">
                    <hr class="my-2">

                    <?php
                    // <!-- creating variable  -->
                    $dir = glob('assets/video/{*.mp4}', GLOB_BRACE);
                    //  loop start 
                    foreach ($dir as $value) {

                        ?>
                        <!-- photo insert  -->
                        <a href="<?php echo $value; ?>">
                            <!-- <video src="<?php echo $value; ?>" alt="Gurus of Fitness" width="300px" align="left" hspace="5px"
                                vspace="5px">  or -->
                            
<center>
                                <video width="640px" class="mt-5" height="350px" controls>
                                    <source src="<?php echo $value; ?>" type="video/mp4" />
                                    <!-- <source src="<?php echo $value; ?>" type="video/ogg" /> -->
                                </video>
                            </a>
                                <div class="comment-box mb-3">
    <h2 class="comment-box-heading">Live Comment Box</h2>
    <textarea class="comment-box-textarea" placeholder="Type your comment here..."></textarea>
</div>
                    </center>                           
                        <!-- loop end  -->
                        <?php
                    }
                    ?>
                </div>
                <div class="col-md-3">
                    <?php
                    include 'rightbar.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- main body end  -->

    <?php
    include 'footer.php';
    ?>
</body>

</html>