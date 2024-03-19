@extends('layout.layout')

@section('route')
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24  antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-primary lg:mb-6 lg:text-4xl ">
                        {{ $blog->title }}
                    </h1>
                    <div>
                        <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">
                            {{ $blog->author }}
                        </a>
                    </div>
                </header>
                <p class="lead">{{ $blog->content }}</p>
            </article>
        </div>
    </main>
@endsection
