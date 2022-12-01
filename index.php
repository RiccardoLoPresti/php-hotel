<?php

    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

    if($_GET['parking'] == 'false'){
        echo 'false';
    }else{
        echo 'true';
    }

    var_dump($_GET);
    var_dump($_GET['parking']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Hotel</title>
</head>
<body>
    
    <h1 class="px-2">HotelBelli</h1>
    <h5 class="px-2">Il sito di hotel numero uno in Italia</h5>

    <div class="container pt-5">
        <div class="row">

            <form class="d-flex" action="./index.php">

                <div class="col-auto">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="parking" id="inlineRadio1" value="true" method="get" checked>
                        <label class="form-check-label" for="inlineRadio1">
                            Con parcheggio
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="parking" id="inlineRadio2" value="false" method="get">
                        <label class="form-check-label" for="inlineRadio2">
                            Senza parcheggio
                        </label>
                    </div>

                </div>

                <div class="col">
                    <div class="mb-3">
                        <input type="number" class="form-control" name="rating" placeholder="Inserisci il voto" method="get">
                    </div>
                </div>
                
                <div class="col px-2">
                    <button type="submit" class="btn btn-primary">Cerca</button>
                </div>
            </form>
        </div>
    </div>
    
    <table class="table table-striped mx-2">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($hotels as $hotel):?>
                    <tr>
                        <td><?php echo $hotel['name'] ?></td>
                        <td><?php echo $hotel['description'] ?></td>
                        <td><?php 
                                if($hotel['parking'] === true){
                                    echo $output = 'Si';
                                }else{
                                    echo $output = 'No';
                                }
                            ?>
                        </td>
                        <td><?php echo $hotel['vote'] ?></td>
                        <td><?php echo $hotel['distance_to_center'] . ' ' . 'km' ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php ; ?>
        </tbody>
    </table>
    

</body>
</html>