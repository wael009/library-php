<? php

// add interface for the user to make the ability to give other user to add, delete or check other users in the database
interface IuserDbh
{
    public function addUser()
    public function deleteUser()
    public function checkUser()
}




?>