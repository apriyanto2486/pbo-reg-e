<?php 
class Fruit{

   public $name;

   public function __construct($name){
    $this->name = $name;
   }


   public function __destruct()
   {
    return "Fruit destructed: " . $this->name;
    echo "Pemanggilan destructor untuk buah: " . $this->name . 'dihancurkan!';
   }
}

$apple = [
        new Fruit("Apple"),
        new Fruit("Banana"),
        new Fruit("Mango"),
        ];

        foreach($apple as $fruit){
            echo "Fruit Name: " . $fruit->name . "<br>";
        }
            unset($apple);
    
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
            <th>Fruit Name</th>
            <th></th>
        </tr>
        </thead>
        
<tbody>
    <?php foreach($apple as $fruit): ?>
        <tr>
            <td><?php echo $fruit->name; ?></td>
            <td></td>
        </tr>
    <?php endforeach; ?>
</tbody>
    </table>
</body>
</html> -->