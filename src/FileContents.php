<?php

namespace olcaytaner\Util;

class FileContents
{
    private array $contents;
    private int $filePointer;

    public function __construct(string $fileName)
    {
        $this->filePointer = 0;
        $this->contents = [];
        $fh = fopen($fileName, 'r');
        while ($line = fgets($fh)) {
            $this->contents[] = $line;
        }
        fclose($fh);
    }

    public function readLine(): string
    {
        if ($this->filePointer < count($this->contents)) {
            $s = $this->contents[$this->filePointer];
            $this->filePointer++;
            return $s;
        }
        return "";
    }

    public function hasNextLine(): bool
    {
        return $this->filePointer < count($this->contents);
    }
}