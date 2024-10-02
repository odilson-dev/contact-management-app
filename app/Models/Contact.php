<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = "contacts";

    protected $fillable = ["name", "phone_number", "user_id"];
    public function user()
{
    return $this->belongsTo(User::class);
}

}
