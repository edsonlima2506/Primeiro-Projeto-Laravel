<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS da aplicação -->
      <link rel="stylesheet" href="../../css/styles.css">
      <!-- CSS do Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- Fonte do Google -->
      <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
      <title>@yield('title')</title>
    </head>
    <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">BLCK Eventos</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/events/create">Criar Evento</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Entrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/signup">Cadastrar</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    @yield('main')
      <footer>
          <p>BLKCD Events &copy; 2022</p>
      </footer>
    </body>
</html>