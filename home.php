<?php
include ("proseslogin.php");
error_reporting(0);
session_start();
if (!isset($_SESSION['access_token'])) {
    
    header("location: index.php");
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Beranda | Enkripsi</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

    <div id="wrapper">

        <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">
        <!--
            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag
        -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="<?php echo $_SERVER['PHP_SELF'];?>" class="simple-text">
                        Enkripsi Aes 128
                    </a>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="writeemail.php">
                            <i class="pe-7s-pen"></i>
                            <p>Tulis Email</p>
                        </a>
                    </li>
                    <li>
                        <a href="inboxemail3.php">
                            <i class="pe-7s-mail"></i>
                            <p>Pesan Masuk</p>
                        </a>
                    </li>
                    <li>
                        <a href="help.php">
                            <i class="pe-7s-note2"></i>
                            <p>Bantuan</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="about.php">
                            <i class="pe-7s-rocket"></i>
                            <p>Tentang aplikasi</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="pe-7s-mail"></i> Beranda</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <li><a href="?logout"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                    <?php echo $notice; ?>
                    <p id="error_para" ></p>
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Selamat datang di aplikasi email enkripsi Aes 128</h4>
                        </div>
                        <div class="content">
                            <div class="panel-body">
                           <div class="header">
                                </div>
                                        <p>
                                         Mail Crypto Aes 128 merupakan aplikasi email sekaligus aplikasi kriptografi yang  dibuat untuk memudahkan pengguna dalam berbagi informasi yang aman.    
                                        </p>
                </div>
                    
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="inboxemail3.php">
                                Pesan Masuk
                            </a>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 <a href="http://herysepty.cf">Enkripsi Email</a> @hs
                </p>
            </div>
        </footer>
    </div>
 




       <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
    <script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/light-bootstrap-dashboard.js"></script>
    <script src="assets/js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            demo.initChartist();
            $.notify({
                icon: 'pe-7s-gift',
                message: "Selamat datang di Enkripsi Email"
            },{
                type: 'info',
                timer: 4000
            });
        });
    </script>
    <!-- <script src="bootstrap/bower_components/summernote/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#message').summernote({
            height: 50,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['undo', ['undo']],
                ['redo', ['redo']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
</script> -->
</body>
</html>
