<?php  
	session_start();
    if(!isset($_SESSION['username'])){
        header('location:index.php');
    }
?>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="config/style.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<!-- Menyisipkan JQuery dan Javascript Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		
        <!-- row 1: Header -->
        <div class="row-xls">
            <div class="col-md-12">
                <h1>IRSYAD PROJECT</h1>
                <h5><p>Selamat datang di Irsyad Project</p><h5>
                <h5><p>Project ini dibuat untuk memenuhi tugas UAS Mata kuliah OTOMATA</p></h5>
            </div>
        </div>
		<!-- Menu -->
		<div class="menu">
				<ul>
                    <li><a class="active" href="home.php?page=home">Home</a></li>
                    <li><a href="home.php?page=contact">Contact</a></li>
                    <li><a href="home.php?page=about">About</a></li>
                    <li style="float: right;"><a class="aktif" href="home.php?page=logout">Logout</a></li>
                </ul>
		</div>
        <!-- row 2: Artikel -->
        <div class="content">
            <div class="col-md">
                <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'home':
                      include "kamus.php";
                      break;
                    case 'logout':
                        include "logout.php";
                        break;
                    case 'contact':
                      include "contact.php";
                      break;
                    case 'about':
                      include "about.php";
                      break;
                    
                    default:
                        echo "<center><h3>Maaf halaman ini tidak ditemukan</h3></center>";
                        break;
                }
            }
        ?>
                
            </div>
        </div>
		
        <!-- row 3: Footer -->
        <div class="footer">
                <p>&copy; 2018 Irsyad Project - Tugas Otomata</p>
        </div>
    </div>
</body>
</html>