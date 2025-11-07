<?php

require "connection.php";
if (isset($_GET["id"])) {
    $pId = $_GET["id"];
    $Profile = Database::search("SELECT * FROM `team` JOIN socialmedia ON team.socialMedia_id=socialMedia.id JOIN img ON team.img_id=img.id WHERE team.id='" . $pId . "';");
    $num = $Profile->num_rows;

    if ($num == 1) {

        $x = $Profile->fetch_assoc();
?>
        <?php

        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" href="resources/icons/B52DB3F0-649B-4D98-8DFF-9D13E80A193C.png">
            <title>Event Details.</title>
            <link rel="stylesheet" href="bootstrap.css" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
            <link rel="stylesheet" href="style.css" />
        </head>

        <body>

            <div class="col-12">
                <?php require "header.php" ?>
            </div>

            <div class="container-fluid">
                <div class="row">

                    <div class="bg-dark text-white col-12 ">
                        <div class="row">

                            <div class="col-12 col-lg-4 d-grid gap-3 mx-auto ">
                                <div class="row">

                                    <div class="col-12 d-flex justify-content-center ">
                                        <!-- <div class="row"> -->
                                        <img src="<?php echo $x["name"]; ?>" class="img-fluid pt-5 pb-5 w-75 h-auto" />
                                        <!-- </div> -->
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-lg-6 d-grid mx-auto  pt-4">
                                <div class="row">

                                    <p class=" title01 pt-1 pb-0"><?php echo $x["fName"]; ?> <?php echo $x["lName"]; ?> </p>

                                    <hr class="hr-break-1 pb-0" />

                                    <p class=" p1 ">
                                        <?php echo $x["description"]; ?>
                                    </p>

                                    <!-- <hr class="hr-break-1" /> -->

                                    <div class="col-12 ">
                                        <p class="p2">Follow</p>
                                        <hr class="hr-break-1" />
                                    </div>

                                    <div class="col-2 mx-auto">
                                        <p><a class="link-offset-2 link-underline link-underline-opacity-0 link-light display-6" href="<?php echo $x["fb"]; ?>"><i class="bi bi-facebook"></i></a></p>
                                    </div>
                                    <div class="col-2 mx-auto">
                                        <p><a class="link-offset-2 link-underline link-underline-opacity-0 link-light display-6" href="<?php echo $x["insta"]; ?>"><i class="bi bi-instagram"></i></a></p>
                                    </div>
                                    <div class="col-2 mx-auto">
                                        <p><a class="link-offset-2 link-underline link-underline-opacity-0 link-light display-6" href="<?php echo $x["yt"]; ?>"><i class="bi bi-youtube"></i></a></p>
                                    </div>
                                    <div class="col-2 mx-auto">
                                        <p><a class="link-offset-2 link-underline link-underline-opacity-0 link-light display-6" href="<?php echo $x["appleMusic"]; ?>"><i class="bi bi-apple"></i></i></a></p>
                                    </div>
                                    <div class="col-2 mx-auto">
                                        <p><a class="link-offset-2 link-underline link-underline-opacity-0 link-light display-6" href="<?php echo $x["spotify"]; ?>"><i class="bi bi-spotify"></i></a></p>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>


                    <?php require "footer.php" ?>


        </body>

        </html>

<?php

    } else {
        echo "Sorry for the inconvenient.";
    }
} else {
    echo "Something went wrong.";
}

?>