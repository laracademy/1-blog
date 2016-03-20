<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'slug', 'is_published', 'published_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['published_at'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_published' => 'boolean',
    ];

    // Query Scope
    public function scopeGetPost($query, $slug)
    {
        $slug = str_slug($slug);

        return $query->where('is_published', true)->where('slug', $slug);
    }

    // helper
    public function publishPost()
    {
        $this->is_published = true;
        $this->published_at = Carbon::now();
        $this->save();
    }

    public function unpublishPost()
    {
        $this->is_published = false;
        $this->save();
    }
}
