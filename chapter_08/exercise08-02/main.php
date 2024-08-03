<?php
$movies = [
    'Back to the Future' => [
        'duration' => 1.16,
        'leadingActor' => 'Michael J. Fox',
    ],

    'The Fifth Element' => [
        'duration' => 126,
        'leadingActor' => 'Bruce Willis',
    ],

    'Alien' => [
        'duration' => 117,
        'leadingActor' => 'Sigourney Weaver',
    ],
];

foreach ($movies as $title => $movieDataItems) {
    print PHP_EOL . '------------' . PHP_EOL;
    print $title;
    print PHP_EOL . '------------' . PHP_EOL;
    foreach ($movieDataItems as $key => $value) {
        print "\t $key: $value \n";
    }
}
