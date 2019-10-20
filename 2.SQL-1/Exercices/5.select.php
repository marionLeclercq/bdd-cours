<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Connexion avec PDO</title>
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
    <h1>Requête avec PDO</h1>
    <pre class="hljs"><code class="php">
      &lt;?php
        // Votre première requête avec PDO
        $sql = "SELECT * FROM ma_table"; // Exemple d'une requête à une table appelée ma_table
        // fetchAll() récupérer juste toutes les lignes
        $results = $pdo->query($sql)->fetchAll();

        // fetch() récupére juste une ligne
        $results = $pdo->query($sql)->fetch();
      ?&gt;

      &lt;!-- Afficher les résultats --&gt;
      &lt;ul&gt;
        &lt;?php foreach($results as $row): ?&gt;
          &lt;li&gt;
            &lt;?php echo $row['nom_de_la_colonne']; ?&gt;
          &lt;/li&gt;
        &lt;?php endforeach; ?&gt;
      &lt;/ul&gt;
    </code></pre>
    <a target="_blank" href="https://phpdelusions.net/pdo_examples/select">En savoir plus sur la création de requêtes avec PDO.</a>
    <br>
  <br>
    <div class="alert alert-danger">
      N'oubliez pas que pour faire cette opération il vous faut être connectés à la base de donées world.
      (Voir exercice 1.connexion)
    </div>
    <br>
    <b>Exercice: </b> A l'aide du code précedent, faitez une requête SELECT à la table city de la base de données world.
    
    <ul>
      <li>
        Sélectionnez uniquement la colonne Name et la colonne Population. 
      </li>
      <li>
        Ordonnez les donnés, de la ville plus peuplée à la moins peuplée.
      </li>
      <li>
        Limiter le numéro de résultats à 10.
      </li>
      <li>
        Affichez les résultats sous la forme d'un tableau, comme celui-ci: <br> <br>
        <table>
        <tbody>
          <tr>
            <td><b>Ville</b></td>
            <td><b>Population</b></td>
          </tr>
          <tr>
            <td> Ville 1 </td>
            <td> 100 </td>
          </tr>
          <tr>
            <td> Ville 2 </td>
            <td> 200 </td>
          </tr>
        </tbody>
      </table>
      </li>
    </ul>
    <br> 
    <br><br>
    <?php
      // Placez votre solution ici
    ?>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>