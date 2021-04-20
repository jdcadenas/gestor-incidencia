<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight ">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (Auth::user()->is_support)


                <!-- component -->
<div class="mb-2 border-solid border-grey-light rounded border shadow-sm">
    <div class="bg-green-200 px-2 py-3 border-solid border-grey-light border-b">
      <h3>Incidencias asignadas a mi</h3>
    </div>
    <div class="p-3">
        <div>
            <table class="min-w-full table-auto">
              <thead class="justify-between">
                <tr class="bg-green-600">
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Código</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Categoría</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Severidad</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Estado</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Fecha de creación</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Título</span>
                  </th>

                </tr>
              </thead>
              <tbody id="dashboard_my_incident"  class="bg-gray-200 text-center">
                    @foreach ($my_incidents as $incident )
                    <tr>
                    <td class="text-blue-500"><a href="/ver/{{ $incident->id}}">{{ $incident->id}}</a></td>
                    <td>{{ $incident->category->name}}</td>
                    <td>{{ $incident->severity_full}}</td>
                    <td>{{ $incident->state}}</td>
                    <td>{{ $incident->created_at}}</td>
                    <td>{{ $incident->title_short}}</td>

                    </tr>

                    @endforeach

                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<!--- dos -->
<div class="mb-2 border-solid border-grey-light rounded border shadow-sm">
    <div class="bg-green-200 px-2 py-3 border-solid border-grey-light border-b">
      <h3>Incidencias sin asignar</h3>
    </div>
    <div class="p-3">
        <div>
            <table class="min-w-full table-auto">
              <thead class="justify-between">
                <tr class="bg-green-800">
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Código</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Categoría</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Severidad</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Estado</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Fecha de creación</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Título</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Opción</span>
                  </th>
                </tr>
              </thead>
              <tbody id="dashboard_pending_incident"  class="bg-gray-200">
                @foreach ($pending_incidents as $incident )
                <tr>
                        <td class="text-blue-500" ><a href="/ver/{{ $incident->id}}">{{ $incident->id}}</a></td>
                <td>{{ $incident->category->name}}</td>
                   <td>{{ $incident->severity_full}}</td>
                   <td>{{ $incident->state}}</td>
                   <td>{{ $incident->created_at}}</td>
                   <td>{{ $incident->title_short}}</td>
                <td> <a class="rounded-full py-1 px-3 m-1 flex items-center text-xs round-full uppercase font-bold leading-snug text-green bg-green-400 hover:opacity-75" href="#pablo">
                    <i class="fas fa-cog text-lg leading-lg text-white opacity-75"></i>Atender
                  </a></td>
                </tr>

                @endforeach

              </tbody>
            </table>
          </div>
    </div>
  </div>
  @endif

  <!-- tres-->
<div class="mb-2 border-solid border-grey-light rounded border shadow-sm">
    <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
      <h3>Incidencias asignadas por mi</h3>
    </div>
    <div class="p-3">
        <div>
            <table class="min-w-full table-auto">
              <thead class="justify-between">
                <tr class="bg-gray-800">
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Código</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Categoría</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Severidad</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Estado</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Fecha de creación</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Título</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Responsable</span>
                  </th>
                </tr>
              </thead>
              <tbody id="dashboard_by_me"  class="bg-gray-200">
                @foreach ($incidents_by_me as $incident )
                <tr>
                <td class="text-blue-500"><a href="/ver/{{ $incident->id}}">{{ $incident->id}}</a></td>
                <td>{{ $incident->category_name}}</td>
                   <td>{{ $incident->severity_full}}</td>
                   <td>{{ $incident->state}}</td>
                   <td>{{ $incident->created_at}}</td>
                   <td>{{ $incident->title_short}}</td>
                <td> {{$incident->support_id ?: 'Sin asignar'}}</td>
                </tr>

                @endforeach

              </tbody>
            </table>
          </div>
    </div>
  </div>


            </div>
        </div>
    </div>
</x-app-layout>
