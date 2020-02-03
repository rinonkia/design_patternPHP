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
        return $this->users[$this->position++];
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
            echo sprintf('%s', $user);
            echo "\n";
        }
    }
}

$users = ["name01", "name02", "name03", "name04", "name05"];
$list = new RosterClient(new UsersAggregate($users));

echo $list->getUsers();