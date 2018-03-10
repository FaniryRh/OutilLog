<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StatusSortie
 *
 * @package App
 * @property string $nom
*/
class StatusSortie extends Model
{
    protected $fillable = ['nom'];
    
    
    public static function boot()
    {
        parent::boot();

        StatusSortie::observe(new \App\Observers\UserActionsObserver);
    }
    
}
