<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-white leading-tight ">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-4">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <?php if(Auth::user()->is_support): ?>


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
              <tbody id="dashboard_my_incident"  class="bg-gray-200">
                    <?php $__currentLoopData = $my_incidents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $incident): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($incident->id); ?></td>
                    <td><?php echo e($incident->category->name); ?></td>
                    <td><?php echo e($incident->severity_full); ?></td>
                    <td><?php echo e($incident->id); ?></td>
                    <td><?php echo e($incident->created_at); ?></td>
                    <td><?php echo e($incident->title_short); ?></td>

                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                <?php $__currentLoopData = $pending_incidents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $incident): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($incident->id); ?></td>
                <td><?php echo e($incident->category->name); ?></td>
                   <td><?php echo e($incident->severity_full); ?></td>
                   <td><?php echo e($incident->id); ?></td>
                   <td><?php echo e($incident->created_at); ?></td>
                   <td><?php echo e($incident->title_short); ?></td>
                <td> <a class="rounded-full py-1 px-3 m-1 flex items-center text-xs round-full uppercase font-bold leading-snug text-green bg-green-400 hover:opacity-75" href="#pablo">
                    <i class="fas fa-cog text-lg leading-lg text-white opacity-75"></i>Atender
                  </a></td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </tbody>
            </table>
          </div>
    </div>
  </div>
  <?php endif; ?>

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
                <?php $__currentLoopData = $incidents_by_me; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $incident): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($incident->id); ?></td>
                <td><?php echo e($incident->category_name); ?></td>
                   <td><?php echo e($incident->severity_full); ?></td>
                   <td><?php echo e($incident->id); ?></td>
                   <td><?php echo e($incident->created_at); ?></td>
                   <td><?php echo e($incident->title_short); ?></td>
                <td> <?php echo e($incident->support_id ?: 'Sin asignar'); ?></td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </tbody>
            </table>
          </div>
    </div>
  </div>


            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /home/usuario/proyectos/desarrollosweb/laravel/gestion-incidencias/resources/views/dashboard.blade.php ENDPATH**/ ?>