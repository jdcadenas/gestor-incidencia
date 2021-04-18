

<nav class="w-64 flex-shrink-0">
        <div class="flex-auto bg-gray-900 h-full">
          <div class="flex flex-col overflow-y-auto">
              <?php if(auth()->check() ): ?>

              <ul class="relative m-0 p-0 list-none h-full">
                    <li class="text-white text-2xl p-4 w-full flex relative shadow-sm justify-start bg-gray-800 border-b-2 border-gray-700">
                      Incidencias
                    </li>
                    <li class="text-white p-4 w-full flex relative shadow-sm justify-start bg-gray-800 border-b-2 border-gray-700">
                      <div class="mr-4 flex-shrink-0 my-auto">
                        <svg class="fill-current w-5 h-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path></svg>
                      </div>
                      <div class="flex-auto my-1">
                        <span>Inicio</span>
                      </div>
                    </li>

<?php if(! auth()->user()->is_client): ?>
                    <div class="text-blue-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                      <div class="mr-4 my-auto">
                        <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"></path></svg>
                      </div>
                      <div class="flex-auto my-1">
                        <span>Ver incidencias</span>
                      </div>
                    </div>
<?php endif; ?>
                    <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                      <div class="mr-4 my-auto">
                        <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 13H5c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-4c0-1.1-.9-2-2-2zM7 19c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zM19 3H5c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM7 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"></path></svg>
                      </div>
                      <div class="flex-auto my-1">
                        <a href="/reportar" >Reportar Incidencias</a>
                      </div>
                    </div>
<?php if(auth()->user()->is_admin): ?>
                    <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                      <div class="mr-4 my-auto">
                        <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 3H3C2 3 1 4 1 5v14c0 1.1.9 2 2 2h18c1 0 2-1 2-2V5c0-1-1-2-2-2zM5 17l3.5-4.5 2.5 3.01L14.5 11l4.5 6H5z"></path></svg>            </div>
                      <div class="flex-auto my-1">

                        <div x-data="{show: false}" @click.away="show = false">
                            <button @click="show = ! show" class="block bg-gray-600 hover:bg-gray-700 text-gray-400  px-4  py-3 overflow-hidden border-2 border-gray-600 focus:outline-none ">


                                <div class="flex">
                                    <span>Administración</span>
                                    <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                                </div>
                            </button>
                            <div x-show="show" class="mt-2 py-2 w-48 bg-white rounded-lg shadow-xl">
                                <a href="/usuarios" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Usuarios</a>
                                <a href="/proyectos" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Projectos</a>
                                <a href="/config" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Configuración</a>
                            </div>
                        </div>
                      </div>
<?php endif; ?>




                  <?php else: ?>

                  <ul class="relative m-0 p-0 list-none h-full">
                        <li class="text-white text-2xl p-4 w-full flex relative shadow-sm justify-start bg-gray-800 border-b-2 border-gray-700">
                          Inicio
                        </li>
                        <li class="text-white p-4 w-full flex relative shadow-sm justify-start bg-gray-800 border-b-2 border-gray-700">
                          <div class="mr-4 flex-shrink-0 my-auto">
                            <svg class="fill-current w-5 h-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path></svg>
                          </div>
                          <div class="flex-auto my-1">
                            <span>Bienvenido</span>
                          </div>
                        </li>


                        <div class="text-blue-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                          <div class="mr-4 my-auto">
                            <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"></path></svg>
                          </div>
                          <div class="flex-auto my-1">
                            <span>Instrucciones</span>
                          </div>
                        </div>

                        <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                          <div class="mr-4 my-auto">
                            <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 13H5c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-4c0-1.1-.9-2-2-2zM7 19c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zM19 3H5c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM7 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"></path></svg>
                          </div>
                          <div class="flex-auto my-1">
                            <span>Créditos</span>
                          </div>
                        </div>


              <?php endif; ?>



            </ul>
          </div>
        </div>
      </nav>


<?php /**PATH /home/usuario/proyectos/desarrollosweb/laravel/gestion-incidencias/resources/views/includes/menu.blade.php ENDPATH**/ ?>