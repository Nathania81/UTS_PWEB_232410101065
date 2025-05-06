<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        tailwind.config = 
            theme: {
                extend: {
                    colors: {
                        planetary: '#334EAC',
                        venus: '#BAD6EB',
                        meteor: '#FF7EB9',
                        universe: '#70D1D1',
                        galaxy: '#08F5C1',
                        milkyway: '#FFFF9F',
                        sky: '#D0E3FF'
                    }
                    transitionProperty: {
                        'width': 'width',
                        'transform': 'transform'
                }
            }
        }
    </script>
</head>
<body class="bg-sky-100 min-h-screen flex">
    @include('components.navbar')
    
    <div class="flex-1 flex flex-col lg:ml-64">
        <main class="flex-grow container mx-auto px-4 py-8">
            @yield('content')
        </main>

        @include('components.footer')
    </div>
    
    @stack('scripts')
</body>
</html>
