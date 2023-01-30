<x-layout>

    <div class="bg-white p-4">
        <form action="{{ route('todo-lists.tasks.store', [$todoList]) }}" method="POST">
            @method('POST')
            @csrf

            <div class="rounded-md border border-gray-300 px-3 py-2 shadow-sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600">
                <label for="name" class="block text-xs font-medium text-gray-900">Name</label>
                <input type="text" name="name" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Ma super tache">
            </div>

            <input type="submit" class="mt-8 inline-flex items-center rounded-full border border-gray-300 bg-white px-2.5 py-0.5 text-sm font-medium leading-5 text-gray-700 shadow-sm hover:bg-gray-50" value="Submit"></input>
        </form>
    </div>

    </div>


</x-layout>
