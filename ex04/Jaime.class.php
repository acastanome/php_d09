<?php

Class Jaime extends Lannister{

    public function sleepWith($name) {
        if ($name instanceof Tyrion)
            echo 'Not even if I\'m drunk !' . PHP_EOL;
        else if ($name instanceof Cersei)
            echo 'With pleasure, but only in a tower in Winterfell, then.' . PHP_EOL;
        else if ($name instanceof Sansa)
            echo 'Let\'s do this.' . PHP_EOL;
    }
}
?>