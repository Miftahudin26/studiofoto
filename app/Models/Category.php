<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id_user',
        'name_category',
    ];


    // pemnaggilan data name pakai ORM harus lewat category modelnya langhsung
    public function user() {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

}
