@extends("AdminPage.Structure.main")

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3 mt-5">{{ $promotion->name }}</h1>
                <a href="/dashboard/promotions" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all promotions</a>
                <a href="/dashboard/promotions/{{ $promotion->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="/dashboard/promotions/{{ $promotion->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                <form action="/dashboard/promotions/{{ $promotion->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                </form>

                @if ($promotion->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $promotion->image) }}" class="img-fluid">
                    </div>
                @else
                    {{-- <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid"> --}}
                @endif
                
                <article class="my-3" fs-5>
                    {!! $promotion->terms !!} 
                </article>
            </div>
        </div>
    </div>
@endsection