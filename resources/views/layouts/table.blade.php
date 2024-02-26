<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white rounded p-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">Tabla de Usuarios</h2>
            <button type="submit"
                class="bg-blue-900 hover:bg-blue-700 text-white text-[13px] py-2 px-14 rounded"><a href="{{ route('create') }}"></a>Agregar</button>
        </div>
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Usuario</th>
                        <th class="px-4 py-2">Email</th>
                    </tr>
                </thead>
                @foreach ($datos as $dato)
                    <tbody>
                        <td class="border px-4 py-2">{{ $dato->name }}</td>
                        <td class="border px-4 py-2">{{ $dato->email }}</td>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</body>


</html>