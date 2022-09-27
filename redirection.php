<?PHP
session_start();
$essaieRestante = $_SESSION['essaie'];
include_once "modeles/DAO/utilisateurDAO.class.php";
/*
$email = htmlentities($_POST['email']);
$password = $_POST['pwd'];
var_dump($email);
var_dump($password);
$passwordHasher = sha1($password);
$passVerif = password_verify($password, $sha1());
var_dump($passwordHasher);
var_dump($passVerif);


$utilisateur = utilisateurDAO::chercherUtilisateur($email);

var_dump($utilisateur->getCourriel());
var_dump($utilisateur->getPassword());

if($utilisateur->getPassword() == $password){
    header("Location: boutique.php");
}*/
$_SESSION['role'] = 'admin';
header("Location: boutique.php");
/*if($essaieRestante > 0){
    try {
        $utilisateur = utilisateurDAO::chercherUtilisateur($email);
        if($utilisateur->getPassword() === $password){
            if ($utilisateur->getAdmin()===1) {
                $_SESSION['role'] = 'admin';
                header("Location: boutique.php");
            }else 
                $_SESSION['role'] = 'user';
                header("Location: boutique.php");
        }
        } catch (Exception $th) {
            header("Location: authentifier.php");
        }
}else{
    $_SESSION['essaie'] = $essaieRestante-1;
    header("Location: authentifier.php");
}*/

?>