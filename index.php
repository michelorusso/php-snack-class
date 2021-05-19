<?php    
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">

    <title>Snack</title>

    <link rel=stylesheet href="style.css">

</head>
<body>
    
    <h2>Teachers</h2>
    <?php foreach($db['teachers'] as $info) { ?>

        <div class="grey">
        <?php echo($info['name']) ?> - <?php echo($info['lastname']) ?>
        </div>

    <?php } ?>

    <h2>PM</h2>
    <?php foreach($db['pm'] as $info) { ?>

        <div class="green">
        <?php echo($info['name']) ?> - <?php echo($info['lastname']) ?>
        </div>

    <?php } ?>


</body>
</html>