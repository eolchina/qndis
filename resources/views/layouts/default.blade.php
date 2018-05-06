<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sample App') - Laravel 巧女保护应用</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
    <div class="container">
  <div class="col-md-offset-1 col-md-10">
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
  </div>
</div>
    </div>
</body>
</html>
