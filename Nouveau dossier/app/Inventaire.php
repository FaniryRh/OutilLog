<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Inventaire
 *
 * @package App
 * @property string $date
 * @property string $mission
 * @property string $stock
 * @property double $quantite
 * @property string $unite
 * @property string $destination
 * @property string $latitude
 * @property string $longitude
*/
class Inventaire extends Model
{
    protected $fillable = ['date', 'quantite', 'unite', 'destination', 'latitude', 'longitude', 'mission_id', 'stock_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Inventaire::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['date'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateAttribute($input)
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
    public function setMissionIdAttribute($input)
    {
        $this->attributes['mission_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setStockIdAttribute($input)
    {
        $this->attributes['stock_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setQuantiteAttribute($input)
    {
        if ($input != '') {
            $this->attributes['quantite'] = $input;
        } else {
            $this->attributes['quantite'] = null;
        }
    }
    
    public function mission()
    {
        return $this->belongsTo(Mission::class, 'mission_id')->withTrashed();
    }
    
    public function stock()
    {
        return $this->belongsTo(ListeStock::class, 'stock_id');
    }
    
    public function materiel_id()
    {
        return $this->belongsToMany(Asset::class, 'asset_inventaire');
    }
    
    public function responsable_id()
    {
        return $this->belongsToMany(PersonnelDuBngrc::class, 'inventaire_personnel_du_bngrc')->withTrashed();
    }
    
}
