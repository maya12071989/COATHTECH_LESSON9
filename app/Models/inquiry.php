<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inquiry extends Model
{
    use HasFactory;

      public static $rules = array(
        'name' => 'required',
        'email' => 'required|email'
    );
     public static function create($name, $email)
    {
        $param = [
            'name' => $name,
            'email' => $email,
         ];
        \DB::table('inquiries')->insert($param);
        return;
    }
}
