<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="container mx-auto">
        <h4>Lista de tareas</h4>
        <ul class="max-w-md space-y-1 text-body list-disc list-inside">
            @forelse ($tareas as $tarea)
                <li>{{ $tarea['title'] }} - {{ $tarea['content'] }}</li>
            @empty
                <p>No hay tareas disponibles.</p>
            @endforelse
        </ul>
    </div>

</body>
</html>
