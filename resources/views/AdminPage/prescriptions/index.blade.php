@extends("AdminPage.Structure.main")

@section('container')
    <div class="my-4">
        <h1 class="h2"> All Prescription</h1>
    </div>

    <hr>

    @if(session()->has("success"))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session("success") }}
      </div>
    @endif
    <div class="table-responsive col-lg-10">
      <table class="table table-md">
          <thead>
            <tr>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Prescription ID</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Transaction ID</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Image</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Status</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($prescriptions as $prescription)
            <tr>
                <td class="">{{$prescription->id}}</td>
                <td class="">{{ $prescription->transactions_id}}</td>
                <td>
                    <img src="{{ asset($prescription->prescription_image) }}" width= '50' height='50' class="img img-responsive" />

                </td>
                <td class="">{{ $prescription->status }}</td>
                <td class="">
                    <a href="/dashboard/prescriptios/{{ $prescription->slug }}" class="badge bg-success"><i class="bi bi-eye-fill"></i></a>
                    <a class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{$prescription->slug}}"><i class="bi bi-pencil-square"></i></a>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection
