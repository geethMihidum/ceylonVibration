<?php require "connection.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="icon" href="resources/icons/logo2.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="col-12">
        <?php require "header.php" ?>
    </div>
    <!-- header -->
    <div class="container-fluid g-0 vh-100" style="background-color: black;">
        <div class="col-12 pb-5">

            <div id="carouselExampleControls" class="d-none d-lg-block carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner justify-content-center">
                    <div class="carousel-item active mt-5 pt-5">
                        <?php

                        $event = Database::search("SELECT * FROM event WHERE status = 1 order by date ASC LIMIT 0,2");
                        $num = $event->num_rows;

                        for ($y = 0; $y < $num; $y++) {
                            $d = $event->fetch_assoc();

                        ?>

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="row">

                                        <?php
                                        $imgresult = Database::search("SELECT * FROM img WHERE `id`='" . $d["img_id"] . "'");
                                        $img = $imgresult->fetch_assoc();
                                        ?>

                                        <div class="col-6 d-flex justify-content-end align-self-center">
                                            <div class="card text-center justify-content-center" style="width: 18rem; border: none;">
                                                <!-- <img src="..." class="card-img-top" alt="..."> -->
                                                <div class="card-body justify-content-center" style="background-color: black;">
                                                    <h5 class="card-title text-white fw-bold text-center bannerText" style="font-size: 30px;"><?php echo $d["event_name"];  ?></h5>
                                                    <p class="card-text text-white text-center bannerText"><?php echo $d["smallDescription"];  ?></p>
                                                    <button class="btn bg-white fw-bold rounded-pill w-50 bannerButton">BUY</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card">
                                                <img src="<?php echo $img["name"];  ?>" class="card-img-top img-fluid" alt="...">

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-6 ">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card">
                                                <img src="<?php echo $img["name"];  ?>" class="card-img-top img-fluid" alt="...">

                                            </div>
                                        </div>
                                        <div class="col-6 d-flex justify-content-start align-self-center">
                                            <div class="card text-center justify-content-center" style="width: 18rem; border: none;">

                                                <div class="card-body justify-content-center" style="background-color: black;">
                                                    <h5 class="card-title text-white fw-bold text-center bannerText" style="font-size: 30px;"><?php echo $d["event_name"];  ?></h5>
                                                    <p class="card-text text-white text-center bannerText"><?php echo $d["smallDescription"];  ?></p>
                                                    <button class="btn bg-white fw-bold rounded-pill w-50 bannerButton">BUY</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>



                    </div>


                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        <?php

                        }

        ?>

        <!-- end  -->

        <div id="carouselExampleControls" class="d-lg-none carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner justify-content-center">
                <div class="carousel-item active">

                    <?php

                    $event = Database::search("SELECT * FROM event WHERE status = 1 order by date ASC LIMIT 0,2");
                    $num = $event->num_rows;

                    for ($y = 0; $y < $num; $y++) {
                        $d = $event->fetch_assoc();

                    ?>

                        <div class="row">

                            <div class="col-lg-6 ">
                                <div class="row">
                                    <?php
                                    $imgresult = Database::search("SELECT * FROM img WHERE `id`='" . $d["img_id"] . "'");
                                    $img = $imgresult->fetch_assoc();
                                    ?>
                                    <div class="col-10 mx-auto">
                                        <div class="card">
                                            <img src="<?php echo $img["name"];  ?>" class="card-img-top img-fluid" alt="...">

                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center align-self-center">
                                        <div class="card text-center justify-content-center" style="width: 18rem; border: none;">
                                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                                            <div class="card-body justify-content-center" style="background-color: black;">
                                                <h5 class="card-title text-white fw-bold text-center bannerText" style="font-size: 30px;"><?php echo $d["event_name"];  ?></h5>
                                                <p class="card-text text-white text-center bannerText"><?php echo $d["smallDescription"];  ?></p>
                                                <button class="btn bg-white fw-bold rounded-pill w-50 bannerButton">BUY</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>




                        </div>

                    <?php

                    }

                    ?>

                </div>


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        </div>
    </div>
    <!-- header -->


    <!-- upcoming events -->

    <div class="container-fluid ">
        <div class="row">

            <div class="background text-dark col-12 d-grid mx-auto">
                <div class="row">
                    <div class="col-12 ps-5 mt-3 pt-3 d-flex justify-content-center">
                        <p class="title01">UPCOMING EVENTS</p>
                    </div>

                    <?php

                    $event = Database::search("SELECT * FROM event WHERE status=1 order by date ASC LIMIT 0,3");
                    $num = $event->num_rows;

                    for ($y = 0; $y < $num; $y++) {
                        $d = $event->fetch_assoc();

                    ?>

                        <div class="col-12 col-sm-8 col-md-4 col-lg-3 mt-4 px-1 d-flex justify-content-center mx-auto ">
                            <div class="row">
                                <?php
                                $imgresult = Database::search("SELECT * FROM img WHERE `id`='" . $d["img_id"] . "'");
                                $img = $imgresult->fetch_assoc();
                                ?>
                                <a href='<?php echo "eventSingleView.php?id=" . ($d["id"]) ?>'>
                                    <div class="col-12 d-flex justify-content-center eventdiv">
                                        <img src="<?php echo $img["name"];  ?>" class="eventbanner" />
                                    </div>
                                </a>
                                <div class="col-6 d-flex justify-content-center mx-auto timer">
                                    <div class="row">
                                        <div class="text-dark col-12 d-flex justify-content-center pt-2">
                                            <p class="title02">STARTING</p>
                                        </div>
                                        <div class="col-12 text-dark d-flex">
                                            <div class="col-12 bg-dark text-white p-1 pt-3 d-flex justify-content-center timernumberbox">
                                                <p class="timernumbers">
                                                    <?php
                                                    $currentDate = date('Y-m-d');
                                                    $endDate = $d["date"];

                                                    $startTime = strtotime($currentDate);
                                                    $endTime = strtotime($endDate);

                                                    $days = ($endTime - $startTime) / (60 * 60 * 24);

                                                    echo $days;
                                                    ?>
                                                    DAYS MORE</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-7 mt-2 d-flex justify-content-center mx-auto">
                                    <div class="row">
                                        <button class="btn-dark button">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php

                    }

                    ?>


                    <div class="col-12 mt-5 d-flex justify-content-center mx-auto pb-5">
                        <button class="btn pastEventsButton text-dark ">VIEW ALL <i class="bi bi-arrow-right"></i> </button>
                    </div>

                </div>

            </div>


        </div>
    </div>

    <!-- upcoming events -->


    <!-- past events -->

    <div class="container pt-5 pb-5 d-none">

        <div class="row">
            <div class="col-12 pt-3 pb-3">
                <p class="pastEventsTitle text-center">PAST EVENTS</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-3">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-10 d-flex justify-content-end align-items-center">

                                <p class="pastEventsText fw-bold" style="font-size: 45px;">17</p>

                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-2 ">

                                <div class="col-6 col-sm-4 col-md-6 col-lg-12 d-flex align-items-end justify-content-end">
                                    <p class="pastEventsText">Sat</p>
                                </div>
                                <div class="col-6 col-sm-4 col-md-6 col-lg-12 d-flex justify-content-end">
                                    <p class="pastEventsText fw-bold">Apr</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <p class="pastEventsText" style="font-size: 45px;">Music Event Name</p>
                    </div>
                    <div class="col-3 align-self-center">
                        <button class="btn text-white pastEventsBtn" style="background-color: black;">Details</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-8">
                            <hr class="hr">
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-3">
                        <div class="row">
                            <div class="col-10 d-flex justify-content-end align-items-center">

                                <p class="pastEventsText fw-bold" style="font-size: 45px;">17</p>

                            </div>
                            <div class="col-2 ">

                                <div class="col-12 d-flex align-items-end justify-content-end">
                                    <p class="pastEventsText">Sat</p>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <p class="pastEventsText fw-bold">Apr</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <p class="pastEventsText" style="font-size: 45px;">Music Event Name</p>
                    </div>
                    <div class="col-3 align-self-center">
                        <button class="btn text-white pastEventsBtn" style="background-color: black;">Details</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-8">
                            <hr class="hr">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-3">
                        <div class="row">
                            <div class="col-10 d-flex justify-content-end align-items-center">

                                <p class="pastEventsText fw-bold" style="font-size: 45px;">17</p>

                            </div>
                            <div class="col-2 ">

                                <div class="col-12 d-flex align-items-end justify-content-end">
                                    <p class="pastEventsText">Sat</p>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <p class="pastEventsText fw-bold">Apr</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <p class="pastEventsText" style="font-size: 45px;">Music Event Name</p>
                    </div>
                    <div class="col-3 align-self-center">
                        <button class="btn text-white pastEventsBtn" style="background-color: black;">Details</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-8">
                            <hr class="hr">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-3">
                        <div class="row">
                            <div class="col-10 d-flex justify-content-end align-items-center">

                                <p class="pastEventsText fw-bold" style="font-size: 45px;">17</p>

                            </div>
                            <div class="col-2 ">

                                <div class="col-12 d-flex align-items-end justify-content-end">
                                    <p class="pastEventsText">Sat</p>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <p class="pastEventsText fw-bold">Apr</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <p class="pastEventsText" style="font-size: 45px;">Music Event Name</p>
                    </div>
                    <div class="col-3 align-self-center">
                        <button class="btn text-white pastEventsBtn" style="background-color: black;">Details</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-8">
                            <hr class="hr">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-3">
                        <div class="row">
                            <div class="col-10 d-flex justify-content-end align-items-center">

                                <p class="pastEventsText fw-bold" style="font-size: 45px;">17</p>

                            </div>
                            <div class="col-2 ">

                                <div class="col-12 d-flex align-items-end justify-content-end">
                                    <p class="pastEventsText">Sat</p>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <p class="pastEventsText fw-bold">Apr</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <p class="pastEventsText" style="font-size: 45px;">Music Event Name</p>
                    </div>
                    <div class="col-3 align-self-center">
                        <button class="btn text-white pastEventsBtn" style="background-color: black;">Details</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-8">
                            <hr class="hr">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <button class="btn pastEventsButton text-dark ">VIEW ALL <i class="bi bi-arrow-right"></i> </button>
            </div>
        </div>

    </div>

    <!-- past events -->


    <!-- gallery -->


    <div class="container-fluid">
        <div class="row">

            <div class="background text-white bg-dark col-12 d-grid mx-auto">
                <div class="row">
                    <div class="col-12 ps-5 mt-3 pt-3 d-flex justify-content-center">
                        <p class="title01">GALLERY</p>
                    </div>

                    <div id="carouselExample" class="carousel slide d-none d-lg-block">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="row">

                                        <?php

                                        $gallery = Database::search("SELECT * FROM gallery order by date DESC LIMIT 0,2");
                                        $num = $gallery->num_rows;

                                        for ($y = 0; $y < $num; $y++) {
                                            $d = $gallery->fetch_assoc();

                                        ?>
                                            <div class=" bg-black mt-4 col-6 ">
                                                <?php echo $d["Link"]; ?>
                                                <p class="p1 d-flex justify-content-center">
                                                    <?php echo $d["videoName"]; ?>
                                                </p>
                                            </div>

                                        <?php
                                        }
                                        ?>




                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="row">

                                        <?php

                                        $gallery = Database::search("SELECT * FROM gallery order by date DESC LIMIT 2,2");
                                        $num = $gallery->num_rows;

                                        for ($y = 0; $y < $num; $y++) {
                                            $d = $gallery->fetch_assoc();

                                        ?>
                                            <div class=" bg-black mt-4 col-6 ">
                                                <?php echo $d["Link"]; ?>
                                                <p class="p1 d-flex justify-content-center">
                                                    <?php echo $d["videoName"]; ?>
                                                </p>
                                            </div>

                                        <?php
                                        }
                                        ?>


                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="row">
                                        <?php

                                        $gallery = Database::search("SELECT * FROM gallery order by date DESC LIMIT 4,2");
                                        $num = $gallery->num_rows;

                                        for ($y = 0; $y < $num; $y++) {
                                            $d = $gallery->fetch_assoc();

                                        ?>
                                            <div class=" bg-black mt-4 col-6 ">
                                                <?php echo $d["Link"]; ?>
                                                <p class="p1 d-flex justify-content-center">
                                                    <?php echo $d["videoName"]; ?>
                                                </p>
                                            </div>

                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- small screen -->

                    <div id="carouselExample" class="carousel slide d-lg-none">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="row">

                                        <?php

                                        $gallery = Database::search("SELECT * FROM gallery order by date DESC LIMIT 0,1");
                                        $num = $gallery->num_rows;

                                        for ($y = 0; $y < $num; $y++) {
                                            $d = $gallery->fetch_assoc();

                                        ?>
                                            <div class=" bg-black mt-4 col-10 ">
                                                <?php echo $d["Link"]; ?>
                                                <p class="p1 d-flex justify-content-center">
                                                    <?php echo $d["videoName"]; ?>
                                                </p>
                                            </div>

                                        <?php
                                        }
                                        ?>




                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="row">

                                        <?php

                                        $gallery = Database::search("SELECT * FROM gallery order by date DESC LIMIT 1,1");
                                        $num = $gallery->num_rows;

                                        for ($y = 0; $y < $num; $y++) {
                                            $d = $gallery->fetch_assoc();

                                        ?>
                                            <div class=" bg-black mt-4 col-10 ">
                                                <?php echo $d["Link"]; ?>
                                                <p class="p1 d-flex justify-content-center">
                                                    <?php echo $d["videoName"]; ?>
                                                </p>
                                            </div>

                                        <?php
                                        }
                                        ?>


                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="row">
                                        <?php

                                        $gallery = Database::search("SELECT * FROM gallery order by date DESC LIMIT 2,1");
                                        $num = $gallery->num_rows;

                                        for ($y = 0; $y < $num; $y++) {
                                            $d = $gallery->fetch_assoc();

                                        ?>
                                            <div class=" bg-black mt-4 col-10 ">
                                                <?php echo $d["Link"]; ?>
                                                <p class="p1 d-flex justify-content-center">
                                                    <?php echo $d["videoName"]; ?>
                                                </p>
                                            </div>

                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- small screen -->

                    <div class="col-12 d-flex justify-content-center mb-5">
                        <a class="btn btn-outline-light " href="allPastEvents.php">View All</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- gallery -->


    <!-- about us -->

    <div class="container">
        <div class="row">

            <div class="col-12 d-grid mx-auto">
                <div class="row">
                    <div class="col-12 ps-5 pt-4 mt-3 d-flex ">
                        <p class="title01">ABOUT US </p>

                    </div>
                    <div class="col-12 col-lg-6 ps-5 pt-1 mt-2 d-flex ">
                        <p class="p1">Stay up-to-date with LA FORESTA's latest news and events. From backstage glimpses to breaking announcements</p>,
                    </div>
                </div>

                <!-- large screen  -->

                <div id="carouselExampleControls" class="carousel carousel-dark slide d-none d-lg-block" data-bs-ride="carousel">
                    <div class="carousel-inner justify-content-center">
                        <div class="carousel-item active">
                            <div class="row">

                                <?php

                                $teamMembors = Database::search("SELECT * FROM `team` LIMIT 0,3");
                                $num = $teamMembors->num_rows;

                                for ($y = 0; $y < $num; $y++) {
                                    $d = $teamMembors->fetch_assoc();

                                ?>
                                    <div class="col-md-4">

                                        <div class="row">
                                            <div class="col-12">
                                                <a href='<?php echo "ProfileSingleView.php?id=" . ($d["id"]) ?>'>
                                                    <div class="card">
                                                        <?php
                                                        $imgresult = Database::search("SELECT * FROM `img` WHERE `id`='" . $d["img_id"] . "'");
                                                        $img = $imgresult->fetch_assoc();
                                                        ?>
                                                        <img src="<?php echo $img["name"]; ?>" class="card-img-top img-fluid img-fluid pt-5 pb-5 w-75 h-auto mx-auto" alt="..." style="height: 600px;">
                                                    </div>
                                                </a>
                                                <p class="p2 pt-3 "><?php echo $d["fName"]; ?> <?php echo $d["lName"]; ?></p>
                                                <hr class="hr-break-1 pb-0 " />
                                                <p class="p1"><?php echo $d["type"]; ?></p>
                                            </div>
                                        </div>

                                    </div>



                                <?php

                                }

                                ?>
                            </div>
                        </div>

                    </div>
                    <button class=" carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- small screen -->




                <div id="carouselExample" class="carousel slide d-lg-none">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <?php

                            $teamMembors = Database::search("SELECT * FROM `team` LIMIT 0,1");
                            $num = $teamMembors->num_rows;

                            for ($y = 0; $y < $num; $y++) {
                                $d = $teamMembors->fetch_assoc();

                            ?>

                                <div class="col-12">
                                    <a href='<?php echo "ProfileSingleView.php?id=" . ($d["id"]) ?>'>
                                        <div class="card">
                                            <?php
                                            $imgresult = Database::search("SELECT * FROM `img` WHERE `id`='" . $d["img_id"] . "'");
                                            $img = $imgresult->fetch_assoc();
                                            ?>
                                            <img src="<?php echo $img["name"]; ?>" class="card-img-top img-fluid img-fluid pt-5 pb-5 w-75 h-auto mx-auto" alt="..." style="height: 600px;">
                                        </div>
                                    </a>
                                    <p class="p2 pt-3"><?php echo $d["fName"]; ?> <?php echo $d["lName"]; ?></p>
                                    <hr class="hr-break-1 pb-0 " />
                                    <p class="p1">Singer</p>
                                </div>

                            <?php

                            }

                            ?>

                        </div>

                        <div class="carousel-item">
                            <?php

                            $teamMembors = Database::search("SELECT * FROM `team` LIMIT 1,1");
                            $num = $teamMembors->num_rows;

                            for ($y = 0; $y < $num; $y++) {
                                $d = $teamMembors->fetch_assoc();

                            ?>

                                <div class="col-12">
                                    <a href='<?php echo "ProfileSingleView.php?id=" . ($d["id"]) ?>'>
                                        <div class="card">
                                            <?php
                                            $imgresult = Database::search("SELECT * FROM `img` WHERE `id`='" . $d["img_id"] . "'");
                                            $img = $imgresult->fetch_assoc();
                                            ?>
                                            <img src="<?php echo $img["name"]; ?>" class="card-img-top img-fluid img-fluid pt-5 pb-5 w-75 h-auto mx-auto" alt="..." style="height: 600px;">
                                        </div>
                                    </a>
                                    <p class="p2 pt-3"><?php echo $d["fName"]; ?> <?php echo $d["lName"]; ?></p>
                                    <hr class="hr-break-1 pb-0 " />
                                    <p class="p1">Singer</p>
                                </div>

                            <?php

                            }

                            ?>
                        </div>
                        <div class="carousel-item">
                            <?php

                            $teamMembors = Database::search("SELECT * FROM `team` LIMIT 2,1");
                            $num = $teamMembors->num_rows;

                            for ($y = 0; $y < $num; $y++) {
                                $d = $teamMembors->fetch_assoc();

                            ?>

                                <div class="col-12">
                                    <a href='<?php echo "ProfileSingleView.php?id=" . ($d["id"]) ?>'>
                                        <div class="card">
                                            <?php
                                            $imgresult = Database::search("SELECT * FROM `img` WHERE `id`='" . $d["img_id"] . "'");
                                            $img = $imgresult->fetch_assoc();
                                            ?>
                                            <img src="<?php echo $img["name"]; ?>" class="card-img-top img-fluid img-fluid pt-5 pb-5 w-75 h-auto mx-auto" alt="..." style="height: 600px;">
                                        </div>
                                    </a>
                                    <p class="p2 pt-3"><?php echo $d["fName"]; ?> <?php echo $d["lName"]; ?></p>
                                    <hr class="hr-break-1 pb-0 " />
                                    <p class="p1">Singer</p>
                                </div>

                            <?php

                            }

                            ?>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>



            </div>

            <div class="col-12 d-flex justify-content-center mb-5">
                <p class="mx-auto"><a class="btn btn-outline-dark" href="team.php">View More...</a> </p>
            </div>

        </div>
    </div>

    <!-- about us -->


    <!-- footer -->
    <div class="col-12 pb-5 d-block" style="background-color: #2B2B2B; ">
        <div class="container text-white ps-5 pe-5">
            <div class="row d-none d-md-block">
                <div class="col-12 d-flex justify-content-center pb-5">
                    <div class="col-5 footerSubscribe rounded-pill">
                        <div class="form">
                            <div class="row row-cols-sm-1">
                                <div class="col-8">
                                    <input type="email" class="form-control rounded-pill w-100 text-center" id="exampleInputEmail1" placeholder="Get Our Latest News" aria-describedby="emailHelp">
                                </div>
                                <div class="col-4">
                                    <button class="btn w-100 text-white">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-6">
                    <div class="col-12">
                        <p class="footerText fw-bold" style="font-size: 42px;">Contact Us</p>
                    </div>
                    <div class="col-12">
                        <p class="footerText">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-12">
                        <p class="footerText"><i class="bi bi-geo-alt-fill"></i> Address here</p>
                    </div>
                    <div class="col-12">
                        <p class="footerText"><i class="bi bi-envelope-fill"></i> ceyloraevents@ceylonvibration.com</p>
                    </div>
                    <div class="col-12">
                        <p class="footerText"><i class="bi bi-telephone-fill"></i> +94 123 456 789</p>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-6 ps-md-5 ps-lg-5">
                    <div class="col-12">
                        <p class="footerText fw-bold" style="font-size: 42px;">Follow Us On</p>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2"><i class="bi bi-facebook fa-3x" style="font-size: 40px;"></i></div>
                            <div class="col-2"><i class="bi bi-youtube" style="font-size: 40px;"></i></div>
                            <div class="col-2"><i class="bi bi-twitter" style="font-size: 40px;"></i></div>
                            <div class="col-2"><i class="bi bi-instagram" style="font-size: 40px;"></i></div>
                        </div>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require "footer.php" ?>

    <!-- footer -->

</body>

</html>