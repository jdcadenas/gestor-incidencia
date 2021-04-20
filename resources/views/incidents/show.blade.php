<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Reportar') }}
        </h2>
    </x-slot>

<div class="flex-col">
<div>
        @if (session()->has('notification'))
        <div id="alert" class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
            <span class="inline-block align-middle mr-8">
                {{ session('notification') }}
            </span>
            <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="document.getElementById('alert').remove();">
                <span>×</span>
            </button>
        </div>
        @endif
    <table class="min-w-full table-auto border-blue-800 border-4 p-8">
            <thead class="justify-between border-blue-400 border-2 p-4">
              <tr class="bg-gray-100 text-center">
                <th class="px-2 py-2">
                  <span class="text-gray-900">Código</span>
                </th>
                <th class="px-2 py-2">
                    <span class="text-gray-900">Proyecto</span>
                </th>
                <th class="px-2 py-2">
                  <span class="text-gray-900">Categoría</span>
                </th>
                <th class="px-2 py-2">
                    <span class="text-gray-900">Fecha de envío</span>
                </th>
              </tr>
            </thead>
            <tbody id="dashboard_by_me"  class="bg-gray-200 text-center">
                    <tr>
                        <td>{{ $incident->id}}</td>
                        <td>{{ $incident->project->name}}</td>
                        <td>{{ $incident->category_name}}</td>
                        <td>{{ $incident->created_at}}</td>

                    </tr>
            </tbody>
            <thead class="justify-between  border-blue-400 border-2 p-4">
                <tr class="bg-gray-100 ">
                    <th class="px-2 py-2">
                    <span class="text-gray-900">Asignado A</span>
                    </th>
                    <th class="px-2 py-2">
                    <span class="text-gray-900">Nivel</span>
                    </th>
                    <th class="px-2 py-2">
                    <span class="text-gray-900">Estado</span>
                    </th>
                    <th class="px-2 py-2">
                    <span class="text-gray-900">Severidad</span>
                    </th>
                </tr>
            </thead>
            <tbody id="dashboard_by_me"  class="bg-gray-200 text-center">
                <tr>
                    <td>{{ $incident->support_name}}</td>
                    <td>{{ $incident->level->name}}</td>
                    <td>{{ $incident->state}}</td>
                    <td> {{$incident->severity_full}}</td>
                </tr>
            </tbody>
    </table>
        </div>
        <div>
                <table class="min-w-full table-auto border-blue-800 border-4 p-8">
            <tbody id="dashboard_by_me"  class="bg-gray-200 text-center">
                    <tr> <th class="px-2 py-2 bg-gray-100  border-blue-400 border-2 p-4">
                        <span class="text-gray-900">Título</span>
                      </th>
                        <td>{{ $incident->title}}</td>
                    </tr>
                    <tr>

                        <th class="px-2 py-2 bg-gray-100  border-blue-400 border-2 p-4">
                            <span class="text-gray-900">Descripción</span>
                        </th>
                        <td>{{$incident->project->description}}</td>
                    </tr>
                    <tr>
                        <th class="px-2 py-2 bg-gray-100  border-blue-400 border-2 p-4">
                            <span class="text-gray-900">Adjuntos</span>
                          </th>
                        <td>{{-- $incident->category_name--}}</td>

                    </tr>

            </tbody>

    </table>

</div>
<div>
    @if ($incident->support_id == null && $incident->active  && $incident->active && Auth::user()->canTake($incident))

<a href="/incidencia/{{$incident->id}}/atender" class="inline-block px-4 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-gray-900 rounded shadow ripple hover:shadow-lg hover:bg-gray-600 focus:outline-none">
        atender Incidencia
    </a>
    @endif
              @if (Auth::user()->id == $incident->client_id)
                    @if ($incident->active)
                    <a href="/incidencia/{{$incident->id}}/resolver" class="inline-block px-4 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-500 rounded shadow ripple hover:shadow-lg hover:bg-blue-600 focus:outline-none">
                            Marcar como resuelto
                    </a>
                    <a href="/incidencia/{{$incident->id}}/editar" class="inline-block px-4 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none">
                        Editar Incidencia
                    </a>
                @else
                    <a href="/incidencia/{{$incident->id}}/abrir" class="inline-block px-4 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-500 rounded shadow ripple hover:shadow-lg hover:bg-blue-600 focus:outline-none">
                            Volver a abrir Incidencia
                    </a>
                @endif


                @endif
                     
                    @if (Auth::user()->id == $incident->support_id)
                    <a href="/incidencia/{{$incident->id}}/derivar" class="inline-block px-4 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-yellow-500 rounded shadow ripple hover:shadow-lg hover:bg-yellow-600 focus:outline-none">
                        Derivar al siguiente nivel
                    </a>
                    @endif

    </div>
</div>
</x-app-layout>
