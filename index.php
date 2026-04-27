<?php

session_start();
$allErrs = $name = $nameErr = $tym = $tymErr = $email = $emailErr = $phone = $phoneErr = $message = $messageErr = $project = $projectErr = $pidTESTErr = $project_name = "";
if (isset($_SESSION['errors'])) {
    $allErrs = $_SESSION['errors'];
}

if (isset($_SESSION['postval'])) {
    $allpostval = $_SESSION['postval'];
}

if (isset($allpostval['name'])) {
    $name = $allpostval['name'];
}

if (isset($allpostval['email'])) {
    $email = $allpostval['email'];
}

if (isset($allpostval['phone'])) {
    $phone = $allpostval['phone'];
}

if (isset($allpostval['message'])) {
    $message = $allpostval['message'];
}

if (isset($allpostval['tym'])) {
    $tym = $allpostval['tym'];
}

if (isset($allpostval['project'])) {
    $project = $allpostval['project'];
}


if (isset($allErrs['name'])) {
    $nameErr = $allErrs['name'];
}

if (isset($allErrs['email'])) {
    $emailErr = $allErrs['email'];
}


if (isset($allErrs['phone'])) {
    $phoneErr = $allErrs['phone'];
}


if (isset($allErrs['tym'])) {
    $tymErr = $allErrs['tym'];
}


if (isset($allErrs['message'])) {
    $messageErr = $allErrs['message'];
}

if (isset($allErrs['pid'])) {
    $projectErr = $allErrs['pid'];
}

if (isset($allErrs['pidTEST'])) {
    $pidTESTErr = $allErrs['pidTEST'];
}


if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$_SESSION['form_submission_id'] = bin2hex(random_bytes(16));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RJTDYE35EV"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-RJTDYE35EV');
    </script>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <title>World I GO</title>
        <meta name="description" content="  ">
        <!-- <link rel="icon" href="/favicon.ico" type="image/x-icon"> -->
        <link rel="stheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="preload" as="image" href="./assets/img/banner/BG-1diwali-tak_final.jpg">
        <link rel="stylesheet" href="assets/css/intlTelInput.css">




