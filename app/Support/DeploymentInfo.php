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
            $process = Process::run('git log -1 --format=%cd --date=format:"%B %d, %Y"');

            if ($process->successful()) {
                return trim($process->output());
            }

            return config('portfolio.last_updated', 'February 28, 2026');
        });
    }
}
