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
    <div class="max-w-md mx-auto bg-white rounded p-8">
        <h2 class="text-2xl font-bold mb-4">Formulario</h2>
        <form action="{{ route('create') }}" method="POST">
            @csrf
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block text-gray-700 font-bold mb-2">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Ingrese el nombre" class="form-input w-full  border focus:outline-none px-2 py-1 text-[14px] rounded-md">
                </div>
                <div>
                    <label for="surname" class="block text-gray-700 font-bold mb-2">Apellido</label>
                    <input type="text" id="surname" name="surname" placeholder="Ingrese el apellido" class="form-input w-full border focus:outline-none px-2 py-1 text-[14px] rounded-md">
                </div>
            </div>
            <div class="mb-4">
                <label for="telefono" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email"  name="email" placeholder="Ingrese el E-mail" class="form-input w-full border-gray-300 border focus:outline-none px-2 py-1 text-[14px] rounded-md">
            </div>
            <div class="mb-4">
                <label for="telefono" class="block text-gray-700 font-bold mb-2">Contraseña</label>
                <input type="password"  name="password" placeholder="Ingrese una Constraseña" class="form-input w-[50%] border-gray-300 border focus:outline-none px-2 py-1 text-[14px] rounded-md">
            </div>
          
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-900 hover:bg-blue-700 text-white text-[13px] py-2 px-14 rounded ">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>