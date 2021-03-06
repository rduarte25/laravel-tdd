<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Repository') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <form action="{{route('repositories.update', $repository)}}" method="POST" class="max-w-md">
                    @csrf
                    @method('PUT')
                    <label class="block font-medium text-sm text-gray-700">URL *</label>
                    <input type="text" name="url" value="{{$repository->url}}" class="form-input w-full rounded-md shadom-sm" />
                    <label class="block font-medium text-sm text-gray-700">Descripción *</label>
                    <textarea type="text" name="description" class="form-input w-full rounded-md shadom-sm">
                        {{$repository->url}}
                    </textarea>
                    <hr class="my-4" />
                    <input type="submit" value="Guardar" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md"/>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
