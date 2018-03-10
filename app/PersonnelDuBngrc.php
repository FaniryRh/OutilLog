<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PersonnelDuBngrc
 *
 * @package App
 * @property string $photo
 * @property string $fonction
 * @property string $nom_prenom
 * @property string $tel
 * @property string $tel2
 * @property string $email
 * @property string $adresse
 * @property string $date_embauche
 * @property string $statut
 * @property string $latitude
 * @property string $longitude
*/
class PersonnelDuBngrc extends Model
{
    use SoftDeletes;

    protected $fillable = ['photo', 'fonction', 'nom_prenom', 'tel', 'tel2', 'email', 'adresse', 'date_embauche', 'latitude', 'longitude', 'statut_id'];
    
    
    public static function boot()
    {
        parent::boot();

        PersonnelDuBngrc::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateEmbaucheAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['date_embauche'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['date_embauche'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateEmbaucheAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setStatutIdAttribute($input)
    {
        $this->attributes['statut_id'] = $input ? $input : null;
    }
    
    public function competence_formation()
    {
        return $this->belongsToMany(CompetanceFormation::class, 'competance_formation_personnel_du_bngrc');
    }
    
    public function capacites()
    {
        return $this->belongsToMany(Capacite::class, 'capacite_personnel_du_bngrc');
    }
    
    public function statut()
    {
        return $this->belongsTo(StatutPersonnel::class, 'statut_id');
    }
    
}
