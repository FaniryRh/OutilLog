<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Sortie
 *
 * @package App
 * @property string $parsonnel
 * @property string $stock
 * @property double $quantite
 * @property string $unite
 * @property text $motif
 * @property string $mission
 * @property string $date
 * @property string $dateheurfin
 * @property string $statut
 * @property string $reponsable_sortie
 * @property string $location
*/
class Sortie extends Model
{
    protected $fillable = ['quantite', 'unite', 'motif', 'date', 'dateheurfin', 'reponsable_sortie', 'location_address', 'location_latitude', 'location_longitude', 'parsonnel_id', 'stock_id', 'mission_id', 'statut_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Sortie::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setParsonnelIdAttribute($input)
    {
        $this->attributes['parsonnel_id'] = $input ? $input : null;
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

    /**
     * Set to null if empty
     * @param $input
     */
    public function setMissionIdAttribute($input)
    {
        $this->attributes['mission_id'] = $input ? $input : null;
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
     * Set attribute to date format
     * @param $input
     */
    public function setDateheurfinAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['dateheurfin'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['dateheurfin'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateheurfinAttribute($input)
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
    
    public function parsonnel()
    {
        return $this->belongsTo(PersonnelDuBngrc::class, 'parsonnel_id')->withTrashed();
    }
    
    public function stock()
    {
        return $this->belongsTo(ListeStock::class, 'stock_id');
    }
    
    public function mission()
    {
        return $this->belongsTo(Mission::class, 'mission_id')->withTrashed();
    }
    
    public function statut()
    {
        return $this->belongsTo(StatusSortie::class, 'statut_id');
    }
    
}
