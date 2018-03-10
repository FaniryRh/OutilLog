<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StatutMission
 *
 * @package App
 * @property string $name
*/
class StatutMission extends Model
{
    protected $fillable = ['name'];
    
    
    public static function boot()
    {
        parent::boot();

        StatutMission::observe(new \App\Observers\UserActionsObserver);
    }
    
}
