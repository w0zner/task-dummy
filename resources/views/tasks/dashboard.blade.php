<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .color-red {
            color: red;
        }

        .color-green {
            color: green;
        }
    </style>
</head>
<body>

    <script>
        const usuario = @json($usuario);
        console.log('Datos del usuario:', usuario);
    </script>

    <div class="container mx-auto">
        <h4><b>Dashboard de usuario</b></h4>
        <p>{{ $usuario['name'] }} - {{ $usuario['email'] }}</p>
        <p>
            RSol: <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-blue-400 inset-ring inset-ring-blue-400/30">{{ $usuario['rol'] }}</span>
        </p>
        <br>
        <h4><b>Notificaciones</b></h4>
         <ul class="max-w-md space-y-1 text-body list-disc list-inside">
            @forelse ($usuario['notificaciones'] as $tarea)
                <li @class([
                    'color-red' => $loop->first,
                    'color-green' => $loop->last,
                ])>
                    {{ $loop->iteration }} - {{ $tarea['mensaje'] }}
                </li>
            @empty
                <p>No hay notificaciones disponibles.</p>
            @endforelse
        </ul>
        <ul>
            <h4>Categorias</h4>
            @foreach ($categorias as $categoria)
                <li>{{ $categoria }}</li>
            @endforeach
        </ul>

        {{-- @includeIf('tasks.index', ['tareas' => $usuario['tareas']]) --}}
         @includeWhen(true, 'tasks.index', ['tareas' => $usuario['tareas']])

        @php
            $ty='error'
        @endphp

        <x-alert :type="$ty">
            <x-slot name="title">Alerta de tareas</x-slot>
            Hola este es un mensaje de alerta desde el componente.
        </x-alert>

    </div>
</body>
</html>
