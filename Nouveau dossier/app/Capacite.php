<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Capacite
 *
 * @package App
 * @property string $titre
 * @property text $description
 * @property string $piece_jointe
*/
class Capacite extends Model
{
    protected $fillable = ['titre', 'description', 'piece_jointe'];
    
    
    public static function boot()
    {
        parent::boot();

        Capacite::observe(new \App\Observers\UserActionsObserver);
    }
    
}
