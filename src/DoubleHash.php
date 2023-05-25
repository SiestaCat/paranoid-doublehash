<?php 

namespace Paranoid\DoubleHash;

class DoubleHash
{
    /**
     * Hash data with all algos
     * @param string $data 
     * @param bool $raw_output 
     * @return string 
     */
    public static function hash(string $data, bool $raw_output = false):string
    {
        $values = [];

        foreach(hash_algos() as $algo)
        {
            $values[] = hash($algo, $data, $raw_output);
        }

        return join('-', $values);
    }
}