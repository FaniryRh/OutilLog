<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GroupeSectoriel
 *
 * @package App
 * @property string $name
*/
class GroupeSectoriel extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];
    
    public static function boot()
    {
        parent::boot();

        GroupeSectoriel::observe(new \App\Observers\UserActionsObserver);
    }
    
    public function listeGroupeSectoriel() {
        return $this->hasMany(ListeGroupeSectoriel::class, 'groupe_sectoriel_id');
    }
}
