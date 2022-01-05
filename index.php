<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Flappy-Ape.io</title>

   <!-- Import CSS -->
   <link rel="stylesheet" type="text/css" href="assets/css/home.css">

   <!-- Favicon Website -->
   <link rel="shortcut icon" href="assets/images/favicon.png"/>

   <!-- Imporation de Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <!-- Bundle JS Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="d-flex flex-column">

<!-- Start Header -->
<header class="main-header">
    <div class="container">
      <nav class="navbar navbar-expand-lg main-nav px-0">
        <a class="navbar-brand" href="">
            <img src="assets/images/logo.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar icon-bar-1"></span>
            <span class="icon-bar icon-bar-2"></span>
            <span class="icon-bar icon-bar-3"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainMenu">
          <ul class="navbar-nav ml-auto text-uppercase f1">
            <li>
              <a href="https://twitter.com/flappy_ape" class="" target="_blank"><i class="fa-brands fa-twitter fa-3x"></i></a>
          </li>
          <li>
              <a href="https://discord.gg/mt8tGAwZa4" target="_blank" class=""><i class="fa-brands fa-discord fa-3x"></i></a>
          </li>
      </ul>
  </div>
</nav>
</div>
</header>
<!-- End header -->


<!-- Toper WebSite -->
<section class="toper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <h1 class="discover-title">Discover The Sky</h1>
                <h4 id="countdown"><p id="counter"></p></h4>
            </div>
            <div class="col-lg-6">
                <img src="assets/images/imageHome.png" alt="" class="flat-image">
            </div>
        </div>
    </div>
</section>

<div class="space"></div>

<!-- Content #1 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <h1 id="big-text"><i class="fab fa-connectdevelop fa-1x"></i> What is Flappy Ape ?</h1>
                <h4 id="small-text">Flappy Ape is an online video game based on the principle of "Play to Earn", which literally means "play to win money".</h4>
            </div>
            <div class="col-lg-6">
                <img src="assets/images/homeGame.png" alt="" class="homeGameImage">
            </div>
        </div>
    </div>
</section>

<div class="space"></div>

<!-- Content #2 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="assets/images/login.png" alt="" class="loginPageImage">
            </div>
            <div class="col-lg-6 align-self-center">
                <h1 id="big-text"><i class="fas fa-code fa-1x"></i> Launching the project !</h1>
                <h4 id="small-text">For the launch of the project we will break the prices by dividing the price of our Flappy by 4/Unit with a minimum floor of 1 at the release of the game.</h4>
            </div>
        </div>
    </div>
</section>

<div class="space"></div>

<!-- Content #3 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <h1 id="big-text"><i class="fas fa-fill-drip fa-1x"></i> Collection information</h1>
                <h4 id="small-text">More than 5000 Flappy inspired by the famous Flappy Bird will be available on Christmas day, to launch your team but especially to have fun!</h4>
            </div>
            <div class="col-lg-6">
                <img src="assets/images/letsPlay.png" alt="" class="letsPlayImage">
            </div>
        </div>
    </div>
</section>

<div class="space"></div>

<section>
    <div class="frame">
        <h1 class="join-text">Join Us And Play</h1>
        <p class="letsbuild-text">Let's build something truly special together. Come join our community on Discord, or follow us on Twitter :)</p>

        <div class="container">
          <div class="row">
            <div class="col text-center">
                <a href="https://twitter.com/flappy_ape" target="_blank"><button type="button" id="twitter" class="btn btn-primary btn-lg text-center"><i class="fa-brands fa-twitter fa-1x"></i> Twitter</button></a>
                <a href="https://discord.gg/mt8tGAwZa4" target="_blank"><button type="button" id="discord" class="btn btn-primary btn-lg text-center"><i class="fa-brands fa-discord fa-1x"></i> Discord</button></a>
            </div>
        </div>
    </div>
</div>
</section>

<div class="space"></div>

<section>
    <div class="container">

      <h2 id="faq-text">Frequently Asked Questions</h2>

      <div class="accordion">
        <div class="accordion-item">
          <a>What are Flappy Ape?</a>
          <div class="content">
            <p>Flappy Ape is an online video game based on the principle of "Play to Earn", which literally means "play to win money". To start playing with your team you will need at least 2 Flappy to start the adventure. Flappy Ape will contain several game modes such as an adventure mode or an open world on several islands!</p>
        </div>
    </div>
    <div class="accordion-item">
      <a>What makes Flappy different?</a>
      <div class="content">
        <p>The project gives you the opportunity to play and earn even more money with the Flappy NFTs you have purchased. Every game you play will earn you tokens redeemable in every possible cryptocurrency!</p>
    </div>
</div>
<div class="accordion-item">
  <a>What network are the Flappy NFTs on?</a>
  <div class="content">
    <p>Flappy is based on Solana's blockchain because of its fast transactions, minimal CO2 emissions and low gas costs.</p>
</div>
</div>
<div class="accordion-item">
  <a>What are the prices?</a>
  <div class="content">
    <p>For the Mint event, we invite you to watch on Twitter or Discord.</p>
</div>
</div>
<div class="accordion-item">
  <a>How do I view my Flappy?</a>
  <div class="content">
    <p>Flappy are standard Solana NFTs, viewable for example on your wallet.</p>
</div>
</div>
<div class="accordion-item">
  <a>Is there a rarity system on Flappy?</a>
  <div class="content">
    <p>Yes of course, we invite you once again to look at the Roadmap available on Discord -> <a href="https://docs.google.com/presentation/d/1HfhOeSHdSW5j6phC2lanzTaYZmqM0ztNi0cMVIuoSjA/edit?usp=sharing" target="_blank">Roadmap Link</a></p>
</div>
</div>
<div class="accordion-item">
  <a>Will there be a marketplace?</a>
  <div class="content">
    <p>Once this first Mint is done, a marketplace will be set up immediately after allowing you to buy and sell your Flappy on our platform.</p>
</div>
</div>
<div class="accordion-item">
  <a>What is the Mint?</a>
  <div class="content">
    <p>Join our discord or twitter for announcements</p>
</div>
</div>
</div>
</div>
</section>

<!--Bottom Footer-->
        <div class="bottom section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="copyright">
                            <p>© <span>2021</span> <a href="#" class="transition">Flappy Ape</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--Bottom Footer-->

  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Scripts -->


    <script>
        var countDownDate = <?php echo strtotime('Dec 24, 2021 00:00:00') ?> * 1000;
        var now = <?php echo time() ?> * 1000;

        var x = setInterval(function() {

            now = now + 1000;

            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("counter").innerHTML = days + "d:" + hours + "h:" +
            minutes + "m:" + seconds + "s ";

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("counter").innerHTML = "EXPIRED";
            }
        }, 1000);


        const items = document.querySelectorAll(".accordion a");

        function toggleAccordion(){
          this.classList.toggle('active');
          this.nextElementSibling.classList.toggle('active');
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));
    </script>

    <style>
        .navbar-collapse {
            flex-direction: row-reverse!important;
        }
    </style>
</body>
</html>