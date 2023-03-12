<?php

namespace amstedmaxion;

class Console
{
    public function consoleLog(string $message)
    {
        $sum = array_sum([1, 2, 3]);
        echo "<script>console.log('{$message} {$sum}');</script>";
    }
}
