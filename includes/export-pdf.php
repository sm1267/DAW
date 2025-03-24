<?php

use Dompdf\Dompdf;

require '../vendor/autoload.php';
require_once '../classes/dashboard.classes.php';

$dashboard = new Dashboard();
$conn = $dashboard->getConnection(); 
$stmt = $conn->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


$html = '
    <h2 align="center">Membri</h2>
    <table border="1" width="100%" cellspacing="0" cellpadding="2">
        <tr>
            <th>ID</th>
            <th>Nume</th>
            <th>Plan</th>
            <th>Inregistrat la</th>
            <th>Rol</th>
        </tr>
';

foreach ($users as $user) {
    $html .= '
        <tr>
            <td>' . htmlspecialchars($user['id']) . '</td>
            <td>' . htmlspecialchars($user['user']) . '</td>
            <td>' . htmlspecialchars($user['plan']) . '</td>
            <td>' . htmlspecialchars($user['reg_date']) . '</td>
            <td>' . htmlspecialchars($user['role']) . '</td>
        </tr>
    ';
}

$html .= '</table>';

// Instantiate Dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>
