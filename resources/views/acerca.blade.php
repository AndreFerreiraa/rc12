@extends('layouts.default')

@section('page-content')
<section class="py-20 min-h-screen flex items-center">
    <div class="max-w-screen-lg mx-auto">
        <h2 class="text-6xl text-center mb-6">Acerca</h2>
        <h3 class="text-4xl text-center text-gray-200 mb-6">Quem é André Ferreira?</h3>
        <p class="mb-3">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. A eligendi doloremque voluptatibus nostrum. Obcaecati, praesentium dolore reprehenderit hic illum deleniti architecto esse voluptas repellat tenetur amet quia voluptates explicabo fugit.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quisquam debitis assumenda, quia nesciunt dolore eligendi provident consequatur quasi dolor quibusdam nobis necessitatibus neque. Voluptate a autem iure! Quas, officiis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit facere culpa porro vitae laudantium rem soluta architecto neque illo? Alias quae eveniet totam fugiat illo, aliquid cumque dicta reprehenderit rerum.
        </p>
        <p class="mb-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nisi laudantium magni alias maiores at omnis animi delectus, debitis neque a! Consectetur autem hic nulla ducimus culpa expedita dolorum cum.
        </p>
        <div class="mb-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum consequuntur similique iure doloribus velit dolorem officiis debitis reiciendis nisi ullam. Assumenda, eaque necessitatibus! Exercitationem officia quam corrupti autem quod assumenda?
        </div>
        <div class="text-center">
            <a href="{{ route('home') }}" class="inline-block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Vá para a Página Inicial</a>
        </div>
    </div>
</section>