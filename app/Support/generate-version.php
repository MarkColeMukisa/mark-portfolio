<?php

$date = trim(shell_exec('git log -1 --format=%cd --date=format:"%B %d, %Y"'));

if (empty($date)) {
    $date = date('F d, Y');
}

file_put_contents('version.json', json_encode([
    'last_updated' => $date,
    'generated_at' => date('c'),
]));

echo "Version file generated with date: {$date}\n";
