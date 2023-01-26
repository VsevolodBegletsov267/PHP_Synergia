<?php
    $str = 'ahb acb aeb aeeb adcb axeb';
    echo preg_replace('#a.b#', '!', $str);
    echo '<br>';
    $str = 'aa aba abba abbba abca abea';
    echo preg_replace('#ab*a#', '!', $str);
    echo '<br>';
    $str = 'aa aba abba abbba abca abea';
    echo preg_replace('#ab?a#', '!', $str);
    echo '<br>';
    $str = 'ab abab abab abababab abea';
    echo preg_replace('#(ab)+#', '!', $str);
    echo '<br>';
    $str = '23 2+3 2++3 2+++3 345 567';
    echo preg_replace('#2\++3#', '!', $str);
    echo '<br>';
    $str = 'aa aba abba abbba abbbba abbbbba';
    echo preg_replace('#ab{4,}a#', '!', $str);
?>