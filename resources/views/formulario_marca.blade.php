<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulario Marca') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
             <form action="{{route('marca.insertar')}}" method="post">
    @csrf
        <h1>Registrar Nueva Marca</h1>
        <label for="">Nombre De La Marca</label>
        <input type="text" name="nombre_marca"><br>
       
        <input type="submit" value="Guardar">
    </form>   
               
            </div>
        </div>
    </div>
</x-app-layout>

    
</body>
</html>