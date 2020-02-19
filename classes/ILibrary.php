<?php
namespace main\classes;

//interface one

// Note:  the library may contain many classes for different items such as (books, Stories, articles, journals, etc), so we can use an interface to implement the same functionality...

interface ILibrary
{
    public function readAllData();
    public function create($fields);
    public function readOnce($id);
    public function update($fields, $id);
    public function delete($id);

}
?>
