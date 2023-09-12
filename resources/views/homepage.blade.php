<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home|Innovosens</title>
    <link rel="stylesheet" href="css/homepage.css">

    <!-- Global Library -->
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/global.css">

</head>

<body>
    <x-navbar />

    <x-modal />

    <section class="hero">
        <video autoplay loop muted playsinline>
            <source src="assets/bg_video02.mp4" type="video/mp4">
        </video>
        <div class="hero_container ">
            <p class="slidedown">Welcome to Innovosens AB</p>
            <h1 class="slidedown"><span class="color-textlink">WELLNESS AT YOUR PLAM</span></h1>
            <p class="slidedown">Reach the unprecedented levels of performance, health and wellness goals from the
                surface of your skin.</p>
        </div>
    </section>

    <section class="award section pat-bg   ">
        <div class="title slidedown">
            <h2>
                Awards <span class="color-textlink">Spotlight</span>
            </h2>
        </div>
        <div class="award-container">
            <div class="award-card slidein ">
                <img src="assets/award01.webp" alt="">
                <p class="caption">Awarded 2019</p>
            </div>
            <div class="award-card slidein">
                <img src="assets/award02.webp" alt="">
                <p class="caption">Awarded 2019</p>
            </div>
            <div class="award-card slidein">
                <img src="assets/award03.webp" alt="">
                <p class="caption">Awarded 2019</p>
            </div>
            <div class="award-card slidein">
                <img src="assets/award04.webp" alt="">
                <p class="caption">Awarded 2019</p>
            </div>
            <div class="award-card slidein">
                <img src="assets/award05.webp" alt="">
                <p class="caption">Awarded 2019</p>
            </div>
        </div>
    </section>

    <section class="intro-app section ">
        <div class="title slidedown">
            <h2>Hit <span class="color-textlink ">goals</span>. Not the wall</h2>
            <p>
                Discover the revolutionary SMASH system - Sweat Metabolite Analysis for Sports and Health, powered by
                cutting-edge AI technology. Say goodbye to inconvenience and hello to seamless wellness monitoring with
                SMASH.
            </p>
        </div>
        <img class=" fade" src="assets/intro-img.webp" alt="">
    </section>

    <section class="feature section pat-bg ">
        <div class="title slidedown">
            <h2>Changing the Game: <span class="color-textlink">Sports & Health</span> 🏆🌿</h2>
            <p>SMASH: Non-invasive health monitoring powered by AI. Track your fitness, nutrition, and disease risk with
                a simple sweat test.
            </p>
        </div>
        <div class="feature-container">
            <div class="feature-card card slidedown">
                <img src="assets/icons/time.svg" alt="">
                <h4>
                    Continuous Real-Time Insights
                </h4>
                <p class="b2">Stay informed with continuous, real-time data on multiple parameters, giving you valuable
                    insights for your health and wellness.</p>
            </div>
            <div class="feature-card card slidedown">
                <img src="assets/icons/heart.svg" alt="">
                <h4>
                    Personalized Health Management
                </h4>
                <p class="b2">
                    Designed to cater to you unique Health needs providing personalized health management for optimal
                    wellbeing. </p>
            </div>
            <div class="feature-card card slidedown">
                <img src="assets/icons/eye.svg" alt="">
                <h4>
                    Glucose & Lactate Monitoring
                </h4>
                <p class="b2">
                    Pain free and prick free tracking of Glucose, Lactate and other electrolytes from the surface of the
                    skin </p>
            </div>
            <div class="feature-card card slidedown">
                <img src="assets/icons/prime.svg" alt="">
                <h4>
                    New Era of Health Monitoring
                </h4>
                <p class="b2">
                    Embrace the future of health monitoring with SMASH - your non-invasive, AI-powered companion on your
                    wellness and fitness journey. </p>
            </div>
        </div>
    </section>

    <section class="intro-video section">
        <div class="title slidedown">
            <h2>
                <span class="color-textlink">Compact .</span> Yet potent
            </h2>
            <p>Watch our introductory video to get a glimpse into our world of innovation and discover how we're
                transforming health monitoring. You'll learn about our cutting-edge technology,
                the impact we're making, and how we're empowering individuals to take control of their health and
                wellness.</p>
        </div>

        <iframe class="video fade"
            src="https://www.youtube.com/embed/Yko3GMseY40?si=rhxwE9gFsoZjnymR&amp;controls=0&amp;start=3"></iframe>
    </section>

    <section class="uses section pat-bg ">
        <div class="title slidedown">
            <h2>
                <span class="color-textlink">Progress, </span>together.
            </h2>
            <p>
                At Innovosens, we are passionate about empowering individuals to live healthier and happier lives. With
                our cutting-edge technology and innovative solutions, we are revolutionizing the way health is monitored
                and managed.
            </p>
        </div>
        <div class="uses-container">
            <img class="gif-img slidedown" src="assets/gif01.gif" alt="A man running in marathon">
            <img class="gif-img slidedown" src="assets/gif02.gif" alt="A women running on threadmill">
            <img class="gif-img slidedown" src="assets/gif03.gif" alt="A man running on threadmill">
            <img class="gif-img slidedown" src="assets/gif04.gif" alt="A women doing jumping jacks">
        </div>
    </section>

    <section class="blog section">
        <div class="title slidedown">
            <h2>Join the Journey to a <span class="color-textlink">Healthier you</span></h2>
            <p>We provide personal insights that drive positive change, no matter your current fitness level. Our
                mission is to empower everyone with the tools to create a healthier world — through activity, nutrition,
                and knowledge. Explore our articles , our values, and our commitment to making a positive impact on the
                world of health and wellness.</p>
        </div>
        <div class="blog-container">
            @foreach($blogs as $blog)
            <x-blogCard image="{{$blog->image}}" id="{{$blog->id}}" title="{{$blog->title}}"
                short_desc="{{$blog->short_description}}" />
            @endforeach
            {{-- <x-blogCard />
            <x-blogCard />
            <x-blogCard /> --}}

        </div>
    </section>

    <x-email />

    <x-footer />

</body>

<script src="js/global.js"></script>
<script src="js/animate.js"></script>

</html>