<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" href="{{ asset('images/logoMeja1.png') }}" type="image/icon type">

    <link rel="stylesheet" type="text/css" href="{{ url('/CSS/sidebr.css') }}" />

    <title>Tiktok</title>

</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">Mej4</div>
            <div class="menu-icon" onclick="toggleSidebar()">☰</div>
        </div>
        <div id="sidebar" class="sidebar">
            <a href="#" class="close-btn" onclick="toggleSidebar()">×</a>
            <a href="#">Home</a>
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
            <a href="{{route('customer.depan')}}" ><button>All</button></a>
            <button class="active">Tiktok</button>
            <a href="{{route('customer.instagram')}}"><button>Instagram</button></a>
            <button>Google Reviews</button>
        </div>
        <div class="image-grid">
            <a href="https://www.tiktok.com/@richiamocoffee/video/7398141650733649170?is_from_webapp=1&sender_device=pc" target="_blank"> <img src="{{ asset('fromTiktok/tiktok1.png') }}" alt="Food 1" width="200" height="350"> </a>
            <a href="https://www.tiktok.com/@richiamocoffee/video/7388337406086253845?is_from_webapp=1&sender_device=pc" target="_blank"> <img src="{{ asset('fromTiktok/tiktok2.png') }}" alt="Food 2" width="200" height="350"> </a> 
            <a href="https://www.tiktok.com/@richiamocoffee/video/7191346339446328602?is_from_webapp=1&sender_device=pc" target="_blank"> <img src="{{ asset('fromTiktok/tiktok3.png') }}" alt="Food 3" width="200" height="350"> </a> 
            <a href="https://www.tiktok.com/@richiamocoffee/video/7193239023618428187?is_from_webapp=1&sender_device=pc" target="_blank"> <img src="{{ asset('fromTiktok/tiktok4.png') }}" alt="Food 4" width="200" height="350"> </a> 
            <a href="https://www.tiktok.com/@richiamocoffee/video/7378817175043247368?is_from_webapp=1&sender_device=pc" target="_blank"> <img src="{{ asset('fromTiktok/tiktok5.png') }}" alt="Food 5" width="200" height="350"> </a> 

            
            <img src="{{ asset('images/croisant1.jfif') }}" alt="Food 2" width="200" height="200">
            <img src="{{ asset('images/dessert1.jfif') }}" alt="Food 3" width="200" height="200">
            <img src="{{ asset('images/dessert2.jfif') }}" alt="Food 4" width="200" height="200">
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