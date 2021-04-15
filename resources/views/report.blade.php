<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Reportar') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="md:flex md:justify-center mb-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class=" bg-gray-900  text-white text-center font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100">Categorías</h1>      
              
                @if ($errors->any())
              
                        @foreach ($errors->all() as $error)
                        <div class="flex items-center bg-blue text-red text-sm font-bold px-4 py-3" role="alert">
                                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                <p>{{ $error }}</p>
                        </div> 
                           
                        @endforeach
                   
              
            @endif
                <form class="mb-4" action="" method="post">
                        @csrf
                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                            <div class=" px-3 px-3 mb-6 md:mb-0">
                                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="category_id">Categoría</label>
                                    <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded"
                                    id="category_id" class="form-control" name="category_id">
                                        <option value="">General</option>
                                    @foreach ($categories  as $category )
                            <option value="{{$category->id}}">{{ $category->name}}</option>

                                        @endforeach
                                    </select>
                            </div>
                            <div class="md:md-flex px-3 px-3 mb-6 md:mb-0">
                                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="severity">Severidad</label>
                                <select  class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="severity" class="form-control" name="severity">
                                    <option value="M">Menor</option>
                                    <option value="N">Normal</option>
                                    <option value="A">Alta</option>
                                </select>
                            </div>

            <div class="md:md:flex px-3">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">Título</label>
                <input id="title" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="title" value="{{ old('title') }}">
            </div>
            <div class="md:md:flex px-3">
                <label  class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="description">Descripción</label>
                <textarea name="description" id="description" cols="30" rows="4"class="w-full bg-gray-200 px-4 py-3 text-black border rounded-lg focus:outline-none" rows="4">{{ old('description') }}</textarea>

            </div>


            <x-button class="ml-3">
                {{ __('Registrar incidencia') }}
            </x-button>
            </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
