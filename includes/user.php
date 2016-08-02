<?php

require_once(LIB_PATH . DS . 'database.php');

$database = new MySQLDatabase;

class User {

    protected static $table_name = "user";
    protected static $db_fields = array('ID', 'full_name', 'username',
        'password', 'mail', 'DOB', 'gender', 'status', 'type_ID');
    public $ID;
    public $full_name;
    public $username;
    public $password;
    public $mail;
    public $DOB;
    public $gender;
    public $status;
    public $type_ID;

    public static function authenticate($username = "", $password = "")
    {
        global $database;
        $username = $database->escape_value($username);
        $password = $database->escape_value($password);

        $sql = "SELECT * FROM user ";
        $sql .= "WHERE username = '{$username}' ";
        $sql .= "AND password = '{$password}' ";
        $sql .= "LIMIT 1";

        $result_array = self::find_by_sql($sql);
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    // Common Database Methods
    public static function find_all()
    {
        return self::find_by_sql("SELECT * FROM " . self::$table_name);
    }

    public static function find_by_id($id = 0)
    {
        $result_array = self::find_by_sql("SELECT * FROM " . self::$table_name . " WHERE id={$id} LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function find_by_username($username = "")
    {
        $result_array = self::find_by_sql("SELECT * FROM " . self::$table_name . " WHERE username='{$username}' LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function find_by_mail($mail = "")
    {
        $result_array = self::find_by_sql("SELECT * FROM " . self::$table_name . " WHERE mail='{$mail}' LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function find_by_sql($sql = "")
    {
        global $database;
        $result_set = $database->query($sql);
        $object_array = array();
        while ($row = $database->fetch_array($result_set))
        {
            $object_array[] = ($row);
        }
        return $object_array;
    }

    public static function count_all()
    {
        global $database;
        $sql = "SELECT COUNT(*) FROM " . self::$table_name;
        $result_set = $database->query($sql);
        $row = $database->fetch_array($result_set);
        return array_shift($row);
    }

    private static function instantiate($record)
    {
        // Could check that $record exists and is an array
        $object = new self;
        foreach ($record as $attribute => $value)
        {
            if ($object->has_attribute($attribute))
            {
                $object->$attribute = $value;
            }
        }
        return $object;
    }

    private static function has_attribute($attribute)
    {
        return array_key_exists($attribute, self::attributes());
    }

    protected function attributes($user)
    {
        // return an array of attribute names and their values
        $attributes = array();
        foreach (self::$db_fields as $field)
        {
            if (property_exists($user, $field))
            {
                $attributes[$field] = $user->$field;
            }
        }
        return $attributes;
    }

    protected function sanitized_attributes($user)
    {
        global $database;
        $clean_attributes = array();
        foreach (self::attributes($user) as $key => $value)
        {
            $clean_attributes[$key] = $database->escape_value($value);
        }
        return $clean_attributes;
    }

    public static function create($user)
    {
        global $database;
        $attributes = array_filter(self::sanitized_attributes($user));
        $sql = "INSERT INTO " . self::$table_name . " (";
        $sql .= join(", ", array_keys($attributes));
        $sql .= ") VALUES ('";
        $sql .= join("', '", array_values($attributes));
        $sql .= "')";
        if ($database->query($sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function update()
    {
        global $database;
        // Don't forget your SQL syntax and good habits:
        // - UPDATE table SET key='value', key='value' WHERE condition
        // - single-quotes around all values
        // - escape all values to prevent SQL injection
        $attributes = $this->sanitized_attributes();
        $attribute_pairs = array();
        foreach ($attributes as $key => $value)
        {
            $attribute_pairs[] = "{$key}='{$value}'";
        }
        $sql = "UPDATE " . self::$table_name . " SET ";
        $sql .= join(", ", $attribute_pairs);
        $sql .= " WHERE id=" . $database->escape_value($this->id);
        $database->query($sql);
        return ($database->affected_rows() == 1) ? true : false;
    }

    public function delete()
    {
        global $database;
        // Don't forget your SQL syntax and good habits:
        // - DELETE FROM table WHERE condition LIMIT 1
        // - escape all values to prevent SQL injection
        // - use LIMIT 1
        $sql = "DELETE FROM " . self::$table_name;
        $sql .= " WHERE id=" . $database->escape_value($this->id);
        $sql .= " LIMIT 1";
        $database->query($sql);
        return ($database->affected_rows() == 1) ? true : false;

        // NB: After deleting, the instance of User still 
        // exists, even though the database entry does not.
        // This can be useful, as in:
        //   echo $user->first_name . " was deleted";
        // but, for example, we can't call $user->update() 
        // after calling $user->delete().
    }

}

?>