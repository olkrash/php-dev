<?php
declare(strict_types = 1);
require_once 'class.php';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=books_db;', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdoStatement = $pdo->prepare('SELECT * FROM book');
    $pdoStatement->execute();
    $books = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);


    $publicationBooks = [];

    foreach ($books as $book) {
        $className = 'Book' . ucfirst($book['type_file']);
        $publicationBooks[] = new $className ($book);
    }

} catch (PDOException $s) {
    echo $s->getMessage();
}
