<?php
/**
 * Created by PhpStorm.
 * User: SIGP
 * Date: 11/24/2020
 * Time: 5:24 PM
 */
 

header("Access-Control-Allow-Origin:*"); 
header("Access-Control-Credencial:true"); 
header("Access-Control-Allow-Methods:POST, GET,PUT,DELETE,OPTIONS"); 
header("Access-Control-Request-Headers:x-request-witdh");
header("Access-Control-Allow-Headers:x-request-with, x-requested");   

require_once ("config/db.php");
require_once ("config/conexion.php");

$query = mysqli_query($con, 'SELECT * FROM  products');
    while ($row=mysqli_fetch_array($query))
    {
          $user_id=$row['codigo_producto'];
          $details=$row['nombre_producto'];
          $stock=$row['stock'];
          $preco=$row['precio_producto'];
        
          $vector[] = array('id'=>$user_id,'details'=>$details,'preco'=>$preco, 'stock'=>$stock);
    }

echo json_encode($vector);
