<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Category ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($categories as $category)
                <tr>
                    <th scope="row"> {{ $category->id }} </th>
                    <td> {{ $category->category_name }} </td>
                    <td>
                        <a href="/delete_category/{{ $category->id }}">
                            <button type="button" class="btn btn-danger"> Delete </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form method="POST" action="/create_category">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="category_name" placeholder="Category Name"
                aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Create</button>
        </div>
    </form>

</body>

</html>
