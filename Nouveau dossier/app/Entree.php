<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Entree
 *
 * @package App
 * @property string $date
 * @property string $stock
 * @property double $quantite
 * @property string $unite
 * @property text $motif
*/
class Entree extends Model
{
    protected $fillable = ['date', 'quantite', 'unite', 'motif', 'stock_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Entree::observe(new \App\Observers\UserActionsObserver);
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
    
    public function stock()
    {
        return $this->belongsTo(ListeStock::class, 'stock_id');
    }
    
}
