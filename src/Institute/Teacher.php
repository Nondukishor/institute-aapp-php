<?php
namespace Pondit\Institute;

class Teacher
{
    public $name;
    public $post;
    public $education;
    public $institute;

    public function techer($name,$post,$education,$institute){
       echo "Name: ".$this->name=$name;
        echo "Post: ".$this->post=$post;
        echo "Education:".$this->education=$education;
        echo "institue: ".$this->institute=$institute;
    }
}