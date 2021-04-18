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

        <div class="py-2">
            <div class="md:flex md:justify-center mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h1 class=" bg-gray-900  text-white text-center font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100">Usuarios</h1>
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
                    <input id="name" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="name" value="<?php echo e(old('name')); ?>">
                </div>
                <div class="md:md:flex px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="description">Descripción</label>
                    <input id="description" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="description" value="<?php echo e(old('description')); ?>">
                </div>
                <div class="md:md:flex px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="start">Fecha de inicio</label>
                    <input id="start" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="date" name="start" value="<?php echo e(old('start',date('Y-m-d'))); ?>">
                </div>



                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['class' => 'ml-3']]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'ml-3']); ?>
                    <?php echo e(__('Registrar proyecto')); ?>

                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
            </form>
        </div>
            <div>
                    <table class="min-w-full table-auto">
                      <thead class="justify-between">
                        <tr class="bg-gray-800">
                          <th class="px-16 py-2">
                            <span class="text-gray-300">Nombre</span>
                          </th>
                          <th class="px-16 py-2">
                            <span class="text-gray-300">Descripción</span>
                          </th>
                          <th class="px-16 py-2">
                            <span class="text-gray-300">Fecha de inicio</span>
                          </th>
                          <th class="px-16 py-2">
                            <span class="text-gray-300">Opciones</span>
                          </th>

                        </tr>
                      </thead>
                      <tbody class="bg-gray-200">
                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="bg-white border-4 border-gray-200">
                          <td class="px-8 py-2  items-center">
                           <?php echo e($project->name); ?>

                          </td>
                          <td class="px-8 py-2 items-center">
                            <span class="text-center ml-2 font-semibold"><?php echo e($project->description); ?></span>
                          </td>
                          <td class="px-8 py-2 items-center">
                            <span class="text-center ml-2 font-semibold"><?php echo e($project->start?:'No se ha indicado'); ?></span>
                          </td>
                          <td class="px-8 py-2 items-center">

                            <?php if($project->trashed()): ?>
                            <a href="/proyecto/<?php echo e($project->id); ?>/restaurar" class="inline-block px-4 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-yellow-200 rounded shadow ripple hover:shadow-lg hover:bg-yellow-300 focus:outline-none">
                                Restaurar
                              </a>
                            <?php else: ?>
                            <a href="/proyecto/<?php echo e($project->id); ?>" class="inline-block px-4 py-2 text-xs font-medium text-center text-white uppercase transition bg-blue-700 rounded shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
                                Editar
                              </a>
                            <a href="/proyecto/<?php echo e($project->id); ?>/eliminar" class="inline-block px-4 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-yellow-500 rounded shadow ripple hover:shadow-lg hover:bg-yellow-600 focus:outline-none">
                                    Eliminar
                                  </a>
                                  <?php endif; ?>
                          </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </tbody>
                    </table>
                  </div>

        </div>
        </div>
     <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /home/usuario/proyectos/desarrollosweb/laravel/gestion-incidencias/resources/views/admin/project/index.blade.php ENDPATH**/ ?>