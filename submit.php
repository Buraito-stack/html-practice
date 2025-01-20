<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = htmlspecialchars($_POST['name']);
    $email    = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $hobbies  = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
    $gender   = htmlspecialchars($_POST['gender']);

    $hobbiesList = !empty($hobbies) ? implode(", ", $hobbies) : "Tidak ada hobi dipilih";

    echo "<h1>Data yang Diterima</h1>";
    echo "<p><strong>Nama:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Kata Sandi:</strong> (Tersembunyi)</p>";
    echo "<p><strong>Hobi:</strong> $hobbiesList</p>";
    echo "<p><strong>Jenis Kelamin:</strong> $gender</p>";
} else {
    echo "<h1>Formulir tidak valid</h1>";
    echo "<p>Harap gunakan formulir untuk mengakses halaman ini.</p>";
}
