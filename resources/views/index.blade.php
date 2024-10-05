@session('message')
    <script>
        window.alert("{{ session('message') }}")
    </script>
@endsession

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Resume</title>
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
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
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
    header {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 100;
        background-color: rgba(0, 0, 0, 0.8);
        color: yellow;
    }
    .p-5 {
        padding: 2.5rem 2rem !important;
    }
    .navbar-nav .nav-link {
        color: yellow !important;
    }
    .navbar-brand:hover {
        color: #ffd700 !important;
    }
    .navhover{
        font-size: 18px;
        transition:font-size 0.3s ease;
    }
    .navhover:hover{
        font-size: 20px;
        font-weight: bold;
    }
    .fahover{
        transform:scale(1);
        transition:transform 0.3s ease;
    }
    .fahover:hover{
        transform:scale(1.5);
    }
    .float{
        padding-top: 10px;
        transition: transform 0.3s ease !important;
    }
    .float:hover{
        transform: translateY(-10px);
    }
    .img-click{
        box-shadow:4px 4px 4px 4px black;
    }
    .img-click:active{
        transform:scale(0.95);
    }
    .mini{
        background-color:rgba(0,0,0,0.7);
        padding: 8px;
        color:white;
        transition: box-shadow,font-size 0.5s ease ;
        display: flex;
        justify-content: center;
    }
    .mini:hover{
        box-shadow:5px 5px 5px black;
        font-size:1.25rem;
    }
    .mini:active{
        transform:scale(0.95);
    }
    .symbol{
        margin-top:11px;
        padding-left:8px;
    }
</style>

