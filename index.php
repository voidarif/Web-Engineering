

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>
<body>



<?php

class Add{
    public $num1;
    public $num2;
    public $total;

    function set_num($num1, $num2)
    {
        $this->num1=$num1;
        $this->num2=$num2;
    }

    function get_num()
    {
        $this->total= $this->num1 + $this->num2;
        return $this->total;
    }

}

$a=new Add();
$a->set_num(12,13);

echo $a->get_num();

?>

<form method="post">
    <input type="number" name="num1">
    <input type="number" name="num2">
    <input type="submit" name="add" value="+"> 
</form>

    
</body>
</html>


