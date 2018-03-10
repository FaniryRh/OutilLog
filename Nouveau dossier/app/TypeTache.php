<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeTache
 *
 * @package App
 * @property string $nom
*/
class TypeTache extends Model
{
    protected $fillable = ['nom'];
    
    
    public static function boot()
    {
        parent::boot();

        TypeTache::observe(new \App\Observers\UserActionsObserver);
    }
    
}
