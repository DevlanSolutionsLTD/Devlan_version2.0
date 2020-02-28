<head>
        <meta charset="utf-8" />
        <title>DevLan | Software Development projects,  Networking, Scripts, Topologies - Software Development Projects Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Devlan is a projects sharing platforms which hosts networking and software development projects." name="description" />
        <meta content="MartDevelopers" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://devlan.martdev.info/assets/img/favicon.png">
        <!-- Loading button css -->
        <link href="assets/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/swal.js"></script>
         <!-- Footable css -->
         <link href="assets/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />
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
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5d0b353736eab972111853bd/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144032797-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-144032797-3');
    </script>
    <!--Disable right clicks-->
    <script>
        var isNS = (navigator.appName == "Netscape") ? 1 : 0;

        if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);

        function mischandler(){
        return false;
        }

        function mousehandler(e){
        var myevent = (isNS) ? e : event;
        var eventbutton = (isNS) ? myevent.which : myevent.button;
        if((eventbutton==2)||(eventbutton==3)) return false;
        }
        document.oncontextmenu = mischandler;
        document.onmousedown = mousehandler;
        document.onmouseup = mousehandler;

    </script>

    </head>