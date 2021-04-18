<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-300">
            <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Page Heading -->
            <header class="bg-gray-700  shadow">
                    <ul class="flex">
                            <li class="mr-3">
                <div class=" inline-block mx-auto py-4 px-4 sm:px-6 lg:px-8">
                    <?php echo e($header); ?>

                    <!-- para elegir proyecto -->
                </div>
            </li>
            <li class="mr-3">


                    <select name="project_id" id="list-of-project" class="inline-block border bg-white rounded md:flex outline-none text-gray-700" >
                        <option  value="">Seleccione Proyecto</option>

                        <?php $__currentLoopData = Auth::user()->list_of_projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option class="py-1" value="<?php echo e($project->id); ?>" <?php if($project->id==Auth::user()->select_project_id): ?>selected <?php endif; ?>><?php echo e($project->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                <!-- fin de elegir proyecto-->

            </li>
        </ul>

            </header>

            <!-- Page Content -->
            <main>
                    <div class="md:flex md:-mx-4">
                            <div class="w-full py-6 px-4 md:mx-4 md:w-1/3 bg-grey-200"> <?php echo $__env->make('includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                            <div class="w-full py-6 px-4 md:mx-4 flex"> <?php echo e($slot); ?></div>

                        </div>


                </div>


            </main>
        </div>
    </body>
    <script src="/js/app1.js"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</html>
<?php /**PATH /home/usuario/proyectos/desarrollosweb/laravel/gestion-incidencias/resources/views/layouts/app.blade.php ENDPATH**/ ?>