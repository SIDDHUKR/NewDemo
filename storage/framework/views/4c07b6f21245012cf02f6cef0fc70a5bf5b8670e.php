<div class="navbar">
    <div class="nav">
        <span><a href="/"><img src="image/logo.jpg"></a></span>
        <div class="number">
            <img src="image/flag.png">
            <p><span>+91 9876543210</span></p>
        </div>
        <div class="icon">
            <a href="www.facebook.com"><img src="image/fb.webp"></a>
            <a href="www.linkedin.com"><img src="image/linkedIn.png"></a>
            <a href="www.twitter.com"><img src="image/twitter.png"></a>
            <a href="www.instagram.com"><img src="image/insta.webp"></a>
        </div>
    </div>
    <div class="nav1">
        <ul>
            <li><a href="/#contact">About_us</a></li>
            
            <li><a href="/#webbox">Web & App Development</a>
                
            </li>
            <li><a href="/#dmbox">Digital Marketing</a>
                <div class="dbox">
                    <ul>
                        <li>seo</li>
                        <li>ppu</li>
                        <li>digital marketing</li>
                        <li>sma</li>
                        <li>c marketing</li>
                        <li>Influencer marketing</li>

                    </ul>
                </div>
            </li>
            <li><a href="/brand">Branding</a></li>
            <li>Career
                <div class="dbox1">
                    <ul>
                        <li><a href="/">9304235096</a></li>
                        <li><a href="/">9304235096</a></li>
                        <li><a href="/">9304235096</a></li>
                    </ul>
                </div>
            </li>
            
            <li><a href="/#contact">Contact_us</a></li>
        </ul>
    </div>
</div>



<script>
    function show() {
        document.getElementsByClassName('sidenavbar')[0].style.display = 'inline';
        document.getElementsByClassName('open')[0].style.display = 'none';
        document.getElementsByClassName('close')[0].style.display = "inline";

    }

    function hide() {
        document.getElementsByClassName('sidenavbar')[0].style.display = 'none';
        document.getElementsByClassName('close')[0].style.display = "none";
    }
</script>

    <button class="open" onclick="show()">=</button>

    <button class="close" onclick="hide()">5</button>

 <style>  .close{ display: none;} .open{ display: none}  </style>

<div class="sidenavbar">
    <div class="sidenav">
        <span><a href="/"><img src="image/logo.jpg"></a></span>

    </div>
    <div class="sidenav1">
        <ul>
            <li><a href="/#webbox">Web & App Development</a></li>
            <li><a href="/#dmbox">Digital Marketing</a></li>
                <li>Career</li>
            <li><a href="/brand">Branding</a></li>
            <li><a href="/#contact">About_us</a></li>
            <li><a href="/#contact">Contact_us</a></li>
        </ul>
    </div>
</div>



<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .navbar {
        background-color: rgb(81, 180, 127);
        color: white;
        width: 100vw;
        height: 19vh;
        margin: 0;
        padding: 0;
    }

    .nav {
        background-color: blueviolet;
        color: white;
        width: 100vw;
        height: 10vh;
        text-align: center;

    }

    .nav span a img {
        width: 5vw; height: 5vh;
        margin-left: 2vw;
        margin-top: 2.5vh;
        border-radius: 40%;
    }

    .nav h2 span a {
        text-decoration: none;
        color: #649f75
    }

    .nav1 {
        background-color: #ffffff;
        color: rgb(78, 75, 75);
        width: 100vw;
        height: 10vh;
        position: relative;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .nav1 ul {
        display: inline-flex;
        list-style: none;
    }

    .nav1 ul li {
        margin-left: 5vw;
        margin-top: 3vh;
    }

    .nav1 ul li:hover {
        color: greenyellow;
    }

    .nav1 ul li a {
        text-decoration: none;
        color: rgb(78, 75, 75);
    }

    /* -----------------For Mobile------------------ */

    .sidenavbar {
        background-color: rgb(81, 180, 127);
        color: white;
        width: 20vw;
        height: 19vh;
        margin: 0;
        padding: 0;
        position: absolute;
        display: none;
        margin-left: 1vw;
    }

    .sidenav {
        background-color: blueviolet;
        color: white;
        width: 25vw;
        height: 8vh;
        text-align: center;

    }

    .sidenav span a img {
        width: 8vw; height: 8vh;
        margin-left: 2vw;
        margin-top: 1vh;
        border-radius: 40%;
    }

    .sidenav1 {
        background-color: #ffffff;
        color: rgb(142, 49, 49);
        width: 25vw;
        height: 50vh;
        position: fixed;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .sidenav1 ul {
        display: inline-block;
        list-style: none;
    }

    .sidenav1 ul li {
        /* margin-left: 5vw; */
        margin-top: 3vh;
    }

    .sidenav1 ul li:hover {
        color: greenyellow;
    }

    .sidenav1 ul li a {
        text-decoration: none;
        color: rgb(146, 31, 31);
    }





    .number {
        background-color: transparent;
        color: rgb(255, 255, 255);
        width: 15vw;
        height: 5vh;
        text-align: center;
        margin-top: 3vh;
        margin-left: 66vw;
        display: inline-flex;
    }

    .number img {
        width: 2vw;
        height: 3vh;
        margin-left: .5vw;
        margin-top: .5vh;
    }

    .dbox2 {
        background-color: rgb(255, 255, 255);
        color: rgb(147, 30, 30);
        width: 20vw;
        height: 18vh;
        margin-left: -3vw;
        position: absolute;
        display: none;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .dbox2 ul {
        list-style: none;
        line-height: 1vh;
        display: inline-block;
        text-align: center;
    }

    .nav1 ul li:hover .dbox2 {
        display: block;
    }

    .dbox {
        background-color: rgb(255, 255, 255);
        color: rgb(147, 30, 30);
        width: 20vw;
        height: 27vh;
        margin-left: -8vw;
        position: absolute;
        display: none;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .dbox ul {
        list-style: none;
        line-height: 1vh;
        display: inline-block;
        text-align: center;
    }

    .nav1 ul li:hover .dbox {
        display: block;
    }

    .dbox1 {
        background-color: rgb(255, 255, 255);
        color: rgb(147, 30, 30);
        width: 20vw;
        height: 15vh;
        margin-left: -8vw;
        position: absolute;
        display: none;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .dbox1 ul {
        list-style: none;
        line-height: 1vh;
        display: inline-block;
        text-align: center;
    }

    .nav1 ul li:hover .dbox1 {
        display: block;
    }

    .icon {
        background-color: transparent;
        color: black;
        width: 15vw;
        height: 5vh;
        text-align: center;
        margin-top: 3vh;
        position: absolute;
        display: inline-flex;
        margin-left: 85vw;
    }

    .icon img {
        width: 2vw;
        height: 3vh;
        margin-left: .5vw;
        border-radius: 1vw;
    }

    /* ---------For Mobile--------- */
    @media (max-width:650px) {

        .navbar {
            display: none;
        }

        .sidenavbar {
            /* display: none; */
        }
        .open{
             display: block;
            }
    }
</style>
<?php /**PATH C:\xampp\htdocs\DigitalMarketingProject\resources\views/header.blade.php ENDPATH**/ ?>