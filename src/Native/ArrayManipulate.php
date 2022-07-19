<?php

declare(strict_types=1);

namespace SnoopyCloud\Utility\Native;

class ArrayManipulate
{
    /**
     * Converte valores de um array de: `null` para: string vazia
     *
     * @return void
     */
    public static function nullToEmpty(array &$arrayData)
    {
        array_walk_recursive($arrayData, function (&$item, $key) {
            $item = null === $item ? '' : $item;
        });
    }
}