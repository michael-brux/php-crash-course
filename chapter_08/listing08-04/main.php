<?php
$tasksAndMinutes = [
    ['shopping', 30],
    ['gym', 60],
    ['nap', 15]
];

foreach ($tasksAndMinutes as $item) {
    $task = $item[0];
    $minutes = $item[1];
    print "allow $minutes minutes today for task: $task\n";
}
