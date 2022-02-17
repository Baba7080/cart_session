<?php
session_start();

include 'product.php';
if(isset($_POST['Select'])){
    echo 'clicked';
    $id = 103;
    $quantity = 1;
    foreach($products as $match_id){
        // echo $match_id['id'];
        if ($match_id['id'] == $id){
             $id = $id;
             $image =  $match_id['image'];
             $price =  $match_id['price'];
             $name =  $match_id['name'];
             $quantity =$quantity + 1;
             $product = array($name,$price,$image,$quantity);

             $_SESSION[$name] = $product;

             echo 'u'.$name;

            }
        // echo 'yuppp --'.$_SESSION[$name];
    }
    foreach($_SESSION as $product){

        foreach($product as $key => $value){
            echo '<pre>'.$value.'</pre>';
        }}
    // cart($id);
}
// function cart($id){
//     foreach($products as $match_id){
//         echo $match_id;

        // if ($match_id == $id){

        // }
//     }
// }
// $products = array (
//     0 => 
//     array (
//       'id' => 101,
//       'name' => 'Basket Ball',
//       'image' => 'basketball.png',
//       'price' => 150,
//     ),
//     1 => 
//     array (
//       'id' => 102,
//       'name' => 'Football',
//       'image' => 'football.png',
//       'price' => 120,
//     ),
//     2 => 
//     array (
//       'id' => 103,
//       'name' => 'Soccer',
//       'image' => 'soccer.png',
//       'price' => 110,
//     ),
//     3 => 
//     array (
//       'id' => 104,
//       'name' => 'Table Tennis',
//       'image' => 'table-tennis.png',
//       'price' => 130,
//     ),
//     4 => 
//     array (
//       'id' => 105,
//       'name' => 'Tennis',
//       'image' => 'tennis.png',
//       'price' => 100,
//     ),
// );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        
            foreach($products as $item){
                // echo 'k'.$products[$i].'yes--<pre>'.$item."=></pre>";
                // $i++;
                echo '<form method="POST"><pre></pre><div id="pro" style="float:left; margin-left: 150px;">
                        <img src="images/'.$item['image'].'">
                     <p>'.$item['name'].'</p><input type="submit" name="Select" value="Add To Cart"></div></pre></form>';
                // print_r($item['image']);
                // foreach($item as $item_value){
                //     print_r($item_value);
                    // echo 'k'.$item_value[$i].'yes--<pre>'.$item."=></pre>";
                // $i++;

                    

                    // print_r($item_value);


                    // echo '<pre></pre><div id="pro">
                    //    <img src="images/'.$item_value.'">
                    // </div></pre>';
                // }
            }
        ?>
    </div>
</body>
</html>