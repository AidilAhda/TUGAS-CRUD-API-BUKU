<?php
// ambil input nilai dari user
// http://localhost/PHP1/index.php?a=10&b=5 => kali 50,jumlah 15
$n1 = $_GET['a'];
$n2 = $_GET['b'];
$n3 = $n1 * $n2;
$n4 = $n1 + $n2;



// section2
$reply = [
    'a' => $n1,
    'b' => $n2,
    'hasil' => $n3
];
// output berupa json

header('Content-type: application/json');
echo json_encode($reply);
