<?php
namespace app\components;

class MyManager extends \yii\rbac\DbManager implements \dektrium\rbac\components\ManagerInterface
{
    public function getItems($type = null, $excludeItems = [])
    {
        // you should implement this method or extend your class from \dektrium\rbac\components\DbManager
    }

    public function getItem($name)
    {
        // you should implement this method or extend your class from \dektrium\rbac\components\DbManager
    }
    public function getItemsByUser($userId)
    {
        // you should implement this method or extend your class from \dektrium\rbac\components\DbManager
    }
    
}

?>