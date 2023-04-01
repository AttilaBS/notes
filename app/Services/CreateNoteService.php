<?php

namespace App\Services;

use App\Models\Note;

class CreateNoteService
{
    /**
     * @param array $request
     *
     * @return void
     *
     * @throws BindingResolutionException
     */
    public function __invoke(array $request): void
    {
        Note::create(
            [
                'user_id' => auth()->id(),
                'title' => $request['title'],
                'content' => $request['content'],
            ]
        );
    }
}
