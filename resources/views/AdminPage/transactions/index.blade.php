@extends("AdminPage.Structure.main")

@section('container')

    <div class="my-4">
        <h1 class="h2">All Transactions</h1> 
    </div>

    <hr>

    {{-- @if(session()->has("success"))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session("success") }}
      </div>
    @endif --}}
    <div class="table-responsive col-lg-10">
      {{-- <a href="/" class="btn btn-success mb-3">Add New transaction</a> --}}
      <div class="d-flex justify-content-end mb-4">
        <form action="{{ url('/dashboard/transactions') }}" method="GET" class="d-flex col-4 mt-2" style="height: 40px; width: 37%">
            <input type="text" name="search" class="form-control" placeholder="Search by date (YYYY-MM-DD) or status..." value="{{ request('search') }}" style="border-top-right-radius: 0%; border-bottom-right-radius: 0%">
            {{-- <button type="submit" class="btn btn-primary ml-2 col-2" style="display: none">Search</button> --}}
            <button class="btn" style="background-color: var(--main2-color);border-top-left-radius: 0%; border-bottom-left-radius: 0%" type="submit">
                <i style="color: var(--main1-color)" class="bi bi-search"></i>
            </button>
        </form>
      </div>
        <table class="table table-md rounded-5">
          <thead>
            <tr>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Transaction ID</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">Date</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">User ID</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">Status</th>              
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Action</th>
            </tr>
          </thead>
          <tbody>
            @if (isset($transactions[0]))
              @foreach ($transactions as $transaction)
                  @include('AdminPage.transactions.modal-edit-status', ['transaction' => $transaction])
                  <tr>
                      <td class="">{{ $transaction->id }}</td>
                      <td class="">{{ $transaction->created_at->toDateString() }}</td>
                      <td class="">{{ $transaction->user_id }}</td>
                      <td class="">{{ $transaction->status }}</td>
                      <td class="">
                      {{-- @dd($transactions) --}}
                          
                          <a href="/dashboard/transactions/{{ $transaction->id }}" class="badge bg-success"><i class="bi bi-eye-fill"></i></a>
                          <a class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{$transaction->slug}}"><i class="bi bi-pencil-square"></i></a>
                      </td>
                  </tr>
              @endforeach
            @else
              <div class="p-2 me-3 ms-3 alert alert-danger">
                <h5 class="text-center">Transaction not Found</h5>
              </div>
            @endif
          </tbody>
        </table>
      </div>
@endsection