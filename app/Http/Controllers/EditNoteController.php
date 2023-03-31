<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\EditNoteRequest;
use Illuminate\View\View;

class EditNoteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param EditNoteRequest $request
     *
     * @return View
     */
    public function __invoke(Note $note): View
    {
        return view('notes.edit', compact('note'));
    }
}
