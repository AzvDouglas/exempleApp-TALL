<div class="flex-column justify-center w-3/4">
    <h4>form.blur</h4>
    <form wire:submit.blur="save" class="p-4">
        <div class="mb-4">
            <input wire:model.blur="title" class="p-2 bg-gray-200 w-full" type="text"  placeholder="Tarefa...">
            @error("title")<div class="mt-1 text-red-600 text-sm">{{$message}}</div>@enderror
        </div>
        <div class="mb-4">
            <textarea wire:model.blur="description" class="p-2 bg-gray-200 w-full" placeholder="Descrição da tarefa"></textarea>
            @error("description")<div class="mt-1 text-red-600 text-sm">{{$message}}</div>@enderror
        </div>
        <div class="flex justify-center">
            <button type="submit" class="bg-green-500 hover:bg-green-800 text-white font-bold rounded shadow p-2">Salvar</button>
        </div>
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
            <tr class="border-b border-gray-200 {{ $task->done ? 'bg-green-200 line-through' : '' }}">
                <td class="px-4 py-2"><input wire:click.live="done({{ $task->id }})" type="checkbox" {{ $task->done ? 'checked' : '' }}> </td>
                <td class="px-4 py-2">{{$task->title}}</td>
                <td class="px-4 py-2">{{$task->description}}</td>
                <td class="px-4 py-2">
                    <button wire:click.live="edit({{ $task->id }})" type="button" class="bg-indigo-400 hover:bg-indigo-800 px-2 py-1 text-white text-xs rounded">Editar</button>
                    <button wire:click.live="delete({{ $task->id }})" type="button" class="bg-red-500 hover:bg-red-800 px-2 py-1 text-white text-xs rounded">Eliminar</button>
                </td>
            </tr>
        @empty
            <h3>Sem Tarefas Registradas.</h3>
        @endforelse
        </tbody>
    </table>

    <h4>form.live</h4>
    <form wire:submit="save" class="p-4">
        <div class="mb-4">
            <input wire:model.live="title" class="p-2 bg-gray-200 w-full" type="text"  placeholder="Tarefa...">
            @error("title")<div class="mt-1 text-red-600 text-sm">{{$message}}</div>@enderror
        </div>
        <div class="mb-4">
            <textarea wire:model.live="description" class="p-2 bg-gray-200 w-full" placeholder="Descrição da tarefa"></textarea>
            @error("description")<div class="mt-1 text-red-600 text-sm">{{$message}}</div>@enderror
        </div>
        <div class="flex justify-center">
            <button type="submit" class="bg-green-500 hover:bg-green-800 text-white font-bold rounded shadow p-2">Salvar</button>
        </div>
    </form>
</div>
