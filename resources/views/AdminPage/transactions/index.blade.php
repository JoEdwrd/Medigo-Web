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
        <table class="table table-md rounded-5">
          <thead>
            <tr>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Transaction ID</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">Transaction Date</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">User ID</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">Status</th>              
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($transactions as $transaction)
                @include('AdminPage.transactions.modal-edit-status', ['transaction' => $transaction])
                <tr>
                    <td class="">{{ $transaction->id }}</td>
                    <td class="">{{ $transaction->transaction_date }}</td>
                    <td class="">{{ $transaction->user_id }}</td>
                    <td class="">{{ $transaction->status }}</td>
                    <td class="">
                    {{-- @dd($transactions) --}}
                        
                        <a href="/dashboard/transactions/{{ $transaction->id }}" class="badge bg-success"><i class="bi bi-eye-fill"></i></a>
                        <a class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{$transaction->slug}}"><i class="bi bi-pencil-square"></i></a>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection