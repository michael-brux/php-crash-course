<?php
$tasksAndMinutes = [
    ['task' => 'shopping', 'minutes' => 30],
    ['task' => 'gym', 'minutes' => 60],
    ['task' => 'nap', 'minutes' => 15],
];

foreach ($tasksAndMinutes as $item) {
    $task = $item['task'];
    $minutes = $item['minutes'];
    print "allow $minutes minutes today for task: $task\n";
}
