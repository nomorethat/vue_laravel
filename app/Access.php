<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use DB;

class Access extends Model
{
    /*public function getProjectByID($id){
        return $this->where('ProjectID', $id)->get();
    }*/

    public function getUsersByID($id){
        return DB::table('accesses')
            ->where('ProjectID', $id)
            ->join('users', 'accesses.UserID', '=', 'users.id')
            ->join('projects', 'accesses.ProjectID', '=', 'projects.id')
            ->get();
    }

    /*public function getProjectByID($id){
        return DB::table('projects')->where('id', $id)->get();
    }*/

    public function getProjectsByID($id){
        return DB::table('accesses')
            ->where('UserID', $id)
            ->join('projects', 'accesses.ProjectID', '=', 'projects.id')
            ->join('users', 'accesses.UserID', '=', 'users.id')
            ->get();
    }
}
