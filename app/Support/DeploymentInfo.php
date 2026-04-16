<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Support\Facades\Process;
use Throwable;

class DeploymentInfo
{
    public static function lastUpdated(): string
    {
        // 1. Try to read from a build-generated version file (best for Cloud/CI)
        if (file_exists(base_path('version.json'))) {
            $versionData = json_decode(file_get_contents(base_path('version.json')), true);
            if (isset($versionData['last_updated'])) {
                return $versionData['last_updated'];
            }
        }

        // 2. Fallback to Git (great for local development)
        try {
            $process = Process::run('git log -1 --format=%cd --date=format:"%B %d, %Y"');
            $output = trim($process->output());

            if ($process->successful() && $output !== '') {
                return $output;
            }
        } catch (Throwable) {
            // Git not available
        }

        // 3. Final fallback to config date
        return config('portfolio.last_updated', 'February 28, 2026');
    }
}
