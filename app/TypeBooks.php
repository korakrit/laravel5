<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBooks extends Model
{
    protected $table = 'typebooks';

   public function books() {
        return $this->hasMany(Books::class); //กำหนดความสัมพันธ์รูปแบบ One To Many ไปยังตาราง books
    }
}
