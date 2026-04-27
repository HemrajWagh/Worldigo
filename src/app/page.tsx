"use client";
import Image from "next/image";

export default function Home() {
  return (
    // <div className="flex flex-col flex-1 items-center justify-center bg-zinc-50 font-sans dark:bg-black">
    //   <main className="flex flex-1 w-full max-w-3xl flex-col items-center justify-between py-32 px-16 bg-white dark:bg-black sm:items-start">
            
    //   </main>
    // </div>

    <>
  {/*?php

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

?*/}
  <meta charSet="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  {/* Google tag (gtag.js) */}
  <meta charSet="utf-8" />
  <meta httpEquiv="X-UA-Compatible" content="IE=edge" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
  />
  <title>World I GO</title>
  <meta name="description" content="  " />
  {/* <link rel="icon" href="/favicon.ico" type="image/x-icon"> */}
  <link
    rel="stheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />
  <link
    rel="preload"
    as="image"
    href="/img/banner/BG-1diwali-tak_final.jpg"
  />
  <link rel="stylesheet" href="/css/intlTelInput.css" />
  <style
    dangerouslySetInnerHTML={{
      __html:
        '.img-container {\n    position: relative;\n    overflow: hidden;\n    width:100%;\n    max-width:800px;\n    img {\n      width: 100%;\n      // position: absolute;\n      opacity: 0;\n    }\n\n    &:after {\n      content: "";\n      position: absolute;\n      width: 100%;\n      height: 0%;\n      bottom: 0;\n      left: 0;\n      background: #000000;\n    }'
    }}
  />
  {/* components CSS Files */}
  <link
    href="/components/bootstrap/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link
    href="/components/bootstrap-icons/bootstrap-icons.css"
    rel="stylesheet"
  />
  <link
    href="/components/glightbox/css/glightbox.min.css"
    rel="stylesheet"
  />
  {/* <link href="public/components/swiper/swiper-bundle.min.css" rel="stylesheet"> */}
  <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css"
  />
  {/* Template Main CSS File */}
  <link href="/css/style.css" rel="stylesheet" />
  <link href="/css/responsive.css" rel="stylesheet" />
  {/* GSAP  */}
  {/*  */}
  {/*  */}
  {/*  */}
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />
  <meta
    name="facebook-domain-verification"
    content="ujavrbf093f98l7686nuzx7tnaglvu"
  />
  <style
    dangerouslySetInnerHTML={{
      __html:
        "\n      @import url('https://fonts.googleapis.com/css2?family=Ephesis&display=swap');\n    "
    }}
  />
  


  <header id="header" className="fixed-top ">
    <div className="container d-flex align-items-center">
      <a href="index.php" className="logo " style={{ marginRight: "auto" }}>
        <img
          src="/img/Final_Logo.png"
          alt="World I Go"
          className="img-fluid"
        />
      </a>
      <nav id="navbar" className="navbar">
        <ul>
          <li>
            <a className="nav-link scrollto active" href="#banner">
              HOME
            </a>
          </li>
          <li>
            <a className="nav-link   scrollto" href="#worldigo-section">
              ABOUT US
            </a>
          </li>
          {/* <li><a class="nav-link scrollto" href="#contact">CONTACT</a></li> */}
        </ul>
        <i className="bi bi-list mobile-nav-toggle" />
      </nav>
    </div>
  </header>
  {/* <div class="nav-line"></div> */}
  <style
    dangerouslySetInnerHTML={{
      __html:
        "\n    .animate__bounceIn {\n      -webkit-animation-duration: .75s !important;\n      animation-duration: .75s;\n      -webkit-animation-duration: calc(var(--animate-duration) * 0.75) !important;\n      animation-duration: calc(var(--animate-duration) * 1.75) !important;\n      -webkit-animation-name: bounceIn !important;\n      animation-name: bounceIn !important;\n      animation-iteration-count: infinite !important;\n    }\n\n    canvas {\n      display: block;\n    }\n    #canvas {\n      position: absolute;\n      top: 0;\n      left: 0;\n      width: 100%;\n      height: 100%;\n      pointer-events: none; /* don’t block clicks */\n      z-index: 1; /* keep behind content */\n    }\n\n    .banner-content {\n      position: relative;\n      z-index: 2; /* ensures content stays above fireworks */\n    }\n\n\n  "
    }}
  />
  <main id="main">
    {/* <style>
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

      /* Decorative glowing orbs * /
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
 </section> */}
    <div className="nav-line" />
    <section id="banner" className="banner">
      <div className="swiper banner-slider">
        <div className="swiper-wrapper">
          <div className="swiper-slide">
            <div className="banner-img">
              <img
                src="/img/banner/Banner_hz.png"
                className="img-fluid d-none d-lg-block"
                alt=""
              />
              <img
                style={{ position: "relative" }}
                src="/img/banner/Banner_vert_1.jpg"
                className="img-fluid b-block d-lg-none"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section className="iconic-life">
      <div className="iconic-container">
        {/* Image */}
        <div className="iconic-image">
          <img src="/img/banner/cards_1.jpg" alt="World I Go" />
        </div>
        {/* Content */}
        <div className="iconic-content">
          <div className="game-badge">🎮 Game Experience</div>
          <h1 className="game-main-title">A</h1>
          <h2 className="game-sub-title">Play it. Know it. Win it.</h2>
          <div className="game-card">
            <h3>What’s the Game?</h3>
            <p>Throw. Pick. Build your set.</p>
            <p>Create a set &amp; race to finish first.</p>
          </div>
          <div className="game-twist">
            <span>🔥 The Twist</span>
            <p>
              Wild Cards challenge you with questions. Answer correctly to
              unlock a lucky card that fits anywhere!
            </p>
          </div>
        </div>
      </div>
    </section>  


    <section id="worldigo-section" className="worldigo-section">
      <div className="bg-pattern" />
      <div className="worldigo-container">
        
        <div className="worldigo-grid">
          <div className="worldigo-text">
             <img src="/img/banner/cards_1.jpg" alt="World I Go" />
            {/* <h2>About the Game</h2>
            <p>
              World i Go transforms learning into an adventure. Explore India
              through strategy, storytelling, and play. From landscapes to
              culture, every card reveals something new.
            </p> */}
          </div>
          <div className="worldigo-text">
            <div className="worldigo-hero">
          <h1>World i Go</h1>
          <p>Play it. Know it. Win it.</p>
          {/* <h2>Why It’s Different</h2> */}
            <p>
              " World i Go transforms learning into an adventure.Explore The world through strategy,storytelling and play. From landspaces of culture .food to famous facts,every card and every game Reveals something new !"
            </p>
          {/* <a href="#" class="worldigo-btn">Start Your Journey</a> */}
        </div>
            
          </div>
        </div>
        
      </div>
    </section>
    
    

    <section id="iconic-life" className="iconic-life">
      <div className="iconic-container">
        <div className="state-content">
          <div className="state-list">
            <div className="state-column">
              <h2>Explore India</h2>
              <p>Nature | Landscapes Adventure</p>
              <ul>
                <li>Ladakh</li>
                <li>Assam</li>
                <li>Kerala</li>
                <li>Karnataka</li>
                <li>Lakshadweep</li>
                <li>Uttarakhand</li>
                <li>Jammu &amp; Kashmir</li>
                <li>Madhya Pradesh</li>
              </ul>
            </div>
            <div className="state-column">
              <h2>Experience India</h2>
              <p>Culture | Food | Heritage</p>
              <ul>
                <li>Punjab</li>
                <li>Gujarat</li>
                <li>Rajasthan</li>
                <li>Maharashtra</li>
                <li>Tamil Nadu</li>
                <li>West Bengal</li>
                <li>Andhra Pradesh</li>
                <li>Uttar Pradesh</li>
              </ul>
            </div>
          </div>
        </div>
        {/* RIGHT: Gallery */}
        <div className="gallery">
          <img src="/img/gallery/Asset 4.png" alt="" />
          <img src="/img/gallery/Asset 6.png" alt="" />
          <img src="/img/gallery/Asset 7.png" alt="" />
          <img src="/img/gallery/Asset 8.png" alt="" />
          <img src="/img/gallery/Asset 9.png" alt="" />
          <img src="/img/gallery/Asset 10.png" alt="" />
          <img src="/img/gallery/Asset 11.png" alt="" />
          <img src="/img/gallery/Asset 12.png" alt="" />
          <img src="/img/gallery/Asset 4.png" alt="" />
        </div>
      </div>
    </section>
    <section className="iconic-life">
      <div className="iconic-container">
        {/* Image */}
        <div className="iconic-image">
          <img src="/img/banner/india.png" alt="World I Go" />
          {/* Floating Elements */}
          {/* <div class="floating token1">🎯</div>
         <div class="floating token2">🃏</div>
         <div class="floating token3">🎲</div> */}
        </div>
        {/* Content */}
        <div className="iconic-content">
          <div className="game-badge">🎮 Game Experience</div>
          <h1 className="game-main-title">GAME ON!</h1>
          <h2 className="game-sub-title">Play it. Know it. Win it.</h2>
          <div className="game-card">
            <h3>What’s the Game?</h3>
            <p>Throw. Pick. Build your set.</p>
            <p>Create a set &amp; race to finish first.</p>
          </div>
          <div className="game-twist">
            <span>🔥 The Twist</span>
            <p>
              Wild Cards challenge you with questions. Answer correctly to
              unlock a lucky card that fits anywhere!
            </p>
          </div>
        </div>
      </div>
    </section>
    <section className="pattern-strip" />
    <section className="legacy-section">
      <h2 className="legacy-heading">Contents</h2>
      <div className="legacy-container">
        <div className="legacy-grid">
          <div className="legacy-card">
            <i className="fas fa-layer-group" />
            <h3>172</h3>
            <p>Cards</p>
          </div>
          <div className="legacy-card">
            <i className="fas fa-box" />
            <h3>2</h3>
            <p>Sets</p>
          </div>
          <div className="legacy-card">
            <i className="fas fa-map-marked-alt" />
            <h3>16</h3>
            <p>States (10 categories each)</p>
          </div>
          <div className="legacy-card">
            <i className="fas fa-star" />
            <h3>5</h3>
            <p>Wild Cards + 1 Lucky Card</p>
          </div>
        </div>
      </div>
    </section>
    <section className="pattern-strip" />
    {/* background-color: #e5e5f7;
  opacity: 0.8;
  background-image:  linear-gradient(135deg, #376809 25%, transparent 25%), linear-gradient(225deg, #376809 25%, transparent 25%), linear-gradient(45deg, #376809 25%, transparent 25%), linear-gradient(315deg, #376809 25%, #e5e5f7 25%);
  background-position:  7px 0, 7px 0, 0 0, 0 0;
  background-size: 14px 14px;
  background-repeat: repeat; */}
    {/*   <section class="legacy-section" style="background-color: #faa61a">
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
</section> */}
    {/* <section class="legacy-section" style="background-color:#d23527" 
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
</section> */}
    
    {/* <section id="contact-form" class="contact-form section-padding d-none">
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
  </section> */}
  </main>
  {/* End #main */}
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  {/* <section id="about" class="iconic-life section-padding" >

  <div class="row">
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
    </section> */}
  {/*  */}
  {/*  */}
  {/*  <section id="contact" class="iconic-lif section-padding"   style="padding: 5rem 0rem; background: linear-gradient(120deg, #270047, #9E054F);
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
    </section> */}
  {/* Include Font Awesome CDN in <head> */}
  <div className="footer-section py-5">
    <div className="container">
      <div className="row text-center text-lg-start align-items-center gy-4">
        <div className="col-lg-4 d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-start">
          <div className="me-md-4 mb-3 mb-md-0">
            <img
              src="/img/Final_Logo.png"
              alt="Kumar Corp Logo"
              className="img-fluid"
              style={{ maxWidth: 100 }}
            />
          </div>
          <div className="d-flex align-items-center gap-2">
            {/* <i class="fas fa-globe fa-lg"></i> */}
          </div>
        </div>
        <div className="col-lg-4 d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-start">
          <div className="me-md-4 mb-3 mb-md-0">
            <ul>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#worldigo-section">About Us</a>
              </li>
              <li>
                <a href="terms_conditions.php">Terms &amp; Conditions</a>
              </li>
            </ul>
          </div>
        </div>
        <div className="col-lg-4">
          <div className="d-flex flex-column align-items-center align-items-lg-end text-center text-lg-end">
            <div className="footer-note small text-muted">
              ©&nbsp;2026 Worldigo. All rights reserved.
            </div>
            <div className="footer-note small text-muted">
              Created By Mamta Jain.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {/* <footer id="footer" class="footer"> */}
  {/* <div class="container">
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
  </div> */}
  {/* <div class="row section-bg pt-5 pb-5">
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
  </div> */}
  {/* </div> */}
  {/* </div> */}
  {/* <section class="sec-rera" style="background:#f7f7f7; padding:40px 0px;text-align: center;">
<div class="container">
  <p>RERA Registration No.: 
    <br>
    <br>Disclaimer : Interiors and fit-outs shown here if any, are not part of the standard offering. All architectural and interior views and images unless specified otherwise, are computer graphics artist impressions and simulated interpretation of actual property with an endeavor to impart clear informative understanding to the recipient with respect to the project and therefore, this printed material does not constitute an offer and/or contract of any type between the promoter (developer) and the recipient / proposed allottee. Prospective purchasers should make and must rely on their own enquiries. The colours of the buildings are indicative only. The information contained herein is believed to be correct but is not guaranteed. Any purchaser under this development shall be governed by the terms and conditions of the agreement to sell, to be entered into between the developer and proposed allottee, and the details of the facilities and amenities etc. will be specified in the said agreement to sell. The area mentioned in the unit plans will vary because of plaster and column locations and no adjustment/refunds of any nature whatsoever, will be made by the developer for such variation.
    <br>
    <br>
  This project is owned by <a href="https://kumarprospera.in/about-us/" style="color: #e87816;">Kumar Properties Pvt Ltd.</a> 
  </p>
  </div>
</section> */}
  {/* <div class="row" style="--bs-gutter-x:0px;padding:65px 0px">
      <div class="section-title" id="dev">
          <h2>A Project By Pune's Renowned Developer</h2>
          <img style="margin-top: -150px;margin-left: 100px; opacity: 0.25;" src="assets/img/PANACHE STARS_1 (2).png">
      </div>
  </div> */}
  {/* </footer> */}
  <div
    className="modal fade"
    id="popupModal"
    tabIndex={-1}
    aria-labelledby="popupModalLabel"
    aria-hidden="true"
  >
    <div className="modal-dialog modal-dialog-centered">
      <div className="modal-content">
        <div className="modal-body">
          {/* <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> */}
          <div className="enquireNowSideFormCloseBtn" data-bs-dismiss="modal">
            <i className="bi bi-x" />
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width={26}
              height={26}
              fill="currentColor"
              className="bi bi-x"
              viewBox="0 0 16 16"
            >
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
            </svg>
          </div>
          <h2 className="modal-title" id="popupModalLabel">
            CONTACT US
          </h2>
          <div className="form-wrapper">
            <form
              autoComplete="off"
              className="lead_form formsSubmit"
              data-id="contactUsForm"
              method="POST"
            >
              <div className="container">
                <div className="col-12 form-group ">
                  <input
                    type="text"
                    className="form-control"
                    name="name1"
                    id="name1"
                    placeholder="Name*"
                  />
                  <input type="hidden" name="project_name" id="project_name" />
                  <input type="hidden" name="project_url" id="project_url" />
                  <input
                    name="firstname"
                    type="hidden"
                    id="firstname"
                    className="hide-robot"
                  />
                  <input
                    type="hidden"
                    name="csrf_token"
                    id="csrf_token"
                    defaultValue="<?php echo $_SESSION['csrf_token']; ?>"
                  />
                  <input
                    type="hidden"
                    name="form_submission_id"
                    id="form_submission_id"
                    defaultValue="<?php echo $_SESSION['form_submission_id']; ?>"
                  />
                  <div className="error_msg error" id="name1_error">
                    Please Enter Your Name
                  </div>
                  <span className="text-danger">
                    {/*?php echo $nameErr; ?*/}
                  </span>
                </div>
                <div className="col-12 form-group ">
                  <input
                    type="email"
                    className="form-control"
                    name="email1"
                    id="email1"
                    placeholder="Email ID"
                  />
                  <input
                    type="hidden"
                    className="phpform"
                    name="utm_source"
                    defaultValue="<?php if(isset($_COOKIE['__gtm_campaign_url'])){echo $_COOKIE['__gtm_campaign_url'];}?>"
                    id="m_utm_source"
                  />
                  <div className="error_msg error" id="email1_error">
                    Please Enter Your Email
                  </div>
                </div>
                <div className="col-12 form-group ">
                  <input
                    type="text"
                    className="form-control"
                    name="mobile1"
                    id="mobile1"
                    
                    maxLength={10}
                    placeholder="Mobile No."
                  />
                  <div className="error_msg error" id="mobile1_error">
                    Please Enter Your Mobile Number
                  </div>
                </div>
                <div className="col-12 form-group ">
                  <textarea
                    className="form-control"
                    name="message1"
                    id="message1"
                    placeholder="Enter Message"
                    
                    defaultValue={""}
                  />
                  <div className="error_msg error" id="message1_error">
                    Please Enter Your Message
                  </div>
                </div>
                <div className="text-center mt-5">
                  <button type="submit" id="form1" className="submit-btn">
                    SUBMIT ENQUIRY
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  {/* <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
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
    </div> */}
  {/* <div class="enquireNowSideFormBtn">
  <p class="m-0 text-uppercase">ENQUIRE NOW</p>
    </div> */}
  <div className="sidebar-contact">
    <div className="enquireNowSideFormCloseBtn">
      <i className="bi bi-x" />
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width={26}
        height={26}
        fill="currentColor"
        className="bi bi-x"
        viewBox="0 0 16 16"
      >
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
      </svg>
    </div>
    <h2 className="mb-3">Enquire Now</h2>
    <div className="form-wrapper">
      <form autoComplete="off" className="lead_form" method="POST">
        <div className="row">
          <div className="col-12 form-group ">
            <input
              name="firstname"
              type="hidden"
              id="firstname"
              className="hide-robot"
            />
            <input
              type="text"
              className="form-control"
              name="name3"
              id="name3"
              placeholder="Name*"
            />
            <input
              type="hidden"
              name="csrf_token"
              id="csrf_token"
              defaultValue="<?php echo $_SESSION['csrf_token']; ?>"
            />
            <input
              type="hidden"
              name="form_submission_id"
              id="form_submission_id"
              defaultValue="<?php echo $_SESSION['form_submission_id']; ?>"
            />
            <div className="error_msg error" id="name3_error">
              Please Enter Your Name
            </div>
            <span className="text-danger">{/*?php echo $nameErr; ?*/}</span>
          </div>
          <div className="col-12 form-group ">
            <input
              type="email"
              className="form-control"
              name="email3"
              id="email3"
              placeholder="Email ID"
            />
            <input
              type="hidden"
              className="phpform"
              name="utm_source"
              defaultValue="<?php if(isset($_COOKIE['__gtm_campaign_url'])){echo $_COOKIE['__gtm_campaign_url'];}?>"
              id="m_utm_source"
            />
            <div className="error_msg error" id="email3_error">
              Please Enter Your Email
            </div>
            <span className="text-danger">{/*?php echo $emailErr; ?*/}</span>
          </div>
          <div className="col-12 form-group ">
            <input
              type="text"
              className="form-control"
              name="mobile3"
              id="mobile3"
              
              maxLength={10}
              placeholder="Mobile No."
            />
            <div className="error_msg error" id="mobile3_error">
              Please Enter Your Mobile Number
            </div>
            <span className="text-danger">{/*?php echo $phoneErr; ?*/}</span>
          </div>
          <div className="col-12 form-group ">
            <select className="form-control " name="pid3" id="pid3">
              <option value="">Select Project</option>
              {/* <option value="527663903571816626">Plumeria</option> */}
              <option value={527663903571816624}>Parc Residences</option>
              <option value={527663903571816625}>Panache</option>
              <option value={529050893144816332}>Siddhachal</option>
              <option value={560338377402839217}>Palm Spring Tower</option>
              <option value={527663903571816278}>Princetown Royal</option>
              <option value={527663903571816481}>Princetown Tower</option>
              <option value={527664231125816273}>Prospera</option>
              <option value={527663903571816620}>Prithvi</option>
              <option value={527663903571816622}>Kumar Prakruti</option>
              <option value={527663903571816623}>Kumar Pinnacle</option>
              <option value={540797986297839761}>Prajwal</option>
              <option value={527664231125816158}>Primus</option>
              <option value={527664231125816101}>Kumar Parasmani</option>
              {/* <option value="527922591991816127">Primavera</option> */}
            </select>
            <div className="error_msg error" id="project3_error">
              Please Select Project Name
            </div>
            <span className="text-danger">{/*?php echo $projectErr; ?*/}</span>
          </div>
          <div className="col-12 form-group ">
            <textarea
              className="form-control"
              name="message3"
              id="message3"
              placeholder="Enter Message"
              rows=""
              style={{ padding: "5px 15px" }}
              defaultValue={""}
            />
            <div className="error_msg error" id="message3_error">
              Please Enter Your Message
            </div>
            <span className="text-danger">{/*?php echo $messageErr; ?*/}</span>
          </div>
          <div className="text-center mt-3">
            <button type="submit" id="form3" className="submit-btn">
              SUBMIT ENQUIRY
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div
    className="modal fade"
    id="brochureModal"
    tabIndex={-1}
    aria-labelledby="popupModalLabel"
    aria-hidden="true"
  >
    <div className="modal-dialog modal-dialog-centered">
      <div className="modal-content">
        <div className="modal-body">
          <button
            type="button"
            className="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          />
          <h2 className="modal-title" id="popupModalLabel">
            DOWNLOAD BROCHURE
          </h2>
          <div className="form-wrapper">
            <form
              autoComplete="off"
              className="lead_form formsSubmit"
              data-id="contactUsForm"
              method="POST"
            >
              <div className="row">
                <div className="col-12 form-group mt-3">
                  <input
                    type="text"
                    className="form-control"
                    name="nam4"
                    id="name4"
                    placeholder="Name*"
                  />
                  <div className="error_msg error" id="name4_error">
                    Please Enter Your Name
                  </div>
                </div>
                <div className="col-12 form-group mt-3">
                  <input
                    type="email"
                    className="form-control"
                    name="emai4"
                    id="email4"
                    placeholder="Email ID*"
                  />
                  <div className="error_msg error" id="email4_error">
                    Please Enter Your Email
                  </div>
                </div>
                <div className="col-12 form-group mt-3">
                  <input
                    type="text"
                    className="form-control"
                    name="mobile"
                    id="mobile4"
                    
                    maxLength={10}
                    placeholder="Mobile No.*"
                  />
                  <div className="error_msg error" id="mobile4_error">
                    Please Enter Your Mobile Number
                  </div>
                </div>
                <div className="col-12 form-group mt-3">
                  <textarea
                    className="form-control"
                    name="messag4"
                    id="message4"
                    placeholder="Enter Message"
                    
                    defaultValue={""}
                  />
                  <div className="error_msg error" id="message4_error">
                    Please Enter Your Message
                  </div>
                </div>
                <div className="text-center mt-5">
                  <button type="submit" id="form4" className="submit-btn">
                    SUBMIT ENQUIRY
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  {/*  <a href="tel:9595110011" class="call-btn"><i class="bi bi-telephone"></i></a>
    <a href="https://api.whatsapp.com/send?phone=919595110011" class="whatsapp-btn" target="_blank"><i class="bi bi-whatsapp"></i></a>
    <a class="pdf-btn d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#brochureModal" id="download-brochure"><i class="bi bi-file-earmark-pdf"></i></a> */}
  {/* <div id="preloader"></div> */}
  {/*  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a> */}
  <a
    href="#"
    className="back-to-top d-flex align-items-center justify-content-center"
  >
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width={26}
      height={26}
      fill="currentColor"
      className="bi bi-arrow-up-short"
      viewBox="0 0 16 16"
    >
      <path
        fillRule="evenodd"
        d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5"
      />
    </svg>
  </a>
  {/* components JS Files */}
  {/*  */}
  {/* Template Main JS File */}
  {/*  */}
  {/*  */}
  {/*  */}
  {/*  */}
  {/* <link rel="stylesheet" href="assets/css/intlTelInput.css"> */}
  {/*?php 
unset($_SESSION['errors']);
unset($_SESSION['notmatched']);
unset($_SESSION['postval']);
unset($_SESSION['typeofflat1']);
unset($_SESSION['approxbudget1']);
// session_destroy();
?*/}
</>

    
  );
}
