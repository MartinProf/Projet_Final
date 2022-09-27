<?PHP
session_start();
$_SESSION['role'] = 'guess';
header ("Location: decouvrir.php");
exit;
?>