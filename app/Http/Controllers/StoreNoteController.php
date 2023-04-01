<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Models\Note;
use App\Services\CreateNoteService;
use App\Services\UpdateNoteService;

class StoreNoteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param StoreNoteRequest $request
     * @param ?Note $note
     *
     */
    public function __invoke(
        StoreNoteRequest $request,
        ?Note $note
    ) {
        $request = $request->only(['id', 'title', 'content']);
        if (! $note?->id) {
            app()->make(CreateNoteService::class)($request);
        } else {
            app()->make(UpdateNoteService::class)($request, $note);
        }
        return redirect(route('notes.index'));
    }
}
