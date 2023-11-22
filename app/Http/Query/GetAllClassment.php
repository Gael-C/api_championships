<?php

namespace App\Http\Query;

use App\Models\Classment;
use Illuminate\Database\Eloquent\Collection;

class GetAllClassment
{
    public  function get():Collection
    {
        return Classment::with('team','league')->get();
    }
}
