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
 * いてラータの共通処理
 * Trait SuerUserList
 */
trait SuperUserList
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
}

/**
 * 名前のみを返すイテレータ
 * Iterator Class
 * Class UserListNameIterator
 */
class UserListNameIterator implements UserListIteratorInterface
{
    use SuperUserList;

    public function next()
    {
        return $this->users[$this->position++];
    }
}

/**
 * 名前と年齢を返すイテレータ
 * Iterator Class
 * Class UserListIterator
 */
class UserListIterator implements UserListIteratorInterface
{
    use SuperUserList;

    public function next()
    {
        $user = $this->users[$this->position++];
        return sprintf('%s (%d)', $user['name'], $user['age']);
    }
}

/**
 * 集約オブジェクトの共通処理
 * Trait SuperUserAggregate
 */
trait SuperUsersAggregate
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
}

/**
 * 実体 集約オブジェクト
 */
class UsersNameAggregate implements UsersAggregateInterface
{
    use SuperUsersAggregate;

    public function createIterator()
    {
        return new UserListNameIterator($this->userList);
    }
}

class UsersAggregate implements UsersAggregateInterface
{
    use SuperUsersAggregate;

    public function createIterator()
    {
        return new UserListIterator($this->userList);
    }
}

/**
 * クライアント
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
            echo $user;
            echo "\n";
        }
    }
}

$users01 = ["name01", "name02", "name03", "name04"];
$users02 = [
    ["name" => "name01", "age" => 21],
    ["name" => "name02", "age" => 23],
    ["name" => "name03", "age" => 25],
    ["name" => "name04", "age" => 25]
];

$list = new RosterClient(new UsersNameAggregate($users01));

echo $list->getUsers();

$list = new RosterClient(new UsersAggregate($users02));

echo $list->getUsers();