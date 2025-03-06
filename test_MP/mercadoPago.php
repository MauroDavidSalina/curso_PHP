<?php
/*
    // SDK de Mercado Pago
    use MercadoPago\Client\Preference\PreferenceClient;
    use MercadoPagoConfig;
    // Agrega credenciales
    MercadoPagoConfig::setAccessToken("PROD_ACCESS_TOKEN");
    
    $client = new PreferenceClient();
    $preference = $client->create([
      "items"=> array(
        array(
          "title" => "Mi producto 1",
          "quantity" => 1,
          "unit_price" => 20
        ),
        array(
          "title" => "Mi producto 2",
          "quantity" => 1,
          "unit_price" => 30
        )
      )
    ]);
*/



    //crear conexion a mercado pago
    require 'vendor/autoload.php';
    $access_token = 'TEST-6734599820916680-022711-0cbba1fe8c680fc3369c07fb3884ad6d-94716196';
    MercadoPago\SDK::setAccessToken($access_token);

    $preference = new MercadoPago\Preference();
    $product = [];
    $item = new MercadoPago\Item();
    $item->title = 'Mi producto 1';
    $item->quantity = 1;
    $item->unit_price = 75;

    array_push($product, $item);
    $item = new MercadoPago\Item();
    $item->title = 'Mi producto 2';
    $item->quantity = 2;
    $item->unit_price = 100;
    array_push($product, $item);

    $preference->items = $product;
    //$preference->items = array($item);
    
    $preference->back_urls = array(
        "success" => "https://www.google.com/",
        "failure" => "https://www.google.com/",
        "pending" => "https://www.google.com/"
    );
    $preference->auto_return = "approved";
    $preference->save();

?>
