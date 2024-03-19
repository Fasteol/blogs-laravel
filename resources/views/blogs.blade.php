@extends('layout.layout')

@php
    use Illuminate\Support\Str;
@endphp

@section('route')
    <h2 class="text-3xl text-center font-semibold my-10">
        All Blogs!</h2>
    <div class="flex flex-wrap justify-center items-center gap-10 my-5">
        @foreach ($blogs as $blog)
            <div class="card w-96 bg-neutral shadow-xl">
                <figure>
                    @if (Str::startsWith($blog->image, 'http'))
                        <img src="{{ $blog->image }}" alt="External Image" class="h-fit" />
                    @else
                        <img src="{{ asset('images/' . $blog->image) }}" alt="Local Image" class="h-36" />
                    @endif
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $blog->title }}</h2>
                    <p>{{ $blog->author }}</p>
                    <p>{{ Str::limit($blog->content, 40) }}</p>
                    <div class="card-actions justify-end">
                        <a href="{{ route('blogs_detail', $blog->id) }}" class="btn btn-primary mt-10">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
