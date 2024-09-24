<html>

<head>
    <meta charset="utf-8">
    <title>Loasis Beauty - Mobile Massage and Wellness</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Mobile Massage, Beauty Services, Wellness, Spa" name="keywords">
    <meta
        content="Loasis Beauty brings relaxation and rejuvenation directly to you. Experience professional massage and beauty services in the comfort of your own space."
        name="description">

    <!-- Favicon -->
    <link href="./img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="./lib/animate/animate.min.css" rel="stylesheet">
    <link href="./lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="./lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">

    <style>
        :root {
            --primary: #FF69B4;
            --secondary: #20B2AA;
            --accent: #FFD700;
        }

        .btn,
        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link.active,
        .footer-logo span,
        .contact-item i {
            color: var(--primary);
        }

        .btn:hover,
        .footer {
            background: var(--secondary);
        }

        .section-header h2::after {
            background: var(--accent);
        }

        .contact-form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .contact-form .form-control {
            border: none;
            border-bottom: 2px solid var(--secondary);
            border-radius: 0;
            padding: 15px 0;
            background-color: transparent;
            transition: all 0.3s;
        }

        .contact-form .form-control:focus {
            box-shadow: none;
            border-color: var(--primary);
        }

        .contact-form .btn {
            background-color: var(--accent);
            color: var(--secondary);
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            transition: all 0.3s;
        }

        .contact-form .btn:hover {
            background-color: var(--secondary);
            color: var(--accent);
        }

        .code-entry-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #codeForm {
            display: flex;
            flex-direction: column;
        }

        #codeInput {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        #submitCode {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        #submitCode:hover {
            background-color: var(--secondary);
        }

        #message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            display: none;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>

<body>
    <!-- Top Bar Start -->

    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="./" class="navbar-brand">L<span>oa</span>sis</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="index.html" class="nav-item nav-link">Home</a>


                    <a href="contact.html" class="nav-item nav-link active">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->



    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Code de reservation</h2>
                </div>
                <div class="col-12">
                    <a href="./">Home</a>
                    <a href="./contact">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="services-showcase py-5" style="background-color: #f8f9fa;">

            </div>
            <div class="section-header text-center" data-aos="fade-up" data-aos-duration="1000">

                <button
                    onclick="window.location.href = 'http:\/\/facebook.com/profile.php?eav=AfZDBrPTlNkyYQAycw_b7RS2R-V8SqkeSxeeKmSqCQaajzHeEWAVjchZVBlJ4p76KXE&refid=7&paipv=0'"
                    type="submit" id="submitCode">OBTENIR UN CODE </button></a>

                <h2>Par securité nous demandons un code de resevation pour authentifier les client </h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4 contact-item wow zoomIn" data-wow-delay="0.2s">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="contact-text">
                                <h2>Location</h2>
                                <p>Mobile service - We come to you!</p>
                            </div>
                        </div>
                        <div class="col-md-4 contact-item wow zoomIn" data-wow-delay="0.4s">
                            <i class="fa fa-phone-alt"></i>
                            <div class="contact-text">
                                <h2>Phone</h2>
                                <p>+1 579 881 9402</p>
                            </div>
                        </div>
                        <div class="col-md-4 contact-item wow zoomIn" data-wow-delay="0.6s">
                            <i class="far fa-envelope"></i>
                            <div class="contact-text">
                                <h2>Email</h2>
                                <p>loasisbeauty0@hotmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- New Code Entry Section Start -->
    <div class="code-entry-container">
        <h2>Entrez votre code</h2>
        <form id="codeForm">
            <input type="text" id="codeInput" placeholder="Entrez votre code ici" required>
            <button type="submit" id="submitCode">Valider</button>
        </form>
        <div id="message"></div>
    </div>
    <!-- New Code Entry Section End -->

    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
            <div class="container">
                <div class="footer-info">
                    <a href="./" class="footer-logo">L<span>oa</span>sis</a>
                    <h3>Mobile Massage & Beauty Services</h3>
                    <div class="footer-menu">
                        <p>+1 579 881 9402</p>
                        <p>loasisbeauty0@hotmail.com</p>
                    </div>
                    <div class="footer-social">
                        <a href="https://twitter.com/loasisbeauty"><i class="fab fa-twitter"></i></a>
                        <a href="https://facebook.com/loasisbeauty"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://youtube.com/loasisbeauty"><i class="fab fa-youtube"></i></a>
                        <a href="https://instagram.com/loasisbeauty"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com/company/loasisbeauty"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="./">Loasis Beauty</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By Loasis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="./lib/easing/easing.min.js"></script>
    <script src="./lib/wow/wow.min.js"></script>
    <script src="./lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./lib/isotope/isotope.pkgd.min.js"></script>
    <script src="./lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Contact Javascript File -->
    <script src="./mail/jqBootstrapValidation.min.js"></script>
    <script src="./mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="./js/main.js"></script>
    <script>
        AOS.init();

        const validCodes = ['LOASISPROMOS', 'QG23NN', 'HHS34H']; // List of valid codes

        document.getElementById('codeForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const codeInput = document.getElementById('codeInput');
            const message = document.getElementById('message');
            const enteredCode = codeInput.value.toUpperCase();
            //alert(enteredCode)
            if (validCodes.includes(enteredCode)) {
                message.textContent = 'Code valide ! Bienvenue.';
                message.className = 'success';
                window.location.href = './paycard.php'
            } else {
                message.textContent = 'Code invalide. Veuillez réessayer.';
                message.className = 'error';
            }

            message.style.display = 'block';
        });
    </script>
</body>

</html>