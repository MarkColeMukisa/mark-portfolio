<?php

use App\Support\DeploymentInfo;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

pest()->extend(TestCase::class);

test('it prefers the generated version file for the last updated date', function () {
    $versionFile = base_path('version.json');
    $originalContents = file_exists($versionFile) ? file_get_contents($versionFile) : null;

    Cache::forget('deployment_last_updated');

    try {
        file_put_contents(
            $versionFile,
            json_encode([
                'last_updated' => 'April 15, 2026',
                'generated_at' => '2026-04-15T12:00:00+00:00',
            ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES).PHP_EOL
        );

        expect(DeploymentInfo::lastUpdated())->toBe('April 15, 2026');
    } finally {
        Cache::forget('deployment_last_updated');

        if ($originalContents !== null) {
            file_put_contents($versionFile, $originalContents);
        } elseif (file_exists($versionFile)) {
            unlink($versionFile);
        }
    }
});
