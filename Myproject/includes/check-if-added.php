<?php
function check_if_added_to_cart($item_id){
    $user_id = $_SESSION['user_id'];
    require 'common.php';
    $cart_query = "SELECT * FROM users_items WHERE item_id = '$item_id' AND user_id = '$user_id' AND status = 'Added to Cart'";
    $cart_query_result = mysqli_query($con, $cart_query) or die(mysqli_error($con));
    if(mysqli_num_rows($cart_query_result)>=1){
        return 1;
    }
    else {
        return 0;    
    }
}
?>
