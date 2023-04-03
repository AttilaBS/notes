<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Nota n.º : {{ $note->id }}
    </h2>
</x-slot>
<div>
    <div class="max-w-10xl mx-auto xs:px-6 lg:px-8">
        <div class="mt-100 overflow-hidden sm:rounded-lg px-4 py-8">
        @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="grid grid-flow-row xs:grid-cols-1 note-show">
        <div class="rounded overflow-hidden shadow-lg note-card">
            <div class="px-6 py-4 height-title">
                <div class="font-bold text-xl mb-2">{{ $note->title }}</div>
            </div>
            <div class="px-6 py-4 height-content">
                <div class="text-lg mb-2">{{ $note->content }}</div>
            </div>
            <div class="px-6 pt-4 pb-8 edit-buttons">
                <a href="{{ route('notes.index') }}" class="inline-flex items-center px-4 py-2 bg-orange-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    Voltar
                </a>
                <a href="{{ route('notes.edit', $note->id) }}" class="inline-flex items-center px-4 py-2 bg-cyan-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-cyan-900 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    Editar Nota
                </a>
                <form method="POST" action="{{ route('notes.delete', $note->id) }}">
                    @csrf
                    <button type='submit' class="inline-flex items-center px-4 py-2 bg-rose-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-rose-900 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Eliminar Nota
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
