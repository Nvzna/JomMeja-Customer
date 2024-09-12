<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" href="{{ asset('images/logoMeja3.png') }}" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="{{ url('/CSS/sidebr.css') }}" />

    <title>Homepage</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="{{ asset('images/logoMeja3.png') }}" alt="Logo" class="logo-img">
                JomMeja
            </div>
            <div class="menu-icon" onclick="toggleSidebar()">☰</div>
        </div>

        <div id="sidebar" class="sidebar">
            <a href="#" class="close-btn" onclick="toggleSidebar()">×</a> 
            <a href="{{route('customer.depan')}}">Home</a>
            <a href="#">Social Feeds</a>
            <a href="#">Log In</a>
            <a href="https://play.google.com/store/search?q=yoosnap&c=apps">Download Yoosnap</a>
        </div>

        <div class="highlight-text">New offers at the tip of your finger!</div>
        <div class="subtitle">Scan & Earn.</div>

        <a href="{{route('customer.community')}}" class="button">Join Our Community Group</a>
        <a href="#" class="button2">Check Our Menu</a>

        <a href="https://www.instagram.com/richiamo.klts/" target="_blank">
            <div class="card">
                <img src="{{ asset('images/RichiamoLogo.png') }}" alt="Richiamo Coffee">
                <div class="card-content">
                    <div class="card-title">Richiamo Coffee</div>
                    <div class="card-subtitle">KLTS, Setapak<br>Table 3-1 | 100 points</div>
                </div>
            </div>  
        </a>
        

        <div class="tags">
            <button class="active">All</button>
            <a href="{{route('customer.tiktok')}}"><button>Tiktok</button></a>
            <a href="{{route('customer.instagram')}}"><button>Instagram</button></a>
            <a href="{{route('customer.review')}}"><button>Google Reviews</button></a>
        </div>

        <div class="image-grid">
            <!-- Example images, adjust the source paths as needed -->
            {{-- <img src="{{ asset('images/landscapeDessert1.jfif') }}" alt="Food 5" class="landscape-image"> --}}
            <img src="{{ asset('images/coffee1.jfif') }}" alt="Food 1"  >
            <img src="{{ asset('images/croisant1.jfif') }}" alt="Food 2">
            <a href="https://www.tiktok.com/@richiamocoffee/video/7398141650733649170?is_from_webapp=1&sender_device=pc" target="_blank"> <img src="{{ asset('fromTiktok/tiktok1.png') }}" alt="Food 1" > </a>
            <img src="{{ asset('images/dessert2.jfif') }}" alt="Food 4" >
           
            <img src="{{ asset('images/dessert3.jfif') }}" alt="Food 4" >
            <img src="{{ asset('images/dessert4.jfif') }}" alt="Food 5" >
            <img src="{{ asset('fromInstagram/insta1.jfif') }}" alt="Food 6" >
            <img src="{{ asset('fromInstagram/insta2.jfif') }}" alt="Food 7" >
            <img src="{{ asset('fromInstagram/insta3.jfif') }}" alt="Food 8" >
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            if (sidebar.style.width === "250px") {
                sidebar.style.width = "0";
            } else {
                sidebar.style.width = "250px";
            }
        }
    </script>
</body>
</html>
