<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{

public $class = 'flex items-center text-white text-sm font-bold px-4 py-3 rounded shadow-md';
public $tipo;

    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'info':
                $this->tipo = 'bg-blue-400 text-white';
                break;
            case 'warning':
                $this->tipo = 'bg-yellow-400 text-white';
                break;
            case 'error':
                $this->tipo = 'bg-red-400 text-white';
                break;
            default:
                $this->tipo = 'bg-gray-400 text-white';
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
