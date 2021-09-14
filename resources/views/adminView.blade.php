<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/icons/icon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>ADshop | View</title>
    <style>
        img {
            width: 50px;
            height: 50px;
        }

    </style>
</head>

<body>
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Key</th>
                    <th scope="col">Modify</th>
                    <th scope="col">Remove</th>
                    <th><a style="text-decoration:none;" href="{{ route('adminHome') }}">
                            <h5 class="text-success">ADD+</h5>
                        </a></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($elements as $element)
                    <tr>
                        <th scope="row">{{ $element->id }}</th>
                        <td>{{ $element->product_name }}</td>
                        <td>{{ $element->price }}</td>
                        <td><img src="{{ $element->image }}" alt=""></td>
                        <td>{{ $element->key }}</td>
                        <td><a style="text-decoration:none" href="/update/page/{{ $element->id }}">
                                <h6 class="text-warning">Update</h6>
                            </a></td>
                        <td><a style="text-decoration:none" href="/delete/{{ $element->id }}">
                                <h6 class="text-danger">Delete</h6>
                            </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
