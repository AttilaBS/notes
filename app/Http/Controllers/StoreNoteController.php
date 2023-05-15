<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Models\Note;
use App\Services\CreateNoteService;
use App\Services\UpdateNoteService;
use Illuminate\Http\RedirectResponse;

class StoreNoteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param StoreNoteRequest $request
     * @param ?Note $note
     *
     * @return RedirectResponse
     *
     */
    public function __invoke(
        StoreNoteRequest $request,
        ?Note $note
    ): RedirectResponse {
        $request = $request->validated();
        $flag = $note?->id ? 'editada' : 'criada';
        if (! $note?->id) {
            app()->make(CreateNoteService::class)($request);
        } else {
            app()->make(UpdateNoteService::class)($request, $note);
        }
        return redirect(route('notes.index'))
            ->with('message', "Nota {$flag} com sucesso");
    }
}
