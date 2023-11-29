<?php
    class LibraryItem {
        public $title;
        public $author;
        public $available;

         function __construct($title, $author, $available){
             $this -> title = $title;
             $this -> author = $author;
             $this -> available = $available;
         }

        function get_title(){
            return $this -> title;
        }

        function get_author(){
            return $this -> author;
        }

        function get_available(){
            return $this -> available;
        }

        function checkOut(){
            $this -> available = false;
            return $this -> available;
        }

        function checkIn(){
            $this -> available = true;
            return $this -> available;
        }

        function getSummary(){
            if($this -> available){
                echo "{$this -> title} is available.";
            }else{
                echo "{$this -> title} is NOT available.";
            }
        }
    }

    class Book extends LibraryItem{
        public $ISBN;
        function __construct($title, $author, $available, $ISBN){
            parent::__construct($title, $author, $available);
            $this -> ISBN = $ISBN;
        }

        function get_ISBN(){
            return $this -> ISBN;
        }
    }

    class DVD extends LibraryItem{
        public $duration;

        function __construct($title, $author, $available, $duration){
            parent::__construct($title, $author, $available);
            $this -> duration = $duration;
        }

        function get_duration(){
            return $this -> duration;
        }
    }   

    $game = new Book("Game Of Thrones", "Someone", true, "123"); 
    $game -> getSummary();
    $game -> checkOut();
    $game -> getSummary();
    $game -> checkIn();
    $game -> getSummary();

?>