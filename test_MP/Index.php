<?php
require "mercadoPago.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test MP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container col-6 col-md-3 d-flex flex-column align-items-center py-4 bg-body-tertiary" id="wallet_container"></div>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    
    <script>
        var public_key = "TEST-2b571a92-e8d1-4f23-a9d2-2b5afaa31ad8";
        const mp = new MercadoPago(public_key, {
                    locale: "es-AR"
                    });;
        const bricksBuilder = mp.bricks();

        mp.bricks().create("wallet", "wallet_container", {
            initialization: {
                preferenceId: "<?php echo $preference->id; ?>",
            },
            customization: {
                texts: {
                    valueProp: 'smart_option',
                },
            },
        });


        
    </script>

</body>

</html>