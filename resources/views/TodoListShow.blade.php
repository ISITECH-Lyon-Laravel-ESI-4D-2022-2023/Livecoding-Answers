<x-layout>
    <div class="">
        <div class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                <div class="ml-4 mt-2">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $todoList->name }}</h3>
                    <h4 class="text-sm text-gray-600">{{ $todoList->description }}</h4>
                </div>
                <div class="ml-4 mt-2 flex-shrink-0">
                    <a href="{{ route('todo-lists.tasks.create', [$todoList]) }}" class="relative inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create new task</a>
                </div>
                <div class="ml-4 mt-2 flex-shrink-0">
                    <form action="{{ route('todo-lists.destroy', [$todoList]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" class="relative inline-flex items-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" value="Delete"></input>
                    </form>
                </div>
            </div>

            <div class="">
                <div class="mt-6 flow-root">
                    <ul role="list" class="-my-5 divide-y divide-gray-200">

                        @foreach($todoList->tasks as $task)
                        <li class="py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                                    <button type="button" class="{{ $task->done ? 'bg-indigo-600' : 'bg-gray-200' }} relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" role="switch" aria-checked="false">
                                        <span class="sr-only">{{ $task->done ? 'OK' : 'KO' }}</span>
                                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                        <span aria-hidden="true" class="{{ $task->done ? 'translate-x-5' : 'translate-x-0' }} pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                    </button>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <p class="truncate text-sm font-medium text-gray-900">{{ $task->name }}</p>
                                </div>
                                <div>
                                    <form action="{{ route('todo-lists.tasks.update', [$todoList, $task]) }}" method="POST">
                                        @method('PATCH')
                                        @csrf
                                        <input type="submit" class="inline-flex items-center rounded-full border border-gray-300 bg-white px-2.5 py-0.5 text-sm font-medium leading-5 text-gray-700 shadow-sm hover:bg-gray-50" value="Toggle"></input>
                                    </form>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="mt-6">
                    <a href="#" class="flex w-full items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">View all</a>
                </div>
            </div>


        </div>


    </div>
</x-layout>
