<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class StoreNoteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param StoreNoteRequest $request
     * @param ?int $id
     *
     * @return Model
     */
    public function __invoke(
        StoreNoteRequest $request,
        ?int $id
    ): Model {
        dd($request);
        $request = $request->validated();
        $note = app()->make(Note::class);
        return $note->updateOrCreate(
            [
                'title' => $request->title,
                'content' => $request->content,
            ]
        );
    }
}
