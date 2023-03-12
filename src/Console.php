<?php

namespace amstedmaxion;

class Console
{
    public function consoleLog(string $message)
    {
        echo "<script>console.log('{$message}');</script>";
    }
}
