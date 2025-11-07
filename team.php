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

                    <p class="teamTitle d-flex justify-content-center">Our Team</p>

                    <div class="col-12 d-grid gap-3 mx-auto ">
                        <div class="row">

                            <?php

                            $teamMembors = Database::search("SELECT * FROM `team` JOIN socialmedia ON team.socialMedia_id=socialMedia.id JOIN img ON team.img_id=img.id ");
                            $num = $teamMembors->num_rows;

                            for ($y = 0; $y < $num; $y++) {
                                $d = $teamMembors->fetch_assoc();

                            ?>

                                <div class="col-6 col-lg-3 d-flex justify-content-center ">
                                    <a href='<?php echo "ProfileSingleView.php?id=" . ($d["id"]) ?>'>
                                        <!-- <div class="row"> -->
                                        <img src="<?php echo $d["name"]; ?>" class="img-fluid pt-5 pb-5 w-75 h-auto" />
                                        <!-- </div> -->
                                    </a>
                                </div>

                                <div class="col-6 col-lg-3 mt-5">
                                    <p class="p2 pt-3 "><?php echo $d["fName"]; ?> <?php echo $d["lName"]; ?></p>
                                    <hr class="hr-break-1 pb-0 " />
                                    <p class="p1"><?php echo $d["type"]; ?></p>
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