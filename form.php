<?php

include 'config.php';
$id = $_REQUEST['id'];
$select = "select * from `register` where `id`='" . $id . "'";
$qry = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($qry);

if ($_REQUEST['id'] == "") {
    $action = "insert";
} else {
    $action = "update";
}


?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/php;charset=UTF-8" />

<head>
    <title>Meet's Form Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
    <meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!-- Metis Menu -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
</head>

<body class="cbp-spmenu-push">
    <script src="../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
            }
        })();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-149859901-1');
    </script>

    <script>
        window.ga = window.ga || function() {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
        ga('require', 'eventTracker');
        ga('require', 'outboundLinkTracker');
        ga('require', 'urlChangeTracker');
        ga('send', 'pageview');
    </script>
    <script async src='../../../js/autotrack.js'></script>

    <meta name="robots" content="noindex">

    <body>
        <link rel="stylesheet" href="../../../assests/css/font-awesome.min.css">
        <!-- New toolbar-->
        <style>
            * {
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            }


            #w3lDemoBar.w3l-demo-bar {
                top: 0;
                right: 0;
                bottom: 0;
                z-index: 9999;
                padding: 40px 5px;
                padding-top: 70px;
                margin-bottom: 70px;
                background: #0D1326;
                border-top-left-radius: 9px;
                border-bottom-left-radius: 9px;
            }

            #w3lDemoBar.w3l-demo-bar a {
                display: block;
                color: #e6ebff;
                text-decoration: none;
                line-height: 24px;
                opacity: .6;
                margin-bottom: 20px;
                text-align: center;
            }

            #w3lDemoBar.w3l-demo-bar span.w3l-icon {
                display: block;
            }

            #w3lDemoBar.w3l-demo-bar a:hover {
                opacity: 1;
            }

            #w3lDemoBar.w3l-demo-bar .w3l-icon svg {
                color: #e6ebff;
            }

            #w3lDemoBar.w3l-demo-bar .responsive-icons {
                margin-top: 30px;
                border-top: 1px solid #41414d;
                padding-top: 40px;
            }

            #w3lDemoBar.w3l-demo-bar .demo-btns {
                border-top: 1px solid #41414d;
                padding-top: 30px;
            }

            #w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
                font-size: 26px;
            }

            #w3lDemoBar.w3l-demo-bar .no-margin-bottom {
                margin-bottom: 0;
            }

            .toggle-right-sidebar span {
                background: #0D1326;
                width: 50px;
                height: 50px;
                line-height: 50px;
                text-align: center;
                color: #e6ebff;
                border-radius: 50px;
                font-size: 26px;
                cursor: pointer;
                opacity: .5;
            }

            .pull-right {
                float: right;
                position: fixed;
                right: 0px;
                top: 70px;
                width: 90px;
                z-index: 99999;
                text-align: center;
            }

            /* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

            #right-sidebar {
                width: 90px;
                position: fixed;
                height: 100%;
                z-index: 1000;
                right: 0px;
                top: 0;
                margin-top: 60px;
                -webkit-transition: all .5s ease-in-out;
                -moz-transition: all .5s ease-in-out;
                -o-transition: all .5s ease-in-out;
                transition: all .5s ease-in-out;
                overflow-y: auto;
            }


            /* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

            .hide-right-bar-notifications {
                margin-right: -300px !important;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }



            @media (max-width: 992px) {
                #w3lDemoBar.w3l-demo-bar a.desktop-mode {
                    display: none;

                }
            }

            @media (max-width: 767px) {
                #w3lDemoBar.w3l-demo-bar a.tablet-mode {
                    display: none;

                }
            }

            @media (max-width: 568px) {
                #w3lDemoBar.w3l-demo-bar a.mobile-mode {
                    display: none;
                }

                #w3lDemoBar.w3l-demo-bar .responsive-icons {
                    margin-top: 0px;
                    border-top: none;
                    padding-top: 0px;
                }

                #right-sidebar,
                .pull-right {
                    width: 90px;
                }

                #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile {
                    margin-bottom: 0;
                }
            }
        </style>

        <div class="main-content">
            <!--left-fixed -navigation-->
            <?php include 'templetes/nav.php'; ?>
            <!--left-fixed -navigation-->
            <!-- header-starts -->
            <?php include 'templetes/header.php'; ?>
            <!-- //header-ends -->
            <!-- main content start-->
            <div id="page-wrapper">
                <div class="main-page">
                    <div class="forms">
                        <h3 class="title1">Registartion Form</h3>
                        <!---728x90--->

                        <!-- <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>Basic Form :</h4>
                            </div>
                            <div class="form-body">
                                <form>
                                    <div class="form-group"> <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="form-group"> <label for="exampleInputPassword1">Password</label> <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> </div>
                                    <div class="form-group"> <label for="exampleInputFile">File input</label> <input type="file" id="exampleInputFile">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                    <div class="checkbox"> <label> <input type="checkbox"> Check me out </label> </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                        </div> -->
                        <!-- <div class=" form-grids row form-grids-right">
                            <div class="widget-shadow " data-example-id="basic-forms">
                                <div class="form-title">
                                    <h4>Horizontal form :</h4>
                                </div>
                                <div class="form-body">
                                    <form class="form-horizontal">
                                        <div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> </div>
                                        </div>
                                        <div class="form-group"> <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-9"> <input type="password" class="form-control" id="inputPassword3" placeholder="Password"> </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <div class="checkbox"> <label> <input type="checkbox"> Remember me
                                                    </label> </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Sign
                                                in</button> </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                        <!---728x90--->
                        <!-- <div class="inline-form widget-shadow">
                            <div class="form-title">
                                <h4>Inline form Example 1 :</h4>
                            </div>
                            <div class="form-body">
                                <div data-example-id="simple-form-inline">
                                    <form class="form-inline">
                                        <div class="form-group"> <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"> </div>
                                        <div class="form-group"> <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password"> </div>
                                        <div class="checkbox"> <label> <input type="checkbox"> Remember me </label>
                                        </div> <button type="submit" class="btn btn-default">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-two widget-shadow">
                            <div class="form-title">
                                <h4>Inline form Example 2 :</h4>
                            </div>
                            <div class="form-body" data-example-id="simple-form-inline">
                                <form class="form-inline">
                                    <div class="form-group"> <label for="exampleInputName2">Name</label> <input type="text" class="form-control" id="exampleInputName2" placeholder="Your name"> </div>
                                    <div class="form-group"> <label for="exampleInputEmail2">Email</label> <input type="email" class="form-control" id="exampleInputEmail2" placeholder="mail.abc@example.com"> </div> <button type="submit" class="btn btn-default">Send invitation</button>
                                </form>
                            </div>
                        </div> -->
                        <!---728x90--->
                        <!-- <div class="row">
                            <h3 class="title1">General Form :</h3>
                            <div class="form-three widget-shadow">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">Your help text!</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledinput" class="col-sm-2 control-label">Disabled Input</label>
                                        <div class="col-sm-8">
                                            <input disabled="" type="text" class="form-control1" id="disabledinput" placeholder="Disabled Input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control1" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="checkbox" class="col-sm-2 control-label">Checkbox</label>
                                        <div class="col-sm-8">
                                            <div class="checkbox-inline1"><label><input type="checkbox">
                                                    Unchecked</label></div>
                                            <div class="checkbox-inline1"><label><input type="checkbox" checked="">
                                                    Checked</label></div>
                                            <div class="checkbox-inline1"><label><input type="checkbox" disabled="">
                                                    Disabled Unchecked</label></div>
                                            <div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="checkbox" class="col-sm-2 control-label">Checkbox Inline</label>
                                        <div class="col-sm-8">
                                            <div class="checkbox-inline"><label><input type="checkbox">
                                                    Unchecked</label></div>
                                            <div class="checkbox-inline"><label><input type="checkbox" checked="">
                                                    Checked</label></div>
                                            <div class="checkbox-inline"><label><input type="checkbox" disabled="">
                                                    Disabled Unchecked</label></div>
                                            <div class="checkbox-inline"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
                                        <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
                                                <option>Lorem ipsum dolor sit amet.</option>
                                                <option>Dolore, ab unde modi est!</option>
                                                <option>Illum, fuga minus sit eaque.</option>
                                                <option>Consequatur ducimus maiores voluptatum minima.</option>
                                            </select></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Multiple Select</label>
                                        <div class="col-sm-8">
                                            <select multiple="" class="form-control1">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
                                        <div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="radio" class="col-sm-2 control-label">Radio</label>
                                        <div class="col-sm-8">
                                            <div class="radio block"><label><input type="radio"> Unchecked</label></div>
                                            <div class="radio block"><label><input type="radio" checked="">
                                                    Checked</label></div>
                                            <div class="radio block"><label><input type="radio" disabled=""> Disabled
                                                    Unchecked</label></div>
                                            <div class="radio block"><label><input type="radio" disabled="" checked="">
                                                    Disabled Checked</label></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="radio" class="col-sm-2 control-label">Radio Inline</label>
                                        <div class="col-sm-8">
                                            <div class="radio-inline"><label><input type="radio"> Unchecked</label>
                                            </div>
                                            <div class="radio-inline"><label><input type="radio" checked="">
                                                    Checked</label></div>
                                            <div class="radio-inline"><label><input type="radio" disabled=""> Disabled
                                                    Unchecked</label></div>
                                            <div class="radio-inline"><label><input type="radio" disabled="" checked="">
                                                    Disabled Checked</label></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallinput" class="col-sm-2 control-label label-input-sm">Small
                                            Input</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Small Input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mediuminput" class="col-sm-2 control-label">Medium Input</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control1" id="mediuminput" placeholder="Medium Input">
                                        </div>
                                    </div>
                                    <div class="form-group mb-n">
                                        <label for="largeinput" class="col-sm-2 control-label label-input-lg">Large
                                            Input</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Large Input">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                        <!-- <div class="row"> -->
                        <!-- <h3 class="title1">Variable Forms :</h3>
                            <div class="form-three widget-shadow">
                                <div data-example-id="form-validation-states-with-icons">
                                    <form>
                                        <div class="form-group has-success has-feedback"> <label class="control-label" for="inputSuccess2">Input with success</label> <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status"> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess2Status" class="sr-only">(success)</span> </div>
                                        <div class="form-group has-warning has-feedback"> <label class="control-label" for="inputWarning2">Input with warning</label> <input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status"> <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span> <span id="inputWarning2Status" class="sr-only">(warning)</span> </div>
                                        <div class="form-group has-error has-feedback"> <label class="control-label" for="inputError2">Input with error</label> <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status"> <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> <span id="inputError2Status" class="sr-only">(error)</span> </div>
                                        <div class="form-group has-success has-feedback"> <label class="control-label" for="inputGroupSuccess1">Input group with success</label>
                                            <div class="input-group"> <span class="input-group-addon">@</span> <input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status"> </div> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                        <div class="form-three widget-shadow">
                            <div class=" panel-body-inputin">
                                <form class="form-horizontal" method="post" action="action.php">
                                    <input type="hidden" name="action" value="<?php echo $action; ?>" readonly="">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" readonly="">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Name</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <input type="text" class="form-control1" name="name" placeholder="Enter Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Email Address</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope-o"></i>
                                                </span>
                                                <input type="email" class="form-control1" name="email" placeholder="Email Address" value="
									<?php
                                    if ($id == "") {
                                        echo "";
                                    } else {
                                        echo $row['email'];
                                    }
                                    ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Password</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-key"></i>
                                                </span>
                                                <input type="password" class="form-control1" name="pwd" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <center>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </center>
                                    <!-- <div class="form-group">
                                        <label class="col-md-2 control-label">Email Address</label>
                                        <div class="col-md-8">
                                            <div class="input-group input-icon right">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope-o"></i>
                                                </span>
                                                <input id="email" class="form-control1" type="text" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">With tooltip</p>
                                        </div>
                                    </div> -->
                                    <!-- <div class="form-group">
                                        <label class="col-md-2 control-label">Password</label>
                                        <div class="col-md-8">
                                            <div class="input-group input-icon right">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-key"></i>
                                                </span>
                                                <input type="password" class="form-control1" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">Use special characters,numbers,alphabets,capital letter</p>
                                        </div>
                                    </div> -->
                                    <!-- <div class="form-group has-success">
                                        <label class="col-md-2 control-label">Input Addon Success</label>
                                        <div class="col-md-8">
                                            <div class="input-group input-icon right">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope-o"></i>
                                                </span>
                                                <input id="email" class="form-control1" type="text" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">Email is valid!</p>
                                        </div>
                                    </div>
                                    <div class="form-group has-error">
                                        <label class="col-md-2 control-label">Input Addon Error</label>
                                        <div class="col-md-8">
                                            <div class="input-group input-icon right">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-key"></i>
                                                </span>
                                                <input type="password" class="form-control1" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">Error!</p>
                                        </div>
                                    </div> -->
                                    <!-- <div class="form-group">
                                        <label class="col-md-2 control-label">Checkbox Addon</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <div class="input-group-addon"><input type="checkbox"></div>
                                                <input type="text" class="form-control1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Checkbox Addon</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control1">
                                                <div class="input-group-addon"><input type="checkbox"></div>

                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">Checkbox on right</p>
                                        </div>
                                    </div> -->
                                    <!-- <div class="form-group">
                                        <label class="col-md-2 control-label">Radio Addon</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <div class="input-group-addon"><input type="radio"></div>
                                                <input type="text" class="form-control1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Radio Addon</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control1">
                                                <div class="input-group-addon"><input type="radio"></div>

                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">Radio on right</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Input Processing</label>
                                        <div class="col-md-8">
                                            <div class="input-icon right spinner">
                                                <i class="fa fa-fw fa-spin fa-spinner"></i>
                                                <input id="email" class="form-control1" type="text" placeholder="Processing...">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">Processing right</p>
                                        </div>
                                    </div> -->
                                    <!-- <div class="form-group">
                                        <label class="col-md-2 control-label">Static Paragraph</label>
                                        <div class="col-md-8">
                                            <p class="form-control1 m-n">email@example.com</p>
                                        </div>
                                    </div>
                                    <div class="form-group mb-n">
                                        <label class="col-md-2 control-label">Readonly</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control1" placeholder="Readonly" readonly="">
                                        </div>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <?php include 'templetes/footer.php'; ?>
        <!--//footer-->
        </div>
        <!-- Classie -->
        <script src="js/classie.js"></script>
        <script>
            var menuLeft = document.getElementById('cbp-spmenu-s1'),
                showLeftPush = document.getElementById('showLeftPush'),
                body = document.body;

            showLeftPush.onclick = function() {
                classie.toggle(this, 'active');
                classie.toggle(body, 'cbp-spmenu-push-toright');
                classie.toggle(menuLeft, 'cbp-spmenu-open');
                disableOther('showLeftPush');
            };

            function disableOther(button) {
                if (button !== 'showLeftPush') {
                    classie.toggle(showLeftPush, 'disabled');
                }
            }
        </script>
        <!--scrolling js-->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!--//scrolling js-->
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.js"> </script>


        <div id="v-w3layouts"></div>
        <script>
            (function(v, d, o, ai) {
                ai = d.createElement('script');
                ai.defer = true;
                ai.async = true;
                ai.src = v.location.protocol + o;
                d.head.appendChild(ai);
            })(window, document, '../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');
        </script>
    </body>

</html>