<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexstyle.css?v=<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Main Menu</title>
</head>

<body>
    <!---------------- Navigation Bar --------------->
    <?php $currentPage = basename($_SERVER['REQUEST_URI']); ?>
    
    <nav id="main-navbar">
        <div class="navbar">
            <div class="logo"><a href="#"><img src="./img/gpro.png"></a></div>
            <div class="nav-links">
                <ul class="links">
                    <li class="<?php if($page == 'home'){echo 'active';} ?>"><a href="main.php">Home</a></li>
                    <li>
                        <a href="#">Program</a>
                        <i class='bx bxs-chevron-down arrow htmlcss-arrow'></i>
                        <ul class="main-sub sub-menu">
                            <li class="<?php if($page == 'internships'){echo 'active';} ?>"><a href="internships.php">Internship</a></li>
                            <li class="<?php if($page == 'events'){echo 'active';} ?>"><a href="#">Events</a></li>
                        </ul>
                    </li>
                    <li class="<?php if($page == 'contact'){echo 'active';} ?>"><a href="./main.php #contact">Contact</a></li>
                </ul>
            </div>
            <div class="nav-apply" class="<?php if($page == 'contact'){echo 'active';} ?>"><a href="apply.php">Apply Now!</a></div>
        </div>
    </nav>

    <!---------------- End of Navigation Bar --------------->
  
    <!-- ------------- End of Footer ------------ -->
    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function () {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("main-navbar").style.top = "0";
            } else {
                document.getElementById("main-navbar").style.top = "-90px";
            }
            prevScrollpos = currentScrollPos;
        }


    </script>
    <script src="script.js">

    </script>
</body>

</html>