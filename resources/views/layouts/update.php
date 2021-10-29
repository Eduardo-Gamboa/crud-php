<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
<style>
    /* git */
    .padding{
        padding: 10%;
    }
</style>
    <title>Empleados</title>
</head>

<body>

    <div class="container mx-auto padding">
    <form action="{{ url("update/{$data->id}") }}" method="post">
        @csrf
        <div class="p-4 shadow-md rounded-md text-left" >
            <label class="block">
                <span class="text-gray-700">Nombres</span>
                <input class="form-input mt-1 block w-full" value="{{$data->nombre}}" name="nombre" required>
            </label>
            <label class="block">
                <span class="text-gray-700">Apellidos</span>
                <input class="form-input mt-1 block w-full" value="{{$data->apellidos}}" name="apellido" required>
            </label>
            <label class="block">
                <span class="text-gray-700">Correo</span>
                <input type="email" class="form-input mt-1 block w-full" value="{{$data->email}}"
                    name="correo" required>
            </label>


            <br>
            <div class="flex justify-end pt-2">
                <button
                    class="px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Actualizar</button>

            </div>
    </form>
    <hr>

 </div>

</body>

</html>
