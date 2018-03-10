<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ListeGroupeSectoriel
 *
 * @package App
 * @property string $groupe_sectoriel
 * @property string $nom_prenom
 * @property string $organisme
 * @property string $fonction
 * @property string $tel
 * @property string $email
*/
class ListeGroupeSectoriel extends Model
{
    use SoftDeletes;

    protected $fillable = ['nom_prenom', 'fonction', 'tel', 'email', 'groupe_sectoriel_id', 'organisme_id'];
    
    public static function boot()
    {
        parent::boot();

        ListeGroupeSectoriel::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setGroupeSectorielIdAttribute($input)
    {
        $this->attributes['groupe_sectoriel_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setOrganismeIdAttribute($input)
    {
        $this->attributes['organisme_id'] = $input ? $input : null;
    }
    
    public function groupe_sectoriel()
    {
        return $this->belongsTo(GroupeSectoriel::class, 'groupe_sectoriel_id')->withTrashed();
    }
    
    public function organisme()
    {
        return $this->belongsTo(ContactCompany::class, 'organisme_id');
    }
    
}
