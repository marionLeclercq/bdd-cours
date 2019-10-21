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
    <h1>Creation d'une table avec SQL</h1>
    <b>Exercice: </b>
    <ul>
    <li>
        1. Ecrivez une commande SQL qui sert à créer une table dans la base de données login_db et testez la commande en utilisant l'editeur de code SQL de phpMyAdmin.
      </li>
      <li>
        2. La table doit contenir les colonnes suivantes: <br>
        <ul>
          <li>
              id :
              <ul>
                <li>Doit être une clé primaire</li>
                <li>Doit autoincrementer automatiquement</li>
                <li>ne peut pas être NULL</li>
              </ul>
              <li>
              username :
                <ul>
                  <li>Doit être unique</li>
                  <li>Ne doit pas avoir plus de 25 caractères</li>
                </ul>
              </li>
              <li>
              email : 
                <ul>
                  <li>Doit être unique</li>
                </ul>
              </li>
              <li>
                password :
                <ul>
                  <li>Doit être unique</li>
                  <li>Ne doit pas avoir plus de 25 caractères</li>
                </ul>
              </li>
              <li>
                name :
                <ul>
                <li>Ne doit pas avoir plus de 15 caractères</li>
                </ul>
              </li>
              <li>
                lastname :
                <ul>
                  <li>Ne doit pas avoir plus de 15 caractères</li>
                </ul>
              </li>
          </li>
        </ul>
      </li>
    </ul>
    <br>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>