<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays</title>
    </head>
    <body>
        
        <?php include 'Header.php';?>
        <?php include 'Menu.php';?>
        <div style="margin: auto;width: 50%;/* border: 3px solid green; */padding: 10px;text-align: center;’text-align:center’;">
        <?php
        # Sub-task-1
        # Create an array , $noKeyArray without specifying any key. Display the keys and the corresponding values of the array using following command
        # var_dump($noKeyArray)
        # display the keys, the values and the key data type of the array using 'foreach' loop 

        $noKeyArray=array(10,20,30,40);
        echo '<h4 style="color:#0000FF;align:center;">No Key Array - Output using var_dump</h4><br/>';
        var_dump($noKeyArray);
        echo '<h4 style="color:#0000FF;align:center;">No Key Array - Output using foreach</h4>';
        foreach($noKeyArray as $key=> $value) {
            echo '<br/>key: '.$key .' ';
            echo 'value: '.$value.' ';
            echo 'Data type:';
            echo gettype($key).'';
        }

        # Sub-task-2
        # Create an array, $stringKeyArray with only string keys. Display the keys and the corresponding values of the array using following command
        # var_dump($stringKeyArray)
        # display the keys, the values and the key data type of the array using 'foreach' loop 

        $stringKeyArray=['key1'=>'item1','key2'=>'item2'];
        echo '<h4 style="color:#0000FF;align:center;">String Key Array - Output using var_dump</h4><br/>';
        var_dump($stringKeyArray);
        echo '<h4 style="color:#0000FF;align:center;">String Key Array - Output using foreach</h4>';
        foreach($stringKeyArray as $key=> $value) {
            echo '<br/>key: '.$key .' ';
            echo 'value: '.$value.' ';
            echo 'Data type: ';
            echo gettype($key).'';
        }

        # Sub-task-3
        # Create an array, $intKeyArray with only integer keys. Display the keys and the corresponding values of the array using following command
        # var_dump($intKeyArray)
        # display the keys, the values and the key data type of the array using 'foreach' loop 

        $intKeyArray=[0=>21,1=>22,2=>23];
        echo '<h4 style="color:#0000FF;align:center;">Integer Key Array - Output using var_dump</h4><br/>';
        var_dump($intKeyArray);
        echo '<h4 style="color:#0000FF;align:center;">Integer Array - Output using foreach</h4>';
        foreach($intKeyArray as $key=> $value) {
            echo '<br/>key:'.$key .' ';
            echo 'value: '.$value.' ';
            echo 'Data type: ';
            echo gettype($key).'';
        }

        # Sub-task-4
        # Create an array, $mixedKeyArray with both string and integer keys. Display the keys and the corresponding values of the array using following command
        # var_dump($intKeyArray)
        # display the keys, the values and the key data type of the array using 'foreach' loop 

        $mixedKeyArray=['key 1'=>'item1','key 2'=>'item2',3=>22,4=>24,5=>24,6=>24];
        echo '<h4 style="color:#0000FF;align:center;">Mixed Key Array - Output using var_dump</h4><br/>';
        var_dump($mixedKeyArray);
        echo '<h4 style="color:#0000FF;align:center;">Mixed Key Array - Output using foreach</h4>';
        foreach($mixedKeyArray as $key=> $value) {
            echo '<br/>key: '.$key .' ';
            echo 'value: '.$value.' ';
            echo 'Data type: ';
            echo gettype($key).'';
        }

        # Sub-task-5
        # Create an multi-dimensional (2-D) array, $multiDimensionArray. Display the keys and the corresponding values of the array using following command
        # var_dump($multiDimensionArray)
        # display the keys, the values and the key data type of the array using 'foreach' loop 

        $multiDimensionArray=[1=>[1,2,3,4,5],2=>[1,2,3,4,5]];
        echo '<h4 style="color:#0000FF;align:center;">Multi-dimensional Key Array - Output using var_dump</h4><br/>';
        var_dump($multiDimensionArray);
        echo '<h4 style="color:#0000FF;align:center;">Multi-dimensional Key Array - Output using foreach</h4>';
        foreach($multiDimensionArray as $key=> $value) {
            echo '<br/>Level '.$key.' key= '.$key .'<br/>';
            foreach($value as $level)
            {
                echo 'Level '.$key.' key: '.$key.' value: '.$level.' Data type: '.gettype($level).'<br/>';
            } 
        } 
        ?>
        </div>
        <?php include 'Footer.php';?>
    </body>
</html>