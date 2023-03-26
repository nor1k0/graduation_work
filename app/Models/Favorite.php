<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = [
    // 'title','s1_title','s1_body','s1_img','s1_img_name',
    // 's2_title','s2_body','s2_img','s2_img_name',
    // 's3_title','s3_body','s3_img','s3_img_name',
    // 's4_title','s4_body','s4_img','s4_img_name',
    // 's5_title','s5_title','s5_img','s5_img_name',
    // 'flag_open','favorite','user_id'
    ]; //これを追加！
    
    protected $table = 'favorite';
    
    // public function favorite()
    // {
    //     return $this->belongsToMany(User::class, 'favorite')->withTimestamps();
    // }
}
