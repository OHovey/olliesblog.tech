<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Blog extends Model
{
    protected $fillable = ['title', 'body', 'keywords'];

    public function get_home_display($blogs, $index_start = 0)
    {

        $col_1 = [];
        $col_2 = [];
        $col_3 = [];

        if (($index_start + 20) <= count($blogs)) 
        { 
            $index_end = $index_start + 20; 
        } 
        else 
        { 
            $index_end = count($blogs); 
        }

        for ($i = $index_start; $i < $index_end; $i++)
        {
            if ($i == 0)
            {
                array_push($col_1, $blogs[$i]);
            }
            elseif ($i == 1) {
                array_push($col_2, $blogs[$i]);
            }
            elseif ( $i % 3 == 0 )
            {
                array_push($col_3, $blogs[$i - 1]);
            }
            elseif ( ( $i + 1 ) % 3 == 0 )
            {
                array_push($col_2, $blogs[$i - 1]);
            }
            elseif ( ( $i + 2 ) % 3 == 0 )
            {
                array_push($col_1, $blogs[$i - 1]);
            }

        }

        return [$col_1, $col_2, $col_3];

    }


    function scopeFilter($query, $filters)
    {

        if ($month = $filters['month'])
        {

            $query->whereMonth('created_at', Carbon::parse($month)->month);

        }

        if ($year = $filters['year'])
        {

            $query->whereYear('created_at', $year);

        }

    }

    function comments()
    {

        return $this->hasMany(Comment::class);

    }

    
}
