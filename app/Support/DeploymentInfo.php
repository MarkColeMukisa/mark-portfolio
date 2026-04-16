<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Process;

class DeploymentInfo
{
    public static function lastUpdated(): string
    {
        return Cache::remember('deployment_last_updated', now()->addHour(), function () {
            // 1. Try to read from a build-generated version file
            if (file_exists(base_path('version.json'))) {
                $versionData = json_decode(file_get_contents(base_path('version.json')), true);
                if (isset($versionData['last_updated'])) {
                    return $versionData['last_updated'];
                }
            }

            // 2. Fallback to Git (for local development)
            $process = Process::run('git log -1 --format=%cd --date=format:"%B %d, %Y"');

            if ($process->successful()) {
                return trim($process->output());
            }

            // 3. Final fallback to config
            return config('portfolio.last_updated', 'February 28, 2026');
        });
    }
}
