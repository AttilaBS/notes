@extends('layouts.app')

<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400 modal-notes">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-50"></div>
        </div>​
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form action="{{ route('notes.store', $note->id) }}" method="post">
                @csrf
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                        <input type="text" id="note_id" name="note_id" class="font-bold bg-gray-200 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Nota número : {{ $note->id }}" disabled>
                    </div>
                    <div class="">
                        <div class="mb-4">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Título:</label>
                        <input type="text" id="title" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $note->title }}">
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-gray-700 text-sm font-bold mb-2">
                            Texto da Nota:
                        </label>
                        <textarea id="content" name="content" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            {{ $note->content }}
                        </textarea>
                    </div>
                </div>
                <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                        <button type="submit" class="inline-flex items-center px-4 py-2 my-3 bg-lime-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-lime-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Salvar
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md sm:mt-0 sm:w-auto">
                        <button onclick="location.href='{{ route('notes.index') }}'" type="button" class="inline-flex items-center px-4 py-2 my-3 bg-orange-600 border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-orange-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                            Voltar
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
