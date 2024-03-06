<?php
$new = isset ($_GET ["new"])?$_GET["new"]:false;
$result = "";
// if($new){
//     $result = ($new != 123 )?"Успех"| "Ошибка";
// } 
// else $new = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="head">
            <div class="logo">
                <p>LOGO</p>
            </div>
            <div class="href">
                <a href = "#">Seel House</a>
                <a href = "#">Rent House</a>
                <a href = "#">Online Experiences</a>
            </div>
            <div class="entrance">
                <a href = "#">Sign In</a>
                <button class="button-register">Register</button>
            </div>
        </div>
        <hr>
        <div class="content">
            <div class="text">
                <h1>We help people to getting home & renting with good price</h1>
                <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut. Viverra viverra aliquam, semper duis a aliquam. Elit porttitor arcu nisl, faucibus.</p>
                <div class="txt">
                    <div class="txt1">
                        <h2>12k<span>+</span></h2>
                        <p>Happy Customer</p>
                    </div>
                    <div class="txt1">
                        <h2>14k<span>+</span></h2>
                        <p>Awards Winning</p>
                    </div>
                    <div class="txt1">
                        <h2>5k<span>+</span></h2>
                        <p>Premium Product</p>
                    </div>
                </div>
            </div>
            <div class="img">
                <img src="image\Group 2339 (1).png" alt="">
            </div>
        </div>
</header>
<div class="container">
    <main>
        <h2 class="name-see">See how Trulia can help</h2>
        <div class="bloc-see">
            <div class="red-home">
                <img src="image\Group 2280.png" alt="">
                <h3>Rent a home</h3>
                <p class="text-ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut. Viverra viverra aliquam, semper duis a aliquam.</p>
            <button class="button-see">Find a rental</button>
            </div>
            <div class="see-neigh">
            <img src="image\Снимок экрана 2024-03-05 095257.png" alt="">
                <h3>See neighborhoods</h3>
                <p class="text-ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut. Viverra viverra aliquam, semper duis a aliquam.</p>
                <button class="button-see">Find a rental</button>
            </div>
            <div class="buy-home">
                <img src="image\Group 2281.png" alt="">
                <h3>Buy a home</h3>
                <p class="text-ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut. Viverra viverra aliquam, semper duis a aliquam.</p>
                <button class="button-see">Find a rental</button>
            </div>
        </div>

    <div class="seamlessly">
        <div class="img-seamlessy">
            <img src="image\Group 2339 (1).png" alt="">
        </div>
        <div class="text-seamlessly">
            <h2 class="name-seamlessly">Seamlessly connecting agents buyers, and sellers  </h2>
            <p class="text-ipsum"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor at consectetur etiam non amet suscipit dignissim sed. Varius pretium donec dignissim tincidunt sociis. Tellus duis egestas est in venenatis, tincidunt dolor ut eu. Cursus tincidunt urna, quis duis sed massa ornare. Ultricies at quis ante aliquet fringilla.</p>
            <button class="button-see">Explore more</button>
        </div>
    </div>



    <div class="explore-popular">
        <h2 class="name-seamlessly">Explore the popular residences</h2>
        <p class="text-lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut Viverra viverra aliquam, semper duis a aliquam.</p>
        <div class="bloc-img-explore">
            <div class="meadow-wiew">
            <img src="image\Group 2339 (1).png" alt="">
                <div class="block-meadow-view">
                    <h3 class="text-meadow">Meadow view</h3>
                    <hr class= "hr-text-meadow">
                    <p>$570.00 | New</p>
                    <p class="bath-text">3 Bads |  3 Baths  |  2,532 Sq.Ft</p>
                </div>
            </div>
            <div class="meadow-wiew">
            <img src="image\Group 2339 (1).png" alt="">
            <div class="block-meadow-view">
                    <h3 class="text-meadow">Orchard House</h3>
                    <hr class= "hr-text-meadow">
                    <p>$570.00 | New</p>
                    <p  class="bath-text">3 Bads |  3 Baths  |  2,532 Sq.Ft</p>
                </div>
            </div>
            <div class="meadow-wiew">
            <img src="image\Group 2339 (1).png" alt="">
            <div class="block-meadow-view">
                    <h3 class="text-meadow">School House</h3>
                    <hr class= "hr-text-meadow">
                    <p>$570.00 | New</p>
                    <p  class="bath-text">3 Bads |  3 Baths  |  2,532 Sq.Ft</p>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
<!-- форма -->
<div class="email-form">
    <div class ="subs">
        <h2 class=" name-upgrate" >Upgrade your home today?</h2>
        <p class="text-loream-ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut
            Viverra viverra aliquam, semper duis a aliquam.</h3>
        <form  action="new" method = "POST" id="new" >
            <input  class="input_email" type="email" placeholder="Enter your email..." name="email">
            <input class="input_submit" type="submit" value="Continue">
        </form>
    </div>
</div>
<footer>
    <div class="main-footer">
        <div class="nav-footer">
            <div class="logo-footer">
            <p>LOGO</p>
            <p class="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate.</p>
        </div>
            <div class="company">
                <h2>Company</h2>
                <a href="#">Crypto widgets</a>
                <a href="#">Crypto currency</a>
                <a href="#">Bitcoin guid </a>
                <a href="#">contact us</a>
                <a href="#">contact us</a>
            </div>
            <div class="company">
                <h2>Navigate</h2>
                <a href="#">Roadmap</a>
                <a href="#">video</a>
                <a href="#">Team</a>
                <a href="#">C oin disttibution</a>
                <a href="#">Media</a>
            </div>
            <div class="company">
                <h2>products</h2>
                <a href="#">Hardware</a>
                <a href="#">Mining</a>
                <a href="#">Terade calls </a>
                <a href="#">Software</a>
                <a href="#">media</a>
            </div>
            <div class="company">
                <h2>contact us</h2>
                <a href="#">Mailing address</a>
                <a href="#">Suite 1100</a>
                <a href="#">0197876236</a>
                <a href="#">gmail</a>
            </div>
        </div>
    </div>
        <div class="inform">
            <div class="info">
                <p>Copyright © 2021 Brandoxide. All rights reserved.</p>
            </div>
            <div class="in">
                <p>Terms & Agreements</p>
                <p>Privecy Policy</p>
            </div>
        </div>
    </footer>
</body>
</html>