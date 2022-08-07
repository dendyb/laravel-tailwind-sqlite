<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>@yield('title', 'App: Laravel')</title>
      </head>
<body>

      @include('nav', ['username'=> 'dendybsulistyo'])

      @yield('content')
    

      <footer class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto flex items-center sm:flex-row flex-col">
          <p class="text-sm text-gray-500 mt-4">© 2020 Tailblocks —
            <a href="https://twitter.com/dbsulistyo" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@dbsulistyo</a>
          </p>
          
        </div>
      </footer>

</body>
</html>