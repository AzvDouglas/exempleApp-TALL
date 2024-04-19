<div>
    <section class="flex flex-col items-center space-y-4 py-12">
        <h1 class="text-3xl font-bold underline">
            {{$ola}}
        </h1>

        <table class="shadow-md w-1/3">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
                <th class="py-3 px-6 text-left">&nbsp;</th>
                <th class="py-3 px-6 text-left">Tarefas</th>
                <th class="py-3 px-6 text-left">&nbsp;</th>
            </tr>
            </thead>
            <tbody class="text-gray-600">
            <tr class="border-b border-gray-200">
                <td class="px-4 py-2"><input type="checkbox"></td>
                <td class="px-4 py-2">Comprar pan dulce</td>
                <td class="px-4 py-2">
                    <button type="button" class="bg-indigo-400 px-2 py-1 text-white text-xs rounded">Editar</button>
                    <button type="button" class="bg-red-500 px-2 py-1 text-white text-xs rounded">Eliminar</button>
                </td>
            </tr>
            <tr class="border-b border-gray-200">
                <td class="px-4 py-2"><input type="checkbox"></td>
                <td class="px-4 py-2">Planchar pantalones</td>
                <td class="px-4 py-2">
                    <button type="button" class="bg-indigo-400 px-2 py-1 text-white text-xs rounded">Editar</button>
                    <button type="button" class="bg-red-500 px-2 py-1 text-white text-xs rounded">Eliminar</button>
                </td>
            </tr>
            </tbody>
        </table>

        <form class="p-4 w-1/4">
            <div class="mb-4">
                <label for="title" id="title">Tarefa:</label>
                <input class="p-2 bg-gray-200 w-full" type="text" name="title" id="title" placeholder="Tarefa...">
            </div>            <div class="mb-4">
                <label for="description" id="description">Descrição: </label>
                <textarea class="p-2 bg-gray-200 w-full" name="description" id="description" placeholder="Descrição da tarefa"></textarea>
            </div>
            <button type="submit" class="bg-indigo-700 text-white font-bold w-full rounded shadow p-2">Guardar</button>
        </form>
    </section>

</div>
