<?php
include 'datalogin.php';
$conn = $conn;
/**
 * Populates the product_facts table with data from the products table
 * @param object $mysql_connection the mysql connection object
 */
function populate_product_facts($conn) {
  //empty product_facts table
  mysqli_query($conn, "TRUNCATE product_facts");  
 
  //fetch all product data
  $result = mysqli_query($conn, "SELECT * FROM products");
 
  //loop through resultset rows
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $facet_id = 1;
 
    //loop through table columns
    foreach ($row as $key => $value) {
      //create facts for all product fields except 'id' and 'name'
      if ($key != "id" && $key != "name") {
        $sql = "INSERT INTO product_facts VALUES (" . $row['id'] . ",$facet_id,'$key','$value');";
        mysqli_query($conn, $sql) or die (mysqli_error($conn));
        $facet_id++;
        echo "Added fact: (".$row['id'].", $facet_id, $key, $value) <br/>";
      }
    }
  }
}
populate_product_facts($conn);
?>