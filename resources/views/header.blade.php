<!DOCTYPE html>
<html lang="en">
<head>
  <title>AstonCV</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<nav>
<ul class="flex">
  
<li class="flex-1 mr-2">
    <a href="/" class="text-center block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white" href="#">AstonCV</a>
  </li>

@auth
<li class="flex-1 mr-3">
    <a class="text-center block border border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-2 px-4" href="" class="p-3">{{ auth()->user()->name }}</a>
  </li>

  <li class="flex-1 mr-3">
    <a href="{{ route('logout') }}"class="text-center block border border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-2 px-4" href="#">Log Out</a>
  </li>
@endauth
@guest

  <li class="flex-1 mr-2">
    <a href="/login"class="text-center block border border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-2 px-4" href="#">Login</a>
  </li>
  <li class="flex-1 mr-3">
    <a href="/register"class="text-center block border border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-2 px-4" href="#">Sign Up</a>
  </li>
@endguest

  

  

</ul>
</nav>
@yield('content')
</body>
</html>