<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;

class Navigation extends Component
{
    public \Illuminate\Support\Collection $pages;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $files = collect(Storage::drive('views')->files('pages'));
        $this->pages = $files
            ->map(fn ($page) => (string) str($page)->between('pages/', '.blade'))
            ->mapWithKeys(fn ($page) => [(string) str($page)->title() => route($page)]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navigation');
    }
}
