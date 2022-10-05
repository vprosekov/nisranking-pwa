<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;

    public function rolelist()
    {
        return new rolelist();
    }
    public function categories()
    {
        return new categories();
    }
    /**
    * Get the user that have the student role.
    */
    public function users()
    {
        return $this->belongsTo(users::class);
    }
    /**
     * Get the achievements associated with the student.
     */
    public function achievements()
    {
        return new achievements();
    }
    public function getStudentRank($apiKey)
    {
        $studentId = $this->join('users','users.id','=','students.studentId')
                          ->where('apiKey',$apiKey)
                          ->select('students.studentId as id')
                          ->get();

        $rank = $this->achievements()
                     ->join('categories','categories.categoryId','=','achievements.categoryId')
                     ->where('achievements.studentId',$studentId[0]['id'])
                     ->sum('categories.scores');
        return (int)$rank;
    }
    public function getStudentAchievements($apiKey)
    {
        $student = $this->achievements()
                        ->join('categories','categories.categoryId','=','achievements.categoryId')
                        ->join('users','users.id','=','achievements.studentId')
                        ->select('achievements.*','categories.*')
                        ->where('apiKey',$apiKey)->get();
        return $student;
    }
    public function getStudentInfo($apiKey)
    {
        $student = $this->join('users','students.studentId','=','users.id')
                        ->join('grades','grades.gradeId','=','students.gradeId')
                        ->join('shanyraqs','shanyraqs.id','=','grades.shanyraqId')
                        ->select('users.id','users.photo','users.name','users.iin','gradeName as grade','shanyraqs.name as shanyraqName')
                        ->where('apiKey',$apiKey)->get();
        if(sizeof($student)==0){
          return $student;
        }
        $student[0]['shanyraqRole'] = $this->join('shanyraqleaders','shanyraqleaders.studentId','=','students.studentId')
                                           ->where('students.studentId',$student[0]['id'])
                                           ->count();
        $student[0]['ministerRole'] = $this->join('ministrymembers','ministrymembers.studentId','=','students.studentId')
                                           ->join('ministries','ministrymembers.ministryId','=','ministries.id')
                                           ->where('students.studentId',$student[0]['id'])
                                           ->select('ministrymembers.memberType','ministries.ministryName')
                                           ->get()->toArray();
        $student[0]['clubRole'] = $this->join('clubmembers','clubmembers.studentId','=','students.studentId')
                                           ->join('clubs','clubmembers.clubId','=','clubs.id')
                                           ->where('students.studentId',$student[0]['id'])
                                           ->select('clubmembers.memberType','clubs.clubName')
                                           ->get()->toArray();
        $student[0]['rank']  = $this->getStudentRank($apiKey);
        return $student;
    }
    /**
    * Display all students by id, photo, name and iin from users table
    *
    * @return array
    */
    public function getAllStudents(){
        return $this->join('users','students.studentId','=','users.id')
                    ->join('grades','grades.gradeId','=','students.gradeId')
                    ->join('shanyraqs','shanyraqs.id','=','grades.shanyraqId')
                    ->select('users.id','users.photo','users.name','users.iin','gradeName','shanyraqs.name as shanyraqName')->get();
    }

}
