<?php
require_once APP_ROOT . '/app/services/StudentService.php';
require_once APP_ROOT . '/app/services/ClsService.php';
class HomeController
{
    public function index()
    {
        // Gói dữ liệu từ StudentService

        // Render dữ liệu được lấy ra từ HomePage
        include APP_ROOT . '/app/views/home/index.php';
    }
    public function GetListStudent()
    {
        // Gói dữ liệu từ StudentService
        $studentService = new StudentService();
        $students = $studentService->getAllStudents();
        // Render dữ liệu được lấy ra từ HomePage
        require APP_ROOT . "/app/views/Student/index.php";
    }
    public function addStudent()
    {
        // Gói dữ liệu từ StudentService

        // Render dữ liệu được lấy ra từ HomePage
        require APP_ROOT . "/app/views/Student/addStudent.php";
    }
    public function GetListClass()
    {
        // Gói dữ liệu từ ClsService
        $clsService = new ClsService();
        $clss = $clsService->getAllClass();

        // Render dữ liệu được lấy ra từ HomePage
        require APP_ROOT . "/app/views/Cls/index.php";
    }
}
