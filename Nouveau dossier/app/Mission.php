<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

/**
 * Class Mission
 *
 * @package App
 * @property string $objet
 * @property string $location
 * @property string $date_deb
 * @property string $date_fin
 * @property string $piece_jointe
 * @property text $description
 * @property string $itineraire
 * @property string $progression
 * @property string $stat
 * @property string $latitude
 * @property string $longitude
*/
class Mission extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    protected $fillable = ['objet', 'location', 'date_deb', 'date_fin', 'piece_jointe', 'description', 'itineraire', 'progression', 'latitude', 'longitude', 'stat_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Mission::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateDebAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['date_deb'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['date_deb'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateDebAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format') . ' H:i:s');

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('app.date_format') . ' H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateFinAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['date_fin'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['date_fin'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateFinAttribute($input)
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
    public function setStatIdAttribute($input)
    {
        $this->attributes['stat_id'] = $input ? $input : null;
    }
    
    public function personnel_id()
    {
        return $this->belongsToMany(PersonnelDuBngrc::class, 'mission_personnel_du_bngrc')->withTrashed();
    }
    
    public function materiel_id()
    {
        return $this->belongsToMany(Asset::class, 'asset_mission');
    }
    
    public function stat()
    {
        return $this->belongsTo(StatutMission::class, 'stat_id');
    }
    
}
