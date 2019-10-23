<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Creation d'une table avec SQL</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/3.0.1/github-markdown.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/styles/dracula.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    .container {
      max-width: 1000px;
      margin: 0 auto;
    }
    .hljs {
      display: block !important;
      overflow-x: auto !important;
      padding: 0.5em !important;
      background: #282a36 !important;
    }
  </style>
</head>
<body class="markdown-body">
  <div class="container">
  <br>
    <b>Exercice: </b> <br>
    Rédigez une requête pour trier les 
    clients de la table client avec toutes les 
    informations dont l'id est
     3007, 3008 et 3009. <br>
    <pre>
         id       |   nom          |    ville   |
      ------------|----------------|------------|
        3002      | Nicolas Sousa  | New York   |
        3007      | Julie Davis    | New York   |
        3005      | Franck Zusi    | California |
        3008      | Julian Green   | London     |
        3004      | Marta Sario    | Paris      |
        3009      | Pepe Romero    | Berlin     |
        3003      | Martin Fonte   | Moscow     |
    </pre>
    <br>
    <b>Solution:</b>
    <pre>
    SELECT * 
    FROM client 
    WHERE id IN (3007,3008,3009);
    </pre>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>