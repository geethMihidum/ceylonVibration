<?php

require "connection.php";
if (isset($_GET["id"])) {
    $pId = $_GET["id"];
    $Events = Database::search("SELECT * FROM `event` JOIN img ON event.img_id=img.id WHERE event.id='" . $pId . "';");
    $num = $Events->num_rows;

    if ($num == 1) {

        $x = $Events->fetch_assoc();
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

            <div class="container-fluid ">
                <div class="row">

                    <div class="bg-dark text-white col-12">
                        <div class="row">

                            <div class="col-12 col-lg-4 d-grid gap-3 mx-auto">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="row">
                                            <img src="<?php echo $x["name"]; ?>" class="img-fluid pt-5 pb-5 w-100 h-auto" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-lg-6 d-grid mx-auto  pt-4">
                                <div class="row">

                                    <p class=" title01"><?php echo $x["event_name"]; ?> </p>

                                    <hr class="hr-break-1" />

                                    <p class=" p1 ">
                                        <?php echo $x["description"]; ?>
                                    </p>

                                    <!-- <hr class="hr-break-1" /> -->

                                    <div class="col-6 pt-5">
                                        <p class="p2">Date</p>
                                        <hr class="hr-break-1" />
                                    </div>


                                    <div class="col-6 pt-5">
                                        <p class="p2">Venue</p>
                                        <hr class="hr-break-1" />
                                    </div>

                                    <div class="col-6 ">
                                        <p class="p1"><?php echo $x["date"]; ?></p>
                                    </div>

                                    <div class="col-6 ">
                                        <p class="p1"><?php echo $x["venue"]; ?></p>
                                    </div>

                                </div>
                            </div>

                            <!-- <div class="col-12 col-lg-6 d-grid gap-3 mx-auto">
                        <div class="row">

                            <div class="col-6">
                                <p class="p2">Date</p>
                            </div>

                        </div>
                    </div> -->

                        </div>
                    </div>
                    <div class="col-12">
                        <?php require "footer.php" ?>
                    </div>

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