<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditNoteRequest;
use Illuminate\Http\Request;
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
    public function __invoke(EditNoteRequest $request): View
    {
        return view('notes.edit');
    }
}
