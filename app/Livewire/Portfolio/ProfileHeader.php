<?php

declare(strict_types=1);

namespace App\Livewire\Portfolio;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProfileHeader extends Component
{
    /**
     * @var array<int, string>
     */
    public array $subtitles = [
        'Full Stack Laravel Developer',
        'Laravel and Livewire engineer',
        'mail me @ markcole683@gmail.com',
        'halla me @ +256702262806',
    ];

    public function render(): View
    {
        return view('livewire.portfolio.profile-header');
    }
}
