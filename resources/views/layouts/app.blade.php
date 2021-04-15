<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-300">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-gray-700  shadow">
                    <ul class="flex">
                            <li class="mr-3">
                <div class=" inline-block mx-auto py-4 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                    <!-- para elegir proyecto -->
                </div>
            </li>
            <li class="mr-3">


                    <select name="project_id" id="select-project" class="inline-block border bg-white rounded md:flex outline-none text-gray-700" >
                        <option  value="">Seleccione Proyecto</option>

                        @foreach ( Auth::user()->list_of_projects as $project)
                          <option class="py-1" value="{{$project->id}}">{{$project->name}}</option>
                        @endforeach
                    </select>

                <!-- fin de elegir proyecto-->

            </li>
        </ul>

            </header>

            <!-- Page Content -->
            <main>
                    <div class="md:flex md:-mx-4">
                            <div class="w-full py-6 px-4 md:mx-4 md:w-1/3 bg-grey-200"> @include('includes.menu')</div>
                            <div class="w-full py-6 px-4 md:mx-4 flex"> {{ $slot }}</div>

                        </div>


                </div>


            </main>
        </div>
    </body>
    <script src="/js/app1.js"></script>
    @yield('scripts')
</html>