<style>.img-container {
  position: relative;
  overflow: hidden;
  width:100%;
  max-width:800px;
  img {
    width: 100%;
    // position: absolute;
    opacity: 0;
  }
  
  &:after {
    content: "";
    position: absolute;
    width: 100%;
    height: 0%;
    bottom: 0;
    left: 0;
    background: #000000;
  }</style>

  
    <!-- components CSS Files -->
    <link href="assets/components/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/components/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/components/glightbox/css/glightbox.min.css" rel="stylesheet">
    <!-- <link href="assets/components/swiper/swiper-bundle.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- GSAP  -->
    <!-- <script src="assets/photo/js/TweenLite.min.js"></script> -->
    <!-- <script src="assets/photo/js/CSSPlugin.min.js"></script> -->
    <!-- <script src="assets/photo/js/EasePack.min.js"></script> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/gsap.min.js" integrity="sha512-f6bQMg6nkSRw/xfHw5BCbISe/dJjXrVGfz9BSDwhZtiErHwk7ifbmBEtF9vFW8UNIQPhV2uEFVyI/UHob9r7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/ScrollTrigger.min.js" integrity="sha512-AcqPGqrrAEtEwe+ADO5R8RbdFi7tuU7b/A2cJJH0Im0D18NRk5p5s4B3E5PMuO81KFw0ClN7J5SHVUJz7KOb0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"   crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="facebook-domain-verification" content="ujavrbf093f98l7686nuzx7tnaglvu" />
   
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Ephesis&display=swap');
    </style>

</head>

<body style="box-shadow:
0 12.5px 10px rgba(0, 0, 0, 0.06),
0 22.3px 17.9px rgba(0, 0, 0, 0.072),
0 41.8px 33.4px rgba(0, 0, 0, 0.086),
0px 0px 25px 25px rgba(0, 0, 0, 0.20); ">




    <input type="hidden" name="utm_source" id="utm_source" value="<?php if (!empty($_REQUEST['utm_source'])) {
        echo $_REQUEST['utm_source'];
    } ?>">
    <input type="hidden" name="utm_medium" id="utm_medium" value="<?php if (!empty($_REQUEST['utm_medium'])) {
        echo $_REQUEST['utm_medium'];
    } ?>">
    <input type="hidden" name="utm_campaign" id="utm_campaign" value="<?php if (!empty($_REQUEST['utm_campaign'])) {
        echo $_REQUEST['utm_campaign'];
    } ?>">
    <input type="hidden" name="utm_term" id="utm_term" value="<?php if (!empty($_REQUEST['utm_term'])) {
        echo $_REQUEST['utm_term'];
    } ?>">
    <input type="hidden" name="utm_display" id="utm_display" value="<?php if (!empty($_REQUEST['utm_display'])) {
        echo $_REQUEST['utm_display'];
    } ?>">

    <input type="hidden" id="download-brochure-doc" value="0">

     <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <a href="index.php" class="logo " style="margin-right: auto;"><img src="assets/img/Final_Logo.png"  alt="World I Go" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index">HOME</a></li>
                    <li><a class="nav-link   scrollto" href="#iconic-life">ABOUT US</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#about">PROJECTS</a></li> -->
                    <li><a class="nav-link scrollto" href="#contact">CONTACT</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    <!-- <div class="nav-line"></div> -->

    <style>
        .animate__bounceIn {
            -webkit-animation-duration: .75s !important;
            animation-duration: .75s;
            -webkit-animation-duration: calc(var(--animate-duration) * 0.75) !important;
            animation-duration: calc(var(--animate-duration) * 1.75) !important;
            -webkit-animation-name: bounceIn !important;
            animation-name: bounceIn !important;
            animation-iteration-count: infinite !important;
        }

        canvas {
          display: block;
        }
        #canvas {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          pointer-events: none; /* don’t block clicks */
          z-index: 1; /* keep behind content */
        }

        .banner-content {
          position: relative;
          z-index: 2; /* ensures content stays above fireworks */
        }


    </style>

    <main id="main">
        
        <!-- <style>
            #thankyou-banner {
              position: relative;
              width: 100%;
              height: 100vh;
              overflow: hidden;
              background: radial-gradient(circle at 30% 20%, #160c2a, #000);
              display: flex;
              justify-content: center;
              align-items: center;
              color: #fff;
            }

            #thankyou-banner canvas {
              position: absolute;
              width: 100%;
              height: 100%;
              top: 0;
              left: 0;
            }

            .banner-overlay {
              position: absolute;
              inset: 0;
              background: rgba(0, 0, 0, 0.45);
              z-index: 1;
            }

            .thankyou-content {
              position: relative;
              z-index: 2;
              text-align: center;
              padding: 2rem;
            }

            .thankyou-title {
              font-size: 3rem;
              font-weight: 800;
              text-transform: uppercase;
              background: linear-gradient(90deg, #ffb347, #ffcc33);
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              margin: 1rem 0;
            }

            .thankyou-text {
              font-size: 1.3rem;
              color: #f8f8f8;
              line-height: 1.6;
            }

            .thankyou-btn {
              display: inline-block;
              margin-top: 1.8rem;
              padding: 0.9rem 2rem;
              border-radius: 50px;
              font-weight: 600;
              text-transform: uppercase;
              background: linear-gradient(90deg, #f7971e, #ffd200);
              color: #111;
              text-decoration: none;
              transition: all 0.3s ease;
              box-shadow: 0 0 15px rgba(255, 213, 0, 0.6);
            }
            .thankyou-btn:hover {
              background: linear-gradient(90deg, #ffd200, #f7971e);
              transform: scale(1.05);
            }

            /* Decorative glowing orbs */
            .decor {
              position: absolute;
              mix-blend-mode: color-dodge;
              opacity: 0.3;
            }
            .decor-left {
              left: 5%;
              top: 10%;
              max-width: 250px;
            }
            .decor-right {
              right: 5%;
              bottom: 10%;
              max-width: 400px;
            }

            @media (max-width: 992px) {
                .thankyou-title {
                    font-size: 2rem;
                }
                .thankyou-btn {
                  padding: 0.5rem 1.6rem;
                }
            }

        </style>
       <section id="thankyou-banner" class="banner">
         <div class="banner-overlay"></div>
         <canvas id="canvas-thankyou"></canvas>

         <div class="banner-content thankyou-content">
           <div class="logo-wrapper">
             <img
               src="assets/img/banner/Asset 1.png"
               alt="Kumar Corp"
               class="img-fluid logo-img"
               style="filter: drop-shadow(0.35rem 0.35rem 0.4rem rgba(0, 0, 0, 0.5)); max-width:250px;"
             />
           </div>

           <h1 class="thankyou-title">Thank You for the Amazing Response!</h1>
           <p class="thankyou-text">
             Our Diwali offer has now closed.<br />
             Stay tuned for more exciting launches from <strong>Kumar Corp</strong>.
           </p>

           <a href="https://kumarcorp.kumarworld.com/projects" class="thankyou-btn">
             Explore Ongoing Projects
           </a>
         </div>

         <img
           src="assets/img/banner/Asset_9 (11).png"
           class="decor decor-left"
           alt=""
         />
         <img
           src="assets/img/banner/Asset_9 (22).png"
           class="decor decor-right"
           alt=""
         />
       </section> -->



      <div class="nav-line"></div>

      <section id="banner" class="banner">
          <div class="swiper banner-slider">
              <div class="swiper-wrapper">
                   <div class="swiper-slide">
                      <div class="banner-img" >
                          <img src="assets/img/banner/Wordigo-Banner_1920-x-900.jpg"
                              class="img-fluid d-none d-lg-block" alt="">
                          <img style="position: relative;" src="assets/img/banner/Wordigo-Banner_456-x-900.jpg"
                              class="img-fluid b-block d-lg-none" alt="">
                              <h1 style="position: relative;font-family: 'Whipsnapper-Regular';color: red; font-size: 11rem; font-weight: 800; right: 700px; top: -160px; letter-spacing: 13px; " >India</h1>
                      </div>
                  </div>
              </div>
          </div>
      </section>



      <!-- <section id="banner" class="banner">
       <div class="swiper banner-slider">
         <div class="swiper-wrapper">
           <div class="swiper-slide">
             <div class="banner-img">


               <canvas id="canvas"></canvas>
               <div class="banner-content">
                <img id="rotating-img"  src="assets/img/banner/Asset_9 (11).png" alt="Kumar Corp Ki Dastak – Ab Diwali Tak!"  style="position: absolute; max-width: 200px; left: 20%;top: -5rem; mix-blend-mode: color-dodge;opacity: 30%;">
                <img src="assets/img/banner/Asset_9 (11).png" alt="Kumar Corp Ki Dastak – Ab Diwali Tak!"  style="position: absolute; max-width: 200px; left: 99%;top: -12rem; mix-blend-mode: color-dodge;">
                 <div class="logo-wrapper">
                   <img style="filter: drop-shadow(0.35rem 0.35rem 0.4rem rgba(0, 0, 0, 0.5));" id="asset1" src="assets/img/banner/Asset 1.png" class="img-fluid logo-img" alt="Kumar Corp Ki Dastak – Ab Diwali Tak! | 2 BHK in Magarpatta">
                   <div class="row" style="display:flex; flex-direction: column;">
                    <img  style="filter: drop-shadow(0.35rem 0.35rem 0.4rem rgba(0, 0, 0, 0.5));"src="assets/img/banner/diya.png" style=""  class="img-fluid logo-img-third" alt="Kumar Corp Ki Dastak – Ab Diwali Tak! | 2 BHK in Pune">
                    <img  style="filter: drop-shadow(0.35rem 0.35rem 0.4rem rgba(0, 0, 0, 0.5));" src="assets/img/banner/Asset 2.png" class="img-fluid logo-img-second" alt="Kumar Corp Ki Dastak – Ab Diwali Tak! | 2 BHK in Pune">
                   </div>
                 </div>



                 
                 <div class="ribbon-container">
                   <div class="ribbon" id="ribbon" style="z-index: 100;">
                     <span class="ribbon-text">
                       <span id="upto-text" style="display:none;">Up to </span>
                       <span id="discount-counter">1%</span>
                       <strong>savings guaranteed*</strong>
                     </span>
                   </div>
                 </div>

                 <img id="rotating-img" 
                      src="assets/img/banner/Asset_9 (22).png" 
                      alt="Kumar Corp Ki Dastak – Ab Diwali Tak!"
                      style="position: absolute; max-width: 500px; left: 99%; top: 56%; mix-blend-mode: color-dodge; opacity: 30%;"> -->
                
                   


                  <!-- <div class="locations-wrapper">
                   <p class="locations">
                     <a href="javascript:void(0);" class="location-link" data-project="Parc Residences"
         data-url="https://kumarcorp.kumarworld.com/project/parc-residences">Magarpatta Road</a>
                     <span class="separator">|</span>
                     <a href="javascript:void(0);" class="location-link" data-project="Palm Spring Tower"
         data-url="https://kumarcorp.kumarworld.com/project/palm-springs">Undri</a>
                     <span class="separator">|</span>
                     <a href="javascript:void(0);" class="location-link" data-project="Prithvi"
         data-url="https://kumarcorp.kumarworld.com/project/kumar-prithvi">Market Yard</a>
                     <span class="separator">|</span>
                     <a href="javascript:void(0);" class="location-link" data-project="Panache"
         data-url="https://kumarcorp.kumarworld.com/project/kumar-panache">Baner</a>
                     <span class="separator">|</span>
                     <a href="javascript:void(0);" class="location-link" data-project="Kumar Prakruti" data-url="https://kumarcorp.kumarworld.com/project/kumar-prakruti">Bhugaon</a>
                     <span class="separator">|</span>
                     <a href="javascript:void(0);" class="location-link" data-project="Kumar Parc Residences" data-url="https://kumarcorp.kumarworld.com/projects">& Many More...</a>
                   </p>
                 </div> -->                                     
                 
            <!--  </div>
           </div>
         </div>
         
         
       </div>
     </section> -->
         <!-- <div class="nav-line"></div> -->

         
                        <script>
                            gsap.to("#rotating-img", {
                            rotation: 360,          // full rotation
                            duration: 30,           // time for one rotation
                            repeat: -1,             // infinite loop
                            ease: "linear",         // smooth constant speed
                            transformOrigin: "50% 50%"  // rotate around its own center
                            });
                        </script>
                         


        <script>
        const canvas = document.getElementById("canvas");
        const ctx = canvas.getContext("2d");
        const banner = document.querySelector(".banner-img");
        canvas.width = banner.offsetWidth;
        canvas.height = banner.offsetHeight;

        window.addEventListener("resize", () => {
          canvas.width = banner.offsetWidth;
          canvas.height = banner.offsetHeight;
        });

        // canvas.width = window.innerWidth;
        // canvas.height = window.innerHeight;

        const fireworks = [];
        const particles = [];

        class Firework {
          constructor() {
            this.x = Math.random() * canvas.width;
            this.y = canvas.height;
            this.targetY = Math.random() * canvas.height / 2;
            this.speed = 3;
            this.color = `hsl(${Math.random() * 360}, 100%, 50%)`;
          }

          update() {
            this.y -= this.speed;
            if (this.y <= this.targetY) {
              this.explode();
              return true;
            }
            this.draw();
            return false;
          }

          draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, 2, 0, Math.PI * 2);
            ctx.fillStyle = this.color;
            ctx.fill();
          }

          explode() {
            for (let i = 0; i < 30; i++) {
              particles.push(new Particle(this.x, this.y, this.color));
            }
          }
        }

        class Particle {
          constructor(x, y, color) {
            this.x = x;
            this.y = y;
            this.speed = Math.random() * 4 + 1;
            this.angle = Math.random() * Math.PI * 2;
            this.color = color;
            this.alpha = 1;
          }

          update() {
            this.x += Math.cos(this.angle) * this.speed;
            this.y += Math.sin(this.angle) * this.speed;
            this.alpha -= 0.02;
            this.draw();
            return this.alpha <= 0;
          }

          draw() {
            ctx.globalAlpha = this.alpha;
            ctx.beginPath();
            ctx.arc(this.x, this.y, 2, 0, Math.PI * 2);
            ctx.fillStyle = this.color;
            ctx.fill();
            ctx.globalAlpha = 1;
          }
        }

        function animate() {
          // ctx.fillStyle = "rgba(0, 0, 0, 0.1)";
          // ctx.fillRect(0, 0, canvas.width, canvas.height);
            
            // ctx.clearRect(0, 0, canvas.width, canvas.height);
            // ctx.clearRect(0, 0, canvas.width, canvas.height);

            ctx.fillStyle = "rgba(255, 255, 255, 0)"; 
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // ctx.fillStyle = "rgba(0, 0, 0, 0.02)";
            // ctx.fillRect(0, 0, canvas.width, canvas.height);



          if (Math.random() < 0.03) {
            fireworks.push(new Firework());
          }

          for (let i = fireworks.length - 1; i >= 0; i--) {
            if (fireworks[i].update()) {
              fireworks.splice(i, 1);
            }
          }

          for (let i = particles.length - 1; i >= 0; i--) {
            if (particles[i].update()) {
              particles.splice(i, 1);
            }
          }

          requestAnimationFrame(animate);
        }

        animate();

        window.addEventListener("resize", () => {
          canvas.width = window.innerWidth;
          canvas.height = window.innerHeight;
        });
        </script>

                          <script>
                             gsap.registerPlugin();

                             const endDate = new Date("2025-09-06T23:59:59").getTime();

                             gsap.to(".sand-clock", {
                               rotate: 15,
                               duration: 0.2,
                               yoyo: true,
                               repeat: -1,
                               ease: "power1.inOut"
                             });

                             function updateCountdown() {
                               const now = new Date().getTime();
                               let timeLeft = endDate - now;

                               if (timeLeft <= 0) {
                                 document.querySelector(".countdown").innerHTML = "<strong>Offer Expired!</strong>";
                                 return;
                               }

                               let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                               let hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                               let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                               let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                               setNumber("#days", days);
                               setNumber("#hours", hours);
                               setNumber("#minutes", minutes);
                               setNumber("#seconds", seconds);
                             }

                             // Animate number change
                             function setNumber(selector, newVal) {
                               let el = document.querySelector(selector);
                               if (el.textContent != newVal) {
                                 el.textContent = newVal;
                                 gsap.fromTo(el, 
                                   { scale: 1, color: "#fff" }, 
                                   { scale: 1.3, color: "#fbbf24", duration: 0.2, yoyo: true, repeat: 1 }
                                 );
                               }
                             }

                             // Update every second
                             setInterval(updateCountdown, 1000);
                             updateCountdown();
                           </script>



         <section id="iconic-life" class="iconic-life section-padding">
          <div class="row no-gutters" style="margin: 0;">
            <div class="col-sm-6 iconic-left" style="; overflow: hidden;">
              <img src="assets/img/banner/india.png" class="img-fluid w-100" alt="World I Go">
            </div>
            <div class="col-sm-6 iconic-right" style=";overflow: hidden;">
                <div class="india-content" style="margin-bottom:5rem ;">
                    <h1 style="font-family: 'Whipsnapper-Regular';font-size: 5rem;color:white; display:flex;justify-content: center;align-items: center;flex-direction: column;">GAME ON !</h1>
                    <h2 style="font-family: 'Whipsnapper-Regular';font-size: 5rem;color:white; display:flex;justify-content: center;align-items: center;flex-direction: column;">Play it. Know it. Win it</h2>
                </div>
                <div class="india-content" style="display:flex;justify-content: center;align-items: center;flex-direction: column;display: flex;">
                    <h2 style="font-family: 'Whipsnapper-Regular';font-size: 4rem; color:white;">What's the Game?</h2>
                    <p style="font-family: 'Montserrat';font-size: 1.5rem;color:#eb9d22; font-style: italic;">Throw. Pick. Build your set.</p>
                    <p style="font-family: 'Montserrat';font-size: 1.5rem; color:#eb9d22; font-style: italic; margin-top: -1.5rem ;">Create a set & race to finish first.</p>
                    <h6 style="font-family: 'Montserrat';font-size: 1.5rem; color:#eb9d22; font-style: italic; display: flex; align-items: center; justify-content: center;" >The Twist? Wild Cards ask you a question. Get it right, and <br> you unlock a lucky card that fits anywhere you want.</h6>
                </div>

              <!-- <img src="assets/img/banner/Dastak_Right.jpg" class="img-fluid w-100" alt="Kumar Corp Ki Dastak | 59th Anniversary Offer | 2 BHK in Undri"> -->
            </div>
          </div>
        </section>


         <section id="iconic-life" class="iconic-life section-padding">
          <div class="row no-gutters" style="margin: 0;">
            
            <div class="col-sm-6 iconic-right" style=";overflow: hidden;">

                <div class="state-list" style="display:flex; justify-content: center;align-items: center;">
                    <ul style="padding:3rem;color:white;">
                        <div>
                            <h2>Explore India</h2>
                            <p>Nature Landscapes Adventure</p>
                        </div>
                        <li>Ladakh</li>
                        <li>Assam</li>
                        <li>Kerala</li>
                        <li>Karnataka</li>
                        <li>Lakshadweep</li>
                        <li>Uttarakhand</li>
                        <li>Jammu & Kashimir</li>
                        <li>Madya Pradesh</li>
                    </ul>
                    <ul style="padding:3rem; color:white;">
                        <div>
                            <h2>Experience India</h2>
                            <p>Culture Food Heritage</p>
                        </div>
                        <li>Punjab</li>
                        <li>Gujarat</li>
                        <li>Rajastan</li>
                        <li>Karnataka</li>
                        <li>Maharashtra</li>
                        <li>Tamil Nadu</li>
                        <li>West Begal</li>
                        <li>Andra Pradesh</li>
                        <li>Utter Pradesh</li>
                    </ul>  
                </div>

              <!-- <img src="assets/img/banner/Dastak_Right.jpg" class="img-fluid w-100" alt="Kumar Corp Ki Dastak | 59th Anniversary Offer | 2 BHK in Undri"> -->
            </div>
            <div class="col-sm-6 iconic-right" style="; overflow: hidden;">
              <img src="assets/img/banner/india.png" class="img-fluid w-100" alt="World I Go">
            </div>
          </div>
        </section>

        <!-- background-color: #e5e5f7;
        opacity: 0.8;
        background-image:  linear-gradient(135deg, #376809 25%, transparent 25%), linear-gradient(225deg, #376809 25%, transparent 25%), linear-gradient(45deg, #376809 25%, transparent 25%), linear-gradient(315deg, #376809 25%, #e5e5f7 25%);
        background-position:  7px 0, 7px 0, 0 0, 0 0;
        background-size: 14px 14px;
        background-repeat: repeat; -->


      <section class="legacy-section" style="background-color: #faa61a">
        <div style="
      background-color: #faa61a;
      opacity: 0.8;
      background-image:  linear-gradient(135deg, #376809 25%, transparent 25%), linear-gradient(225deg, #376809 25%, transparent 25%), linear-gradient(45deg, #376809 25%, transparent 25%), linear-gradient(315deg, #376809 25%, #e5e5f7 25%);
      background-position:  7px 0, 7px 0, 0 0, 0 0;
      background-size: 14px 14px;
      background-repeat: repeat;padding: .5rem;"></div>


        <div style="
      background-color: #faa61a;
      opacity: 0.8;
      background-image:  linear-gradient(135deg, #376809 25%, transparent 25%), linear-gradient(225deg, #376809 25%, transparent 25%), linear-gradient(45deg, #376809 25%, transparent 25%), linear-gradient(315deg, #376809 25%, #e5e5f7 25%);
      background-position:  7px 0, 7px 0, 0 0, 0 0;
      background-size: 14px 14px;
      background-repeat: repeat;padding: .5rem;"></div>



        <div style="background-color: #faa61a;
        opacity: 0.8;
        background-image:  linear-gradient(135deg, #0f56b7 25%, transparent 25%), linear-gradient(225deg, #0f56b7 25%, transparent 25%), linear-gradient(45deg, #0f56b7 25%, transparent 25%), linear-gradient(315deg, #0f56b7 25%, #e5e5f7 25%);
        background-position:  7px 0, 7px 0, 0 0, 0 0;
        background-size: 14px 14px;
        background-repeat: repeat;padding: .5rem;"></div>


        <div style="background-color: #e5e5f7;
opacity: 0.8;
background-image:  linear-gradient(135deg, #de1208 25%, transparent 25%), linear-gradient(225deg, #de1208 25%, transparent 25%), linear-gradient(45deg, #de1208 25%, transparent 25%), linear-gradient(315deg, #de1208 25%, #e5e5f7 25%);
background-position:  7px 0, 7px 0, 0 0, 0 0;
background-size: 14px 14px;
background-repeat: repeat;padding: .5rem;"></div>


        <div style="background-color: #e5e5f7;
opacity: 0.8;
background-image:  linear-gradient(135deg, #ec7317 25%, transparent 25%), linear-gradient(225deg, #ec7317 25%, transparent 25%), linear-gradient(45deg, #ec7317 25%, transparent 25%), linear-gradient(315deg, #ec7317 25%, #e5e5f7 25%);
background-position:  7px 0, 7px 0, 0 0, 0 0;
background-size: 14px 14px;
background-repeat: repeat;padding: .5rem;"></div>



        <div style="background-color: #e5e5f7;
opacity: 0.8;
background-image:  linear-gradient(135deg, #8f7866 25%, transparent 25%), linear-gradient(225deg, #8f7866 25%, transparent 25%), linear-gradient(45deg, #8f7866 25%, transparent 25%), linear-gradient(315deg, #8f7866 25%, #e5e5f7 25%);
background-position:  7px 0, 7px 0, 0 0, 0 0;
background-size: 14px 14px;
background-repeat: repeat;padding: .5rem;"></div>


      <div style="
      background-color: #faa61a;
      opacity: 0.8;
      background-image:  linear-gradient(135deg, #376809 25%, transparent 25%), linear-gradient(225deg, #376809 25%, transparent 25%), linear-gradient(45deg, #376809 25%, transparent 25%), linear-gradient(315deg, #376809 25%, #e5e5f7 25%);
      background-image:  linear-gradient(135deg, #f74567 25%, transparent 25%), linear-gradient(225deg, #f74567 25%, transparent 25%), linear-gradient(45deg, #f74567 25%, transparent 25%), linear-gradient(315deg, #f74567 25%, #e5e5f7 25%);
      background-image:  linear-gradient(135deg, #f74567 25%, transparent 25%), linear-gradient(225deg, #f74567 25%, transparent 25%), linear-gradient(45deg, #f74567 25%, transparent 25%), linear-gradient(315deg, #f74567 25%, #e5e5f7 25%);
      background-image:  linear-gradient(135deg, #f74567 25%, transparent 25%), linear-gradient(225deg, #f74567 25%, transparent 25%), linear-gradient(45deg, #f74567 25%, transparent 25%), linear-gradient(315deg, #f74567 25%, #e5e5f7 25%);
      background-position:  7px 0, 7px 0, 0 0, 0 0;
      background-size: 14px 14px;
      background-repeat: repeat; padding: .5rem;"></div>
      </section>


      <section class="legacy-section" style="background-color:#d23527" 
      >
        <h2 class="legacy-heading">A PROFOUND LEGACY</h2>
        <div class="container legacy-container">
          <div class="row" style="display:flex;justify-content: center;align-items: center;">
            <div class="col-12 col-sm-6 col-lg-3 mb-4 legacy-box">
              <div class="legacy-icon"><i class="fas fa-building"></i></div>
              <div class="legacy-number" data-count="140"style="font-family: 'Whipsnapper-Regular';font-size: 5rem;color:white;">172</div>
              <p class="legacy-description"style="font-family: 'Whipsnapper-Regular';font-size: 3rem;color:white;">Cards</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4 legacy-box">
              <div class="legacy-icon"><i class="fas fa-users"></i></div>
              <div class="legacy-number" data-count="42000"style="font-family: 'Whipsnapper-Regular';font-size: 5rem;color:white;">2</div>
              <p class="legacy-description"style="font-family: 'Whipsnapper-Regular';font-size: 3rem;color:white;">Sets</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4 legacy-box">
              <div class="legacy-icon"><i class="fas fa-briefcase"></i></div>
              <div class="legacy-number" data-count="1000"style="font-family: 'Whipsnapper-Regular';font-size: 5rem;color:white;">8</div>
              <p class="legacy-description"style="font-family: 'Whipsnapper-Regular';font-size: 3rem;color:white;">States - 10 cards each</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4 legacy-box">
              <div class="legacy-icon"><i class="fas fa-certificate"></i></div>
              <div class="legacy-number" data-count="15"style="font-family: 'Whipsnapper-Regular';font-size: 5rem;color:white;">5</div>
              <p class="legacy-description"style="font-family: 'Whipsnapper-Regular';font-size: 3rem;color:white;">Wild Cards & 1 Lucky Card each</p>
            </div>
          </div>
        </div>
      </section>


            <section class="legacy-section" style="background-color: #faa61a">
              <div style="
            background-color: #faa61a;
            opacity: 0.8;
            background-image:  linear-gradient(135deg, #376809 25%, transparent 25%), linear-gradient(225deg, #376809 25%, transparent 25%), linear-gradient(45deg, #376809 25%, transparent 25%), linear-gradient(315deg, #376809 25%, #e5e5f7 25%);
            background-position:  7px 0, 7px 0, 0 0, 0 0;
            background-size: 14px 14px;
            background-repeat: repeat;padding: .5rem;"></div>


              <div style="
            background-color: #faa61a;
            opacity: 0.8;
            background-image:  linear-gradient(135deg, #376809 25%, transparent 25%), linear-gradient(225deg, #376809 25%, transparent 25%), linear-gradient(45deg, #376809 25%, transparent 25%), linear-gradient(315deg, #376809 25%, #e5e5f7 25%);
            background-position:  7px 0, 7px 0, 0 0, 0 0;
            background-size: 14px 14px;
            background-repeat: repeat;padding: .5rem;"></div>



              <div style="background-color: #faa61a;
              opacity: 0.8;
              background-image:  linear-gradient(135deg, #0f56b7 25%, transparent 25%), linear-gradient(225deg, #0f56b7 25%, transparent 25%), linear-gradient(45deg, #0f56b7 25%, transparent 25%), linear-gradient(315deg, #0f56b7 25%, #e5e5f7 25%);
              background-position:  7px 0, 7px 0, 0 0, 0 0;
              background-size: 14px 14px;
              background-repeat: repeat;padding: .5rem;"></div>


              <div style="background-color: #e5e5f7;
      opacity: 0.8;
      background-image:  linear-gradient(135deg, #de1208 25%, transparent 25%), linear-gradient(225deg, #de1208 25%, transparent 25%), linear-gradient(45deg, #de1208 25%, transparent 25%), linear-gradient(315deg, #de1208 25%, #e5e5f7 25%);
      background-position:  7px 0, 7px 0, 0 0, 0 0;
      background-size: 14px 14px;
      background-repeat: repeat;padding: .5rem;"></div>


              <div style="background-color: #e5e5f7;
      opacity: 0.8;
      background-image:  linear-gradient(135deg, #ec7317 25%, transparent 25%), linear-gradient(225deg, #ec7317 25%, transparent 25%), linear-gradient(45deg, #ec7317 25%, transparent 25%), linear-gradient(315deg, #ec7317 25%, #e5e5f7 25%);
      background-position:  7px 0, 7px 0, 0 0, 0 0;
      background-size: 14px 14px;
      background-repeat: repeat;padding: .5rem;"></div>



              <div style="background-color: #e5e5f7;
      opacity: 0.8;
      background-image:  linear-gradient(135deg, #8f7866 25%, transparent 25%), linear-gradient(225deg, #8f7866 25%, transparent 25%), linear-gradient(45deg, #8f7866 25%, transparent 25%), linear-gradient(315deg, #8f7866 25%, #e5e5f7 25%);
      background-position:  7px 0, 7px 0, 0 0, 0 0;
      background-size: 14px 14px;
      background-repeat: repeat;padding: .5rem;"></div>


            <div style="
            background-color: #faa61a;
            opacity: 0.8;
            background-image:  linear-gradient(135deg, #376809 25%, transparent 25%), linear-gradient(225deg, #376809 25%, transparent 25%), linear-gradient(45deg, #376809 25%, transparent 25%), linear-gradient(315deg, #376809 25%, #e5e5f7 25%);
            background-image:  linear-gradient(135deg, #f74567 25%, transparent 25%), linear-gradient(225deg, #f74567 25%, transparent 25%), linear-gradient(45deg, #f74567 25%, transparent 25%), linear-gradient(315deg, #f74567 25%, #e5e5f7 25%);
            background-image:  linear-gradient(135deg, #f74567 25%, transparent 25%), linear-gradient(225deg, #f74567 25%, transparent 25%), linear-gradient(45deg, #f74567 25%, transparent 25%), linear-gradient(315deg, #f74567 25%, #e5e5f7 25%);
            background-image:  linear-gradient(135deg, #f74567 25%, transparent 25%), linear-gradient(225deg, #f74567 25%, transparent 25%), linear-gradient(45deg, #f74567 25%, transparent 25%), linear-gradient(315deg, #f74567 25%, #e5e5f7 25%);
            background-position:  7px 0, 7px 0, 0 0, 0 0;
            background-size: 14px 14px;
            background-repeat: repeat; padding: .5rem;"></div>
            </section>


             <script src="https://kit.fontawesome.com/a2e8c0bbde.js" crossorigin="anonymous"></script>


   <!-- <section id="iconic-life" class="iconic-life section-padding" style="padding: 0; margin: 5rem;" >
      <div class="container">
          <div class="row no-gutters" style="padding: 0;">
            <img src="assets/img/banner/Legacy.png" alt="Kumar Corp Ki Dastak | 59th Anniversary Offer | 2 BHK in pune">
        </div>
    </div>
 </section> -->

 <!-- <div class="ribbon-container">
   <div class="ribbon" id="ribbon" style="z-index: 100;">
     <span>
       <span id="upto-text" style="display:none;">Up to </span>
       <span id="discount-counter">1%</span>
       <strong>savings guaranteed*</strong>
     </span>
   </div>
 </div> -->

 


        
<!-- <script>
  function animateDiscountCounter() {
    let counter = { val: 1 };
    gsap.to(counter, {
      val: 10,
      duration: 10,
      ease: "power2.out",
      onUpdate: function () {
        document.getElementById("discount-counter").textContent = Math.round(counter.val) + "%";
      },
      onComplete: function () {
        const upto = document.getElementById("upto-text");
        gsap.fromTo(upto, 
          { display: "inline-block", opacity: 0, scale: 0.5, y: -10 },
          { opacity: 1, scale: 1, y: 0, duration: 0.6, ease: "back.out(1.7)" }
        );

        // Restart animation after a short delay if you want it to loop
        gsap.delayedCall(3, animateDiscountCounter);
      }
    });
  }

  animateDiscountCounter();
</script>
 -->



        <!-- <div class="row-fluid" style="box-shadow:
      0 12.5px 10px rgba(0, 0, 0, 0.06),
      0 22.3px 17.9px rgba(0, 0, 0, 0.072),
      0 41.8px 33.4px rgba(0, 0, 0, 0.086),
      0px 0px 25px 25px rgba(0, 0, 0, 0.20); --bs-gutter-x:0px;">
      <div class="life-box">
        <img src="assets/img/banner.jpeg" class="img-fluid" width="100%" alt="">
      </div>
    </div> -->

       





        

        <!-- <section id="contact-form" class="contact-form section-padding d-none">
          <div class="container">
            <div class="section-title">
              <h2>ENQUIRY FORM</h2>
            </div>
            <div class="row" style="--bs-gutter-x:0px;">
              <div class="form-wrapper mt-5">
                <form action="#" method="post">
                  <div class="row">
                    <div class="mb-4 col-12">
                      <div class="form-wrap">
                        <label for="name" class="form-label">Name<span class="required">*</span></label>
                        <input type="text" name="name" id="name1" placeholder="" >
                        <input name="firstname" type="hidden" id="firstname" class="hide-robot">
                        <div class="error_msg error" id="name1_error">Please Enter Your Name</div>
                      </div>
                    </div>
                    <div class="mb-4 col-6">
                      <div class="form-wrap">
                        <label for="email" class="form-label">Email Address<span class="required">*</span></label>
                        <input type="email" name="email" id="email1" placeholder="" required>
                        <div class="error_msg error" id="email1_error">Please Enter Your Email</div>
                      </div>
                    </div>
                    <div class="mb-4 col-6">
                      <div class="form-wrap">
                        <label for="phone" class="form-label">Phone Number<span class="required">*</span></label>
                        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone" id="mobile1" placeholder="">
                        <div class="error_msg error" id="mobile1_error">Please Enter Your Mobile Number
                        </div>
                      </div>
                    </div>
                    <div class="mb-4 col-12">
                      <div class="form-wrap">
                        <label for="message" class="form-label">MESSAGE<span class="required">*</span></label>
                        <textarea name="message" rows="1" placeholder="" required></textarea>
                      </div>
                    </div>
                    <div class="text-center mt-3">
                      <button type="submit" value="Submit" id="" class="btn btn-primary submit-btn">SUBMIT ENQUIRY</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section> -->



    </main><!-- End #main -->

    <!-- <section id="connectivity" class="connectivity section-padding">
        <div class="container">
        <div class="row">
        <div class="connectivity-wrapper">
            <img src="assets/img/Kumar-Panache-Location_Web_1920-x-900.jpg" class="img-fluid d-none d-lg-block" alt="">
            <img src="assets/img/Kumar-Panache-Location_Web_1080-x-800.jpg" class="img-fluid d-block d-lg-none" alt="">
        </div>
        </div>
        </div>
    </section> -->


    <!-- <section id="upcoming" class="upcoming section-padding">
        <div class="container">
          <div class="section-title">
            <p>Today, Hadapsar is not just a choice; it has become a privilege.</p>
            <div class="line-box d-flex align-items-center">
              <span class="line"></span>
              <h2>UPCOMING INFRASTRUCTURE</h2>
              <span class="line"></span>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-4 mt-2 mb-2 mt-lg-0 mb-lg-0">
              <div class="upcoming-box">
                <img src="assets/img/upcoming/1.jpg" class="img-fluid" alt="">
                <p>PURANDHAR AIRPORT</p>
              </div>
            </div>
            <div class="col-md-4 mt-2 mb-2 mt-lg-0 mb-lg-0">
              <div class="upcoming-box">
                <img src="assets/img/upcoming/2.jpg" class="img-fluid" alt="">
                <p>METRO LINE</p>
              </div>
            </div>
            <div class="col-md-4 mt-2 mb-2 mt-lg-0 mb-lg-0">
              <div class="upcoming-box">
                <img src="assets/img/upcoming/3.jpg" class="img-fluid" alt="">
                <p>RING ROAD</p>
              </div>
            </div>
          </div>
        </div>
      </section> -->


   <!--  <section id="iconic-life" class="iconic-life section-padding" style="height:100vh;background-image: url('assets/img/banner/Dastak-BG_1920-x-900.jpg'); background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover; display:flex;justify-content: center;align-items: center;">
        <div class="container">
        <div class="row" style="display:flex;justify-content: center;align-items: center;">
            <div class="col-sm-6">
                <img style="border-radius: 5rem;" src="assets/img/banner/Map_1220-x-800.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6" style="">
                <div class="container">
                    <div class="life-box">
                        <div class="content" >
                            <h3>DISCOVER YOUR</h3>
                            <p>Happy Place</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
    </section> -->

    <style>
        .card{margin: 10px}
    </style>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <section id="about" class="iconic-life section-padding" >

        <div class="row" style="display:flex;justify-content: center;align-items: center;">
                <div class="col-lg-12 mt-3 TextSection overflow-hidden" >
                    <div class="container TextSectionPara " style="overflow: hidden;">
                        <div class=" section-title mb-3 ">
                            <h2 style="text-align: center;" class="mb-5"> Experience & Learn </h2>
                        </div>
                    </div>
                </div>


              <div class="swiper mySwiper">  
                <div class="responsive swiper-wrapper">


                 <div class="swiper-slide detail_slider_col" data-project="Parc Residences"
                 data-url="https://kumarcorp.kumarworld.com/project/parc-residences">
                   <a href="javascript:void(0);">
                     <img src="./assets/img/cards/Artboard 31.png" alt="Kumar Parc Residences" />
                   </a>
                 </div>

                
                  <div class="swiper-slide detail_slider_col"  data-project="Panache"
                 data-url="https://kumarcorp.kumarworld.com/project/kumar-panache">
                    <a href="javascript:void(0);" target="_blank">
                      <img src="./assets/img/cards/Artboard 41.png" alt="Kumar Panache" />
                    </a>
                  </div>
                  
                  <div class="swiper-slide detail_slider_col" data-project="Palm Spring Tower"
                 data-url="https://kumarcorp.kumarworld.com/project/palm-springs">
                    <a href="javascript:void(0);" target="_blank">
                      <img src="./assets/img/cards/Artboard 51.png" alt="Kumar PST" />
                    </a>
                  </div>


                  <div class="swiper-slide detail_slider_col" data-project="Princetown Royal"
                 data-url="https://kumarcorp.kumarworld.com/project/princetown-royal">
                    <a href="javascript:void(0);" target="_blank">
                      <img src="./assets/img/cards/Artboard 61.png" alt="Kumar PTR" />
                    </a>
                  </div>


                  <div class="swiper-slide detail_slider_col" data-project="Princetown Tower"
                 data-url="https://kumarcorp.kumarworld.com/project/princetown-tower">
                    <a href="javascript:void(0);" target="_blank">
                      <img src="./assets/img/cards/Artboard 71.png" alt="Kumar PTT" />
                    </a>
                  </div>


                  <div class="swiper-slide detail_slider_col" data-project="Siddhachal"
                 data-url="https://kumarcorp.kumarworld.com/project/kumar-siddhachal">
                    <a href="javascript:void(0);" target="_blank">
                      <img src="./assets/img/cards/Artboard 1.png" alt="Kumar Siddhachal" />
                    </a>
                  </div>

                  <div class="swiper-slide detail_slider_col" data-project="Prithvi"
                 data-url="https://kumarcorp.kumarworld.com/project/kumar-prithvi">
                    <a href="javascript:void(0);" target="_blank">
                      <img src="./assets/img/cards/Artboard 11.png" alt="Kumar Prithvi" />
                    </a>
                  </div>
 
                  <div class="swiper-slide detail_slider_col" data-project="Prospera"
                 data-url="https://kumarcorp.kumarworld.com/project/kumar-prospera">
                    <a href="javascript:void(0);" target="_blank">
                      <img src="./assets/img/cards/Artboard 21.png" alt="Kumar Prospera" />
                    </a>
                  </div>


                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next custom-nav"></div>
              </div>


        </div>
    </section>


          <section class="legacy-section" style="background-color: #faa61a">
            <div style="
          background-color: #faa61a;
          opacity: 0.8;
          background-image:  linear-gradient(135deg, #376809 25%, transparent 25%), linear-gradient(225deg, #376809 25%, transparent 25%), linear-gradient(45deg, #376809 25%, transparent 25%), linear-gradient(315deg, #376809 25%, #e5e5f7 25%);
          background-position:  7px 0, 7px 0, 0 0, 0 0;
          background-size: 14px 14px;
          background-repeat: repeat;padding: .5rem;"></div>


            <div style="
          background-color: #faa61a;
          opacity: 0.8;
          background-image:  linear-gradient(135deg, #376809 25%, transparent 25%), linear-gradient(225deg, #376809 25%, transparent 25%), linear-gradient(45deg, #376809 25%, transparent 25%), linear-gradient(315deg, #376809 25%, #e5e5f7 25%);
          background-position:  7px 0, 7px 0, 0 0, 0 0;
          background-size: 14px 14px;
          background-repeat: repeat;padding: .5rem;"></div>



            <div style="background-color: #faa61a;
            opacity: 0.8;
            background-image:  linear-gradient(135deg, #0f56b7 25%, transparent 25%), linear-gradient(225deg, #0f56b7 25%, transparent 25%), linear-gradient(45deg, #0f56b7 25%, transparent 25%), linear-gradient(315deg, #0f56b7 25%, #e5e5f7 25%);
            background-position:  7px 0, 7px 0, 0 0, 0 0;
            background-size: 14px 14px;
            background-repeat: repeat;padding: .5rem;"></div>


            <div style="background-color: #e5e5f7;
    opacity: 0.8;
    background-image:  linear-gradient(135deg, #de1208 25%, transparent 25%), linear-gradient(225deg, #de1208 25%, transparent 25%), linear-gradient(45deg, #de1208 25%, transparent 25%), linear-gradient(315deg, #de1208 25%, #e5e5f7 25%);
    background-position:  7px 0, 7px 0, 0 0, 0 0;
    background-size: 14px 14px;
    background-repeat: repeat;padding: .5rem;"></div>


            <div style="background-color: #e5e5f7;
    opacity: 0.8;
    background-image:  linear-gradient(135deg, #ec7317 25%, transparent 25%), linear-gradient(225deg, #ec7317 25%, transparent 25%), linear-gradient(45deg, #ec7317 25%, transparent 25%), linear-gradient(315deg, #ec7317 25%, #e5e5f7 25%);
    background-position:  7px 0, 7px 0, 0 0, 0 0;
    background-size: 14px 14px;
    background-repeat: repeat;padding: .5rem;"></div>



            <div style="background-color: #e5e5f7;
    opacity: 0.8;
    background-image:  linear-gradient(135deg, #8f7866 25%, transparent 25%), linear-gradient(225deg, #8f7866 25%, transparent 25%), linear-gradient(45deg, #8f7866 25%, transparent 25%), linear-gradient(315deg, #8f7866 25%, #e5e5f7 25%);
    background-position:  7px 0, 7px 0, 0 0, 0 0;
    background-size: 14px 14px;
    background-repeat: repeat;padding: .5rem;"></div>


          <div style="
          background-color: #faa61a;
          opacity: 0.8;
          background-image:  linear-gradient(135deg, #376809 25%, transparent 25%), linear-gradient(225deg, #376809 25%, transparent 25%), linear-gradient(45deg, #376809 25%, transparent 25%), linear-gradient(315deg, #376809 25%, #e5e5f7 25%);
          background-image:  linear-gradient(135deg, #f74567 25%, transparent 25%), linear-gradient(225deg, #f74567 25%, transparent 25%), linear-gradient(45deg, #f74567 25%, transparent 25%), linear-gradient(315deg, #f74567 25%, #e5e5f7 25%);
          background-image:  linear-gradient(135deg, #f74567 25%, transparent 25%), linear-gradient(225deg, #f74567 25%, transparent 25%), linear-gradient(45deg, #f74567 25%, transparent 25%), linear-gradient(315deg, #f74567 25%, #e5e5f7 25%);
          background-image:  linear-gradient(135deg, #f74567 25%, transparent 25%), linear-gradient(225deg, #f74567 25%, transparent 25%), linear-gradient(45deg, #f74567 25%, transparent 25%), linear-gradient(315deg, #f74567 25%, #e5e5f7 25%);
          background-position:  7px 0, 7px 0, 0 0, 0 0;
          background-size: 14px 14px;
          background-repeat: repeat; padding: .5rem;"></div>
          </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <!-- <script>
      var swiper = new Swiper(".mySwiper", {
       slidesPerView: 2,
       spaceBetween: 30,
       freeMode: true,
       pagination: {
        el: ".swiper-pagination",
        clickable: true,
     },
    });
    </script> -->


    <!-- <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 6,
        spaceBetween: 30,
        freeMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            // prevEl: ".swiper-button-prev", // optional
          },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },

        breakpoints: {
          0: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 30,
          }
        }
      });
    </script> -->

    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        freeMode: true,
        // effect: 'coverflow',
        //   coverflowEffect: {
        //     rotate: 30,
        //     slideShadows: false,
        //   },
        breakpoints: {
          0: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 30,
          }
        }
      });
    </script>


    <!-- <script>
      const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          // when window width is >= 640px
          640: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          768: {
            slidesPerView: 1,
            spaceBetween: 15,
          },
          1024: {
            slidesPerView: 1,
            spaceBetween: 20,
          }
        }
      });

    </script> -->


         <!--  <section id="contact" class="iconic-lif section-padding"   style="padding: 5rem 0rem; background: linear-gradient(120deg, #270047, #9E054F);
  background-size: cover; display: flex;justify-content: center;align-items: center;">
              <div class="container">
              <div class="row" >
                  <div class="col-sm-6" >
                        <div class="modal-body">
                            <h1 class="modal-title mb-3" id="popupModalLabel">ENQUIRE NOW</h1>
                            <div class="form-wrapper">
                                <form   method="POST" autocomplete="off" class="lead_form formsSubmit" data-id="contactUsForm"  >
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <input  type="text" class="form-control" name="name2" id="name2"
                                                placeholder="Your Name*">
                                            <input name="firstname" type="hidden" id="firstname" class="hide-robot">
                                            <input type="hidden" name="csrf_token" id="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                            <input type="hidden" name="form_submission_id" id="form_submission_id" value="<?php echo $_SESSION['form_submission_id']; ?>">
                                            <div class="error_msg error" id="name2_error">Please Enter Your Name</div>
                                            <span class="text-danger"><?php echo $nameErr; ?></span>
                                        </div>
                                        <div class="col-12 form-group">
                                            <input type="email" class="form-control" name="email2" id="email2"
                                                placeholder="Your Email ID">
                                            <div class="error_msg error" id="email2_error">Please Enter Your Email</div>
                                            <span class="text-danger"><?php echo $emailErr; ?></span>
                                        </div>
                                        <div class="col-12 form-group">
                                            <input type="text" class="form-control" name="mobile2" id="mobile2"
                                                onkeypress="return number(event)" maxlength="10" placeholder="Your Mobile No.">
                                            <div class="error_msg error" id="mobile2_error">Please Enter Your Mobile Number
                                            </div>
                                            <span class="text-danger"><?php echo $phoneErr; ?></span>
                                        </div>
                                        <div class="col-12 form-group">
                                            <select class="form-control custom-select" style="" name="pid2" id="pid2"
                                                placeholder="Enter Message" > 
                                                <option value="">Select Project*</option>
                                                <option value="527663903571816624">Parc Residences</option>
                                                <option value="527663903571816625">Panache</option>
                                                <option value="529050893144816332">Siddhachal</option>
                                                <option value="560338377402839217">Palm Spring Tower</option>
                                                <option value="527663903571816278">Princetown Royal</option>
                                                <option value="527663903571816481">Princetown Tower</option>
                                                <option value="527664231125816273">Prospera</option>
                                                <option value="527663903571816620">Prithvi</option>
                                                <option value="527663903571816622">Kumar Prakruti</option>
                                                <option value="527663903571816623">Kumar Pinnacle</option>
                                                <option value="540797986297839761">Prajwal</option>
                                                <option value="527664231125816158">Primus</option>
                                                <option value="527664231125816101">Kumar Parasmani</option>
                                            </select>
                                            <div class="error_msg error" id="project2_error">Please Enter Select Project Name</div>
                                            <span class="text-danger"><?php echo $projectErr; ?></span>
                                        </div>
                                        <div class="col-12 form-group">
                                            <textarea class="form-control" name="message2" id="message2"
                                                placeholder="Enter Message" rows=""></textarea>
                                            <div class="error_msg error" id="message2_error">Please Enter Your Message</div>
                                            <span class="text-danger"><?php echo $messageErr; ?></span>
                                        </div>
                                        <div class="text-center mt-3"><button type="submit" id="form2" class="submit-btn">SUBMIT
                                                ENQUIRY</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                  </div>
                  <div class="col-sm-6" style="display:flex;align-items: center;justify-content: center;">
                      <img style="width: 60%;" src="./assets/img/kumar-properties-headquarters.png" alt="Kumar Corp | Kumar Properties">
                  </div>
              </div>
              </div>
          </section> -->



      <!-- Include Font Awesome CDN in <head> -->
     

      <div class="footer-section py-5">
             <div class="container">
               <div class="row text-center text-lg-start align-items-center gy-4">
                 
                 <div class="col-lg-6 d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-start">
                   <div class="me-md-4 mb-3 mb-md-0">
                     <img src="assets/img/Final_Logo.png" alt="Kumar Corp Logo" class="img-fluid" style="max-width: 100px;">
                   </div>
                   <div class="d-flex align-items-center gap-2">
                     <!-- <i class="fas fa-globe fa-lg"></i> -->
                     <!-- <a href="https://kumarcorp.kumarworld.com" target="_blank" class="footer-link">kumarcorp.kumarworld.com</a> -->
                   </div>
                 </div>

                 <div class="col-lg-6">
                   <div class="d-flex flex-column align-items-center align-items-lg-end text-center text-lg-end">
                     <div class="mb-3">
                       <span class="me-2">Follow us:</span>
                       <a href="https://www.facebook.com/kumarpropertiespune" class="footer-icon"><i  class="fab fa-facebook-f"></i></a>
                       <a href="https://x.com/Kumarproperties" class="footer-icon"><i class="fab fa-twitter"></i></a>
                       <a href="https://www.instagram.com/kumarproperties/" class="footer-icon"><i class="fab fa-instagram"></i></a>
                       <a href="https://in.linkedin.com/company/kumarproperties" class="footer-icon"><i class="fab fa-linkedin-in"></i></a>
                       <a href="https://www.youtube.com/channel/UCSfnHQmlu8aEC64uXm9npIQ" class="footer-icon"><i class="fab fa-youtube"></i></a>
                     </div>
                     <div class="footer-note small text-muted">
                        @ 2026 Worldigo. All rights reserved.
                       <!-- All projects have been registered via MahaRERA and are available at  -->
                       <!-- <a href="https://maharera.maharashtra.gov.in" target="_blank">maharera.maharashtra.gov.in</a> -->
                     </div>
                   </div>
                 </div>

               </div>
             </div>
        </div>



    <!-- <section id="about" class="about section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="form-wrapper mt-5">
                        <div class="section-title">
                            <h2>ENQUIRY FORM</h2>
                        </div>
                        <form action="#" method="post">
                            <div class="row mt-4">
                                <div class="mb-4 col-12">
                                    <div class="form-wrap">
                                        <label for="name" class="form-label">Name<span class="required">*</span></label>
                                        <input type="text" name="name" id="name1" placeholder="" required>
                                        <div class="error_msg error" id="name1_error">Please Enter Your Name</div>
                                    </div>
                                </div>
                                <div class="mb-4 col-12">
                                    <div class="form-wrap">
                                        <label for="email" class="form-label">Email Address<span
                                                class="required">*</span></label>
                                        <input type="email" name="email" id="email1" placeholder="" required>
                                        <div class="error_msg error" id="email1_error">Please Enter Your Email</div>
                                    </div>
                                </div>
                                <div class="mb-4 col-12">
                                    <div class="form-wrap">
                                        <label for="phone" class="form-label">Phone Number<span
                                                class="required">*</span></label>
                                        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone" id="mobile1"
                                            placeholder="">
                                        <div class="error_msg error" id="mobile1_error">Please Enter Your Mobile Number
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col-12">
                    <div class="form-wrap">
                      <label for="message" class="form-label">MESSAGE<span class="required">*</span></label>
                      <textarea name="message" rows="1" placeholder="" required></textarea>
                    </div>
                  </div>
                                <div class="text-center mt-3">
                                    <button type="submit" value="Submit" id="form1"
                                        class="btn btn-primary submit-btn">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="about-img">
                <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
              </div>
                </div>
                <div class="col-md-6 mt-3 mt-lg-0">
                     <div class="section-title mb-3">
                <p>Experience the</p>
                <h2>ONE OF <br> A KIND LUXE</h2>
              </div>
              <div class="about-box">
                <p>Discover luxury living with our legacy of on-time delivery.</p>
                <p>Immerse yourself in amenities for all ages, like vibrant play areas and multiple sports facilities. A sky bridge connects all homes to a grand podium that’s bustling with premium facilities. With premier malls just a stroll away, Codename Stardom is where quality and convenience converge.</p>
              </div>
              <div class="row legacy-box-wrapper">
                <div class="col-md-6 legacy-box">
                  <h3>57+</h3>
                  <h4>Years <br> Legacy</h4>
                </div>
                <div class="col-md-6 legacy-box">
                  <h3>35+</h3>
                  <h4>million sq. ft. <br> of developement</h4>
                </div>
                <div class="col-md-6 legacy-box">
                  <h3>135</h3>
                  <h4>Projects</h4>
                </div>
                <div class="col-md-6 legacy-box">
                  <h3>40,000+</h3>
                  <h4>Happy <br> families</h4>
                </div>
              </div>
                </div>
            </div>
        </div>
    </section> -->







    <!-- <footer id="footer" class="footer"> -->
        <!-- <div class="container">
            <div class="section-title">
                <h2>Register your interest, <br class="d-none d-lg-block"> and take the first step towards the life
                    you've always dreamt of.</h2>
            </div>
        </div>
        <div class="footer-area footer-dark">
            <div class="container">


                <section id="about" class="about section-padding">
                    <div class="container">
                        <div class="row align-items-center " style="--bs-gutter-x:0px;">
                            <div class="col-md-12">
                                <div class="form-wrapper mt-5">
                                    <form autocomplete="off" class="lead_form formsSubmit" data-id="contactUsForm"
                                        method="POST">
                                        <div class="row">
                                            <div class="mb-4 col-12">
                                                <div class="form-wrap">
                                                    <label for="name" class="form-label">Name<span
                                                            class="required">*</span></label>
                                                    <input type="text" name="name" id="name2" placeholder="">
                                                    <input name="firstname" type="hidden" id="firstname"
                                                        class="hide-robot">
                                                    <div class="error_msg error" id="name2_error">Please Enter Your Name
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 col-6">
                                                <div class="form-wrap">
                                                    <label for="email" class="form-label">Email Address<span
                                                            class="required">*</span></label>
                                                    <input type="email" name="email" id="email2" placeholder="">
                                                    <div class="error_msg error" id="email2_error">Please Enter Your
                                                        Email</div>
                                                </div>
                                            </div>
                                            <div class="mb-4 col-6">
                                                <div class="form-wrap">
                                                    <label for="phone" class="form-label">Phone Number<span
                                                            class="required">*</span></label>
                                                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone"
                                                        id="mobile2" placeholder="">
                                                    <div class="error_msg error" id="mobile2_error">Please Enter Your
                                                        Mobile Number
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 col-12">
                                                <div class="form-wrap">
                                                    <label for="message" class="form-label">MESSAGE<span
                                                            class="required">*</span></label>
                                                    <textarea name="message" id="message2" rows="1"
                                                        placeholder=""></textarea>
                                                    <div class="error_msg error" id="message2_error">Please Enter Your
                                                        Message</div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="text-center mt-3">
                                            <button type="submit" id="form2" class="submit-btn">SUBMIT ENQUIRY</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div> -->



        <!-- <div class="row section-bg pt-5 pb-5">
          <p style="display: flex;margin-top: 2rem;justify-content: center;font-size: xx-large; color:#CE964b;text-align: center;"   >Connect to register with us, <br class="d-none d-lg-block"> and take the first step towards the life you've always dreamt of.</p>
                                                                  
          <div class="footer-box d-flex align-items-center justify-content-evenly">
            
             <div class="footer-txt"> 
            
            <div class="col-lg-6" style="display: flex;text-align: center;justify-content: center;">
              <div class="row align-items-center" style="">
                <h2> <a href="tel:+91-9595 110011" style="color: #CE964b !important;" >9595 110011</a></h2>
                <h2 style="color: #CE964b !important;">Baner ,Pune</h2>
              </div>
              
            </div>
          </div>
            <div class="col-lg-6">
            <div class="form-wrapper mt-5">
              <div class="section-title">
                <h2>ENQUIRY FORM</h2>
              </div>
              <form action="#" method="post">
                <div class="row mt-4">
                  <div class="mb-4 col-12">
                    <div class="form-wrap">
                      <label for="name" class="form-label">Name<span class="required">*</span></label>
                      <input type="text" name="name" id="name1" placeholder="" required>
                      <div class="error_msg error" id="name1_error">Please Enter Your Name</div>
                    </div>
                  </div>
                  <div class="mb-4 col-12">
                    <div class="form-wrap">
                      <label for="email" class="form-label">Email Address<span class="required">*</span></label>
                      <input type="email" name="email" id="email1" placeholder="" required>
                      <div class="error_msg error" id="email1_error">Please Enter Your Email</div>
                    </div>
                  </div>
                  <div class="mb-4 col-12">
                    <div class="form-wrap">
                      <label for="phone" class="form-label">Phone Number<span class="required">*</span></label>
                      <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone" id="mobile1" placeholder="">
                      <div class="error_msg error" id="mobile1_error">Please Enter Your Mobile Number
                      </div>
                    </div>
                  </div>
                  <div class="mb-4 col-12">
                  <div class="form-wrap">
                    <label for="message" class="form-label">MESSAGE<span class="required">*</span></label>
                    <textarea name="message" rows="1" placeholder="" required></textarea>
                  </div>
                </div>
                  <div class="text-center mt-3">
                    <button type="submit" value="Submit" id="form1" class="btn btn-primary submit-btn">SUBMIT</button>
                  </div>
                </div>
              </form>
            </div>

           <div class="about-img">
              <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
            </div>
          </div>


            <div class="qr-code">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.882096434868!2d77.6420076!3d13.0431761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae172e73806245%3A0x70bfa7985be73cdb!2sKumar%20Prospera!5e0!3m2!1sen!2sin!4v1718689300911!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div> -->
        <!-- </div> -->
        <!-- </div> -->

        <!-- <section class="sec-rera" style="background:#f7f7f7; padding:40px 0px;text-align: center;">
      <div class="container">
        <p>RERA Registration No.: 
          <br>
          <br>Disclaimer : Interiors and fit-outs shown here if any, are not part of the standard offering. All architectural and interior views and images unless specified otherwise, are computer graphics artist impressions and simulated interpretation of actual property with an endeavor to impart clear informative understanding to the recipient with respect to the project and therefore, this printed material does not constitute an offer and/or contract of any type between the promoter (developer) and the recipient / proposed allottee. Prospective purchasers should make and must rely on their own enquiries. The colours of the buildings are indicative only. The information contained herein is believed to be correct but is not guaranteed. Any purchaser under this development shall be governed by the terms and conditions of the agreement to sell, to be entered into between the developer and proposed allottee, and the details of the facilities and amenities etc. will be specified in the said agreement to sell. The area mentioned in the unit plans will vary because of plaster and column locations and no adjustment/refunds of any nature whatsoever, will be made by the developer for such variation.
          <br>
          <br>
        This project is owned by <a href="https://kumarprospera.in/about-us/" style="color: #e87816;">Kumar Properties Pvt Ltd.</a> 
        </p>
        </div>
      </section> -->


        


        <!-- <div class="row" style="--bs-gutter-x:0px;padding:65px 0px">
            <div class="section-title" id="dev">
                <h2>A Project By Pune's Renowned Developer</h2>
                <img style="margin-top: -150px;margin-left: 100px; opacity: 0.25;" src="assets/img/PANACHE STARS_1 (2).png">
            </div>
        </div> -->
    <!-- </footer> -->

    <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    <div class="enquireNowSideFormCloseBtn" data-bs-dismiss="modal">
                        <i class="bi bi-x"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"></path>
                                    </svg>
                    </div>
                    <h2 class="modal-title" id="popupModalLabel">CONTACT US</h2>
                    <div class="form-wrapper">
                        <form autocomplete="off" class="lead_form formsSubmit" data-id="contactUsForm" method="POST">
                            <div class="container">
                                <div class="col-12 form-group ">
                                    <input type="text" class="form-control" name="name1" id="name1"
                                        placeholder="Name*">
                                        <input type="hidden" name="project_name" id="project_name">
                                        <input type="hidden" name="project_url" id="project_url">
                                    <input name="firstname" type="hidden" id="firstname" class="hide-robot">
                                    <input type="hidden" name="csrf_token" id="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                    <input type="hidden" name="form_submission_id" id="form_submission_id" value="<?php echo $_SESSION['form_submission_id']; ?>">
                                    <div class="error_msg error" id="name1_error">Please Enter Your Name</div>
                                    <span class="text-danger"><?php echo $nameErr; ?></span>
                                </div>
                                <div class="col-12 form-group ">
                                    <input type="email" class="form-control" name="email1" id="email1"
                                        placeholder="Email ID">
                                        <input type="hidden" class="phpform" name="utm_source" value="<?php if(isset($_COOKIE['__gtm_campaign_url'])){echo $_COOKIE['__gtm_campaign_url'];}?>" id="m_utm_source" >
                                    <div class="error_msg error" id="email1_error">Please Enter Your Email</div>
                                </div>
                                <div class="col-12 form-group ">
                                    <input type="text" class="form-control" name="mobile1" id="mobile1"
                                        onkeypress="return number(event)" maxlength="10" placeholder="Mobile No.">
                                    <div class="error_msg error" id="mobile1_error">Please Enter Your Mobile Number
                                    </div>
                                </div>
                                <div class="col-12 form-group ">
                                    <textarea class="form-control" name="message1" id="message1"
                                        placeholder="Enter Message" rows=""></textarea>
                                    <div class="error_msg error" id="message1_error">Please Enter Your Message</div>
                                </div>
                                <div class="text-center mt-5"><button type="submit" id="form1" class="submit-btn">SUBMIT
                                        ENQUIRY</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <h2 class="modal-title" id="popupModalLabel">CONTACT US</h2>
            <div class="form-wrapper">
              <form autocomplete="off" class="lead_form formsSubmit" data-id="contactUsForm" method="POST">
                <div class="row">
                  <div class="col-12 form-group mt-3">
                    <input type="text" class="form-control" name="name2" id="name2" placeholder="Name*">
                    <div class="error_msg error" id="name2_error">Please Enter Your Name</div>
                  </div>
                  <div class="col-12 form-group mt-3">
                    <input type="email" class="form-control" name="email2" id="email2" placeholder="Email ID*">
                    <div class="error_msg error" id="email2_error">Please Enter Your Email</div>
                  </div>
                  <div class="col-12 form-group mt-3">
                    <input type="text" class="form-control" name="mobile2" id="mobile2" onkeypress="return number(event)" maxlength="10" placeholder="Mobile No.*">
                    <div class="error_msg error" id="mobile2_error">Please Enter Your Mobile Number
                    </div>
                  </div>
                  <div class="col-12 form-group mt-3">
                    <textarea class="form-control" name="message2" id="message2" placeholder="Enter Message/Query" rows=""></textarea>
                    <div class="error_msg error" id="mobile2_error">Please Enter Your Message/Query</div>
                  </div>
                  <div class="text-center mt-5"><button type="submit" id="form2" class="submit-btn">SUBMIT
                      ENQUIRY</button></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> -->


    <!-- <div class="enquireNowSideFormBtn">
        <p class="m-0 text-uppercase">ENQUIRE NOW</p>
    </div> -->

    <div class="sidebar-contact">
        <div class="enquireNowSideFormCloseBtn">
            <i class="bi bi-x"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
            </svg>
        </div>
        <h2 class="mb-3">Enquire Now</h2>
        <div class="form-wrapper">
            <form  autocomplete="off" class="lead_form" method="POST">
                <div class="row">
                    <div class="col-12 form-group ">
                        <input name="firstname" type="hidden" id="firstname" class="hide-robot">
                        <input type="text" class="form-control" name="name3" id="name3" placeholder="Name*">
                        <input type="hidden" name="csrf_token" id="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                        <input type="hidden" name="form_submission_id" id="form_submission_id" value="<?php echo $_SESSION['form_submission_id']; ?>">
                        <div class="error_msg error" id="name3_error">Please Enter Your Name</div>
                        <span class="text-danger"><?php echo $nameErr; ?></span>
                    </div>
                    <div class="col-12 form-group ">
                        <input type="email" class="form-control" name="email3" id="email3" placeholder="Email ID">
                        <input type="hidden" class="phpform" name="utm_source" value="<?php if(isset($_COOKIE['__gtm_campaign_url'])){echo $_COOKIE['__gtm_campaign_url'];}?>" id="m_utm_source" >
                        <div class="error_msg error" id="email3_error">Please Enter Your Email</div>
                        <span class="text-danger"><?php echo $emailErr; ?></span>
                    </div>
                    <div class="col-12 form-group ">
                        <input type="text" class="form-control" name="mobile3" id="mobile3"
                            onkeypress="return number(event)" maxlength="10" placeholder="Mobile No.">
                        <div class="error_msg error" id="mobile3_error">Please Enter Your Mobile Number</div>
                        <span class="text-danger"><?php echo $phoneErr; ?></span>
                    </div>
                    <div class="col-12 form-group ">
                        <select class="form-control " name="pid3" id="pid3"
                             > 
                            <option value="">Select Project</option>
                            <!-- <option value="527663903571816626">Plumeria</option> -->
                            <option value="527663903571816624">Parc Residences</option>
                            <option value="527663903571816625">Panache</option>
                            <option value="529050893144816332">Siddhachal</option>
                            <option value="560338377402839217">Palm Spring Tower</option>
                            <option value="527663903571816278">Princetown Royal</option>
                            <option value="527663903571816481">Princetown Tower</option>
                            <option value="527664231125816273">Prospera</option>
                            <option value="527663903571816620">Prithvi</option>
                            <option value="527663903571816622">Kumar Prakruti</option>
                            <option value="527663903571816623">Kumar Pinnacle</option>
                            <option value="540797986297839761">Prajwal</option>
                            <option value="527664231125816158">Primus</option>
                            <option value="527664231125816101">Kumar Parasmani</option>
                            <!-- <option value="527922591991816127">Primavera</option> -->
                        </select>
                        <div class="error_msg error" id="project3_error">Please Select Project Name</div>
                        <span class="text-danger"><?php echo $projectErr; ?></span>
                    </div>
                    
                    <div class="col-12 form-group ">
                        <textarea class="form-control" name="message3" id="message3" placeholder="Enter Message"
                            rows="" style="padding: 5px 15px;"></textarea>
                        <div class="error_msg error" id="message3_error">Please Enter Your Message</div>
                        <span class="text-danger"><?php echo $messageErr; ?></span>
                    </div>

                    <div class="text-center mt-3"><button type="submit" id="form3" class="submit-btn">SUBMIT
                            ENQUIRY</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="brochureModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 class="modal-title" id="popupModalLabel">DOWNLOAD BROCHURE</h2>
                    <div class="form-wrapper">
                        <form autocomplete="off" class="lead_form formsSubmit" data-id="contactUsForm" method="POST" >
                            <div class="row">
                                <div class="col-12 form-group mt-3">
                                    <input type="text" class="form-control" name="nam4" id="name4" placeholder="Name*">
                                    <div class="error_msg error" id="name4_error">Please Enter Your Name</div>
                                </div>
                                <div class="col-12 form-group mt-3">
                                    <input type="email" class="form-control" name="emai4" id="email4"
                                        placeholder="Email ID*">
                                    <div class="error_msg error" id="email4_error">Please Enter Your Email</div>
                                </div>
                                <div class="col-12 form-group mt-3">
                                    <input type="text" class="form-control" name="mobile" id="mobile4"
                                        onkeypress="return number(event)" maxlength="10" placeholder="Mobile No.*">
                                    <div class="error_msg error" id="mobile4_error">Please Enter Your Mobile Number
                                    </div>
                                </div>
                                <div class="col-12 form-group mt-3">
                                    <textarea class="form-control" name="messag4" id="message4" placeholder="Enter Message"
                                        rows=""></textarea>
                                    <div class="error_msg error" id="message4_error">Please Enter Your Message</div>
                                </div>
                                <div class="text-center mt-5"><button type="submit" id="form4" class="submit-btn">SUBMIT
                                        ENQUIRY</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!--  <a href="tel:9595110011" class="call-btn"><i class="bi bi-telephone"></i></a>
    <a href="https://api.whatsapp.com/send?phone=919595110011" class="whatsapp-btn" target="_blank"><i class="bi bi-whatsapp"></i></a>
    <a class="pdf-btn d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#brochureModal" id="download-brochure"><i class="bi bi-file-earmark-pdf"></i></a> -->

    <!-- <div id="preloader"></div> -->
   <!--  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a> -->
                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5"/>
            </svg></a>
    <!-- components JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/gsap.min.js" integrity="sha512-qF6akR/fsZAB4Co1QDDnUXWnaQseLGXoniuSuSlPQK6+aWhlMZcHzkasCSlnWoe+TJuudlka1/IQ01Dnhgq95g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/ScrollTrigger.min.js" integrity="sha512-IHDCHrefnBT3vOCsvdkMvJF/MCPz/nBauQLzJkupa4Gn4tYg5a6VGyzIrjo6QAUy3We5HFOZUlkUpP0dkgE60A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/components/jquery/jquery.min.js"></script>
    <script src="assets/components/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/components/glightbox/js/glightbox.min.js"></script>
    <!-- <script src="assets/components/swiper/swiper-bundle.min.js"></script> -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/components/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/ajax-contact.js"></script>
    
    <script>
    var swiper = new Swiper('.banner-slider', {
        direction: 'horizontal',
        loop: true,
        spaceBetween: 30,
        effect: "fade",
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            480: {
                slidesPerView: 1,
                spaceBetween: 0,
                centeredSlides: false,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
                centeredSlides: false,
            }
        },
    });

    var swiper = new Swiper('.home-slider', {
        centeredSlides: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        speed: 800,
        breakpoints: {
            480: {
                slidesPerView: 1,
                spaceBetween: 0,
                centeredSlides: false,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
                centeredSlides: false,
            },
            1024: {
                slidesPerView: 2.5,
                spaceBetween: 30
            }
        },
    });
    </script>

    <script>
    $(".enquireNowSideFormBtn").click(function() {
        $(".sidebar-contact").addClass("active");
    });
    $(".enquireNowSideFormCloseBtn").click(function() {
        $(".sidebar-contact").removeClass("active");
    });

    // Wait for the document to be ready
    // $(document).ready(function() {
    //     setTimeout(function() {
    //         $('#popupModal').modal('show');
    //     });
    // });
    // $(document).ready(function () {
    //     // When a Swiper slide is clicked
    //     $(document).on('click', '.detail_slider_col ,.location-link ', function (e) {
    //         e.preventDefault();

    //         // Get the project name from data attribute
    //         var projectName = $(this).data('project');

    //         // Set it into the hidden input
    //         $('#project_name').val(projectName);

    //         // Open the modal
    //         $('#popupModal').modal('show');
    //     });
    // });
    $(document).on('click', '.detail_slider_col, .location-link', function (e) {
        e.preventDefault();

        var projectName = $(this).data('project');
        var projectUrl  = $(this).data('url');

        $('#project_name').val(projectName);
        $('#project_url').val(projectUrl);

        $('#popupModal').modal('show');
    });

    </script>

    <script>
    function number(e) {
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k >= 48 && k <= 57));
    }
    </script>
    <!-- <script type="text/javascript">
            $(document).on({
                "contextmenu": function (e) {
                    console.log("ctx menu button:", e.which); 

                    e.preventDefault();
                },
                "mousedown": function(e) { 
                    console.log("normal mouse down:", e.which); 
                },
                "mouseup": function(e) { 
                    console.log("normal mouse up:", e.which); 
                }
            });
            document.addEventListener('contextmenu', (e) => e.preventDefault());

            function ctrlShiftKey(e, keyCode) {
              return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
            }

            document.onkeydown = (e) => {
              if (
                event.keyCode === 123 ||
                ctrlShiftKey(e, 'I') ||
                ctrlShiftKey(e, 'J') ||
                ctrlShiftKey(e, 'C') ||
                (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
              )
                return false;
            };
        </script> -->
        

        <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("img").forEach(img => {
                if (!img.alt || img.alt === "") {
                    let altText = img.src.split('/').pop().replace(/[-_]/g, ' ').replace(/\.[^/.]+$/, '');
                    img.alt = altText.charAt(0).toUpperCase() + altText.slice(1);
                }
            });
        });
        </script>
        <script>
            gsap.registerPlugin(ScrollTrigger);

            let revealContainers = document.querySelectorAll(".img-container");

            let rule = CSSRulePlugin.getRule(".img-container:after");

            revealContainers.forEach((container) => {
              let image = container.querySelector("img");
              
              let tl = gsap.timeline({
                scrollTrigger: {
                  trigger: container,
                  toggleActions: "restart none none reset"

                }
              });
              
              tl.to("body", { duration: 0.5, autoAlpha: 1 })
              .to(rule, { duration: 1, height: "100%", ease: "Power2.ease" })
              .to(rule, { duration: 1, height: "0%", ease: "Power2.ease" })
              .set(rule, { duration: 0, right: 0, top: "unset" })
              .to(image, { duration: 0.2, opacity: 1, delay: -1 })
              .from(image, {
                duration: 1,
                scale: 1.4,
                ease: "Power2.easeInOut",
                delay: -1.2,
                // markers:true,
              });
              
            });

            const t2 = gsap.timeline({
                scrollTrigger: {
                    trigger: '#lifestyle',
                    start: '-50% 90%',
                    end: 'bottom 100%',
                    scrub: 0.5,
                    // markers:true,
                },
            });
            gsap.from('.reveal', {
                y: '100%',
                scrollTrigger: {
                    trigger: '#lifestyle',
                    start: 'top bottom',
                    end: 'bottom 70%',
                    // markers:true,
                    snap: {
                        snapTo: 'labels', // snap to the closest label in the timeline
                        duration: { min: 0.2, max: 3 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                        delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                        ease: 'power1.inOut', // the ease of the snap animation ("power3" by default)
                    },

                    scrub: 1,
                    toggleClass: 'hiddencarousel',
                },
            });
        </script>

        <script>
            setTimeout(() => {
                gsap.from('.corporateImg img', {
                    y: '-100%',
                    opacity: 0,
                    duration: 1.8,
                    ease: 'power1.out',
                });
                gsap.from('.leftPartImg img', {
                    y: '100%',
                    opacity: 0,
                    duration: 1.8,
                    ease: 'power1.out',
                });

                gsap.from('.leftTextPara', {
                    scrollTrigger: {
                        trigger: '.corporateProfile-wrapper',
                        toggleActions: 'play none reverse none',
                        // scrub: true,
                        // markers: true,

                        start: '40% 70%',
                        end: 'center center',

                    },
                    y: '100%',
                    delay: 0,
                    opacity: 0,
                    duration: 1.8,
                    ease: 'power1.out',
                });
                gsap.from('.rightPartImg img', {
                    scrollTrigger: {
                        trigger: '.corporateProfile-wrapper',
                        toggleActions: 'play none reverse none',
                        // scrub: true,
                        //  markers:true,

                        start: '40% 70%',
                        end: 'center -60%',
                    },
                    y: '100%',
                    delay: 0,
                    opacity: 0,
                    duration: 1.8,
                    ease: 'power1.out',
                });
                gsap.from('.rightText p', {
                    scrollTrigger: {
                        trigger: '.corporateProfile-wrapper',
                        toggleActions: 'play none reverse none',
                        // scrub: true,
                        //  markers:true,

                        start: '40% 80%',
                        end: 'center -60%',
                    },
                    y: '100%',
                    delay: 0,
                    opacity: 0,
                    duration: 1.8,
                    ease: 'power1.out',
                });
                gsap.from('.TextSectionPara', {
                    scrollTrigger: {
                        trigger: '.RealEstatemarket',
                        toggleActions: 'play none reverse none',
                        scrub: 1,
                        //  markers:true,
                        start: 'top 85%',
                        end: 'bottom 85%', 
                        // start: '40% 80%',
                        // end: 'center -60%',
                    },
                    y: '100%',
                    delay: 0,
                    opacity: 0.3,
                    duration: 1.8,
                    ease: 'power1.out',
                });
                gsap.from('.RealEstatemarket img', {
                    scrollTrigger: {
                        trigger: '.RealEstatemarket',
                        toggleActions: 'play none reverse none',
                        scrub: 1,
                         // markers:true,
                         start: 'top 95%',
                         end: '50% 85%', 
                        // start: '40% 80%',
                        // end: 'center -60%',
                    },
                    // y: '100%',
                    x:'-70%',
                    // delay: 0,
                    opacity: 0,
                    duration: 1.2,
                    ease: 'power1.out',
                });
                gsap.from('.TextSectionPara2', {
                    scrollTrigger: {
                        trigger: '.RealEstatemarket2',
                        toggleActions: 'play none reverse none',
                        scrub: 1,
                         // markers:true,
                        start: 'top 85%',
                        end: 'bottom 85%', 
                        // start: '40% 80%',
                        // end: 'center -60%',
                    },
                    y: '100%',
                    delay: 0,
                    opacity: 0.3,
                    duration: 1.8,
                    ease: 'power1.out',
                });
                gsap.from('.RealEstatemarket2 img', {
                    scrollTrigger: {
                        trigger: '.RealEstatemarket2',
                        toggleActions: 'play none reverse none',
                        scrub: 1,
                        //  markers:true,
                         start: 'top 95%',
                         end: '50% 85%', 
                        // start: '40% 80%',
                        // end: 'center -60%',
                    },
                    // y: '100%',
                    x:'70%',
                    // delay: 0,
                    opacity: 0,
                    duration: 1.2,
                    ease: 'power1.out',
                });
                setTimeout(() => {
                    // ScrollTrigger.refresh();
                }, 1000);


            }, 0);
        </script>
        
     <!--        <script>
                Loading animation
                function startLoading() {
                    const loadingProgress = document.getElementById('loadingProgress');
                    const loadingScreen = document.getElementById('loadingScreen');
                    
                    gsap.to(loadingProgress, {
                        width: '100%',
                        duration: 3.5,
                        ease: 'power2.out',
                        onComplete: () => {
                         gsap.to('.percentage', {
                        rotation: 360,
                        duration: 8,
                        ease: 'none',
                        repeat: -1,
                        delay: 5
                    });
                }

                // Interactive hover effects
                document.addEventListener('DOMContentLoaded', () => {
                    startLoading();

                    // Hover effect for offer banner
                    const offerBanner = document.querySelector('.offer-banner');
                    offerBanner.addEventListener('mouseenter', () => {
                        gsap.to(offerBanner, {
                            scale: 1.05,
                            duration: 0.3,
                            ease: 'power2.out'
                        });
                    });

                    offerBanner.addEventListener('mouseleave', () => {
                        gsap.to(offerBanner, {
                            scale: 1,
                            duration: 0.3,
                            ease: 'power2.out'
                        });
                    });

                    // Hover effect for DASTAK text
                    const dastakText = document.querySelector('.dastak-text');
                    dastakText.addEventListener('mouseenter', () => {
                        gsap.to(dastakText, {
                            scale: 1.1,
                            duration: 0.4,
                            ease: 'power2.out'
                        });
                    });

                    dastakText.addEventListener('mouseleave', () => {
                        gsap.to(dastakText, {
                            scale: 1,
                            duration: 0.4,
                            ease: 'power2.out'
                        });
                    });
                });
            </script>
            <script>
              gsap.registerPlugin(ScrollTrigger);

              const heroLoadTimeline = gsap.timeline();

              heroLoadTimeline
                .from(".logo-img-first", {
                  x: -100, opacity: 0, scale: 0.7, duration: 1, ease: "power4.out"
                })
                .from(".logo-img-second", {
                  x: 100, opacity: 0, scale: 0.7, duration: 1, ease: "power4.out"
                }, "-=0.8")
                .from(".offer-img", {
                  y: 80, opacity: 0, duration: 0.8, ease: "back.out(1.7)"
                }, "-=0.6")
                .from(".limited-offer", {
                  y: 40, opacity: 0, duration: 0.6, ease: "power2.out"
                }, "-=0.4")
                .from(".locations", {
                  y: 30, opacity: 0, duration: 0.6, ease: "power2.out"
                }, "-=0.5")
                .from(".bokeh", {
                  scale: 0,
                  opacity: 0,
                  stagger: 0.1,
                  duration: 1,
                  ease: "elastic.out(1, 0.3)"
                }, "-=0.8");
            </script>
            <script>
              // Parallax bokeh scroll movement
              gsap.utils.toArray(".bokeh").forEach((bokeh, i) => {
                gsap.to(bokeh, {
                  y: i % 2 === 0 ? -30 : 30,
                  x: i % 2 === 0 ? 10 : -10,
                  ease: "none",
                  scrollTrigger: {
                    trigger: "#banner",
                    start: "top top",
                    end: "bottom top",
                    scrub: 1
                  }
                });
              });

              // Subtle zoom-out on logo + offer on scroll
              gsap.to(".banner-content", {
                scale: 0.95,
                opacity: 0.8,
                scrollTrigger: {
                  trigger: "#banner",
                  start: "top top",
                  end: "bottom top",
                  scrub: true
                  
                }
              });
            </script>
            <script>
                ScrollTrigger.create({
                  trigger: "#banner",
                  start: "top top",
                  end: "+=100%",
                  pin: true,
                  scrub: 1,
                  markers: false
                });


                ScrollTrigger.create({
  trigger: "#banner",
  start: "top top",
  onEnterBack: () => heroLoadTimeline.restart()
});
</script> -->

<!-- <script>
  gsap.registerPlugin(ScrollTrigger);

  gsap.fromTo(".iconic-left img", 
    {
      opacity: 0,
      scale: 0.9,
      x: -100,
    }, 
    {
      opacity: 1,
      scale: 1,
      x: 0,
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: "#iconic-life",
        start: "top 80%",
        end: "bottom 50%",
        toggleActions: "play reverse play reverse",
        // markers: true, // Uncomment for debugging
      }
    }
  );

  gsap.fromTo(".iconic-right img", 
    {
      opacity: 0,
      scale: 0.9,
      x: 100,
    }, 
    {
      opacity: 1,
      scale: 1,
      x: 0,
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: "#iconic-life",
        start: "top 80%",
        end: "bottom 50%",
        toggleActions: "play reverse play reverse",
        // markers: true,
      }
    }
  );
</script> -->

<!-- <script>
  gsap.registerPlugin(ScrollTrigger);

  const asset1Timeline = gsap.timeline({
    scrollTrigger: {
      trigger: "#banner",
      start: "top 80%",     // When banner comes into view
      end: "bottom top",    // Till it scrolls out
      scrub: true,
      // markers: true       // For debugging positions
    }
  });

  asset1Timeline.fromTo("#asset1",
    {
      opacity: 0,
      scale: 0.5,
      y: 100,
      rotation: -10,
    },
    {
      opacity: 1,
      scale: 1,
      y: 0,
      rotation: 0,
      ease: "power3.out",
      duration: 2
    }
  );
</script>

<script>gsap.to("#asset1", {
  y: "-=10",
  repeat: -1,
  yoyo: true,
  duration: 2,
  ease: "sine.inOut"
});
</script>
<script>
document.querySelector("form").addEventListener("submit", function(e) {
    const btn = this.querySelector("button[type='submit']");
    btn.disabled = true;
    btn.innerText = "Submitting...";
});
</script> -->

<script>



     // Initial animation (auto-play on load)
     const bannerTL = gsap.timeline();

     // Asset 1 - Fast car-like entrance with braking
     bannerTL.from("#asset1", {
       x: -2000,
       duration: 0.8,
       ease: "power4.out",
       rotation: -30,
       opacity: 0
     })
     .to("#asset1", {
       x: 0,
       rotation: 0,
       duration: 0.4,
       ease: "elastic.out(1, 0.5)",
       opacity: 1
     }, ">");

     // Asset 2 - Enhanced animation with periodic blinking
     bannerTL.from(".logo-img-second", {
       scale: 0.5,
       opacity: 0,
       duration: 0.8,
       ease: "power2.inOut"
     }, "-=0.3")
     .to(".logo-img-second", {
       scale: 1.05,
       duration: 0.1,
       repeat: 3,
       yoyo: true,
       ease: "none"
     }, "+=0.2")
     .to(".logo-img-second", {
       scale: 1,
       duration: 0.3,
       ease: "elastic.out(1, 0.3)",
       onComplete: () => {
         // Start periodic blinking after initial animation completes
         gsap.to(".logo-img-second", {
           keyframes: [
             { opacity: 0.3, duration: 0.3, ease: "power1.inOut" },
             { opacity: 1, duration: 0.3, ease: "power1.inOut" },
             { opacity: 0.7, duration: 0.2, ease: "none" },
             { opacity: 1, duration: 0.2, ease: "none" }
           ],
           repeat: -1,
           repeatDelay: 5, // Blinks every 5 seconds
           yoyo: true
         });
         
         // Add subtle continuous glow effect
         gsap.to(".logo-img-second", {
           filter: "drop-shadow(0 0 8px rgba(255,255,255,0.8))",
           duration: 2,
           repeat: -1,
           yoyo: true,
           ease: "sine.inOut"
         });
       }
     });

     // Other animations remain unchanged...
     bannerTL.from(".limited-offer", {
       y: 50,
       opacity: 0,
       duration: 0.5,
       ease: "power2.out"
     }, "-=0.3")
     .from(".locations", {
       y: 50,
       opacity: 0,
       duration: 0.5,
       ease: "power2.out",
       stagger: 0.1
     }, "-=0.2")
     .from(".bokeh", {
       scale: 0,
       opacity: 0,
       duration: 1,
       ease: "power2.out",
       stagger: {
         amount: 0.5,
         from: "random"
       }
     }, "-=0.5");

     // Scroll behavior
     ScrollTrigger.create({
       trigger: "#banner",
       start: "top top",
       end: "max",
       pinSpacing: false,
       onEnter: () => {
         gsap.to("#banner", { backgroundColor: "#000", duration: 0.5 });
         gsap.to(".bokeh", {
           y: -10,
           duration: 2,
           ease: "sine.inOut",
           repeat: -1,
           yoyo: true,
           stagger: { amount: 1, from: "random" }
         });
       }
     });


   </script>


  <script>
    gsap.registerPlugin(ScrollTrigger);

    // Main animation timeline (auto-play on load)
    const bannerTL = gsap.timeline();

    // Asset 1 - Combined entrance and floating animation
    const asset1Timeline = gsap.timeline({
      scrollTrigger: {
        trigger: "#banner",
        start: "top 80%",
        end: "bottom top",
        scrub: true
      }
    });

    // Entrance animation (scroll-triggered)
    asset1Timeline.fromTo("#asset1",
      {
        opacity: 0,
        scale: 0.5,
        y: 100,
        rotation: -10,
        x: -2000 // Maintains your original car-like entrance
      },
      {
        opacity: 1,
        scale: 1,
        y: 0,
        x: 0, // Comes to center
        rotation: 0,
        ease: "power3.out",
        duration: 2
      }
    );

    // Continuous floating animation (after entrance completes)
    bannerTL.to("#asset1", {
      y: "-=10",
      repeat: -1,
      yoyo: true,
      duration: 2,
      ease: "sine.inOut",
      delay: 2 // Starts after entrance animation
    });

    // Asset 2 - Enhanced animation with periodic blinking
    bannerTL.from(".logo-img-second", {
      scale: 0.5,
      opacity: 0,
      duration: 0.8,
      ease: "power2.inOut"
    }, "-=0.3")
    .to(".logo-img-second", {
      scale: 1.05,
      duration: 0.1,
      repeat: 3,
      yoyo: true,
      ease: "none"
    }, "+=0.2")
    .to(".logo-img-second", {
      scale: 1,
      duration: 0.3,
      ease: "elastic.out(1, 0.3)"
    });

    // Location Links Animation
    bannerTL.from(".location-link", {
      y: 15,
      opacity: 0,
      duration: 0.5,
      stagger: {
        each: 0.1,
        from: "center",
        ease: "power2.out"
      }
    })
    .to(".location-link", {
      keyframes: [
        { 
          boxShadow: "0 0 12px 3px rgba(156, 89, 209, 0.6)",
          background: "rgba(65, 21, 93, 0.9)",
          duration: 0.6
        },
        { 
          boxShadow: "0 0 0 0 rgba(156, 89, 209, 0)", 
          background: "rgba(45, 11, 61, 0.7)",
          duration: 0.8
        }
      ],
      repeat: -1,
      repeatDelay: 4,
      stagger: {
        each: 0.15,
        from: "random"
      }
    });

    // Other animations...
    bannerTL.from(".limited-offer", {
      y: 50,
      opacity: 0,
      duration: 0.5,
      ease: "power2.out"
    }, "-=0.3")
    .from(".bokeh", {
      scale: 0,
      opacity: 0,
      duration: 1,
      ease: "power2.out",
      stagger: {
        amount: 0.5,
        from: "random"
      }
    }, "-=0.5");

    // Scroll behavior
    ScrollTrigger.create({
      trigger: "#banner",
      start: "top top",
      end: "max",
      pinSpacing: false,
      onEnter: () => {
        gsap.to("#banner", { backgroundColor: "#0a0612", duration: 0.8 });
        gsap.to(".bokeh", {
          y: window.innerWidth < 768 ? -5 : -10,
          duration: 2,
          ease: "sine.inOut",
          repeat: -1,
          yoyo: true,
          stagger: { 
            amount: window.innerWidth < 768 ? 0.3 : 1, 
            from: "random" 
          }
        });
      }
    });
  </script>

  <!-- <script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.fromTo(".iconic-left img", 
      {
        opacity: 0,
        scale: 0.9,
        x: -100,
      }, 
      {
        opacity: 1,
        scale: 1,
        x: 0,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
          trigger: "#iconic-life",
          start: "top 80%",
          end: "bottom 50%",
          toggleActions: "play reverse play reverse",
          // markers: true, // Uncomment for debugging
        }
      }
    );

    gsap.fromTo(".iconic-right img", 
      {
        opacity: 0,
        scale: 0.9,
        x: 100,
      }, 
      {
        opacity: 1,
        scale: 1,
        x: 0,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
          trigger: "#iconic-life",
          start: "top 80%",
          end: "bottom 50%",
          toggleActions: "play reverse play reverse",
          // markers: true,
        }
      }
    );
  </script> -->

  <script>
    gsap.registerPlugin(ScrollTrigger);

    const asset1Timeline = gsap.timeline({
      scrollTrigger: {
        trigger: "#banner",
        start: "top 80%",     // When banner comes into view
        end: "bottom top",    // Till it scrolls out
        scrub: true,
        // markers: true       // For debugging positions
      }
    });

    asset1Timeline.fromTo("#asset1",
      {
        opacity: 0,
        scale: 0.5,
        y: 100,
        rotation: 0,
      },
      {
        opacity: 1,
        scale: 1,
        y: 0,
        rotation: 0,
        ease: "power3.out",
        duration: 2
      }
    );
  </script>



  <script>gsap.to("#asset1", {
    y: "-=10",
    repeat: -1,
    yoyo: true,
    duration: 2,
    ease: "sine.inOut"
  });
  </script>

</script>
<script>
  // Ribbon unfold (horizontal)
  gsap.set("#ribbon", {
    opacity: 0,
    scaleX: 0,
    transformOrigin: "left center",
    skewY: 10
  });

  const ribbonTL = gsap.timeline({ delay: 0.3 });

  ribbonTL
    .to("#ribbon", {
      opacity: 1,
      duration: 0.3,
      ease: "power2.out"
    })
    .to("#ribbon", {
      scaleX: 1,
      skewY: 0,
      duration: 1.2,
      ease: "elastic.out(1, 0.5)"
    });

  // Counter logic (simulate counting 1% → 10%)
  let counter = { val: 1 };
  gsap.to(counter, {
    val: 10,
    duration: 3,
    ease: "power1.inOut",
    roundProps: "val",
    onUpdate: () => {
      document.getElementById("discount-counter").textContent = counter.val + "%";

      if (counter.val === 10) {
        let upto = document.getElementById("upto-text");
        if (upto.style.display === "none") {
          upto.style.display = "inline-block";
          gsap.fromTo(upto, 
            { scale: 0, opacity: 0 },
            { scale: 1.3, opacity: 1, duration: 0.5, ease: "back.out(2)" }
          );
        }
      }
    }
  });
</script>



<!-- <script>
  gsap.from(".ribbon-container", {
    x: -50,
    opacity: 0,
    duration: 1,
    ease: "power2.out",
    delay: 0.2
  });
</script> -->




<script>
  gsap.to(".location-link", {
    y: -10,
    repeat: -1,
    yoyo: true,
    ease: "bounce.inOut",
    stagger: 0.1,
    duration: 1.2
  });
</script>


<!-- <script>
  let counterObj = { value: 0 }; // object to animate

  gsap.to(counterObj, {
    value: 10, // final value
    duration: 2, // seconds
    ease: "power1.out",
    onUpdate: () => {
      document.getElementById("counter").innerHTML = `${Math.round(counterObj.value)} <span>%</span>`;
    }
  });
</script> -->








<script>
             gsap.set("#phoneIcon", { transformOrigin: "center center" });

             gsap.to("#phoneIcon", {
               keyframes: [
                 { rotate: 15, duration: 0.1 },
                 { rotate: -15, duration: 0.1 },
                 { rotate: 15, duration: 0.1 },
                 { rotate: -15, duration: 0.1 },
                 { rotate: 10, duration: 0.1 },
                 { rotate: -10, duration: 0.1 },
                 { rotate: 5, duration: 0.1 },
                 { rotate: -5, duration: 0.1 },
                 { rotate: 0, duration: 0.1 }
               ],
               repeat: -1,  // Infinite loop
               repeatDelay: 2, // Delay between rings
               ease: "power1.inOut"
             });
           </script>



<script>
document.querySelectorAll('.bokeh-wrapper').forEach(wrapper => {
  for (let i = 0; i < 10; i++) {
    const bokeh = document.createElement('div');
    bokeh.classList.add('bokeh');
    bokeh.style.top = Math.random() * 100 + '%';
    bokeh.style.left = Math.random() * 100 + '%';
    bokeh.style.backgroundColor = `rgba(${Math.floor(Math.random()*256)}, ${Math.floor(Math.random()*256)}, ${Math.floor(Math.random()*256)}, 0.5)`;
    wrapper.appendChild(bokeh);
  }
});
</script>



<!-- <link rel="stylesheet" href="assets/css/intlTelInput.css"> -->
<script src="assets/js/intlTelInput.js" type="text/javascript"></script>
<script type="text/javascript">
    // (function(){
    //     $('.mobEqNow, .eqClick').on('click',function(){
    //         $('.sec-eq').addClass('show');
    //     });
    //     $('.closeIcon').on('click',function(){
    //         $('.sec-eq').removeClass('show');
    //     });    
    // })();

    // (function(){
    //     $('form :input[name=phone]').each(function(index) {
    //         $(this).intlTelInput({
    //             geoIpLookup: function(callback) {
    //             },
    //             initialCountry: "in",
    //             nationalMode: false,
    //             autoHideDialCode: false,
    //             separateDialCode: true,
    //             utilsScript: "assets/js/utils.js"
    //         });
    //     });
    // })();
</script>
</body>

</html>


<?php 
unset($_SESSION['errors']);
unset($_SESSION['notmatched']);
unset($_SESSION['postval']);
unset($_SESSION['typeofflat1']);
unset($_SESSION['approxbudget1']);
// session_destroy();
?>
