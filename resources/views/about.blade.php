<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      Sono la pagina 'about' generata in resources/view e con il percorso
      generato all interno di  routes/web.php <br><br>
      Questa è la chiave tra doppie graffe {{ $chiave }} che all interno di Routes è un array classico chiave-valore ma </br>
      qui in view si traduce nel valore. <br><br>
      Io sono la pagina {{ $pagina }}. L' /about/ che precede il punto è il valore della chiave pagina in routes.
</body>
</html>