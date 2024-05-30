{{-- <div>
    @if (Route::has('login'))
                            <nav class="mx-3 flex flex-1 justify-end bg-black">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="bg-dark text-white"
                                    >
                                        Log in
                                    </a>

                                    {{-- @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif --}}
{{-- @endauth
                            </nav>
                        @endif
</div> --}}

<div class="text-white bg-primary py-1.5 px-3 rounded-full hover:bg-primary hover:shadow-lg focus:outline-none">
    @if (Route::has('login'))
        <div>
            @auth
                @if (Auth::user()->role === 'admin')
                    <a href="{{ url('/dashboard') }}"><x-profil-user /></a>
                @else
                    <a href="{{ url('/user') }}"><x-profil-user /></a>
                @endif
            @else
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
        @endif
    </div>
    @endif
    </div>
