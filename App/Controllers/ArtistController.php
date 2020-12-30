<?php

namespace App\Controllers;

use App\Models\ArtistModel;

class ArtistController
{

    public function index()
    {
        $artists = ArtistModel::all();
        dd($artists);
    }

    /**
     * Store a artist record into the database
     */
    public function store()
    {
        
    }

    /**
     * Updates a artist record into the database
     */
    public function update()
    {
        
    }

    /**
     * Archive a artist record into the database
     */
    public function destroy(int $id)
    {

    }

}