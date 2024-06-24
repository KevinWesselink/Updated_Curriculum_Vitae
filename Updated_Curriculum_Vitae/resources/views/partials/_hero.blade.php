<section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white">
            Kevin<span class="text-black">Wesselink</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            Kevin Wesselink | Curriculum Vitae
        </p>
        <p class="text-2xl text-gray-200 font-bold my-2">
            {{ __('_hero.meet_user') }}
        </p>
        @auth
        <div>
            <a href="/choice"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">
                {{ __('_hero.update_cv') }}
            </a>
        </div>
        @else
        <div>
            <a href="/about/user"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">
                {{ __('_hero.view_user_personalia') }}
            </a>
        </div>
        @endauth
    </div>
</section>
