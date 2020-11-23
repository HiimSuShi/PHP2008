<?php
interface Animal
{
    public function getName();
}

interface Buffalo
{
    public function checkHorn();
}

class TheCalf implements Animal, Buffalo
{
    private $name;
    const HORN = false;
    public function getName()
    {
        return $this->name;
    }
    public function checkHorn()
    {
        return self::HORN;
    }
}
$test = new TheCalf();
$a= $test->checkHorn();
echo "$a";
// var_dump($a)
?>
