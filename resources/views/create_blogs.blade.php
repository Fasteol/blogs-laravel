@extends('layout.layout')

@section('route')
    <div class="hero">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-300">
                <form class="card-body" method="POST" action="{{ route('blogs.post') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Title</span>
                        </label>
                        <input type="text" name="title" placeholder="title" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Author</span>
                        </label>
                        <input type="text" name="author" placeholder="author" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Content</span>
                        </label>
                        <textarea class="textarea textarea-bordered" name="content" placeholder="content"></textarea>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Image</span>
                        </label>
                        <input type="file" name="image" class="file-input file-input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
