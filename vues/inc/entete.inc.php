<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php echo isset($titre) ? $titre: 'Épicerie biologique'; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="icon" type="image/x-icon" href="images/bio-logo-3.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type ="text/javascript">
        function negatealert() {
            swal({
                title: 'Error!',
                text: 'La valeur ne peut être négative!',
                icon: "error",
                type: 'error'
            });
        }

        function alerteAchat() {
            swal({
                title: 'Transaction effectué avec succès!',
                text: 'Un courriel vous a été envoyé!',
                icon: "success",
                button: 'Merci'
            });
        }
    </script>
</head>
<body>