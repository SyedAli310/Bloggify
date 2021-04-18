<?php
    include_once 'header.php';
?>
<title>Bloggify | Login</title>
<?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<div class='modal-bg'>
                <span class='err-modal'>Fill in all fields.
                <button class='err-close'><i class='fa fa-window-close fa-2x'></i></button>
                </span>
                </div>
                ";
            }
            else if($_GET["error"] == "wronglogin"){
                echo " <div class='modal-bg'>
                <span class='err-modal'>Invalid credentials.
                <button class='err-close'><i class='fa fa-window-close fa-2x'></i></button>
                </span>
                </div>
                ";
            }
            else if($_GET["error"] == "none"){
                echo " <div class='modal-bg'>
                <span class='err-modal'>Loggin In...
                <button class='err-close'><i class='fa fa-window-close fa-2x'></i></button>
                </span>
                </div>
                ";
            }
        }
        ?>
  
    <div class="login-main-wrapper container">

    <svg id="bg-form" width="1025" height="668" viewBox="0 0 1025 668" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="g">
<path id="cir18" opacity="0.5" d="M541.37 621.27C548.621 621.27 554.5 615.392 554.5 608.14C554.5 600.889 548.621 595.01 541.37 595.01C534.118 595.01 528.24 600.889 528.24 608.14C528.24 615.392 534.118 621.27 541.37 621.27Z" fill="#05386B"/>
<path id="cir17" opacity="0.5" d="M383.48 218.96C391.913 218.96 398.75 212.123 398.75 203.69C398.75 195.257 391.913 188.42 383.48 188.42C375.047 188.42 368.21 195.257 368.21 203.69C368.21 212.123 375.047 218.96 383.48 218.96Z" fill="#05386B"/>
<path id="cir16" opacity="0.5" d="M438.11 161.2C452.249 161.2 463.71 149.738 463.71 135.6C463.71 121.462 452.249 110 438.11 110C423.972 110 412.51 121.462 412.51 135.6C412.51 149.738 423.972 161.2 438.11 161.2Z" fill="#05386B"/>
<path id="cir15" opacity="0.5" d="M404.23 285.42C418.368 285.42 429.83 273.958 429.83 259.82C429.83 245.682 418.368 234.22 404.23 234.22C390.092 234.22 378.63 245.682 378.63 259.82C378.63 273.958 390.092 285.42 404.23 285.42Z" fill="#05386B"/>
<path id="cir14" opacity="0.5" d="M942.98 402.96C951.413 402.96 958.25 396.123 958.25 387.69C958.25 379.257 951.413 372.42 942.98 372.42C934.547 372.42 927.71 379.257 927.71 387.69C927.71 396.123 934.547 402.96 942.98 402.96Z" fill="#05386B"/>
<path id="cir13" opacity="0.5" d="M631.32 246.54C639.753 246.54 646.59 239.703 646.59 231.27C646.59 222.837 639.753 216 631.32 216C622.887 216 616.05 222.837 616.05 231.27C616.05 239.703 622.887 246.54 631.32 246.54Z" fill="#05386B"/>
<path id="cir12" opacity="0.5" d="M888.34 345.2C902.478 345.2 913.94 333.738 913.94 319.6C913.94 305.462 902.478 294 888.34 294C874.201 294 862.74 305.462 862.74 319.6C862.74 333.738 874.201 345.2 888.34 345.2Z" fill="#05386B"/>
<path id="cir11" opacity="0.5" d="M918.65 481.2C932.788 481.2 944.25 469.738 944.25 455.6C944.25 441.462 932.788 430 918.65 430C904.511 430 893.05 441.462 893.05 455.6C893.05 469.738 904.511 481.2 918.65 481.2Z" fill="#05386B"/>
<path id="cir10" opacity="0.5" d="M79.8199 424C84.5972 424 88.4699 420.127 88.4699 415.35C88.4699 410.573 84.5972 406.7 79.8199 406.7C75.0427 406.7 71.1699 410.573 71.1699 415.35C71.1699 420.127 75.0427 424 79.8199 424Z" fill="#05386B"/>
<path id="cir9" opacity="0.5" d="M116.9 397.11C124.908 397.11 131.4 390.618 131.4 382.61C131.4 374.602 124.908 368.11 116.9 368.11C108.892 368.11 102.4 374.602 102.4 382.61C102.4 390.618 108.892 397.11 116.9 397.11Z" fill="#05386B"/>
<path id="cir8" opacity="0.5" d="M47.5 419.6C55.5081 419.6 62 413.108 62 405.1C62 397.092 55.5081 390.6 47.5 390.6C39.4919 390.6 33 397.092 33 405.1C33 413.108 39.4919 419.6 47.5 419.6Z" fill="#05386B"/>
<path id="cir7" opacity="0.5" d="M720.82 372C725.597 372 729.47 368.127 729.47 363.35C729.47 358.573 725.597 354.7 720.82 354.7C716.043 354.7 712.17 358.573 712.17 363.35C712.17 368.127 716.043 372 720.82 372Z" fill="#05386B"/>
<path id="cir6" opacity="0.5" d="M742.7 204.3C747.477 204.3 751.35 200.427 751.35 195.65C751.35 190.873 747.477 187 742.7 187C737.923 187 734.05 190.873 734.05 195.65C734.05 200.427 737.923 204.3 742.7 204.3Z" fill="#05386B"/>
<path id="cir5" opacity="0.5" d="M757.9 345.11C765.908 345.11 772.4 338.618 772.4 330.61C772.4 322.602 765.908 316.11 757.9 316.11C749.892 316.11 743.4 322.602 743.4 330.61C743.4 338.618 749.892 345.11 757.9 345.11Z" fill="#05386B"/>
<path id="cir4" opacity="0.5" d="M688.5 367.6C696.508 367.6 703 361.108 703 353.1C703 345.092 696.508 338.6 688.5 338.6C680.492 338.6 674 345.092 674 353.1C674 361.108 680.492 367.6 688.5 367.6Z" fill="#05386B"/>
<path id="cir3" opacity="0.5" d="M195.63 288.57C215.65 288.57 231.88 272.34 231.88 252.32C231.88 232.3 215.65 216.07 195.63 216.07C175.61 216.07 159.38 232.3 159.38 252.32C159.38 272.34 175.61 288.57 195.63 288.57Z" fill="#05386B"/>
<path id="cir1" opacity="0.5" d="M402.63 393.24C414.184 393.24 423.55 383.874 423.55 372.32C423.55 360.766 414.184 351.4 402.63 351.4C391.076 351.4 381.71 360.766 381.71 372.32C381.71 383.874 391.076 393.24 402.63 393.24Z" fill="#05386B"/>
<path id="cir1_2" opacity="0.5" d="M609.63 529.24C621.184 529.24 630.55 519.874 630.55 508.32C630.55 496.766 621.184 487.4 609.63 487.4C598.076 487.4 588.71 496.766 588.71 508.32C588.71 519.874 598.076 529.24 609.63 529.24Z" fill="#05386B"/>
</g>
</svg>



    <section class="login-form-wrapper">
        <h2>LogIn</h2>
        
        <form class="login-form" action="includes/login.inc.php" method="POST">
            <input type="text" name="uid" placeholder="Username/Email" autocomplete="off">
            <input type="password" name="pwd" placeholder="Password">
            <button class="login-btn" type="submit" name="submit">Login</button>
         
            <p>Not a member? <a href="./signup.php"> Sign Up</a></p>
        </form>
     
       
    </section>

    </div>

    <script src="./js/errorHandler.js"></script>


<?php
    include_once 'footer.php';
?>

