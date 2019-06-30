<?php
require "koneksi.php"; //file koneksi to database

$query  = "SELECT * FROM books";
$result = mysqli_query($link,$query);
while($data = mysqli_fetch_assoc($result)) {
  $site[] = $data;
}

$document = new DOMDocument("1.0","UTF-8");
$document->formatOutput = true;

$root = $document->createElement("toko_buku");
$document->appendChild($root);

foreach($site as $key => $value) {
    $book = $document->createElement("book");
    $root->appendChild($book);
    //id
    $id_tags = $document->createElement("id");
    $id_teks = $document->createTextNode($value["id"]);
    $id_tags->appendChild($id_teks);
    $book->appendChild($id_tags);

    //author
    $author = $document->createElement("author");
    $author->appendChild($document->createTextNode($value["author"]));
    $book->appendChild($author);

    //title
    $title = $document->createElement("title");
    $title->appendChild($document->createTextNode($value["title"]));
    $book->appendChild($title);

    //genre
    $genre = $document->createElement("genre");
    $genre->appendChild($document->createTextNode($value["genre"]));
    $book->appendChild($genre);

    //price
    $price = $document->createElement("price");
    $price->appendChild($document->createTextNode($value["price"]));
    $book->appendChild($price);

    //date
    $publish = $document->createElement("publish_date");
    $publish->appendChild($document->createTextNode($value["publish_date"]));
    $book->appendChild($publish);

    //description
    $description = $document->createElement("description");
    $desc_text   = $document->createTextNode($value["description"]);
    $description->appendChild($desc_text);
    $book->appendChild($description);
}

$document->save("/tmp/file.xml");



 ?>
