<?php

namespace App\Services;

use App\Models\Note;

class UpdateNoteService
{
    /**
     * @param array $request
     * @param Note $note
     *
     * @return void
     */
    public function __invoke(array $request, Note $note): void
    {
        $note->update(
            [
                'user_id' => auth()->id(),
                'title' => $request['title'],
                'content' => $request['content'],
            ]
        );
    }
}
