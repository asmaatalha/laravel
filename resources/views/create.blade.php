<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Session::has('success'))
    <span>{{ Session::get('success') }}</span>
    @endif
    <form action="{{ route('store') }}" method="post">
        {{-- {{ route('blog.store') }} --}}
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="nameProduct" id="name_product" value="" placeholder="name_product">
            <div class="text-danger">
                @error('nameProduct')
                {{ $message }}
                @enderror
            </div>
           
          </div>
        <br />
        <div class="mb-3">
            <input type="text" name="description"   class="form-control" value="" id="descreption" placeholder="descreption">
            <div class="text-danger">
                @error('description')
                {{ $message }}
                @enderror
            </div>   
        </div>
        <div class="mb-3">
         <input type="text" name="categorie" class="form-control" value="" id="prix" placeholder="prix">
        <div class="text-danger">
            @error('categorie')
            {{ $message }}
            @enderror
        </div>     
        
       
      
    

        <input type="submit" value="save">

    </form>
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
</body>
</html>