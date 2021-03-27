<?php session_start();
require_once "../includes/init.php";
/*
 * GET REQUESTS:
 *  CATEGORY:
 *       add_category
 *       get_category
 *       remove_category
 *       update_category
 *  PRODUCT:
 *       add_product
 *       get_product
 *       remove_product
 *       update_product
 */
$food_class = new Food();
if (isset($_GET['add_category'])) {
    $food_class->addCategory($_POST['name']);
}
if (isset($_GET['get_category'])) {
    echo json_encode(["data" => $food_class->getCategory()]);
}
if (isset($_GET['remove_category'])) {
    $food_class->deleteCategory($_POST['id']);
}
if (isset($_GET['update_category'])) {
    $food_class->updateCategory(array_values($_POST));
}
if (isset($_GET['add_product'])) {

}
if (isset($_GET['get_product'])) {

}
if (isset($_GET['remove_product'])) {

}
if (isset($_GET['update_product'])) {

}