{{-- error amigable --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    {{-- icon --}}
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/18383/18383424.png" sizes="32x32" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div
        class="relative flex items-center justify-center min-h-screen bg-gradient-to-br from-purple-200 via-purple-300 to-purple-400 overflow-hidden">
        <!-- Imagen de fondo izquierda -->
        <img src="https://predice.pe/wp-content/uploads/2024/02/Salud-Preventiva-Empresarial-y-Familiar-800x560-2.png"
            alt="Decoración izquierda"
            class="absolute left-0 top-0 h-full w-1/3 object-cover opacity-30 pointer-events-none select-none" />

        {{-- imagen del fondo centro --}}

        <img src="https://adars.org.do/wp-content/uploads/2023/10/doctor-estetoscopio-cerca-1.jpg"
            alt="Decoración centro"
            class="absolute left-1/3 top-0 h-full w-1/3 object-cover opacity-30 pointer-events-none select-none" />

        <!-- Imagen de fondo derecha -->
        <img src="https://drcarlosrebollon.com/wp-content/uploads/2023/04/Hablemos-de-la-medicina-preventiva-blog.png"
            alt="Decoración derecha"
            class="absolute right-0 bottom-0 h-full w-1/3 object-cover opacity-30 pointer-events-none select-none" />


        <div
            class="relative z-10 bg-white/70 shadow-lg rounded-lg p-8 max-w-md w-full text-center">
            <div class="flex justify-center mb-4">
                <svg class="w-16 h-16 text-purple-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"
                        fill="#ede9fe" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-purple-700 mb-2">Datos Ingresados Inválidos</h1>
            <p class="text-gray-600 mb-4">
                Por favor, revisa la información proporcionada.<br>
                Recuerda que una correcta gestión de tus datos es fundamental para tu bienestar y salud preventiva.
            </p>
            <a href="{{ url('/') }}"
                class="inline-block px-6 py-2 bg-purple-500 text-white rounded hover:bg-purple-600 transition">
                Volver al inicio
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>

</html>
