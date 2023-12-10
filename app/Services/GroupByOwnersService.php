<?php
// GroupByOwnersService.php
namespace App\Services;

class GroupByOwnersService
{
    public function groupByOwners($files)
    {
        $result = [];

        foreach ($files as $file => $owner) {
            // Convert the key to a string to ensure it's a valid array key
            $key = is_object($file) ? spl_object_hash($file) : (string) $file;
            
            if (!isset($result[$key])) {
                $result[$key] = [];
            }

            $result[$key][] = $owner;
        }

        return $result;
    }
}


