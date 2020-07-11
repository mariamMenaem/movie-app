<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>movies</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container px-4 mx-auto flex flex-col md:flex-row items-center justify-between px-3 py-3">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="#" class="font-bold"><i class="fa fa-film px-2" aria-hidden="true"></i><span>MovieApp</span></a>
                </li>
                <li class="md:ml-16">
                    <a href="#" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative">
                    <input type="text" class=" bg-gray-800 text-small rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search...">
                    <div class="absolute top-0">
                        <i class="fa fa-search mt-2 ml-2 text-gray-500" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="ml-4">
                    <a href="#">
                        <img src="/imgs/avatar-7.png" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')

</body>

</html>