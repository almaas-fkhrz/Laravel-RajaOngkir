<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Result</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row justify-content center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Result
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td>Origin</td>
                                <td>:</td>
                                <td>{{ $origin['city_name'] }}</td>
                            </tr>
                            <tr>
                                <td>Destination</td>
                                <td>:</td>
                                <td>{{ $destination['city_name'] }}</td>
                            </tr>
                            <tr>
                                <td>Weight</td>
                                <td>:</td>
                                <td>{{ $weight }} g</td>
                            </tr>
                            <tr>
                                <td>Courier</td>
                                <td>:</td>
                                <td>{{ $courier }}</td>
                            </tr>
                        </table>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Description</th>
                                    <th scope="col">Cost</th>
                                    <th scope="col">Estimates Days</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rows as $cost)
                                <tr>
                                    <td>{{ $cost['description'] }}</td>
                                    <td>Rp. {{ number_format($cost['cost'], 0, '.', '.') }}</td>
                                    <td>{{ $cost['etd'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/" class="btn btn-success">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
