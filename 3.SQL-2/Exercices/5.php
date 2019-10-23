<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
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
    Pour la table commande,
    rédigez une requête pour filtrer toutes les 
    commandes avec toutes les informations dont la valeur du montant 
    de l'achat est comprise entre 500 et 4000,
     à l'exception des commandes dont la valeur 
     se situe entre 948,50 et 1983,43.
     
     <pre>
     c_num      montant     c_date      cli_id       
    ----------  ----------  ----------  ------ 
    70001       150.5       2012-10-05  3005         
    70009       270.65      2012-09-10  3001         
    70002       65.26       2012-10-05  3002         
    70004       110.5       2012-08-17  3009         
    70007       948.5       2012-09-10  3005         
    70005       2400.6      2012-07-27  3007         
    70008       5760        2012-09-10  3002         
    70010       1983.43     2012-10-10  3004         
    70003       2480.4      2012-10-10  3009         
    70012       250.45      2012-06-27  3008         
    70011       75.29       2012-08-17  3003         
    70013       3045.6      2012-04-25  3002 
    </pre>        
    <br>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>