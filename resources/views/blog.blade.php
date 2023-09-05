<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog|Innovosens</title>
    <link rel="stylesheet" href="css/blog.css">
    
    <!-- Global Library -->
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/global.css">
</head>

<body>
    <x-navbar />
    <section class="hero full">
        <div class="title slidedown">
            <h1>Discover the <span class="color-textlink">Latest Insights</span></h1>
            <p>Welcome to our blog page, where knowledge meets inspiration. Dive into a world of informative articles,
                tips, and expert advice on health, wellness, and technology. Whether you're looking to enhance your
                fitness routine, understand the latest trends in health tech, or gain insights into managing your
                well-being, our blog is here to guide you on your journey to a healthier and happier life.
            </p>
        </div>
        <div class="hero-container">
            <div class="card slidein">
                <h4>Explore Diverse Topics</h4>
                <p class="b2">
                    Explore personalized health, wearable tech, and wellness insights.</p>
            </div>
            <div class="card slidein">
                <h4>Connect and Engage</h4>
                <p class="b2"> Join our health community! Gain insights for your health and wellness journey.
                </p>
            </div>
            <div class="card slidein">
                <h4>Stay Informed. Inspired
                </h4>
                <p class="b2"> Empower your journey with Innovosen's knowledge for a healthier lifestyle.</p>
            </div>
        </div>

    </section>
    <section class="content ">
        <div class="tab ">
            <div class="tab-updates active" onclick="openTab('updates')">
                <p>Updates</p>
            </div>
            <div class="tab-general" onclick="openTab('general')">
                <p>General</p>
            </div>
        </div>

        <div class="tab-content tab-updates active" id="updates">
            <x-blogCard />
            <x-blogCard />
            <x-blogCard />
            <!-- Add more update posts here -->
        </div>

        <div class="tab-content tab-general" id="general">
            <x-blogCard />
            <x-blogCard />
            <x-blogCard />
            <x-blogCard />
            <x-blogCard />
            <x-blogCard />
        </div>
    </section>



    <x-footer />

</body>

<script src="js/global.js"></script>
<script src="js/animate.js"></script>


</html>