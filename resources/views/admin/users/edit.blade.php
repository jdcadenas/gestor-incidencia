<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Report') }}
            </h2>
        </x-slot>

        <div class="py-4">
            <div class="md:flex md:justify-center mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h1 class=" bg-gray-900  text-white text-center font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100">Editar usuario</h1>
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
                    @if (count($errors)>0)

                            @foreach ($errors->all() as $error)
                            <div class="alert flex flex-row items-center bg-red-200 p-5 rounded border-b-2 border-red-300">
                                    <div class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                                        <span class="text-red-500">
                                            <svg fill="currentColor"
                                                 viewBox="0 0 20 20"
                                                 class="h-6 w-6">
                                                <path fill-rule="evenodd"
                                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="alert-content ml-4">
                                        <div class="alert-title font-semibold text-lg text-red-800">
                                            Error
                                        </div>
                                        <div class="alert-description text-sm text-red-600">
                                                {{ $error }}
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                    @endif
                    <form class="mb-4" action="" method="post">
                            @csrf

                <div class="md:md:flex px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="email">E-mail</label>
                    <input id="email" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="email" readonly name="email" value="{{  $user->email }}">
                </div>
                <div class="md:md:flex px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">Nombre</label>
                    <input id="name" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="name" value="{{ $user->name }}">
                </div>
                <div class="md:md:flex px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="password">contraseña<em>Solo si desea modificar</em></label>
                    <input id="password" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="password" value="">
                </div>



                <x-button class="ml-3">
                    {{ __('Guardar usuario') }}
                </x-button>
                </div>
            </form>
        </div>
        <form action="/proyecto-usuario" method="post">
            @csrf
        <input type="hidden" name="user_id" value="{{ $user->id }}" />
        <div class="flex flex-wrap -mx-1 overflow-hidden sm:-mx-1 md:-mx-1 lg:-mx-1 xl:-mx-1">

            <div class="my-1 px-1 w-1/3 overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 lg:my-1 lg:px-1 lg:w-1/3 xl:my-1 xl:px-1 xl:w-1/3">
              <select name="project_id" id="select-project" class="w-full border bg-white rounded px-3 py-2 outline-none text-gray-700" >
                  <option class="py-1" value="">Seleccione Proyecto</option>
                  @foreach ($projects as $project)
              <option class="py-1" value="{{$project->id}}">{{$project->name}}</option>
                  @endforeach
              </select>
            </div>

            <div class="my-1 px-1 w-1/3 overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 lg:my-1 lg:px-1 lg:w-1/3 xl:my-1 xl:px-1 xl:w-1/3">
                <select name="level_id" id="select-level" class="w-full border bg-white rounded px-3 py-2 outline-none text-gray-700" >
                
                </select>
            </div>

            <div class="my-1 px-1 w-1/3 overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 lg:my-1 lg:px-1 lg:w-1/3 xl:my-1 xl:px-1 xl:w-1/3">
                <x-button class="ml-3">
                    {{ __('Asignar Proyecto') }}
                </x-button>
            </div>

          </div>
        </form>
            <div>
                <p>Proyectos Asignados</p>
                    <table class="min-w-full table-auto">
                      <thead class="justify-between">
                        <tr class="bg-gray-800">
                          <th class="px-16 py-2">
                            <span class="text-gray-300">Proyecto</span>
                          </th>
                          <th class="px-16 py-2">
                            <span class="text-gray-300">Nivel</span>
                          </th>
                          <th class="px-16 py-2">
                            <span class="text-gray-300">Opciones</span>
                          </th>

                        </tr>
                      </thead>
                      <tbody class="bg-gray-200">
                          @foreach($project_user as $project_user)
                        <tr class="bg-white border-4 border-gray-200">
                          <td class="px-8 py-2  items-center">
                           {{$project_user->project->name}}
                          </td>
                          <td class="px-8 py-2 items-center">
                           
                                {{$project_user->level->name}}
                           
                          </td>
                          <td class="px-8 py-2 items-center">
                            <a href="/proyecto-usuario/{{ $project_user->id }}/eliminar" class="inline-block px-4 py-2 text-xs font-medium text-center text-white uppercase transition bg-blue-700 rounded shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
                             Eliminar
                            </a>
                           
                          </td>

                        </tr>
                        @endforeach


                      </tbody>
                    </table>
                </div>


        </div>
    @section('scripts')
    <script src="/js/admin/users/edit.js"></script>
    @endsection
    </x-app-layout>


