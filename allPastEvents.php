<?php
require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/icons/B52DB3F0-649B-4D98-8DFF-9D13E80A193C.png">
    <title>Our Team.</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="bg-dark text-white">

    <div class="col-12">
        <?php require "header.php" ?>
    </div>

    <div class="container ">
        <div class="row">

            <div class="col-12 d-grid mx-auto">
                <div class="row">

                    <p class="teamTitle d-flex justify-content-center">Our Past Event Gallery</p>

                    <div class="col-12 d-grid gap-3 mx-auto ">
                        <div class="row">

                            <?php

                            $gallery = Database::search("SELECT * FROM gallery order by date DESC");
                            $num = $gallery->num_rows;

                            for ($y = 0; $y < $num; $y++) {
                                $d = $gallery->fetch_assoc();

                            ?>

                                <div class="col-12 col-lg-6 d-flex justify-content-center ">
                                    <div class="col-12 mt-4">
                                        <?php echo $d["Link"]; ?>
                                        <p class="text-white d-flex justify-content-lg-start"><?php echo $d["videoName"]; ?> </p>
                                    </div>
                                </div>



                            <?php

                            }

                            ?>



                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <?php require "footer.php" ?>


</body>

</html>