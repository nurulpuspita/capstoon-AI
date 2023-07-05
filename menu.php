<!-- Fixed navbar -->

<link href="Assets/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<nav id="nav_bar" class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">

      


        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand"  href="?page=utama"><blink><img src="img/KIM logo.JPEG" width="50" height="30" />
                Help Desk Penagihan Piutang </a></blink>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="?page=utama">Home</a></li>


                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
            <li class="dropdown">
<?php } ?>
                
                <li><a href="?page=about&actions=tampil">About</a></li>
                <li><a href="?page=kontak&actions=tampil">Contact</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href=></a></li>
                <?php } ?>

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class=""></span></a>
                    <ul class="">
                </li>
                    </ul>
                </li>

                <!-- menu laporan -->
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class=""></span></a>
                    <ul class="">
                        
                    </ul>
                </li>
               

            </ul>
        </div>
    </div>
</nav>
