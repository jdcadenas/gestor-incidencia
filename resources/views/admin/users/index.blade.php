<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Report') }}
            </h2>
        </x-slot>

        <div class="py-2">
            <div class="md:flex md:justify-center mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h1 class=" bg-gray-900  text-white text-center font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100">Usuarios</h1>
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
                    <input id="email" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="email" name="email" value="{{ old('email') }}">
                </div>
                <div class="md:md:flex px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">Nombre</label>
                    <input id="name" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="name" value="{{ old('name') }}">
                </div>
                <div class="md:md:flex px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="password">contraseña</label>
                    <input id="password" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="password" value="{{ old('password',Str::random(8)) }}">
                </div>



                <x-button class="ml-3">
                    {{ __('Registrar usuario') }}
                </x-button>
                </div>
            </form>
        </div>
            <div>
                    <table class="min-w-full table-auto">
                      <thead class="justify-between">
                        <tr class="bg-gray-800">
                          <th class="px-16 py-2">
                            <span class="text-gray-300">E-mail</span>
                          </th>
                          <th class="px-16 py-2">
                            <span class="text-gray-300">Nombre</span>
                          </th>
                          <th class="px-16 py-2">
                            <span class="text-gray-300">Opciones</span>
                          </th>

                        </tr>
                      </thead>
                      <tbody class="bg-gray-200">
                        @foreach($users as $user)
                        <tr class="bg-white border-4 border-gray-200">
                          <td class="px-8 py-2  items-center">
                           {{$user->email}}
                          </td>
                          <td class="px-8 py-2 items-center">
                            <span class="text-center ml-2 font-semibold">{{$user->name}}</span>
                          </td>
                          <td class="px-8 py-2 items-center">
                          <a href="/usuario/{{$user->id}}" class="inline-block px-4 py-2 text-xs font-medium text-center text-white uppercase transition bg-blue-700 rounded shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
                              Editar
                            </a>
                            <a href="/usuario/{{$user->id}}/eliminar" class="inline-block px-4 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-yellow-500 rounded shadow ripple hover:shadow-lg hover:bg-yellow-600 focus:outline-none">
                                    Eliminar
                                  </a>
                          </td>

                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>

        </div>
        </div>
    </x-app-layout>
