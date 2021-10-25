<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>André Ferreira</title>
</head>
<body class="bg-gray-700 text-white">
    <header class="fixed bg-gray-700 top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between p-4">
            <h1 class="text-xl font-black">André Ferreira</h1>
            <nav class="-mx-2">
                <a href="{{ route('home') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">Página Inicial</a>
                <a href="{{ route('acerca') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">Acerca</a>

        </div>
    </header>
    <main>
        @yield('page-content')
    </main>
    <footer>
        <div class="container mx-auto p4">
            <p>&copy André Ferreira | Aprenda a jogar</p>
        </div>
    </footer>
    
</body>
</html>