<?php

namespace App\Repositories;

use App\Models\CRUD;

class CRUDRepository
{
    public function create($data)
    {
        return CRUD::create($data);
    }

    public function find($id)
    {
        return CRUD::find($id);
    }

    public function index()
    {
        return CRUD::get();
    }

    public function update($id,$data)
    {
        $post=CRUD::find($id);
        if(!$post){
            return false;
        }
        return $post->update($data);
    }

    public function delete($id)
    {
        $post=CRUD::find($id);
        return $post ? $post->delete() : false;
    }
}