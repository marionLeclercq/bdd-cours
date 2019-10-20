<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Connexion avec PDO</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/3.0.1/github-markdown.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/styles/dracula.min.css">
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
    <h1>Connexion avec PDO</h1>
    <pre class="hljs"><code class="php">
      &lt;?php
        // Etablir une connexion
        $db_host = "host_BDD"; // par défaut "localhost" ou "127.0.0.1"
        $db_port = "port_BDD"; // normalement "3306" ou "8889" en mac
        $db_name  = "nom_BDD"; 
        $db_user = "utilisateur_BDD"; // par défaut "root"
        $db_pass = "mot_de_passe_BDD"; // par défaut "" ou "root"

        try {
          $pdo = new PDO("mysql:host=$db_host; port=$db_port; dbname=$db_name", $db_user, $db_pass);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
          echo "La connexion a echoué: " . $e->getMessage();
        }
      ?&gt;
    </code></pre>
    <div class="alert alert-danger">
      N'oubliez pas que pour faire cette opération il vous avoir importé la base de données world.
      (Voir exercice 0.importer-bdd)
    </div>
    <b>Exercice: </b> A l'aide du code précedent, essayez d'etablir une connexion à la base données world.

    <?php
      // Placez ici votre code
    ?>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>