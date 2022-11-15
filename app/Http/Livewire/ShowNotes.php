<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ShowNotes extends Component
{
    use WithPagination;

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.show-notes', ['notes' => Note::all()]);
    }
}
