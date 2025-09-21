<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Inline CSS for simplicity, move to app.css for production */
        * { margin:0; padding:0; box-sizing:border-box; font-family: Arial, sans-serif; }
        body { scroll-behavior: smooth; }
        header { background-color: #333; color:white; position:sticky; top:0; z-index:1000; }
        nav { display:flex; justify-content:center; padding:15px; }
        nav a { color:white; margin:0 20px; font-weight:bold; text-decoration:none; transition:0.3s; }
        nav a:hover { color:#4CAF50; }
        .carousel { position:relative; overflow:hidden; height:70vh; }
        .slides { display:flex; width:300%; transition: transform 0.5s ease-in-out; }
        .slide { width:100%; flex-shrink:0; background-size:cover; background-position:center; display:flex; justify-content:center; align-items:center; color:white; font-size:3rem; font-weight:bold; text-shadow:2px 2px 5px black; }
        .prev, .next { position:absolute; top:50%; transform:translateY(-50%); background:rgba(0,0,0,0.5); color:white; border:none; font-size:2rem; padding:10px 15px; cursor:pointer; border-radius:5px; }
        .prev { left:20px; } .next { right:20px; }
        .features { display:flex; justify-content:space-around; flex-wrap:wrap; padding:50px 20px; background:#f4f4f4; }
        .feature { background:white; padding:25px; margin:15px; width:30%; text-align:center; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.1); opacity:0; transform:translateY(30px); transition:all 0.7s ease-out; }
        .feature.show { opacity:1; transform:translateY(0); }
        .feature h3 { margin-bottom:15px; color:#333; }
        .btn { background:#4CAF50; color:white; padding:10px 25px; border:none; border-radius:5px; cursor:pointer; font-size:1rem; }
        .btn:hover { background:#45a049; }
        footer { background:#333; color:white; text-align:center; padding:20px 0; }
        footer a { color:#4CAF50; text-decoration:none; }
        footer a:hover { text-decoration:underline; }
        @media (max-width:900px){ .feature{ width:80%; } }
    </style>
    @stack('styles')
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Carousel
        const slides = document.querySelector('.slides');
        if(slides){
            const slideCount = slides.children.length;
            let index = 0;

            const showSlide = () => { slides.style.transform = `translateX(-${index * 100}%)`; }

            document.querySelector('.next')?.addEventListener('click', () => {
                index = (index+1)%slideCount; showSlide();
            });

            document.querySelector('.prev')?.addEventListener('click', () => {
                index = (index-1+slideCount)%slideCount; showSlide();
            });

            setInterval(()=>{ index = (index+1)%slideCount; showSlide(); },5000);
        }

        // Feature animation
        const features = document.querySelectorAll('.feature');
        const revealFeatures = () => {
            const trigger = window.innerHeight*0.8;
            features.forEach(feature => {
                const top = feature.getBoundingClientRect().top;
                if(top<trigger) feature.classList.add('show');
            });
        };
        window.addEventListener('scroll', revealFeatures);
        window.addEventListener('load', revealFeatures);

        function featureAlert(feature){ alert(`You clicked on the "${feature}" feature!`); }
    </script>
    @stack('scripts')
</body>
</html>
