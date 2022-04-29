<?php

$url = explode('/', $_SERVER['REQUEST_URI']);
if ($url[1] == blog) {
  require_once("blog.html");
} else if ($url[1] == cart) {
  require_once("cart.html");
}



// $url = $url[0];
// for ($i = 0; $i < count($url); $i++) {
//   echo $url[$i]."<hr>";
// }
