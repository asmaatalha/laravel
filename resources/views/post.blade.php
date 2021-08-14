<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js%22%3E"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js%22%3E"></script>
    <title>Document</title>
</head>
<body>
    <table class="table table-dark m-2">
        <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name_product</th>
              <th scope="col">Descreption</th>
              <th scope="col">categorie</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr class="table-active">
                <th>{{$post->id}}</th>
                <td>{{$post->nameProduct}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->categorie}}</td>
                <td>
                    <a href="/edit/{{ $post->id }}" class="btn btn-primary">Edit</a>
                    <a href="/delete/{{ $post->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
          </tbody>
    </table>
    
</body>
</html>
    
</body>
</html>