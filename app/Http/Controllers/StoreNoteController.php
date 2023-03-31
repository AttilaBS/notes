<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\StoreNoteRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class StoreNoteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Note $note
     * @param StoreNoteRequest $request
     *
     * @return Model
     */
    public function __invoke(
        Note $note,
        StoreNoteRequest $request
    ): Model {
        $request = $request->validated();
        info($note);
        dd($request);
        // when edit view is complete:
        // Note::where('id', $request->id);
        if ($note->id) {

        }
        return $note->updateOrCreate(
            [
                'title' => $request->title,
                'content' => $request->content,
            ]
        );
    }
}
