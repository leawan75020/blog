# Cheatsheet php

## $\_GET

Tableau associatif contenant les paramètres URL d'une requête HTTP GET en PHP. Exemple pour accéder au paramètre name :

```php
$_GET['name'];
```

---

## $\_POST

Tableau associatif contenant les paramètres du corps d'une requête HTTP POST en PHP. Exemple pour accéder au paramètre name :

```php
$_POST['name'];
```

---

## $\_SESSION

Tableau associatif contenant les données stockées dans la session. Utile pour mémoriser des informations sur l'utilisateur :

---

## header()

Permet de rediriger l'utilisateur vers une autre page. Exemple :

```php
header('Location: /index.php')
```

---

## isset()

Permet de tester si une variable est définie ou égale à null. Exemple pour tester si la clé name dans le tableau $\_POST existe :

```php
isset($_POST['name'])
```

## session_start()

Permet de récupérer la session pour accéder au tableau associatif contenant les données de la session.

---

## PDO

Classe native permettant de se connecter à la base de données et de manipuler (SELECT, INSERT, etc.) les données. Exemple d'instanciation de la classe :

```php
$dsn = 'mysql:dbname=todoapp;host=localhost';
$user = 'root';
$password = '';

$connect = new PDO($dsn, $user, $password);
```

### prepare()

Méthode de la classe PDO permettant de préparer une requête SQL. Exemple d'une requête pour sélectionner un post avec son id depuis la base de données :

```php
$stmt = $connect -> prepare('SELECT * FROM posts WHERE id=?);
```

### bindParam()

Méthode de la classe PDO permettant de lier les données à la requête préparée. Exemple pour lier une variable nommée id avec la requête préparée précédemment :

```php
$stmt -> bindParam(1, $id);
```

### execute()

Méthode de la classe PDO permettant d'exécuter une requête :

```php
$stmt -> execute();
```

### fetch() ou fetchAll()

Méthode de la classe PDO permettant de récupérer une ou plusieurs lignes depuis la base de données. Exemple de récupération de plusieurs lignes sous forme de tableau associatif :

```php
$stmt -> fetchAll(PDO::FETCH_ASSOC);
```

---

## copy()

Fonction qui permet de copier un fichier depuis un emplacement vers un autre. Souvent utilisée pour enregistrer des fichiers sur le serveur.
