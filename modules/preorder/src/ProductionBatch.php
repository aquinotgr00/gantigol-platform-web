<?php

namespace Modules\Preorder;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Preorder\Production;
use DB;

class ProductionBatch extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pre_order_id',
        'status',
        'batch_name',
        'batch_qty',
        'start_production_date',
        'end_production_date',
        'notes',
    ];

    /**
     * productions relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getProductions()
    {
        return $this->hasMany(Production::class);
    }
    /**
     *
     *
     * @param   string  $name
     *
     * @return  array
     */
    public static function getPossibleEnumValues(string $name)
    {
        $instance = new static; // create an instance of the model to be able to get the table name
        $query = 'SHOW COLUMNS FROM ' . $instance->getTable() . ' WHERE Field = "' . $name . '"';
        $type = DB::select(DB::raw($query))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach (explode(',', $matches[1]) as $value) {
            $v = trim($value, "'");
            $enum[] = $v;
        }
        return $enum;
    }
    /**
     * Pre Order relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function preOrder()
    {
        return $this->belongsTo('\Modules\Preorder\PreOrder');
    }
}
