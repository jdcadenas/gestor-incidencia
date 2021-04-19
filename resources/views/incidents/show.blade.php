<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Reportar') }}
        </h2>
    </x-slot>

<div class="w-full">

    <table class="min-w-full table-auto">
            <thead class="justify-between">
              <tr class="bg-gray-800 text-center">
                <th class="px-2 py-2">
                  <span class="text-gray-300">Código</span>
                </th>
                <th class="px-2 py-2">
                    <span class="text-gray-300">Proyecto</span>
                </th>
                <th class="px-2 py-2">
                  <span class="text-gray-300">Categoría</span>
                </th>
                <th class="px-2 py-2">
                    <span class="text-gray-300">Fecha de envío</span>
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
            <thead class="justify-between">
                <tr class="bg-gray-800 ">
                    <th class="px-2 py-2">
                    <span class="text-gray-300">Asignado A</span>
                    </th>
                    <th class="px-2 py-2">
                    <span class="text-gray-300">Visibilidad</span>
                    </th>
                    <th class="px-2 py-2">
                    <span class="text-gray-300">Estado</span>
                    </th>
                    <th class="px-2 py-2">
                    <span class="text-gray-300">Severidad</span>
                    </th>
                </tr>
            </thead>
            <tbody id="dashboard_by_me"  class="bg-gray-200 text-center">
                <tr>
                    <td>{{ $incident->support_name}}</td>
                    <td>Público</td>
                    <td>{{ $incident->state}}</td>
                    <td> {{$incident->severity_full}}</td>
                </tr>
            </tbody>

            <tbody id="dashboard_by_me"  class="bg-gray-200 text-center">
                    <tr> <th class="px-2 py-2 bg-gray-800">
                        <span class="text-gray-300">Título</span>
                      </th>
                        <td>{{ $incident->title}}</td>
                    </tr>
                    <tr>

                        <th class="px-2 py-2 bg-gray-800">
                            <span class="text-gray-300">Descripción</span>
                        </th>
                        <td>{{--$incident->project->name--}}</td>
                    </tr>
                    <tr>
                        <th class="px-2 py-2 bg-gray-800">
                            <span class="text-gray-300">Adjuntos</span>
                          </th>
                        <td>{{-- $incident->category_name--}}</td>

                    </tr>
                    <tr>
<td>
                            <a href="" class="inline-block px-4 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-yellow-500 rounded shadow ripple hover:shadow-lg hover:bg-yellow-600 focus:outline-none">
                                atender Incidencia
                              </a>
</td>
                    </tr>
            </tbody>

    </table>
</div>
</x-app-layout>
