<head>
        <meta charset="utf-8" />
        <title>DevLan | Software Development projects,  Networking, Scripts, Topologies - Software Development Projects Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Devlan is a projects sharing platforms which hosts networking and software development projects." name="description" />
        <meta content="MartDevelopers" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://devlan.martdev.info/assets/img/favicon.png">
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/swal.js"></script>
        <!--Direct Server side script injection to handle alerts-->
        <!--Inject SWAL-->
        <?php if(isset($success)) {?>
        <!--This code for injecting an success alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Success","<?php echo $success;?>","success");
                            },
                                50);
                </script>

        <?php } ?>

        <?php if(isset($err)) {?>
        <!--This code for injecting an  error alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Failed","<?php echo $err;?>","error");
                            },
                                50);
                </script>

        <?php } ?>
    </head>