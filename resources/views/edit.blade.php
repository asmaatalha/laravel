<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('update')}}" method="post">
        @if (Session::has('success'))
        <span>{{ Session::get('success') }}</span>
        @endif
        @csrf

        <input type="text" name="title" id="name_product" value="{{$post->nameProduct }}" placeholder="name_product">
        @error('name_product')
            {{ $message }}
        @enderror

        <br />

        <input type="text" name="body" value="{{$post->description}}" id="body" placeholder="descreption">
        @error('descreption')
            {{ $message }}
        @enderror
        <input type="text" name="body" value="{{$post->categorie}}" id="body" placeholder="prix">
        @error('prix')
            {{ $message }}
        @enderror

        <input type="submit" value="save">

    </form>
</body>
</html>