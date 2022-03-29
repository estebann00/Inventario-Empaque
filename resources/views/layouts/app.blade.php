<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - SES</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 

  </head>
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-3 bg-indigo-800 text-white">
      <div class="w-1/2 px-12 mr-auto">
      <p class="text-6xl font-bold">SES</p>
      </div>

      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-3">
      @if(auth()->check())
        <li class="mx-8">
          <p class="text-xl"> <b> Bienvenido {{ auth()->user()->name }}</b></p>
        </li>

        <li>
          <a href="{{ route('login.destroy') }}" class="font-bold no-underline
          py-2 px-4 rounded-md bg-blue-600 hover:bg-indigo-500 text-white">Salir</a>
        </li>
      @else
        <li class="mx-6">
          <a href="{{ route('login.index') }}" class="font-semibold no-underline text-white
          hover:bg-indigo-700 py-2 px-4 rounded-md border-2 border-white ">Entrar</a>
        </li>
        <li>
          <a href="{{ route('register.index') }}" class="font-semibold no-underline text-white
          border-2 border-white py-2 px-4 rounded-md hover:bg-indigo-700 
          hover:text-indigo-700">Registrarse</a>
        </li>
      @endif
      </ul>

    </nav>


    @yield('content')


  </body>
</html>