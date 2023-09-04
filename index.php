<?php

function mobile($name,$ram,$rom,$color,$modelName) {
      
    echo "<h3>Mobile details</h3>";

    echo "Mobilename = $name <br> Ram=$ram <br>Rom = $rom <br> Color= $color <br> Modelname =$modelName";
    echo "<br>";
    echo "<br>";

}

mobile('Samsung',8,128,'black','S22');
mobile('Oppo',8,128,'black','fi');


echo "<br>";



function car($name,$model,$color,$engine,) {
    
    echo "<h3>Car details</h3>";

    echo "Carname =$name <br> Modelname = $model <br> Color = $color <br> Engine = $engine";
    echo "<br>";
    echo "<br>";
}

car('BMW',"X7",'black','3.0-liter BMW TwinPower Turbo inline 6-cylinder');
car('Toyota','camry','Black','Turbo vi v8');


function Bike($name,$model,$color) {
        
    echo "<h3>Bike details</h3>";
     
    echo "Bikename =$name <br> Modelname = $model <br> Color = $color <br>";
    echo "<br>";
    echo "<br>";
}

Bike('Yamaha','R15','Matte black');
?>