<?php
include("inc/data.php");
inlcude("inc/function.php");

$pageTittle ="full catalog";
$section = null;

 if (isset($_get["cat"])){
if( $_get["cat"] =="book") {
  $pageTittle ="book";
   $section= "book";
} else if ($_get["cat"]== "movie" ) {
   $pageTittle = "movies";
   $section = "music"
} else if ($_get["cat"] == "music") {
   $pageTittle = "music";
   $section = "music";
   }
}
 include("inc/header.php"); ?>

  <div class= "section catalog">
<div class ="wrapper">
    <hp1><?php
    if ($section !=null){
           echo "a href='catalog.php'>full catalog</>&gt;";
}
echo $pageTittle; ?></hp>
  <ul class="items">
    <?php
$catagories = array_category($section,$section);
foreach ($categories as $id) {
 echo get_item_html ($id,$catalog[$id]);

}
  ?>
    </ul>

      </div>
</div>
<?php include("inc/footer.php"); ?>
