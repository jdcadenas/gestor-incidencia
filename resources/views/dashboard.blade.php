<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight ">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- component -->
<div class="mb-2 border-solid border-grey-light rounded border shadow-sm">
    <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
      <h3>Incidencias asignadas a mi</h3>
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
                    <span class="text-gray-300">Resumen</span>
                  </th>

                </tr>
              </thead>
              <tbody id="dashboard_my_incident"  class="bg-gray-200">


              </tbody>
            </table>
          </div>
    </div>
  </div>

<!--- dos -->
<div class="mb-2 border-solid border-grey-light rounded border shadow-sm">
    <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
      <h3>Incidencias sin asignar</h3>
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
                    <span class="text-gray-300">Resumen</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Opción</span>
                  </th>
                </tr>
              </thead>
              <tbody id="dashboard_no_responsible"  class="bg-gray-200">


              </tbody>
            </table>
          </div>
    </div>
  </div>
<!-- tres-->
<div class="mb-2 border-solid border-grey-light rounded border shadow-sm">
    <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
      <h3>Incidencias asignadas a otros</h3>
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
                    <span class="text-gray-300">Resumen</span>
                  </th>
                  <th class="px-2 py-2">
                    <span class="text-gray-300">Responsable</span>
                  </th>
                </tr>
              </thead>
              <tbody id="dashboard_to_others"  class="bg-gray-200">


              </tbody>
            </table>
          </div>
    </div>
  </div>


            </div>
        </div>
    </div>
</x-app-layout>
