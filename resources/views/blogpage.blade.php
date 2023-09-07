<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog|Innovosens</title>
    <link rel="stylesheet" href="{{asset('css/blogpage.css')}}">

    <!-- Global Library -->
    <link rel="stylesheet" href="{{asset('css/animation.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
</head>

<body>

    <x-navbar />

    <section class="blog-hero section ">
        <img class="fade" src="{{Storage::url($blog->banner)}}" alt="">

        <div class="title slidedown">
            <p class="b2">Published On: 20 Aug 2023</p>
            <h2>{{$blog->title}}</h2>
            <p class="b2">written by {{$blog->user->name}}</p>
        </div>
        <div class="blog-content">
            <p class="slidedown">{{$blog->short_description}}
            </p>
            {!!$blog->content!!}
            {{-- <img class="slidedown" src="assets/tech-hero.webp" alt="">
            <p class="slidedown">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p> --}}
        </div>
    </section>

    <x-footer />

</body>

<script src="{{asset('js/global.js')}}"></script>
<script src="{{asset('js/animate.js')}}"></script>

</html>