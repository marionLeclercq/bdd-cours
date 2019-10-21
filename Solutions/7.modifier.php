<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modifier</title>
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
    <h1>Modifier une ligne</h1>
    <pre class="hljs"><code class="php">
      &lt;?php
        $val1 = "val1";
        $val2 = "val2";
        $val3 = "val3";
        $sql = "UPDATE users SET col1=?, col2=?, col3=? WHERE id=?";
        $result = $pdo->prepare($sql)->execute([$val1, $val2, $val3]);
        // Afficher 1 si l'insertion a eu lieu ou 0 dans le cas contraire
        echo intval($result);
      ?&gt;
    </code></pre>
    <br>
    <a target="_blank" href="https://phpdelusions.net/pdo_examples/update">En savoir plus sur la modification des lignes avec PDO.</a>
    <br>
    <br>

    <div class="alert alert-danger">
      N'oubliez pas que pour faire cette opération il vous faut être connectés à la base de donées world.
      (Voir exercice 1.connexion)
    </div>
    <br>
    <b>Exercice: </b>
    <ul>
      <li>
        1. Dans la table city, modifiez toutes les colonnes District ayant la valeur
      Provence-Alpes-Côte et les substituez par la valeur Provence-Alpes-Côte d’Azur.
      </li>
      <li>
        2. Après avoir effectuée la modification, afficher les résultats 
      </li>
    </ul>
    
    <br><br>
    <?php
      $db_host = "localhost"; // par défaut "localhost" ou "127.0.0.1"
      $db_port = "3306"; // par défaut "3306"
      $db_name  = "world"; 
      $db_user = "root"; // par défaut "root"
      $db_pass = ""; // par défaut "" ou "root"
      $pdo = new PDO("mysql:host=$db_host; port=$db_port; dbname=$db_name; charset=utf8", $db_user, $db_pass);
      
      $district = "Provence-Alpes-Côte d’Azur";
      $whereDistrict = "Provence-Alpes-Côte";
      $sql = "UPDATE city SET District=? WHERE District=?";
      $result = $pdo->prepare($sql)->execute([$district, $whereDistrict]);
      echo "<b>Solution :</b>" . intval($result);
    ?>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>