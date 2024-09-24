<html><head>
    <meta charset="utf-8">
    <title>Loasis Beauty - Paiement Accepté</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Confirmation de paiement pour les services de massage et de beauté de Loasis Beauty.">
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
        .confirmation-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
            margin-top: 50px;
            text-align: center;
        }
        .confirmation-icon {
            font-size: 5rem;
            color: #28a745;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #FF69B4;
            border-color: #FF69B4;
        }
        .btn-primary:hover {
            background-color: #ff4da6;
            border-color: #ff4da6;
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
                    <a href="https://loasisbeauty.com/contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="confirmation-container">
                    <i class="fas fa-check-circle confirmation-icon"></i>
                    <h2 class="mb-4">Paiement Accepté</h2>
                    <p class="lead">Merci pour votre paiement. Votre transaction a été traitée avec succès.</p>
    
                    <div class="mt-5">
                        <a href="./index.html" class="btn btn-primary">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Cette partie pourrait être remplacée par des données dynamiques provenant du serveur
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const amount = urlParams.get('amount') || '50.00';
            document.getElementById('amount-paid').textContent = amount + ' €';
            
            const now = new Date();
            document.getElementById('transaction-date').textContent = now.toLocaleDateString('fr-FR', { year: 'numeric', month: 'long', day: 'numeric' });
            
            const transactionId = 'TRX' + Math.random().toString(36).substr(2, 9).toUpperCase();
            document.getElementById('transaction-id').textContent = transactionId;
        });
    </script>
</body></html>