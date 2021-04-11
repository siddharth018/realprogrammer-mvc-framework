<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 */

class User extends \System\Model
{
    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        
        $stmt = $db->query('SELECT id, name, email FROM users');
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
