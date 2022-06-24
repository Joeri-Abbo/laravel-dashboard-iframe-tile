<?php

namespace JoeriAbbo\Iframe;

use Illuminate\View\View;
use Livewire\Component;

class IframeComponent extends Component
{
    public $position;


    public function mount(string $position)
    {
        $this->position = $position;
    }

    /**
     * @return View
     */
    public function render(): view
    {
        return view(IframeServiceProvider::PACKAGE_NAME . '::tile', [
            'refreshIntervalInSeconds' => config('dashboard.tiles.skeleton.refresh_interval_in_seconds') ?? 60,
        ]);
    }
}
