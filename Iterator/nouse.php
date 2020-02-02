<?php

/**
 * ユーザークラス
 */
class User
{
    protected $name;
    protected $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

/**
 * 名簿クラス
 */
class Roster
{
    protected $userList = [];

    public function setUserList($user)
    {
        $this->userList[] = $user;
    }

    public function getUserList()
    {
        return $this->userList;
    }
}

$roster = new Roster();
$roster->setUserList(new User('name01', 20));
$roster->setUserList(new User('name02', 21));
$roster->setUserList(new User('name03', 25));
$roster->setUserList(new User('name04', 28));

foreach($roster->getUserList() as $user) {
    echo sprintf('%s (%d)', $user->getName(), $user->getAge());
    echo "\n";
}