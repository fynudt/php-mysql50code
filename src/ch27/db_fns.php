<?php

function db_connect() {
   $result = new mysqli('192.168.74.129', 'bookmarks', 'bookmarks', 'bookmarks');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>
