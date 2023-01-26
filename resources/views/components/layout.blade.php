<!doctype html>
<html lang="fr" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Todo App</title>
</head>
<body class="h-full">
<div class="min-h-full">
    <div class="bg-gray-800 pb-64">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="border-b border-gray-700">
                    <div class="flex h-16 items-center justify-between px-4 sm:px-0">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Tailwind css logo">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                    <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

                                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Autre</a>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                <div class="relative ml-3">
                                    <div class="flex items-center px-5 gap-3">
                                        <div class="text-right">
                                            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                                            <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full outline-none ring-2 ring-white ring-offset-2 ring-offset-gray-800" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <header class="py-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-white">Todo List App</h1>
            </div>
        </header>
    </div>

    <main class="-mt-64">
        <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">

            {{ $slot }}

        </div>
    </main>

    <footer>
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="border-t border-gray-200 py-8 text-center text-sm text-gray-500">Made with ❤️ at Isitech</div>
        </div>
    </footer>
</div>

</body>
</html>
