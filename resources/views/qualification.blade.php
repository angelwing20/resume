<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Great Learning</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"
        media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" />
    </noscript>
    <link href="css/font-awesome/css/all.min.css?ver=1.2.1" rel="stylesheet">
    <link href="css/mdb.min.css?ver=1.2.1" rel="stylesheet">
    <link href="css/aos.css?ver=1.2.1" rel="stylesheet">
    <link href="css/main.css?ver=1.2.1" rel="stylesheet">
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- 引入jQuery, Popper.js, 和Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<style>
    html {
        scroll-padding-top: 100px;
    }
    .float{
        padding-top: 10px;
        transition: transform 0.3s ease !important;
    }
    .float:hover{
        transform: translateY(-10px);
    }
    .anima{
        background-color: white;
    }
    .anima:hover{
        background-color: rgba(0, 0, 0, 0.6);
    }
</style>
<body>
    <div class="container">
        <div class="resume-container">
            <div class="row g-0">
                <div class="col-md-6 d-flex align-items-center anima" style="padding-bottom:10px;padding-top:11px;" data-aos="fade-right" data-aos-delay="100">
                    <a href="{{ asset('storage/pdf/Chin Chun Teng PHP.pdf') }}" class="float" target="_blank">
                        <img class="img-fluid " src="{{ asset('storage/images/PHP.jpg') }}" width="800" height="500" />
                    </a>
                </div>
                <div class="col-md-6 d-flex align-items-center anima" style="padding-bottom:10px;padding-top:11px;" data-aos="fade-left" data-aos-delay="100">
                    <a href="{{ asset('storage/pdf/Chin Chun Teng Javascript.pdf') }}" class="float" target="_blank">
                        <img class="img-fluid" src="{{ asset('storage/images/Javascript.jpg') }}" width="800" height="500" />
                    </a>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-6 d-flex align-items-center anima" style="padding-bottom:10px;padding-top:11px;" data-aos="fade-right" data-aos-delay="100">
                    <a href="{{ asset('storage/pdf/Chin Chun Teng Mysql Operator.pdf') }}" class="float" target="_blank">
                        <img class="img-fluid" src="{{ asset('storage/images/Mysql Operator.jpg') }}" width="800" height="500" />
                    </a>
                </div>
                <div class="col-md-6 d-flex align-items-center anima" style="padding-bottom:10px;padding-top:11px;" data-aos="fade-left" data-aos-delay="100">
                    <a href="{{ asset('storage/pdf/Chin Chun Teng Front End CSS.pdf') }}" class="float" target="_blank">
                        <img class="img-fluid" src="{{ asset('storage/images/Front End CSS.jpg') }}" width="800" height="500" />
                    </a>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-6 d-flex align-items-center anima" style="padding-bottom:10px;padding-top:11px;" data-aos="fade-right" data-aos-delay="100">
                    <a href="{{ asset('storage/pdf/Chin Chun Teng Front End HTML.pdf') }}" class="float" target="_blank">
                        <img class="img-fluid" src="{{ asset('storage/images/Front End HTML.jpg') }}" width="800" height="500" />
                    </a>
                </div>
                <div class="col-md-6 d-flex align-items-center anima" style="padding-bottom:10px;padding-top:11px;" data-aos="fade-left" data-aos-delay="100">
                    <a href="{{ asset('storage/pdf/Chin Chun Teng CSS Properties.pdf') }}" class="float" target="_blank">
                        <img class="img-fluid" src="{{ asset('storage/images/Chin Chun Teng CSS Properties.jpg') }}" style="max-height: 350px; object-fit: cover; width: 800px;" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="scripts/mdb.min.js?ver=1.2.1"></script>
    <script src="scripts/aos.js?ver=1.2.1"></script>
    <script src="scripts/main.js?ver=1.2.1"></script> 
</body>
</html>