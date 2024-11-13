<?php
class Book{
    public $title;
    public $author;
    public $price;

    public function __construct($title, $author, $price){
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }
    public function displayBook(){
        echo "Title: $this->title\n\n";
        echo "Author: $this->author\n\n";
        echo "Price: $this->price\n\n";
    }
}

$book1 = new Book("1984","George Orwelll", 15.99);
$book1->displayBook();
?>

    

