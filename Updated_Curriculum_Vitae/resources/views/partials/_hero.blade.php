<section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
        style="background-image: url('images/laravel-logo.png')"></div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white">
            Kevin<span class="text-black">Wesselink</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            Kevin Wesselink | Curriculum Vitae
        </p>
        <p class="text-2xl text-gray-200 font-bold my-2">
            Benieuwd naar wie ik ben?
        </p>
        @auth
        <div>
            <a href="/choice"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Update CV</a>
        </div>
        @else
        <div>
            <a href="/about/user"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">
                Bekijk mijn personalia</a>
        </div>
        @endauth
    </div>
</section>
