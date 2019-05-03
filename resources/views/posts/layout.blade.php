<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Crud</title>
    <link rel="stylesheet" href="{{'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
</head>
<body>

<div class="bg-info text-white p-5 mb-3">
    <a href="{{route('posts.index')}}" class="btn btn-secondary">Home</a>
    <a href="{{route('posts.create')}}" class="btn btn-secondary">Create Post</a>
</div>
<div>
    @yield('grab')
</div>
<div class="bg-dark text-center text-white p-4 mt-2">
    All Rights Reserved PRALESH {{date('Y')}}.
</div>
</body>
</html>