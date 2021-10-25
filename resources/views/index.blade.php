<head>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
@extends('layouts.default')

@section('page-content')
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">Aprenda a <span class="text-pink-500">jogar</span></h2>
            <h3 class="text-2xl sm:text-4xl italic">com André Ferreira</h3>
        </div>

        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Role para aprender mais</p>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introdução</h3>
            <h4 class="text-xl mb-3 text-gray-200">Pequena descrição</h4>
            <p class="mb-6">
                Este site vai fazer que te tornes um pro player nos teus jogos favoritos! 
                Mesmo que não jogues nada! 
            </p>
            <a href="{{ route('acerca') }} " class="bg-pink-500 text-center py-2 p-4 rounded hover:bg-purple-500 transition">Aprenda mais </a>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">O que pode aprender?</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full">
                        <h3 class="text-xl font-bold mb-3">Fortnite</h3>
                        <p class="text-gray-200 mb-3">
                        Fortnite é um jogo eletrônico multijogador online revelado originalmente em 2011, desenvolvido pela Epic Games e lançado como diferentes modos de jogo que compartilham a mesma jogabilidade e motor gráfico de jogo. Os modos de jogo incluem Fortnite: Save the World, um jogo cooperativo pay-to-play de sobrevivência para até quatro jogadores, que devem lutar contra carcaças (zumbis) e defender objetos com fortificações que eles podem construir, e Fortnite Battle Royale, um jogo free-to-play do gênero battle royale, onde até 100 jogadores lutam em espaços cada vez menores para serem a última pessoa ou time vencedor.
                        </p>
                        <a href="{{ url('https://www.youtube.com/channel/UCW3VjZFJCdBJyvaoaTgacyg') }}" class="bg-pink-500 text-center py-2 p-4 rounded hover:bg-purple-500 transition">Aprenda agora!</a>
                    </div>

                </div>
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full">
                        <h3 class="text-xl font-bold mb-3">Counter Strike</h3>
                        <p class="text-gray-200 mb-3">
                        Counter-Strike (também abreviado por CS) é um popular jogo eletrônico de tiro em primeira pessoa. Inicialmente criado como um "mod" de Half-Life para jogos online, foi desenvolvido por Minh Le e Jess Cliffe e depois adquirido pela Valve Corporation. Foi lançado em 1999, porém em 2000 ele começou a ser comercializado oficialmente, e posteriormente foram feitas versões para Xbox, Mac OS X e Linux. Atualmente o game é jogado na versão Counter-Strike: Global Offensive.
                        </p>
                        <a href="{{ url('https://www.youtube.com/c/zorlaKOKA') }}" class="bg-pink-500 text-center py-2 p-4 rounded hover:bg-purple-500 transition">Aprenda agora!</a>
                    </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4l font-bold mb-6">Onde aprender?</h3>
            <h3 class="text-xl mb-6">Aprenda a jogar no YouTube com os Mestres!</h3>
            <div class="-mx-2 sm:flex">
            <a href="{{ url('https://www.youtube.com/c/zorlaKOKA') }}" target="_blank" rel="noopener noreferrer" class="block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3 sm:mb-0">
            <span class="mr-2">🔫</span> Aprenda <strong>a jogar</strong> Counter Strike
            </a>
            <a href="{{ url('https://www.youtube.com/channel/UCW3VjZFJCdBJyvaoaTgacyg') }}" target="_blank" rel="noopener noreferrer" class="block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3 sm:mb-0">
            <span class="mr-2">🎮</span> Aprenda <strong>a jogar</strong> Fortnite
            </a>
            </div>
        </div>
    </section>


@endsection