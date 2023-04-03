<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteNoteRequest;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;

class DeleteNoteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param DeleteNoteRequest $request
     * @param Note $note
     *
     * @return RedirectResponse
     */
    public function __invoke(
        DeleteNoteRequest $request,
        Note $note
    ): RedirectResponse {
        Note::destroy($note->id);

        return redirect(
                route('notes.index')
            )->with('message', 'Nota deletada com sucesso'
        );
    }
}
