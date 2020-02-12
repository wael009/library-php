<?php

//interface one
// ----------  notes -------------- //
// the library will contain many items like (books, Stories, articles, journals, etc), so we can use it as an interface for them...

interface ILibrary
{
    public function create(id, title, author, publisher);
    public function readAllData();
    public function readOnce();
    public function update();
    public function delete();

}


?>
