<?php
$album = [
    [
        'name' => "it' my life",
        'img' => "src/img/bon-jovi.jpg",
        'band' => "Bon Jovi",
        'anno' => "2000",
    ],
    [
        'name' => "Hail to the king",
        'img' => "src/img/avenged-sevenfold.jpg",
        'band' => "Avenged Sevenfold",
        'anno' => "2013",
    ],
    [
        'name' => "10 seconds from Panic",
        'img' => "src/img/cult-to-follow.jpg",
        'band' => "Cult To Follow",
        'anno' => "2014",
    ],
    [
        'name' => "Psychosocial",
        'img' => "src/img/slipknot.jpg",
        'band' => "Slipknot",
        'anno' => "2008",
    ],
    [
        'name' => "Voices in my head",
        'img' => "src/img/falling-in-reverse.jpg",
        'band' => "Falling in Reverse",
        'anno' => "2023",
    ],
    [
        'name' => "Wrong side of heaven",
        'img' => "src/img/five-finger-death-punch.jpg",
        'band' => "Five Finger Death Punch",
        'anno' => "2013",
    ]
];

header('content-type: application/json');

echo json_encode($album);
