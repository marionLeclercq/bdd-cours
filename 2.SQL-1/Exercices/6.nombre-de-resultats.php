<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Afficher le nombre de résultats</title>
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
    <h1>Nombre de résultats</h1>
    <pre class="hljs"><code class="php">
      &lt;?php
      $sql = "Ma requête sql ici";
      $results = $pdo->query($sql);
      // afficher le nombre de résultats
      echo $results->rowcount();
      ?&gt;
    </code></pre>
    <div class="alert alert-danger">
      N'oubliez pas que pour faire cette opération il vous faut être connectés à la base de donées world.
      (Voir exercice 1.connexion)
    </div>
    <br>
    <b>Exercice: </b> Efectuez une requête SELECT à la table country (base de données world).
    <br><br>
    <ul>
      <li>
       Affichez le numero total de résultats. 
      </li>
    </ul>
    <?php
      // Placez votre solution ici
    ?>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>