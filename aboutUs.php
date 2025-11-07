<?php
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/icons/B52DB3F0-649B-4D98-8DFF-9D13E80A193C.png">
    <title>About Us</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body>
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
                        <div class="carousel-item">
                            <div class="row">

                                <!-- <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <img src="resources/images/IMG_20230617_160221_624.jpg" class="card-img-top img-fluid img-fluid pt-5 pb-5 w-75 h-auto mx-auto" alt="..." style="height: 600px;">
                                                <p class="p2 pt-3">Don Rajeew</p>
                                                <hr class="hr-break-1 pb-0 " />
                                                <p class="p1">Singer</p>
                                            </div>

                                        </div>
                                    </div>
                                </div> -->

                                <!-- <div class="col-lg-4 ">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <img src="resources/images/" class="card-img-top img-fluid img-fluid pt-5 pb-5 w-75 h-auto mx-auto" alt="..." style="height: 600px;">
                                                <p class="p2 pt-3">Don Rajeew</p>
                                                <hr class="hr-break-1 pb-0 " />
                                                <p class="p1">Singer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- <div class="col-lg-4 ">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <img src="resources/images/IMG_20230617_160221_624.jpg" class="card-img-top img-fluid img-fluid pt-5 pb-5 w-75 h-auto mx-auto" alt="..." style="height: 600px;">
                                                <p class="p2 pt-3">Don Rajeew</p>
                                                <hr class="hr-break-1 pb-0 " />
                                                <p class="p1">Singer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->



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

                <div id="carouselExampleControls" class="carousel carousel-dark slide d-lg-none " data-bs-ride="carousel">
                    <div class="carousel-inner justify-content-center">
                        <div class="carousel-item active">

                            <?php

                            $teamMembors = Database::search("SELECT * FROM `team` LIMIT 0,1");
                            $num = $teamMembors->num_rows;

                            for ($y = 0; $y < $num; $y++) {
                                $d = $teamMembors->fetch_assoc();

                            ?>

                                <div class="row">
                                    <div class="col-lg-4">
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
                                                <p class="p2 pt-3"><?php echo $d["fName"]; ?> <?php echo $d["lName"]; ?></p>
                                                <hr class="hr-break-1 pb-0 " />
                                                <p class="p1">Singer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php

                            }

                            ?>


                        </div>
                        <!-- <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <img src="resources/images/IMG_20230617_160221_624.jpg" class="card-img-top img-fluid img-fluid pt-5 pb-5 w-75 h-auto mx-auto" alt="..." style="height: 600px;">
                                                <p class="p2 pt-3">Don Rajeew</p>
                                                <hr class="hr-break-1 pb-0 " />
                                                <p class="p1">Singer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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



            </div>

            <div class="col-12 d-flex justify-content-center">
                <p class="mx-auto"><a class="btn btn-outline-dark" href="team.php">View More...</a> </p>
            </div>

        </div>
    </div>
</body>

</html>