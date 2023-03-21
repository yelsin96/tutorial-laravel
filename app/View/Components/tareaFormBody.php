<?php

namespace App\View\Components;

use App\Models\tarea;
use Illuminate\View\Component;

class tareaFormBody extends Component
{
    private $tarea;
    /**
     * Create a new component instance.
     * @param \App\Models\tarea $tarea
     * @return void
     */
    public function __construct($tarea = null)
    {
        if (is_null($tarea)) {
            $tarea = tarea::make([
                'urgencia' => 0
            ]);
        }
        $this->tarea = $tarea;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'tarea' => $this->tarea,
            'urgencias' => tarea::URGENCIAS,
        ];
        return view('components.tarea-form-body', $params);
    }
}
