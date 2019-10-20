<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Insérer une ligne</title>
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
    <h1>Insérer une ligne</h1>
    <pre class="hljs"><code class="php">
      &lt;?php
      $sql = "INSERT INTO table_name (column1, column2, column3) VALUES (?,?,?)";
      $val1 = "val1";
      $val2 = "val2";
      $val3 = "val3";
      $result = $pdo->prepare($sql)->execute([$val1, $val2, $val3]);
      // Afficher 1 si l'insertion a eu lieu ou 0 dans le cas contraire
      echo intval($result);
      ?&gt;
    </code></pre>
    <br>
    <a target="_blank" href="https://phpdelusions.net/pdo_examples/insert">En savoir plus sur l'insértion avec PDO.</a>
    <br>
    <br>

    <div class="alert alert-danger">
      N'oubliez pas que pour faire cette opération il vous faut être connectés à la base de donées world.
      (Voir exercice 1.connexion)
    </div>
    <br>
    <b>Exercice: </b> Insérer une nouvelle ville dans la table city.
    <br>
    Voici les valeurs pour chaque colonne: 
      <ul>
        <li>
          <b>Name</b> : Mouans-Sartoux
        </li>
        <li>
          <b>District</b> : Provence-Alpes-Côte
        </li>
        <li>
          <b>CountryCode</b> : FRA
        </li>
        <li>
          <b>Population</b> : 9668 
        </li>
      </ul>
    <br><br>
    <?php
      // Placez votre solution ici
    ?>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>