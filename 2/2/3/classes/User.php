<?php

class User extends DataRecordModel
{
    public $name;
    public $email;
    public $password;
    public $rate;

    public function displaySortedList()
    {
        $user = new User;
        $user->data()->newQuery()->orderBy('name')->getObjs();
        return $user;
    }

    public function addUserFromForm()
    {
        $user = new User;
        $user->create();
        $user->commit();
    }
}