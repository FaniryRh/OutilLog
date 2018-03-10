<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unite
 *
 * @package App
 * @property string $nom
*/
class Unite extends Model
{
    protected $fillable = ['nom'];
    
    
    public static function boot()
    {
        parent::boot();

        Unite::observe(new \App\Observers\UserActionsObserver);
    }
    
}
