<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?=$this->Html->charset()?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mostra Query</title>
    <style>
        .color{
            color:black;
            font-size: 15px;
            border-radius: 50%;
            width:50% !important;
            margin-left:20px;
            height:50%;
        }
        body{
           background-image: url("https://marketplace.canva.com/MADGx7Kn5GA/4/screen_2x/canva-pink-and-white-flowers-MADGx7Kn5GA.jpg") !important;
        }
        table tr th td{
            border-collapse: collapse;
            border-radius: 1em;
            overflow: hidden;
            width:50% !important;
          
        }
        .padding{
            padding: 100px;
        }


    </style>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <?=$this->Html->css('milligram.min.css')?>
    <?=$this->Html->css('cake.css')?>

    <?=$this->fetch('meta')?>
    <?=$this->fetch('css')?>
    <?=$this->fetch('script')?>
</head>
<body>
    <?=$this->Flash->render()?>
    <?=$this->fetch('content')?>
</body>

</html>
