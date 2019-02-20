<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use DB;

class Access extends Model
{

    public function getUsersByID($id){
        return DB::table('accesses')
            ->where('ProjectID', $id)
            ->join('users', 'accesses.UserID', '=', 'users.id')
            ->join('projects', 'accesses.ProjectID', '=', 'projects.id')
            ->select('users.name as Пользователь', 'projects.project as Проект')
            ->get();
    }

    public function getProjectsByID($id){
        return DB::table('accesses')
            ->where('UserID', $id)
            ->join('projects', 'accesses.ProjectID', '=', 'projects.id')
            ->join('users', 'accesses.UserID', '=', 'users.id')
            ->select('projects.project as Проект', 'users.name as Пользователь')
            ->get();
    }
}
