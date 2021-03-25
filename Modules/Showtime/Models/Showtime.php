<?php

namespace Modules\Showtime\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Movie\Models\Movie;
use Modules\Cinema\Models\Cinema;

class Showtime extends Model
{
    use HasFactory;


    /**
     * Relationship to the movie table using movie_id as foriegn key.
     * 
     */
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    /**
     * Relationship to the cinema table using the cinema_id as foreign key.
     */
    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }

    // /**
    //  * Generate showtime for all the vas cinemas.
    //  * 
    //  */
    // public function allShows()
    // {
    //     return $this->with(['cinema', 'movie'])->get();
    // }
}
