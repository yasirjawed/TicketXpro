<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable=[
        'category_id',
        'name',
        'slug',
        'description',
        'yt_iframe',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'active_status',
        'status_remarks',
        'status',
        'rejected',
        'created_by'
        ];
        public function category(){
            return $this->belongsTo(Category::class,'category_id','id');
        }
        public function user(){
            return $this->belongsTo(User::class,'created_by','id');
        }
}
