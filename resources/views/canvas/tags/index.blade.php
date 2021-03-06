@extends('canvas::canvas.index')

@section('actions')
    <a href="{{ route('canvas.tag.create') }}" class="btn btn-sm btn-outline-primary my-auto mx-3">
        New tag
    </a>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mb-4 mt-2">Tags</h1>

                @if(count($data['tags']))
                    @foreach($data['tags'] as $tag)
                        <div class="d-flex border-top py-3 align-items-center">
                            <div class="mr-auto">
                                <p class="mb-0 py-1">
                                    <a href="{{ route('canvas.tag.edit', $tag->id) }}"
                                       class="font-weight-bold lead">{{ $tag->name }}</a>
                                </p>
                            </div>
                            <div class="ml-auto">
                                <span class="text-muted mr-3">{{ $tag->posts_count }} Post(s)</span>
                                Created {{ \Carbon\Carbon::parse($tag->created_at)->diffForHumans() }}
                            </div>
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-center">
                        {{ $data['tags']->links() }}
                    </div>
                @else
                    <p class="mt-4">No tags were found, start by <a href="{{ route('canvas.tag.create') }}">adding a new
                            tag</a>.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
