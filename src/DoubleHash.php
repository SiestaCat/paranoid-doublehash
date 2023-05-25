<?php 

namespace Paranoid\DoubleHash;

class DoubleHash
{
    /**
     * Hash data with all algos
     * @param string $algo 
     * @param string $data 
     * @param bool $raw_output 
     * @return string 
     */
    public static function hash(string $algo, string $data, bool $raw_output = false):string
    {
        $values = [];

        foreach(hash_algos() as $hash_algo)
        {
            $values[] = hash($hash_algo, $data, $raw_output);
        }

        return join('-', $values);
    }
}