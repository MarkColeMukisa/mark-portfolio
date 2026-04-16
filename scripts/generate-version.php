<?php

declare(strict_types=1);

$date = trim((string) @shell_exec('git log -1 --format=%cd --date=format:"%B %d, %Y"'));
$date = $date !== '' ? $date : date('F d, Y');

file_put_contents(
    __DIR__.'/../version.json',
    json_encode([
        'last_updated' => $date,
        'generated_at' => date('c'),
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES).PHP_EOL
);

echo "Version file generated with date: {$date}\n";
