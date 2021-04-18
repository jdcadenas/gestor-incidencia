<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Reportar') }}
        </h2>
    </x-slot>


    <table class="min-w-full table-auto">
            <thead class="justify-between">
              <tr class="bg-gray-800">
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
            <tbody id="dashboard_by_me"  class="bg-gray-200">
                    <tr>
                        <td>{{ $incident->id}}</td>
                        <td>{{ $incident->project->name}}</td>
                        <td>{{ $incident->category_name}}</td>
                        <td>{{ $incident->created_at}}</td>

                    </tr>
            </tbody>
            <thead class="justify-between">
                <tr class="bg-gray-800">
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
            <tbody id="dashboard_by_me"  class="bg-gray-200">
                <tr>
                    <td>{{ $incident->support_name}}</td>
                    <td>Público</td>
                    <td>{{ $incident->id}}</td>
                    <td> {{$incident->severity_full}}</td>
                </tr>
            </tbody>
          </table>
</x-app-layout>
