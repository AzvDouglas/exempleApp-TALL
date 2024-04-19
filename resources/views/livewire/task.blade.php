<div class="flex-column justify-center w-3/4">
    <form wire:submit.blur="save" class="p-4">
        <div class="mb-4">
            <input wire:model.blur="title" class="p-2 bg-gray-200 w-full" type="text"  placeholder="Tarefa...">
            @error("title")<div class="mt-1 text-red-600 text-sm">{{$message}}</div>@enderror
        </div>
        <div class="mb-4">
            <textarea wire:model.blur="description" class="p-2 bg-gray-200 w-full" placeholder="Descrição da tarefa"></textarea>
            @error("description")<div class="mt-1 text-red-600 text-sm">{{$message}}</div>@enderror
        </div>
        <button type="submit" class="bg-indigo-700 text-white font-bold w-full rounded shadow p-2">Guardar</button>
    </form>


    <table class="shadow-md ">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
            <th class="py-3 px-6 text-left">&nbsp;</th>
            <th class="py-3 px-6 text-left">Tarefas</th>
            <th class="py-3 px-6 text-left">Descrição</th>
            <th class="py-3 px-6 text-left">&nbsp;</th>
        </tr>
        </thead>
        <tbody class="text-gray-600">
        @forelse($tasks as $task)
            <tr class="border-b border-gray-200">
                <td class="px-4 py-2"><input type="checkbox"></td>
                <td class="px-4 py-2">{{$task->title}}</td>
                <td class="px-4 py-2">{{$task->description}}</td>
                <td class="px-4 py-2">
                    <button type="button" class="bg-indigo-400 px-2 py-1 text-white text-xs rounded">Editar</button>
                    <button type="button" class="bg-red-500 px-2 py-1 text-white text-xs rounded">Eliminar</button>
                </td>
            </tr>
        @empty
            <h3>Sem Tarefas Registradas.</h3>
        @endforelse
        </tbody>
    </table>

    <form wire:submit="save" class="p-4">
        <div class="mb-4">
            <input wire:model.live="title" class="p-2 bg-gray-200 w-full" type="text"  placeholder="Tarefa...">
            @error("title")<div class="mt-1 text-red-600 text-sm">{{$message}}</div>@enderror
        </div>
        <div class="mb-4">
            <textarea wire:model.live="description" class="p-2 bg-gray-200 w-full" placeholder="Descrição da tarefa"></textarea>
            @error("description")<div class="mt-1 text-red-600 text-sm">{{$message}}</div>@enderror
        </div>
        <button type="submit" class="bg-indigo-700 text-white font-bold w-full rounded shadow p-2">Guardar</button>
    </form>
</div>
