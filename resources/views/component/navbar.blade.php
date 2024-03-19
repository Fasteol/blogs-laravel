<div class="navbar bg-base-300">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Homepage</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('blogs') }}">Blogs</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl ">Sporty Blogs</a>
    </div>
    <div class="navbar-end">
        <label class="input input-bordered flex items-center gap-2">
            <form action="{{ route('blogs.search') }}" method="GET" class="flex items-center gap-2">
                @csrf
                <input type="text" name="search" class="grow" placeholder="Search" />
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="w-4 h-4 opacity-70">
                        <path fill-rule="evenodd"
                            d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
        </label>
        <a href="{{ route('create_blogs') }}" class="btn ml-2 btn-primary">
            New Blog
        </a>
    </div>
</div>
