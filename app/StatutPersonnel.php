<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StatutPersonnel
 *
 * @package App
 * @property string $nom
*/
class StatutPersonnel extends Model
{
    protected $fillable = ['nom'];
    
    
    public static function boot()
    {
        parent::boot();

        StatutPersonnel::observe(new \App\Observers\UserActionsObserver);
    }
    
}
