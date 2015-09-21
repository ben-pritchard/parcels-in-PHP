<?php

    $form_weight = $_GET["weight"];
    $form_length = $_GET["length"];
    $form_width = $_GET["width"];
    $form_height = $_GET["height"];

    $user_parcel = new Parcel($form_weight, $form_length, $form_width, $form_height);

    class Parcel
    {
        private $weight;
        private $length;
        private $width;
        private $height;

        function __construct($weight, $length, $width, $height)
        {
            $this->weight = $weight;
            $this->length = $length;
            $this->width = $width;
            $this->height = $height;
        }

        function costToShip()
        {
            $formatted_price = number_format($this->getVolume() / 100, 2);
            return $formatted_price;
        }

        //getters and setters

        function setWeight($new_weight)
        {
            $this->weight = $new_weight;
        }

        function getWeight()
        {
            return $this->weight;
        }

        function setLength($new_length)
        {
            $this->length = $new_length;
        }

        function getLength()
        {
            return $this->length;
        }

        function setWidth($new_width)
        {
            $this->width = $new_width;
        }

        function getWidth()
        {
            return $this->width;
        }

        function setHeight($new_height)
        {
            $this->height = $new_height;
        }

        function getHeight()
        {
            return $this->height;
        }

        function getVolume()
        {
            return $this->length * $this->width * $this->height;
        }




    }
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Parcel Results</title>
    </head>
    <body>
        <div class="container">
            <h1>Your Parcel's information</h1>
            <!-- <?php $parcel_weight = $user_parcel->getWeight() ?> -->
            <?php echo  "<p>Weight: ".$user_parcel->getWeight()." </p>
                        <p>Length: ".$user_parcel->getLength()."</p>
                        <p>Width: ".$user_parcel->getWidth()." </p>
                        <p>Height: ".$user_parcel->getHeight()." </p>
                        <p>Volume: ".$user_parcel->getVolume()." </p>
                        <p>Your cost to ship: $".$user_parcel->costToShip()." </p>"; ?>
        </div>


    </body>
</html>
