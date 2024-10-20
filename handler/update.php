<?php
if (isset($_POST['izmeni']) && $_POST['izmeni'] === "Promeni") {
    $prijava = new Prijava(
        $_POST['id'],
        $_POST['predmet'],
        $_POST['katedra'],
        $_POST['sala'],
        $_POST['datum']
    );


    if (Prijava::update($prijava, $conn)) {
        echo "Prijava uspešno ažurirana!";
    } else {
        echo "Došlo je do greške prilikom ažuriranja prijave.";
    }
}
?>