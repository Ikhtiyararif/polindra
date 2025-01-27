<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Cart/Wishlist Page Design</title>

        <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <div>
        <div class="footer-area ">
            <div class="text-center text-white">
                <div class="row px-8 md:px-8">
                    <div class="col">
                        <br>
                        <p class="copyright">Copyright &copy; Polindra Property - 2023</p>
                    </div>
                    <div class="col">
                        <ul>
                            <li><a href="/join-us" class="text-decoration-none text-white">Join Us</a></li>
                            <br>
                            <li><a href="/our-service" class="text-decoration-none text-white">Our Service</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li><a href="/newsroom" class="text-decoration-none text-white">Newsroom</a></li>
                            <br>
                            <li><a href="/ourleadership" class="text-decoration-none text-white">Our Leadership</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li><a href="/terms" class="text-decoration-none text-white">Terms and Conditions</a></li>
                            <br>
                            <li><a href="/privacy-policy" class="text-decoration-none text-white">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <br>
                        <div class="social-media">

                            @foreach ($social_medias as $social_media)
                                <!-- <iconv class="p-2 text-center text-white"><a href="{{ $social_media->url }}" class="text-white text-decoration-none">{!! $social_media->icon_text !!}</a></i> -->

                            <a href="{{ $social_media->url }}">{!! $social_media->icon_text !!}</a>
                            <!-- <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a> -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

