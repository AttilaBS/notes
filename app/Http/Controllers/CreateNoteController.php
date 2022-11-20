<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteRequest;
use Illuminate\View\View;

class CreateNoteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param CreateNoteRequest $request
     *
     * @return View
     */
    public function __invoke(CreateNoteRequest $request): View
    {
        return view('notes.create');
    }
}
