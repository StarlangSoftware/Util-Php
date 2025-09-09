<?php

namespace olcaytaner\Util;

class FileUtils
{
    public static function readHashMap(string $fileName): array
    {
        $result = [];
        $fh = fopen($fileName, 'r');
        while ($line = fgets($fh)) {
            $list = explode(" ", trim($line));
            if (count($list) == 2) {
                $result[$list[0]] = $list[1];
            }
        }
        fclose($fh);
        return $result;
    }
}