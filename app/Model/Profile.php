<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model {

    protected $table = 'profiles';
    protected $fillable = ['user_id', 'city', 'district'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
