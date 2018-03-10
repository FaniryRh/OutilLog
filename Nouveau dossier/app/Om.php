<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Om
 *
 * @package App
 * @property string $mission
 * @property string $ordonnee_a
 * @property string $destination
 * @property string $itineraire
 * @property string $depart
 * @property integer $duree
 * @property string $fichier_om
 * @property string $etat
 * @property string $rapport_de_mission
 * @property string $remise_rapport
 * @property string $etat_rapport_de_mission
*/
class Om extends Model
{
    protected $fillable = ['destination', 'itineraire', 'depart', 'duree', 'fichier_om', 'rapport_de_mission', 'remise_rapport', 'mission_id', 'ordonnee_a_id', 'etat_id', 'etat_rapport_de_mission_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Om::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setMissionIdAttribute($input)
    {
        $this->attributes['mission_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setOrdonneeAIdAttribute($input)
    {
        $this->attributes['ordonnee_a_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDepartAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['depart'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['depart'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDepartAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format') . ' H:i:s');

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('app.date_format') . ' H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDureeAttribute($input)
    {
        $this->attributes['duree'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEtatIdAttribute($input)
    {
        $this->attributes['etat_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setRemiseRapportAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['remise_rapport'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['remise_rapport'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getRemiseRapportAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format') . ' H:i:s');

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('app.date_format') . ' H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEtatRapportDeMissionIdAttribute($input)
    {
        $this->attributes['etat_rapport_de_mission_id'] = $input ? $input : null;
    }
    
    public function mission()
    {
        return $this->belongsTo(Mission::class, 'mission_id')->withTrashed();
    }
    
    public function ordonnee_a()
    {
        return $this->belongsTo(PersonnelDuBngrc::class, 'ordonnee_a_id')->withTrashed();
    }
    
    public function prise_en_charge()
    {
        return $this->belongsToMany(ContactCompany::class, 'contact_company_om');
    }
    
    public function etat()
    {
        return $this->belongsTo(EtatOm::class, 'etat_id');
    }
    
    public function etat_rapport_de_mission()
    {
        return $this->belongsTo(EtatRapportOm::class, 'etat_rapport_de_mission_id');
    }
    
}
