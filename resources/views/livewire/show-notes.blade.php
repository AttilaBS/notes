<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Notes
    </h2>
</x-slot>

<div class="px-6 pt-4 pb-2">
    <a href="{{ route('notes.create') }}" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
        Criar Nota
    </a>
</div>

<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden sm:rounded-lg px-4 py-8">
        @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="grid grid-flow-row xs:grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mobile-adjust">
        @foreach ($notes as $note)
            <div class="max-w-sm rounded overflow-hidden shadow-lg note-card">
                <div class="px-6 py-4 height-title">
                    <div class="font-bold text-xl mb-2">{{ $note->title }}</div>
                </div>
                <div class="px-6 py-4 height-content">
                    <div class="text-lg mb-2">{{ Str::words($note->content, 20, '...') }}</div>
                </div>
                <div class="px-6 pt-4 pb-8">
                    <a href="{{ route('notes.show', [$note->id]) }}" class="inline-flex items-center px-4 py-2 bg-cyan-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-cyan-900 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Exibir Nota
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
