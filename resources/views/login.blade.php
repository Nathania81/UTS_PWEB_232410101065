<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
<body class="bg-sky-100">
    <div class="max-w-md mx-auto bg-[#334EAC] p-8 rounded-lg shadow-md mt-10">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
        </svg>
        <h1 class="text-2xl font-bold text-center mb-6 text-white">Login Book Tracker</h1>
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-white mb-2">Username</label>
                <input type="text" id="username" name="username" required
                    class="w-full px-3 py-2 border border-venus rounded-lg focus:outline-none focus:ring-2 focus:ring-planetary">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-white mb-2">Password</label>
                <input type="password" id="password" name="password" 
                    class="w-full px-3 py-2 border border-venus rounded-lg focus:outline-none focus:ring-2 focus:ring-planetary" 
                    required>
            </div>
            <button type="submit" 
                    class="w-full bg-white text-galaxy py-2 px-4 rounded-lg hover:bg-[#4561c4] transition">
                Login
            </button>
        </form>
    </div>
</body>
</html>
