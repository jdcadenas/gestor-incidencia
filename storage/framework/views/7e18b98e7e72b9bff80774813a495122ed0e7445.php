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
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="email">E-mail</label>
                    <input id="email" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="email" readonly name="email" value="<?php echo e($user->email); ?>">
                </div>
                <div class="md:md:flex px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">Nombre</label>
                    <input id="name" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="name" value="<?php echo e($user->name); ?>">
                </div>
                <div class="md:md:flex px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="password">contraseña<em>Solo si desea modificar</em></label>
                    <input id="password" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="password" value="">
                </div>



                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['class' => 'ml-3']]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'ml-3']); ?>
                    <?php echo e(__('Guardar usuario')); ?>

                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
            </form>
        </div>
        <form action="/proyecto-usuario" method="post">
            <?php echo csrf_field(); ?>
        <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>" />
        <div class="flex flex-wrap -mx-1 overflow-hidden sm:-mx-1 md:-mx-1 lg:-mx-1 xl:-mx-1">

            <div class="my-1 px-1 w-1/3 overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 lg:my-1 lg:px-1 lg:w-1/3 xl:my-1 xl:px-1 xl:w-1/3">
              <select name="project_id" id="select-project" class="w-full border bg-white rounded px-3 py-2 outline-none text-gray-700" >
                  <option class="py-1" value="">Seleccione Proyecto</option>
                  <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option class="py-1" value="<?php echo e($project->id); ?>"><?php echo e($project->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>

            <div class="my-1 px-1 w-1/3 overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 lg:my-1 lg:px-1 lg:w-1/3 xl:my-1 xl:px-1 xl:w-1/3">
                <select name="level_id" id="select-level" class="w-full border bg-white rounded px-3 py-2 outline-none text-gray-700" >
                
                </select>
            </div>

            <div class="my-1 px-1 w-1/3 overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 lg:my-1 lg:px-1 lg:w-1/3 xl:my-1 xl:px-1 xl:w-1/3">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['class' => 'ml-3']]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'ml-3']); ?>
                    <?php echo e(__('Asignar Proyecto')); ?>

                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
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
                          <?php $__currentLoopData = $project_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="bg-white border-4 border-gray-200">
                          <td class="px-8 py-2  items-center">
                           <?php echo e($project_user->project->name); ?>

                          </td>
                          <td class="px-8 py-2 items-center">
                           
                                <?php echo e($project_user->level->name); ?>

                           
                          </td>
                          <td class="px-8 py-2 items-center">
                            <a href="/proyecto-usuario/<?php echo e($project_user->id); ?>/eliminar" class="inline-block px-4 py-2 text-xs font-medium text-center text-white uppercase transition bg-blue-700 rounded shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
                             Eliminar
                            </a>
                           
                          </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                      </tbody>
                    </table>
                </div>


        </div>
    <?php $__env->startSection('scripts'); ?>
    <script src="/js/admin/users/edit.js"></script>
    <?php $__env->stopSection(); ?>
     <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


<?php /**PATH /home/usuario/proyectos/desarrollosweb/laravel/gestion-incidencias/resources/views/admin/users/edit.blade.php ENDPATH**/ ?>