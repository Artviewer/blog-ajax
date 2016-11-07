<?php

/**
 * Description of ItemNews
 *
 * @author nicke
 */
class ItemNews {
    protected $db;

    public function __construct($db) {
        $this->db = new mysqli($db['host'], $db['user'], $db['password'], $db['name']);
    }

    public function create($introtext,$date,$author, $fulltext, $images) {
        //echo $date;
        $query = "INSERT INTO items (`introtext`, `date`, `author`, `fulltext`, `images`) VALUES('$introtext','2016-10-24 00:00:00','$author', '$fulltext', '$images')";
        if ($this->db->query($query)) {
            return true;
            
        } else {
            
            return false;
        }
    }

    public function getNewsById($id) {
        $query = "SELECT * FROM items WHERE id=$id LIMIT 1";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    public function deleteNewsById($id) {
        $query = "DELETE FROM items WHERE id=$id";
        if ($this->db->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function saveNews($id,$introtext,$date,$author, $fulltext, $images) {
        $query = "UPDATE items SET `introtext`='$introtext', `date`='$date', `author`='$author', `fulltext`='$fulltext', `images`='$images' WHERE `id`=$id";
        if ($this->db->query($query)) {
            return true;
        } else {
            echo $query;
            return false;
        }
    }

    public function getNews() {
        $query = "SELECT * FROM items";
        $result = $this->db->query($query);
        if ($result) {
            $items=array();
            while ($news = $result->fetch_assoc()) {
                $items[]=$news;
            }
           // var_dump($items);
            return $items;
        }else{
            return false;
        }
    }
}
