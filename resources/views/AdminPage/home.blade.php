@extends("AdminPage.Structure.main")

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 mt-3">
        <h1 class="h2">Dashboard</h1>
    </div> 
    <div class="row d-flex justify-content-around">
        <div class="col-2 p-4" style="border-radius: 10px;background-color:#F2F2F2">
            <div class="row">
                <i class="bi bi-people-fill h4 col-1"></i>
                <div class="col-8 h4 ms-3 text-center">Total Users</div>
            </div>
            <div class="row d-flex justify-content-center"><h1 class="text-center">{{ $user }}</h1></div>
        </div>
        <div class="col-2 p-4" style="border-radius: 10px;background-color:#F2F2F2">
            <div class="row">
                <i class="bi bi-box-seam-fill h4 col-1"></i>
                <div class="col-8 h4 ms-3 text-center">Total Products</div>
            </div>
            <div class="row d-flex justify-content-center"><h1 class="text-center">{{ $product }}</h1></div>
        </div>
        <div class="col-2 p-4" style="border-radius: 10px;background-color:#F2F2F2">
            <div class="row">
                <i class="bi bi-wallet2 h4 col-1"></i>
                <div class="col-8 h4 ms-3 text-center">Total Transactions</div>
            </div>
            <div class="row d-flex justify-content-center"><h1 class="text-center">{{ $transaction }}</h1></div>
        </div>
        <div class="col-3 p-4" style="border-radius: 10px;background-color:#F2F2F2">
            <div class="row">
                <i class="bi bi-cash-coin h4 col-1"></i>
                <div class="col-8 h4 ms-3 text-center">Total Income</div>
            </div>
            <div class="row d-flex justify-content-center"><h1 class="text-center">Rp {{ number_format($totalEarnings, 0, ',', '.') }}</h1></div>
        </div>
    </div>
    <br>
    <br>
    <h2>Montly Earning Chart</h2>
    <div style="width: 1200px">
        <canvas id="myChart"></canvas>
    </div>
    <br>
    <br>

    <h2>Recent Transactions</h2>
        <div class="table-responsive">
        <table class="table table-md">
        <thead>
            <tr>
            <th scope="col" class="col-1 " style="background: var(--main1-color);">Date</th>
            <th scope="col" class="col-1 " style="background: var(--main1-color);">Transaction ID</th>
            <th scope="col" class="col-1 " style="background: var(--main1-color);">User</th>
            <th scope="col" class="col-1 " style="background: var(--main1-color);">Promo</th>
            <th scope="col" class="col-2 " style="background: var(--main1-color);">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transactions as $trans)
            <tr>
                <td>{{ $trans->created_at }}</td>
                <td>{{ $trans->id }}</td>
                <td>{{ $trans->user->name }}</td>
                @if ($trans->promo_id != null)
                    <td>{{ $trans->promotion->code }}</td>
                @else
                    <td>-</td>
                @endif
                <td>{{ $trans->status }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No Transaction Yet..</td>
            </tr>
            @endforelse
        </tbody>
        </table>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
      const labels = [
        @foreach($monthlyEarnings as $earning)
          '{{ $earning->month }}',
        @endforeach
      ];

      const data = {
        labels: labels,
        datasets: [{
          label: 'Total Earnings',
          backgroundColor: '#98C7BF',
          borderColor: '#98C7BF',
          data: {{ $monthlyEarnings->pluck('total_earnings') }},
        }]
      };

      const config = {
        type: 'line',
        data: data,
        options: {}
      };
      const myChart = new Chart(
      document.getElementById('myChart'),
      config);
    </script>
@endsection
