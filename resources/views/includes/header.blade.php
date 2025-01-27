<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Qwitcher+Grypen&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Phudu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/header.css">
</head>
<body>
    <nav>
        <a href="/" class="logo"><img src="assets/images/pmiproperty.png" alt="Polindra" class="h-16"></a>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/jual">Dijual</a></li>
            <li><a href="/sewa">Disewa</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contactus">Contact Us</a></li>
            <li><a href="/"><i class="fa-solid fa-user"></i></a></li>
        </ul>
    </nav>
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
</body>
</html>