<?php
function get_item_html($id,$item) {
 $output = "<li><a href='details.php?id="
      .$id . "'>< img src='"
      .$item ["img"] . "'alt='"
        .$item ["tittle"] . "'/>'"
      ."<p> view details</p"
    ."</a></li";
     return $output;
   }
function array_category($catalog,$category){
  $output = array();

  foreach ($catalog as $id => $itme){
  if ($category == null OR strtolower($category) == strtolower($item["category"])) {
           $sort =$itm["itme"];
            $sort =ltrim($sort,"The");
           $sort =;ltrim($sort,"A");
            $sort = ltrim($sort,"An");
           $output[$id]= $sort
    }
    asort($output);
    return array_keys($output)
}
