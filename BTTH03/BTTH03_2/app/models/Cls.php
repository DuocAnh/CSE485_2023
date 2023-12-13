<?php
class Cls
{
    // Properties
    private $id;
    private $tenLop;

    // Method

    public function __construct($id, $tenLop)
    {
        $this->id = $id;
        $this->tenLop = $tenLop;
    }

    // Getters/Setters
    public function getId()
    {
        return $this->id;
    }
    public function getTenLop()
    {
        return $this->tenLop;
    }
    public function setTenLop($tenLop)
    {
        $this->tenLop = $tenLop;
    }
}
