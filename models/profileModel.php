<?php
class ProfileModel extends Model
{
    public function __construct()
    {
        echo "Profile model was called...";
    }

    public function xhrInsert()
    {
        echo $_POST['text'];
    }
}