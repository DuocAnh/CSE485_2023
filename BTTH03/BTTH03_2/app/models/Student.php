<?php
class Student
{
    // Properties
    private $id;
    private $tenSinhVien;
    private $email;
    private $ngaySinh;
    private $tenLop;

    // Method

    public function __construct($id, $tenSinhVien, $email, $ngaySinh, $tenLop)
    {
        $this->id = $id;
        $this->tenSinhVien = $tenSinhVien;
        $this->email = $email;
        $this->ngaySinh = $ngaySinh;
        $this->tenLop = $tenLop;
    }

    // Getters/Setters
    public function getId()
    {
        return $this->id;
    }
    public function getTenSinhVien()
    {
        return $this->tenSinhVien;
    }
    public function setTenSinhVien($tenSinhVien)
    {
        $this->tenSinhVien = $tenSinhVien;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getNgaySinh()
    {
        return $this->ngaySinh;
    }
    public function setNgaySinh($ngaySinh)
    {
        $this->$ngaySinh = $ngaySinh;
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
