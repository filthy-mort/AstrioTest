<?php 

$categories = array(
	array(
   	"id" => 1,
   	"title" =>  "?????",
   	'children' => array(
       	array(
           	'id' => 2,
           	'title' => '???????',
           	'children' => array(
               	array('id' => 3, 'title' => '????'),
               	array('id' => 4, 'title' => '????????'),
           	),
       	),
       	array('id' => 5, 'title' => '?????????',),
   	)
	),
	array(
   	"id" => 6,
   	"title" =>  "?????",
   	'children' => array(
       	array(
           	'id' => 7,
           	'title' => '????'
       	)
   	)
	),
);

function searchCategory($categories, $id) {
    if (isset($categories) && isset($id)) {
        foreach ($categories as $category) {
            if ($id == $category['id']) {
                echo $category['title'];
            } elseif (isset($category['children'])) {
                echo searchCategory($category['children'], $id);
            }
        }
    }
}
searchCategory($categories, 5);