<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
    * Display a list of users.
    *
    * @return \Illuminate\Http\Response
    */
    public function students($value='')
    {
        $students = new students();
        return $students;
    }
    public function allstudents()
    {
        return $this->students()->getAllStudents();
    }
    public function getStudentAchievements()
    {
        return $this->students()->getStudentAchievements(session('token')[0]['apiKey']);
    }
    public function getStudentInfo()
    {
        return $this->students()->getStudentInfo(session('token')[0]['apiKey']);
    }
    public function getStudentRank()
    {
        return $this->students()->getStudentRank(session('token')[0]['apiKey']);
    }

}
