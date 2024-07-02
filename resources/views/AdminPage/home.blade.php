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
                <i class="bi bi-people-fill h4 col-1"></i>
                <div class="col-8 h4 ms-3 text-center">Total Products</div>
            </div>
            <div class="row d-flex justify-content-center"><h1 class="text-center">{{ $product }}</h1></div>
        </div>
        <div class="col-2 p-4" style="border-radius: 10px;background-color:#F2F2F2">
            <div class="row">
                <i class="bi bi-people-fill h4 col-1"></i>
                <div class="col-8 h4 ms-3 text-center">Total Transactions</div>
            </div>
            <div class="row d-flex justify-content-center"><h1 class="text-center">{{ $transaction }}</h1></div>
        </div>
        <div class="col-3 p-4" style="border-radius: 10px;background-color:#F2F2F2">
            <div class="row">
                <i class="bi bi-people-fill h4 col-1"></i>
                <div class="col-8 h4 ms-3 text-center">Total Income</div>
            </div>
            <div class="row d-flex justify-content-center"><h1 class="text-center">Rp {{ number_format($totalEarnings, 0, ',', '.') }}</h1></div>
        </div>
    </div>
    <br>
    <h2>Montly Earning Chart</h2>
    <div style="width: 1200px">
        <canvas id="myChart"></canvas>
    </div>
    {{-- <canvas id="earningsChart"></canvas> --}}
    <h2>Tabel</h2>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Header</th>
            <th scope="col">Header</th>
            <th scope="col">Header</th>
            <th scope="col">Header</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1,001</td>
            <td>random</td>
            <td>data</td>
            <td>placeholder</td>
            <td>text</td>
            </tr>
            <tr>
            <td>1,002</td>
            <td>placeholder</td>
            <td>irrelevant</td>
            <td>visual</td>
            <td>layout</td>
            </tr>
            <tr>
            <td>1,003</td>
            <td>data</td>
            <td>rich</td>
            <td>dashboard</td>
            <td>tabular</td>
            </tr>
            <tr>
            <td>1,003</td>
            <td>information</td>
            <td>placeholder</td>
            <td>illustrative</td>
            <td>data</td>
            </tr>
            <tr>
            <td>1,004</td>
            <td>text</td>
            <td>random</td>
            <td>layout</td>
            <td>dashboard</td>
            </tr>
            <tr>
            <td>1,005</td>
            <td>dashboard</td>
            <td>irrelevant</td>
            <td>text</td>
            <td>placeholder</td>
            </tr>
            <tr>
            <td>1,006</td>
            <td>dashboard</td>
            <td>illustrative</td>
            <td>rich</td>
            <td>data</td>
            </tr>
            <tr>
            <td>1,007</td>
            <td>placeholder</td>
            <td>tabular</td>
            <td>information</td>
            <td>irrelevant</td>
            </tr>
            <tr>
            <td>1,008</td>
            <td>random</td>
            <td>data</td>
            <td>placeholder</td>
            <td>text</td>
            </tr>
            <tr>
            <td>1,009</td>
            <td>placeholder</td>
            <td>irrelevant</td>
            <td>visual</td>
            <td>layout</td>
            </tr>
            <tr>
            <td>1,010</td>
            <td>data</td>
            <td>rich</td>
            <td>dashboard</td>
            <td>tabular</td>
            </tr>
            <tr>
            <td>1,011</td>
            <td>information</td>
            <td>placeholder</td>
            <td>illustrative</td>
            <td>data</td>
            </tr>
            <tr>
            <td>1,012</td>
            <td>text</td>
            <td>placeholder</td>
            <td>layout</td>
            <td>dashboard</td>
            </tr>
            <tr>
            <td>1,013</td>
            <td>dashboard</td>
            <td>irrelevant</td>
            <td>text</td>
            <td>visual</td>
            </tr>
            <tr>
            <td>1,014</td>
            <td>dashboard</td>
            <td>illustrative</td>
            <td>rich</td>
            <td>data</td>
            </tr>
            <tr>
            <td>1,015</td>
            <td>random</td>
            <td>tabular</td>
            <td>information</td>
            <td>text</td>
            </tr>
        </tbody>
        </table>
    </div>

@endsection
