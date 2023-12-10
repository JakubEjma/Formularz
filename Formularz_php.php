<!DOCTYPE html>
<html lang="Pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$conn =  mysqli_connect('localhost', 'root', '', 'moja_baza');


$firstName = isset($_POST['firstName']) ? mysqli_real_escape_string($conn, $_POST['firstName']) : '';
$lastName = isset($_POST['lastName']) ? mysqli_real_escape_string($conn, $_POST['lastName']) : '';
$dob = isset($_POST['dob'])? mysqli_real_escape_string($conn, $_POST['dob']) : '';
$email = isset($_POST['email'])? mysqli_real_escape_string($conn, $_POST['email']) : '';
$phone = isset($_POST['phone'])? mysqli_real_escape_string($conn, $_POST['phone']) : '';
$voivodeship = isset($_POST['voivodeship'])? mysqli_real_escape_string($conn, $_POST['voivodeship']) : '';
$gender = isset($_POST['gender'])? mysqli_real_escape_string($conn, $_POST['gender']) : '';
$newsletter = isset($_POST['newsletter'])? mysqli_real_escape_string($conn, $_POST['newsletter']) : '';

var_dump($firstName, $lastName, $dob, $email, $phone, $voivodeship, $gender, $newsletter);

$sql = "INSERT INTO users ( id, first_name, last_name, dob, email, phone, voivodeship, gender, newsletter)
        VALUES (Null, '$firstName', '$lastName', '$dob', '$email', '$phone', '$voivodeship', '$gender', '$newsletter')";


$wynik = mysqli_query($conn, $sql);
if ($wynik) {
    echo "Rekord został dodany poprawnie";
} else {
    echo "Błąd: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

</body>
</html>