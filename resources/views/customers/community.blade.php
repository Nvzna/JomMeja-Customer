<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Richiamo Coffee</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/CSS/community.css') }}">
</head>
<body>

    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <div class="logo">Logo/JomMeja</div>
            <div class="menu-icons">
                <i class="fa fa-user"></i>
                <i class="fa fa-bars" onclick="toggleSidebar()">☰</i> <!-- Open Sidebar -->
            </div>
        </div>

        <!-- Sidebar Section -->
        <div id="sidebar" class="sidebar">
            <a href="#" class="close-btn" onclick="toggleSidebar()">×</a>  <!-- Close Sidebar -->
            <a href="{{route('customer.depan')}}">Home</a>
            <a href="#">Social Feeds</a>
            <a href="#">Log In</a>
            <a href="https://play.google.com/store/search?q=yoosnap&c=apps">Download Yoosnap</a>
        </div>

        <!-- Content Section -->
        <div class="content">
            <img src="{{ asset('images/RichiamoLogo.png') }}" alt="Richiamo Coffee Logo" class="logo-img">
            <h2>Richiamo Coffee</h2>

            <div class="buttons">
                <a href="#" class="button">Official Website</a>
                <a href="#" class="button">Telegram Channel</a>
                <a href="#" class="button">Instagram Page</a>
                <a href="#" class="button">Tiktok Page</a>
            </div>
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
