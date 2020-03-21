<?php

unset($argv[0]);
$argv = array_values($argv);

$strings = implode(" ", array_merge($argv));

$do_caps = ctype_upper($strings[0]);
$string2 = '';
for ($i = 0; $i < strlen($strings); $i++)
{
    $char = substr($strings, $i, 1);
    if (stripos('abcdefghijklmnopqrstuvwxyz', $char) !== false)
    {
        if ($do_caps)
        {
            $char = strtoupper($char);
            $do_caps = false;
        }
        else
        {
            $do_caps = true;
        }
    }
    $string2 .= $char;
}

echo $string2."\n";