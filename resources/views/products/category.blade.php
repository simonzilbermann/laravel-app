<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Category</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Category</h1>
        <div class="form-group">
            <label for="categorySelect">Select Category:</label>
            <div id="categoryButtons">
                @foreach($categorys as $category)
                    <button class="btn btn-primary categoryButton" data-category="{{ $category->type }}" value="{{$category->id}}">{{ $category->type }}</button>
                @endforeach
            </div>
        </div>
    </div>


</body>
</html>
