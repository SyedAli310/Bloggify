<?php
    ob_start();
    session_start();
    // define('MyConst', TRUE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./images/round.png">
    
</head>
<body class="loading" >
    <!-- ------Pre Loader------ -->
    
    <div class="loader-wrapper " >
      <div class="loader loader-black loader-4"></div>
    </div>

    <!-- ------End of Pre Loader------ -->
   
    <nav class="nav">
        
        <div class="logo">
             <a href="./index.php">
            <svg id="logo" width="80" height="60" viewBox="0 0 568 578" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="logo">
                <path id="Vector" d="M219.969 501.865L89.192 388.366L49.288 434.345L63.8187 446.956L43.8667 469.945L145.582 558.222L165.534 535.232L180.065 547.843L219.969 501.865Z" fill="url(#paint0_linear)"/>
                <path id="Vector_2" d="M439.405 125.81L302.73 283.292C314.309 301.577 316.998 312.332 311.968 325.908C307.363 338.029 299.269 348.514 288.707 356.036C277.061 364.466 267.626 366.168 252.418 358.716C243.774 354.537 236.208 348.424 230.307 340.85C216.232 322.557 217.352 303.126 234.106 283.822C250.138 265.349 264.99 261.052 287.496 270.362L313.163 240.787L424.222 111.296L130.468 190.712C130.468 190.712 147.321 295.284 83.8312 413.797L188.159 504.341C188.159 504.341 319.343 416.64 396.324 433.836L439.405 125.81Z" fill="url(#paint1_linear)"/>
                <path id="Vector_3" d="M435.05 135.497L308.22 281.635C316.718 291.971 321.156 305.051 320.703 318.425C320.25 331.798 314.938 344.548 305.76 354.286C296.582 364.024 284.169 370.082 270.846 371.325C257.523 372.569 244.203 368.913 233.382 361.041C222.56 353.17 214.98 341.624 212.06 328.565C209.14 315.506 211.081 301.831 217.519 290.1C223.958 278.37 234.452 269.389 247.036 264.84C259.62 260.29 273.431 260.485 285.882 265.387L414.266 117.458L140.091 195.369C140.091 195.369 154.34 304.924 90.9389 419.979L181.039 498.175C181.039 498.175 317.932 410.423 390.476 424.829L435.05 135.497Z" fill="#05386B"/>
                <path id="Vector_4" d="M78.9829 434.549L175.238 518.086L145.828 551.973L49.5728 468.436L78.9829 434.549Z" fill="black" stroke="white"/>
                <path id="Vector_5" d="M213.857 502.347L89.1296 394.098L53.0469 435.674L177.774 543.922L213.857 502.347Z" fill="#6C63FF"/>
                <path id="Vector_6" d="M89.1795 394.804L213.151 502.396L177.724 543.217L53.7522 435.624L89.1795 394.804Z" fill="#C1C2BA" stroke="#05386B"/>
                </g>
                <defs>
                <linearGradient id="paint0_linear" x1="94.7243" y1="514.084" x2="154.58" y2="445.115" gradientUnits="userSpaceOnUse">
                <stop stop-color="#808080" stop-opacity="0.25"/>
                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                </linearGradient>
                <linearGradient id="paint1_linear" x1="-48131.2" y1="377872" x2="85522.8" y2="223871" gradientUnits="userSpaceOnUse">
                <stop stop-color="#808080" stop-opacity="0.25"/>
                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                </linearGradient>
                </defs>
            </svg>

            </a> 
        </div>
        <ul>
            <div class="nav-links">
                <li><a class="pseudo" href="index.php">Home</a></li>
                <li><a class="pseudo" href="posts.php">Posts</a></li>
                <li><a class="pseudo" href="#">About</a></li>
                <?php
                 if(isset($_SESSION["useruid"])){
                    echo "<li>  <a class='pseudo' href='profile.php' >"."<i class='fa fa-user '></i>" ."&nbsp;" . substr($_SESSION['useruid'],0,8)." </a></li>";
                }
                else{
                    echo "<li><a class='pseudo' href='#'>Explore</a></li>";
                }
                ?>
               
            </div>
            <div class="nav-buttons">
                <?php
                  if(isset($_SESSION["useruid"])){
                    // echo "<a href='#'>Profile</a>";
                    echo "<a href='./includes/logout.inc.php'>Logout</a>";
                  } else{
                      echo "<a href='./login.php'>Login</a>";
                  }
                ?>
            </div>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    
    </nav>

    <div class="main-wrapper">

    