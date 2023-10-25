<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    //Or add Model::unguard() inside the AppServiceProviders file
    protected $fillable = ['title', 'tags', 'company', 'location', 'website','logo' , 'email', 'description'];

    /*Scopefilter  */
    public function scopeFilter($query, array $filters)
    {
        // dd($filters);
        if ($filters[0] ?? false) {
            $query->where('tags', 'like', '%' . $filters[0] . '%');
        }
        if ($filters[1] ?? false) {
            $query->where('tags', 'like', '%' . $filters[1] . '%')
                ->orWhere('title', 'like', '%' . $filters[1] . '%')
                ->orWhere('description', 'like', '%' . $filters[1] . '%');
        }
    }
}
