<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Illuminate\View\View;
use Livewire\Component;

class ShowNote extends Component
{
    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.show-note', ['note' => $this->note]);
    }

    public $note;

    /**
     * @param Note $id
     *
     * @return void
     */
    public function mount($id): void
    {
        $this->note = Note::find($id);
    }
}
