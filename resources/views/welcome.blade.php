<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Bem-Vindo</title>
    </head>
    <body>
      <h1>Boas vindas {{ $nome }}!</h1>
      <ul>
        @for($i = 0; $i < count($arr); $i++)
          <li>{{ $arr[$i] }}</li>
        @endfor
        </ul>
    </body>
</html>