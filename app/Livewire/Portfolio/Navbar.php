<?php

declare(strict_types=1);

namespace App\Livewire\Portfolio;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Navbar extends Component
{
    public bool $mobileMenuOpen = false;

    public function toggleMobileMenu(): void
    {
        $this->mobileMenuOpen = ! $this->mobileMenuOpen;
    }

    public function closeMobileMenu(): void
    {
        $this->mobileMenuOpen = false;
    }

    public function render(): View
    {
        return view('livewire.portfolio.navbar');
    }
}