<body class="bg-light" id="top">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                
                <a class="navbar-brand" href="#intro" style="color:yellow;"><b>Chin Chun Teng</b></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item" style="display: flex;align-items:center;">
                            <a class="nav-link navhover" href="#about" style="margin-left:1rem;">About Me</a>
                            <p class="symbol">|</p>
                        </li>
                        <li class="nav-item" style="display: flex;align-items:center;">
                            <a class="nav-link navhover" href="#skills" style="padding-left:0px;">Skills</a>
                            <p class="symbol">|</p>
                        </li>
                        <li class="nav-item" style="display: flex;align-items:center;">
                            <a class="nav-link navhover" href="#experience" style="padding-left:0px;">Work Experience</a>
                            <p class="symbol">|</p>
                        </li>
                        <li class="nav-item" style="display: flex;align-items:center;">
                            <a class="nav-link navhover" href="#education" style="padding-left:0px;">Education</a>
                            <p class="symbol">|</p>
                        </li>
                        <li class="nav-item" style="display: flex;align-items:center;">
                            <a class="nav-link navhover" href="#portfolio" style="padding-left:0px;">Qualification</a>
                            <p class="symbol">|</p>
                        </li>
                        <li class="nav-item" style="display: flex;align-items:center;">
                            <a class="nav-link navhover" href="#miniproject" style="padding-left:3px;">Mini Project</a>
                            <p class="symbol">|</p>
                        </li>
                        <li class="nav-item" style="display: flex;align-items:center;">
                            <a class="nav-link navhover" href="#references" style="padding-left:0px;">References</a>
                            <p class="symbol">|</p>
                        </li>
                        <li class="nav-item" style="display: flex;align-items:center;">
                            <a class="nav-link navhover" href="#contact" style="padding-left:0px;">Contact</a>
                            <p class="symbol">|</p>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navhover" href="{{ route('logout') }}" style="color: red !important;padding-left:0px;"><b>Logout</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="page-content">
        <div class="shadow-1-strong bg-white" id="intro">
            <div class="bg-info text-white">
                <div class="cover">
                    <img src="{{ asset('storage/images/header-background.jpg') }}" width="auto" height="729px" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);backdrop-filter: blur(2px);height:729px !important;">
                        <div class="text-center p-5">
                            <div class="avatar p-1"><img class="img-thumbnail shadow-2-strong"
                                    src="{{ asset('storage/images/cct.jpg') }}" width="150" height="auto"
                                    style="margin-top:70px;margin-bottom:20px; " />
                            </div>
                            <div class="header-bio mt-3">
                                <div data-aos="zoom-in" data-aos-delay="0">
                                    <h2 class="h1" style="text-shadow: 1px 1px 2px">Chin Chun Teng</h2>
                                    <p>PROGRAMMING INTERNSHIP</p>
                                </div>
                                <div class="header-social mb-3 d-print-none" data-aos="zoom-in" data-aos-delay="200">
                                    <nav role="navigation">
                                        <ul class="nav justify-content-center">
                                            <li class="nav-item fahover">
                                                <a class="nav-link" href="https://wa.me/601156911236" title="Whatsapp" target="_blank">
                                                    <i class="fab fa-whatsapp"></i>
                                                    <span class="menu-title sr-only">Whatsapp</span>
                                                </a>
                                            </li>
                                            <li class="nav-item fahover">
                                                <a class="nav-link" href="https://mail.google.com/mail/?view=cm&fs=1&to=chunteng9674@gmail.com" title="Mail" target="_blank">
                                                    <i class="fas fa-envelope"></i>
                                                    <span class="menu-title sr-only">Mail</span>
                                                </a>
                                            </li>
                                            <li class="nav-item fahover">
                                                <a class="nav-link" href="https://www.instagram.com/ctchin_1114/" title="Instagram" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                    <span class="menu-title sr-only">Instagram</span>
                                                </a>
                                            </li>
                                            <li class="nav-item fahover">
                                                <a class="nav-link" href="https://github.com/angelwing20/resume.git" title="Github" target="_blank">
                                                    <i class="fab fa-github"></i>
                                                    <span class="menu-title sr-only">Github</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="d-print-none" style="display: flex;justify-content:center;">
                                    <a class="btn btn-outline-light btn-lg shadow-sm mt-1 me-3"
                                        href="{{ asset('storage/pdf/resume.pdf') }}" target="_blank" data-aos-offset="10" data-aos="fade-right"
                                        data-aos-delay="500">View Resume</a>
                                    <a class="btn btn-info btn-lg shadow-sm mt-1" href="{{ asset('storage/document/resume.docx') }}"
                                        data-aos-offset="10" data-aos="fade-left" data-aos-delay="500"><span class="fas fa-download"></span> Resume</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:200px;">
            <div class="resume-container">
                <div class="shadow-1-strong bg-white my-5 p-5" id="about">
                    <div class="about-section">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="h2 fw-light mb-4"><strong>About Me</strong></h2>
                                <p>I'm currently looking for a <strong>Programming internship</strong> from early
                                    February to late May,
                                    for a duration of
                                    four months. I am eager to apply my skills and grow through hands-on experience.
                                    While I am focusing
                                    on improving my frontend development skills, I am also interested in expanding my
                                    knowledge of backend
                                    development. I am excited about the opportunity to learn from experienced developers
                                    and contribute to
                                    a team environment.</p>
                            </div>
                            <div class="col-md-5 offset-lg-1">
                                <div class="row mt-2">
                                    <h2 class="h2 fw-light mb-4">Bio</h2>
                                    <div class="col-sm-5">
                                        <div class="pb-2 fw-bolder"><i class="far fa-calendar-alt pe-2 text-muted"
                                                style="width:24px;opacity:0.85;"></i> Age</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="pb-2">20</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="pb-2 fw-bolder"><i class="far fa-envelope pe-2 text-muted"
                                                style="width:24px;opacity:0.85;"></i> Email</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="pb-2">chunteng9674@gmail.com</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="pb-2 fw-bolder"><i class="fas fa-phone pe-2 text-muted"
                                                style="width:24px;opacity:0.85;"></i> Phone</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="pb-2">+60 11-5691-1236</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="pb-2 fw-bolder"><i class="fas fa-map-marker-alt pe-2 text-muted"
                                                style="width:24px;opacity:0.85;"></i> Address</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="pb-2">12,Jalan Anggerik,Taman Anggerik,12300 Butterworth,Pulau
                                            Pinang</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-1-strong bg-white my-5 p-5" id="skills">
                    <div class="skills-section">
                        <h2 class="h2 fw-light mb-4"><b>Skills</b></h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3"><span class="fw-bolder">HTML</span>
                                    <div class="progress my-2 rounded" style="height: 20px">
                                        <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right"
                                            data-aos-delay="100" data-aos-anchor=".skills-section"
                                            style="width: 70%;" aria-valuenow="70" aria-valuemin="0"
                                            aria-valuemax="100">Intermediate</div>
                                    </div>
                                </div>
                                <div class="mb-3"><span class="fw-bolder">CSS</span>
                                    <div class="progress my-2 rounded" style="height: 20px">
                                        <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right"
                                            data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 55%"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">Intermediate
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3"><span class="fw-bolder">PHP</span>
                                    <div class="progress my-2 rounded" style="height: 20px">
                                        <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right"
                                            data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 55%"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">Intermediate
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3"><span class="fw-bolder">JavaScript</span>
                                    <div class="progress my-2 rounded" style="height: 20px">
                                        <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right"
                                            data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 45%"
                                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">Beginner</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3"><span class="fw-bolder">MySQL</span>
                                    <div class="progress my-2 rounded" style="height: 20px">
                                        <div class="progress-bar bg-secondary" role="progressbar"
                                            data-aos="zoom-in-right" data-aos-delay="400"
                                            data-aos-anchor=".skills-section" style="width: 55%" aria-valuenow="55"
                                            aria-valuemin="0" aria-valuemax="100">Intermediate</div>
                                    </div>
                                </div>
                                <div class="mb-3"><span class="fw-bolder">Laravel</span>
                                    <div class="progress my-2 rounded" style="height: 20px">
                                        <div class="progress-bar bg-secondary" role="progressbar"
                                            data-aos="zoom-in-right" data-aos-delay="400"
                                            data-aos-anchor=".skills-section" style="width: 65%" aria-valuenow="65"
                                            aria-valuemin="0" aria-valuemax="100">Intermediate</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-1-strong bg-white my-5 p-5" id="experience">
                    <div class="work-experience-section">
                        <h2 class="h2 fw-light mb-4"><b>Work Experience</b></h2>
                        <div class="timeline">
                            <div class="timeline-card timeline-card-info" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Waiter <span class="text-muted h6">at I Mum Mum
                                            Restaurant</span></div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <div class="text-muted text-small mb-3">2023 - 2024</div>
                                    <div>
                                        <div>• Take orders from customers and serve them.</div>
                                        <div>• Process payments and provide accurate billing information.</div>
                                        <div>• Clear tables and maintain a clean and organized dining area.</div>
                                        <div>• Checking customer orders are complete and presented correctly.</div>
                                        <div>• Ensure that all food and beverage are take accurately to customer.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-1-strong bg-white my-5 p-5" id="education">
                    <div class="education-section">
                        <h2 class="h2 fw-light mb-4"><b>Education</b></h2>
                        <div class="timeline">
                            <div class="timeline-card timeline-card-success" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Programming
                                        <span class="text-muted h6">from Kolej Synergy</span>
                                    </div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <div class="text-muted text-small mb-3">2023 - Present</div>
                                    <div>Diploma in System Module Development</div>
                                </div>
                            </div>
                            <div class="timeline-card timeline-card-success" data-aos="fade-in" data-aos-delay="200">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">SPM
                                        <span class="text-muted h6">from SMK Bagan Jaya</span>
                                    </div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <div class="text-muted text-small mb-3">2017 - 2022</div>
                                    <div>Sijil Pelajaran Malaysia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-1-strong bg-white my-5 p-5 d-print-none" id="portfolio">
                    <div class="portfolio-section">
                        <h2 class="h2 fw-light mb-4"><b>Qualification</b></h2>
                        <div class="row g-0">
                            <div class="col-md-6 d-flex align-items-center" style="padding-bottom:10px;padding-top:10px;display:flex;justify-content:center;" data-aos="fade-right" data-aos-delay="100">
                                
                                <a href="{{ route('qualification') }}" class="float" target="_blank">
                                    <img class="img-fluid img-click" src="{{ asset('storage/images/great learning.jpg') }}" width="300" height="200" />
                                </a>
                            </div>
                            <div class="col-md-6 d-flex align-items-center" style="padding-bottom:10px;padding-top:10px;display:flex;justify-content:center;" data-aos="fade-left" data-aos-delay="100">
                                <a href="{{ route('qualification_two') }}" class="float" target="_blank">
                                    <img class="img-fluid img-click" src="{{ asset('storage/images/e latih.png') }}" width="300" height="200" />
                                </a>
                            </div>
                        </div>                
                    </div>
                </div>
                <div class="shadow-1-strong bg-white my-5 p-5 d-print-none" id="miniproject">
                    <div>
                        <h2 class="h2 fw-light mb-4"><b>Mini Project</b></h2>
                        <div class="row g-0">
                            <div class="col-md-12" style="" data-aos="fade-right" data-aos-delay="100">
                                <div>
                                    <a href="{{ asset('http://localhost/mini_project/bmi/bmi.php') }}" class="float project" target="_blank" style="text-decoration: none;">
                                            <p class="mini"><b>BMI Calculator</b></p>
                                        </a>
                                </div>
                                <div>
                                    <a href="{{ asset('http://localhost/mini_project/calculator/cal.php') }}" class="float project" target="_blank" style="text-decoration: none;">
                                            <p class="mini"><b>Calculator</b></p>
                                        </a>
                                </div>        
                            </div>
                        </div>        
                    </div>
                </div>
                <div class="shadow-1-strong bg-white my-5 p-5" id="references">
                    <div class="reference-section">
                        <h2 class="h2 fw-light mb-4"><b>References</b></h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex mb-2">
                                    <div class="avatar"><img src="{{ asset('storage/images/kolej.jpg') }}"
                                            width="60" height="60" /></div>
                                    <div class="header-bio m-3 mb-0">
                                        <h3 class="h6 mb-1" data-aos="fade-left" data-aos-delay="0">MR. Ng Chuen
                                            Chuen</h3>
                                        <p class="text-muted text-small" data-aos="fade-left" data-aos-delay="100">
                                            Head of IT Department</p>
                                    </div>
                                </div>
                                <div><i class="text-secondar"></i>
                                    <p class="lead mx-2" data-aos="fade-left" data-aos-delay="100">Company: Kolej
                                        Synergy</p>
                                    <p class="lead mx-2" data-aos="fade-left" data-aos-delay="100">Phone Number: +60
                                        12-434-6832</p>
                                    <p class="lead mx-2" data-aos="fade-left" data-aos-delay="100">Email:
                                        c2@synergy-college.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex mb-2">
                                    <div class="avatar"><img src="{{ asset('storage/images/kolej.jpg') }}"
                                            width="60" height="60" /></div>
                                    <div class="header-bio m-3 mb-0">
                                        <h3 class="h6 mb-1" data-aos="fade-left" data-aos-delay="0">MR. Lai Yen Ping
                                        </h3>
                                        <p class="text-muted text-small" data-aos="fade-left" data-aos-delay="100">
                                            Lecturer</p>
                                    </div>
                                </div>
                                <div><i class="text-secondary"></i>
                                    <p class="lead mx-2" data-aos="fade-left" data-aos-delay="100">Company: Kolej
                                        Synergy</p>
                                    <p class="lead mx-2" data-aos="fade-left" data-aos-delay="100">Phone Number: +60
                                        12-925-3398</p>
                                    <p class="lead mx-2" data-aos="fade-left" data-aos-delay="100">Email:
                                        lyping0526@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-1-strong bg-white my-5 p-5" id="contact">
                    <div class="contant-section">
                        <h2 class="h2 fw-light text mb-4"><b>Contact</b></h2>
                        <div class="row mb-4">
                            <div class="col-md-5" data-aos="fade-left" data-aos-delay="200">
                                <div class="mt-1">
                                    <div class="h6"><i class="fas fa-phone pe-2 text-muted"
                                            style="width:24px;opacity:0.85;"></i> +60 11-5691-1236</div>
                                    <div class="h6"><i class="far fa-envelope pe-2 text-muted"
                                            style="width:24px;opacity:0.85;"></i>
                                        chunteng9674@gmail.com</div>
                                </div>
                                <div class="mt-5 d-print-none">
                                    <form action="{{ route('send') }}" method="POST">
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <input type="text" id="name" class="form-control" name="name" required />
                                            <label class="form-label" for="name">Name</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" class="form-control" name="email" required />
                                            <label class="form-label" for="email">Email address</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
                                            <label class="form-label" for="message">Message</label>
                                        </div>
                                        <button class="btn btn-info btn-block mb-4" type="submit">Send</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-7 d-print-none" data-aos="zoom-in" data-aos-delay="100"><iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3971.948372006289!2d100.3792629!3d5.4248152!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac4598a17b52d%3A0x77aff176b6a47a1c!2s12%2C%20Jalan%20Anggerik%2C%20Taman%20Anggerik%2C%2012300%20Butterworth%2C%20Pulau%20Pinang!5e0!3m2!1szh-TW!2smy!4v1726637397698!5m2!1szh-TW!2smy"
                                    width="500" height="400" style="border:0;width:100%;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
        <div class="container">
            <div class="my-3">
                <div class="h4">Chin Chun Teng</div>
                <div class="footer-nav">
                    <nav role="navigation">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="https://wa.me/601156911236"
                                    title="Whatsapp" target="_blank"><i class="fab fa-whatsapp"></i><span
                                        class="menu-title sr-only">Twitter</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://mail.google.com/mail/?view=cm&fs=1&to=chunteng9674@gmail.com"
                                    title="Mail" target="_blank"><i class="fas fa-envelope"></i><span
                                        class="menu-title sr-only">Mail</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/ctchin_1114/"
                                    title="Instagram" target="_blank"><i class="fab fa-instagram"></i><span
                                        class="menu-title sr-only">Instagram</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://github.com/angelwing20/resume.git"
                                    title="Github" target="_blank"><i class="fab fa-github"></i><span
                                        class="menu-title sr-only">Github</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="text-small">
                <div class="mb-1">&copy; Material Resume. All rights reserved.</div>
                <div>Design - <a href="https://templateflip.com/" target="_blank">Chin Chun Teng</a></div>
            </div>
        </div>
    </footer>
    <script src="scripts/mdb.min.js?ver=1.2.1"></script>
    <script src="scripts/aos.js?ver=1.2.1"></script>
    <script src="scripts/main.js?ver=1.2.1"></script>
</body>

</html>