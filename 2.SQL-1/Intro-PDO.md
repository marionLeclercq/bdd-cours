# PDO, PHP Data Objects (PDO)

**PHP Data Objects (PDO)** est une extension définissant l'interface pour accéder à une base de données avec PHP. Il nous simplifie la tâche interagir avec notre base de données.

[Trouver plus d'exemples sur l'utilisation de PDO](https://phpdelusions.net/pdo_examples)

### Se connecter à la base de données

```php
<?php  
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
?>
```



### Faire une requête

```php
<?php  
    $sql = "SELECT * FROM ma_table";
	// fetchAll() récupérer juste toutes les lignes
	$results = $pdo->query($sql)->fetchAll();
	// fetch() récupére juste une ligne
	$results = $pdo->query($sql)->fetch();
?>    
```



### Afficher le nombre de résultats

```php
<?php  
    $sql = "SELECT * FROM ma_table";
    $results = $pdo->query($sql);
    // afficher le nombre de résultats
    echo $results->rowcount();
?> 
```



### Boucler sur les résultats

```php
<?php  
    foreach ($results as $row) {
        echo $row['nom_de_la_colonne']; 
    }
?>
```



### Récupérer sous forme d'un tableau

```php
<?php  
    $sql = "SELECT * FROM livre"; // Exemple d'une requête à une table appelée livre
	$results = $pdo->query($sql);
	$livres = $results->fetchAll();
?>    
```



### Insertion des données

```php
<?php  
	$sql = "INSERT INTO table_name (column1, column2, column3) VALUES (?,?,?)";
    $val1 = "val1";
    $val2 = "val2";
    $val3 = "val3";
    $result = $pdo->prepare($sql)->execute([$val1, $val2, $val3]);
?>
```

[Trouver plus d'exemples sur l'utilisation de PDO](https://phpdelusions.net/pdo_examples)