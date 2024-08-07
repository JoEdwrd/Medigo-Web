<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medigo | Dashboard</title>
    <link rel="icon" href="\image\MedigoLogo.svg" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap core CSS -->
    <link href="\css\style.css" rel="stylesheet">
    <link href="\css\dashboard.css" rel="stylesheet">
    {{-- Trix --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .trix-button-group.trix-button-group--file-tools {
        display:none;
      }
      </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        @include("AdminPage.Structure.sidebar")
        
        <main class="ms-sm-auto col-lg-10 px-md-4">
          @yield('container')
        </main>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="public\js\dashboard.js"></script>
    
    {{-- <script>
      document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('earningsChart').getContext('2d');
            var earningsChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: @json($monthlyEarnings->pluck('month')),
                    datasets: [{
                        label: 'Total Earnings',
                        data: @json($monthlyEarnings->pluck('total_earnings')),
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: true,
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            type: 'time',
                            time: {
                                unit: 'month',
                                tooltipFormat: 'MMM YYYY',
                            }
                        },
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Earnings ($)'
                            }
                        }
                    }
                }
            });
        });
    </script> --}}
    <script>
       function previewImage(){
            const image=document.querySelector("#image");
            const imgPreview=document.querySelector(".img-preview");
            imgPreview.style.display="block";

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src=oFREvent.target.result;
            }
        }
        function previewImage2(){
            const image=document.querySelector("#imagebanner");
            const imgPreview=document.querySelector(".img-preview2");
            imgPreview.style.display="block";

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src=oFREvent.target.result;
            }
        }
    </script>
  </body>
</html>
