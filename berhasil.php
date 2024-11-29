<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link href="../../asset/logoteater-removebg-preview (1).png" rel="icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .modal-content {
            text-align: center;
            padding: 30px;
            border-radius: 10px;
        }
        .modal-body {
            font-size: 1.2em;
            color: #6c757d;
        }
        .check-icon {
            font-size: 50px;
            color: #4CAF50;
            margin-bottom: 15px;
        }
        .btn-ok {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="check-icon">&#10004;</div>
                    <h5 class="modal-title mb-3">Berhasil!!</h5>
                    <p>Selamat Anda telah berhasil memesan kamar </p>
                     <a href="index.php" class="btn btn-ok">OK</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#bookingModal').modal('show');
        });
    </script>
</body>
</html>
