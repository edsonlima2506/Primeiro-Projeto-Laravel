<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS da aplicação -->
      <link rel="stylesheet" href="/css/styles.css">
      <!-- CSS do Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- Fonte do Google -->
      <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
      <title>@yield('title')</title>
    </head>
    <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
          <a href="/">BLKCD</a>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link">Eventos</a>
          </li>
          <li class="nav-item">
            <a href="/events/create" class="nav-link">Criar Eventos</a>
          </li>
          <li class="nav-item">
            <a href="/login" class="nav-link">Entrar</a>
          </li>
          <li class="nav-item">
            <a href="/signup" class="nav-link">Cadastrar</a>
          </li>
        </ul>
      </nav>
    </header>
    @yield('footer')
      <footer>
          <p>BLKCD Events &copy; 2022</p>
      </footer>
    </body>
</html>