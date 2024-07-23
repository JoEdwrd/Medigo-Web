@extends("AdminPage.Structure.main")

@section('container')
    <div class="my-4">
        <h2>All Promotions</h2>
    </div>

    <hr>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-6" role="alert">{{ session('success') }}</div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger col-lg-6" role="alert">{{ session('error') }}</div>
    @endif
    
    <div class="table-responsive col-lg-10">
        {{-- <a href="/" class="btn btn-success mb-3">Add New Promotion</a> --}}
        <div class="d-flex justify-content-between">
            <a href="/dashboard/promotions/create" id="addbtn" class="btn mb-4" style="max-width: 250px">Add New Promotion</a>
            <form action="{{ url('/dashboard/promotions') }}" method="GET" class="d-flex col-4 mt-2" style="height: 40px">
                <input type="text" name="search" class="form-control" placeholder="Search promotion name..." value="{{ request('search') }}" >
                {{-- <button type="submit" class="btn btn-primary ml-2 col-2" style="display: none">Search</button> --}}
                <button class="btn" style="background-color: var(--main2-color)" type="submit">
                    <i style="color: var(--main1-color)" class="bi bi-search"></i>
                </button>
            </form>
        </div>
        <table class="table table-md">
            <thead>
                <tr>
                    <th scope="col" class="col-1 " style="background: var(--main1-color);">Promotion ID</th>
                    <th scope="col" class="col-3 " style="background: var(--main1-color);">Name</th>
                    <th scope="col" class="col-1 " style="background: var(--main1-color);">Code</th>
                    <th scope="col" class="col-1 " style="background: var(--main1-color);">Amount</th>
                    <th scope="col" class="col-1 " style="background: var(--main1-color);">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promotions as $promotion)
                    <tr>
                        <td>{{ $promotion->id }}</td>
                        <td>{{ $promotion->name }}</td>
                        <td>{{ $promotion->code }}</td>
                        <td>{{ $promotion->discount }}</td>
                        <td>
                            <a href="/dashboard/promotions/{{ $promotion->slug }}" class="badge bg-success"><i class="bi bi-eye-fill"></i></a>
                            <a href="/dashboard/promotions/{{ $promotion->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                            <form action="/dashboard/promotions/{{ $promotion->slug }}" method="post" class="d-inline">
                                @method("delete")   
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><i class="bi bi-trash-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection