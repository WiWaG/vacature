<?php require 'partials/header.view.php'; ?>
<?php require 'partials/navbar.view.php'; ?>
<nav class="navbar-default navbar-side" role="navigation">
		    <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">

                        <li>
                            <a href="home"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="bedrijven" class="active-menu"><i class="fa fa-desktop"></i>Bedrijven</a>
                        </li>
                        <li>
                            <a href="sollicitanten"><i class="fa fa-bar-chart-o"></i>Sollicitanten</a>
                        </li>
                        <li>
                            <a href="vacatures"><i class="fa fa-qrcode"></i>Vacatures</a>
                        </li>
                        
                        <li>
                            <a href="categorie"><i class="fa fa-table"></i>Categorieën</a>
                        </li>
                        <li>
                            <a href="gebruikersbeheer"><i class="fa fa-edit"></i>Gebruikersbeheer</a>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Link</a>
                                        </li>

                                    </ul>

                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="empty.php"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!--/. NAV SIDE  -->

    
        <div id="page-wrapper">



<div class="header"> 
                                <h1 class="page-header">
                                    Dashboard <small>Vacaturebank</small>
                                </h1>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Library</a></li>
                                    <li class="active">Data</li>
                                </ol> 
                                            
                </div>
            <div id="page-inner">
                <p>bedrijven</p> 
            </div>
            <!-- /. PAGE INNER  -->



<?php require 'partials/bottom.view.php';?>