<?php
/*
function login($name, $email, $password, $confirm_password) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "Všetky polia musia byť vyplnené!";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Zadajte platnú emailovú adresu!";
        } else {
            if ($password !== $confirm_password) {
                echo "Heslá sa nezhodujú!";
            } else {
                echo "Registrácia prebehla úspešne!";
            }
        }
    }
}
*/
