<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header'); ?> 
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Report')); ?>

            </h2>
         <?php $__env->endSlot(); ?>

        <div class="py-4">
            <div class="md:flex md:justify-center mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h1 class=" bg-gray-900  text-white text-center font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100">Editar usuario</h1>
                    <?php if(session()->has('notification')): ?>
                    <div id="alert" class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
                        <span class="inline-block align-middle mr-8">
                            <?php echo e(session('notification')); ?>

                        </span>
                        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="document.getElementById('alert').remove();">
                            <span>×</span>
                        </button>
                    </div>
                    <?php endif; ?>
                    <?php if(count($errors)>0): ?>

                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                <?php echo e($error); ?>

                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <form class="mb-4" action="" method="post">
                        <?php echo csrf_field(); ?>

                        <div class="md:md:flex px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">Nombre</label>
                            <input id="name" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="name" value="<?php echo e(old('name',$project->name)); ?>">
                        </div>
                        <div class="md:md:flex px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="description">Descripción</label>
                            <input id="description" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="description" value="<?php echo e(old('description',$project->description)); ?>">
                        </div>
                        <div class="md:md:flex px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="start">Fecha de inicio</label>
                            <input id="start" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="date" name="start" value="<?php echo e(old('start',$project->start)); ?>">
                        </div>

                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['class' => 'ml-3']]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'ml-3']); ?>
                        <?php echo e(__('Guardar proyecto')); ?>

                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                    </form>
                <!-- two Column Content -->
                <div class="flex flex-wrap -mx-3 overflow-hidden lg:-mx-2 xl:-mx-2">

                    <div class="my-3 px-3 w-1/2 overflow-hidden md:w-full lg:my-2 lg:px-2 lg:w-1/2 xl:my-2 xl:px-2 xl:w-1/2">
                    <!-- Column Content -->
                    <p>Categorías</p>
                    <form class="mb-4" action="/categorias" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="project_id" value="<?php echo e($project->id); ?>" />

                            <div class="">

                                <input id="name" class=" bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" placeholder="Ingrese Nombre" name="name" >
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['class' => '']]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => '']); ?>
                            <?php echo e(__('Añadir')); ?>

                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                        </form>
                    <table class="min-w-full table-auto">
                        <thead class="justify-between">
                        <tr class="bg-gray-800">
                            <th class="px-8 py-2">
                            <span class="text-gray-300">Nombre</span>
                            </th>

                            <th class="px-8 py-2">
                            <span class="text-gray-300">Opciones</span>
                            </th>

                        </tr>
                        </thead>
                        <tbody class="bg-gray-200">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="bg-white border-4 border-gray-200">
                            <td class="px-8 py-2  items-center"><?php echo e($category->name); ?></td>

                            <td class="px-8 py-2 items-center">
                                <button type="button" data-category="<?php echo e($category->id); ?>" class="inline-block px-4 py-2 text-xs font-medium text-center text-white uppercase transition bg-blue-700 rounded shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
                                    Editar
                                </button>
                            <a href="/categoria/<?php echo e($category->id); ?>/eliminar" class="inline-block px-4 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-yellow-500 rounded shadow ripple hover:shadow-lg hover:bg-yellow-600 focus:outline-none">
                                    Eliminar
                                    </a>
                            </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>
                    </table>
                    </div>

                    <div class="my-3 px-3 w-1/2 overflow-hidden md:w-full lg:my-2 lg:px-2 lg:w-1/2 xl:my-2 xl:px-2 xl:w-1/2">
                    <!-- Column Content -->
                    <p>Niveles</p>
                    <form class="mb-4" action="/niveles" method="post">
                        <?php echo csrf_field(); ?>
                    <input type="hidden" name="project_id" value="<?php echo e($project->id); ?>" />
                        <div class="">

                            <input id="name" class=" bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" placeholder="Ingrese nivel" name="name" >
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['class' => '']]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => '']); ?>
                        <?php echo e(__('Añadir')); ?>

                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
                    </form>
                    <table class="min-w-full table-auto">
                        <thead class="justify-between">
                        <tr class="bg-gray-800">
                            <th class="px-8 py-2">
                            <span class="text-gray-300">#</span>
                            </th>
                            <th class="px-8 py-2">
                            <span class="text-gray-300">Nivel</span>
                            </th>
                            <th class="px-8 py-2">
                            <span class="text-gray-300">Opciones</span>
                            </th>

                        </tr>
                        </thead>
                        <tbody class="bg-gray-200">
                            <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="bg-white border-4 border-gray-200">
                            <td class="px-8 py-2  items-center">
                            N<?php echo e($key+1); ?>

                            </td>
                            <td class="px-8 py-2 items-center"><?php echo e($level->name); ?></td>
                            <td class="px-8 py-2 items-center">
                            <button type="button" data-level="<?php echo e($level->id); ?>" class="inline-block px-4 py-2 text-xs font-medium text-center text-white uppercase transition bg-blue-700 rounded shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
                                Editar
                            </button>
                        <a href="/nivel/<?php echo e($level->id); ?>/eliminar" class="inline-block px-4 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-yellow-500 rounded shadow ripple hover:shadow-lg hover:bg-yellow-600 focus:outline-none">
                                    Eliminar
                                    </a>
                            </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                    </div>

                </div>
            </div>

        </div>


        
    
          <div id="modal-category" class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" >
            <div class="relative w-auto my-6 mx-auto max-w-sm">
              <!--content-->
              <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                  <h3 class="text-3xl font-semibold">
                   Editar Categoría
                  </h3>
                 
                </div>
                <!--body-->
            <form action="/categoria/editar" method="post">
                <div class="relative p-6 flex-auto">
                        <?php echo csrf_field(); ?>
                      <input type="hidden" name="category_id" id="category_id" value="" />
                    <div class="md:md:flex px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">Nombre de categoría</label>
                        <input id="category_name" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="name" value="">
                    </div>


                </div>
                <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                  <button  class="cerrarcategory text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" >
                    Cancelar
                  </button>
                  <button class="bg-blue-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit" onclick="toggleModal('modal-id')">
                    Guardar cambios
                  </button>
                </div>
            </form>
              </div>
            </div>
          </div>
          <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

    
   
          <div id="modal-level" class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" >
            <div class="relative w-auto my-6 mx-auto max-w-sm">
              <!--content-->
              <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                  <h3 class="text-3xl font-semibold">
                   Editar Nivel
                  </h3>
                  <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                    <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                      ×
                    </span>
                  </button>
                </div>
                <!--body-->
            <form action="/nivel/editar" method="post">
                <div class="relative p-6 flex-auto">
                        <?php echo csrf_field(); ?>
                      <input type="hidden" name="level_id" id="level_id" value="" />
                    <div class="md:md:flex px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">Nombre del nivel</label>
                        <input id="level_name" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="name" value="" />
                    </div>


                </div>
                <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                  <button class="cerrarlevel text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                    Cancelar
                  </button>
                  <button class="bg-blue-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit" >
                    Guardar cambios
                  </button>
                </div>
            </form>
              </div>
            </div>
          </div>
          <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

<?php $__env->startSection('scripts'); ?>

    <script src="/js/admin/projects/edit.js"></script>

<?php $__env->stopSection(); ?>
     <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php /**PATH /home/usuario/proyectos/desarrollosweb/laravel/gestion-incidencias/resources/views/admin/project/edit.blade.php ENDPATH**/ ?>