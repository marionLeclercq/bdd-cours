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
      $sql = "INSERT INTO table_name (column1, column2, column3) VALUES (?,?,?)";
      $pdo->prepare($sql)->execute([$val1, $val2, $val3]);
      ?&gt;
    </code></pre>
    <div class="alert alert-danger">
      N'oubliez pas que pour faire cette opération il vous faut être connectés à la base de donées world.
      (Voir exercice 1.connexion)
    </div>
    <br>
    <b>Exercice: </b> Insérer une nouvelle ville dans la table city.
    Voici les valeurs pour chaque colonne: 
      <ul>
        <li>
          Name: Mouans-Sartoux
        </li>
        <li>
          District : Provence-Alpes-Côte
        </li>
        <li>
          CountryCode : FRA
        </li>
        <li>
          Population : 9668 
        </li>
      </ul>
    <br><br>
    <?php
      // Placez votre solution ici
      $db_host = "localhost"; // par défaut "localhost" ou "127.0.0.1"
      $db_port = "3306"; // par défaut "3306"
      $db_name  = "world"; 
      $db_user = "root"; // par défaut "root"
      $db_pass = ""; // par défaut "" ou "root"
      $pdo = new PDO("mysql:host=$db_host; port=$db_port; dbname=$db_name; charset=utf8", $db_user, $db_pass);
      
      $sql = "INSERT INTO city (Name, CountryCode, District, Population) VALUES (?,?,?,?)";
      $results = $pdo->prepare($sql)->execute(["Mouans-Sartoux", "FRA", "Provence-Alpes-Côte d’Azur", "9668"]);
      echo intval($results);
    ?>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>