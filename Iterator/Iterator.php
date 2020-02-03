<?php

/**
 * Aggregate Interface
 * Interface UserAggregate
 */
interface UsersAggregateInterface
{
    public function createIterator();
}

/**
 * Iterator Interface
 * Interface UserListIterator
 */
interface UserListIteratorInterface
{
    public function hasNext();

    public function next();
}

/**
 * Iterator Class
 * Class UserListIterator
 */
class UserListIterator implements UserListIteratorInterface
{
    private $users;
    private $position = 0;

    function __construct($users)
    {
        $this->users = $users;
    }

    public function hasNext()
    {
        return isset($this->users[$this->position]);
    }

    public function next()
    {
        // return $this->users[$this->position++];
        $user = $this->users[$this->position++];
        return $user;
    }
}

/**
 * 集約オブジェクト
 * Aggregate Class
 * Class UserAggregate
 */
class UsersAggregate implements UsersAggregateInterface
{
    private $userList;

    function __construct($users)
    {
        $this->userList = $users;
    }

    public function addUsersList($user)
    {
        $this->userList[] = $user;
    }

    public function getUserList()
    {
        return $this->userList;
    }

    public function createIterator()
    {
        return new UserListIterator($this->userList);
    }
}

/**
 * クライアント
 * Client Class
 * Class RosterClient
 */
class RosterClient
{
    private $userIterator;

    function __construct(UsersAggregateInterface $user_list)
    {
        $this->userIterator = $user_list->createIterator();
    }

    function getUsers()
    {
        while ($this->userIterator->hasNext()) {
            $user = $this->userIterator->next();
            // echo sprintf('%s', $user);
            echo sprintf('%s (%d)', $user['name'], $user['age']);
            echo "\n";
        }
    }
}

// $users = ["name01", "name02", "name03", "name04", "name05"];
$users = [
    [ "name" => "name01", "age" => 20 ],
    [ "name" => "name02", "age" => 21 ],
    [ "name" => "name03", "age" => 23 ],
    [ "name" => "name04", "age" => 25 ]
];

$list = new RosterClient(new UsersAggregate($users));
echo $list->getUsers();