<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Deal
 * @package App\Models
 * @version July 25, 2021, 7:19 pm PKT
 *
 * @property string $name
 * @property string $code
 * @property string $type
 * @property string $barcode_symbology
 * @property integer $brand_id
 * @property integer $category_id
 * @property integer $unit_id
 * @property integer $purchase_unit_id
 * @property integer $sale_unit_id
 * @property string $cost
 * @property string $price
 * @property number $qty
 * @property number $alert_quantity
 * @property boolean $promotion
 * @property string $promotion_price
 * @property string $starting_date
 * @property string $last_date
 * @property integer $tax_id
 * @property integer $tax_method
 * @property string $image
 * @property string $file
 * @property boolean $is_variant
 * @property boolean $is_batch
 * @property boolean $is_diffPrice
 * @property boolean $featured
 * @property string $product_list
 * @property string $qty_list
 * @property string $price_list
 * @property string $product_details
 * @property boolean $is_active
 */
class Deal extends Model
{
    use SoftDeletes;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    protected $fillable =[

        "name", "code", "type", "barcode_symbology", "brand_id", "category_id", "unit_id", "purchase_unit_id", "sale_unit_id", "cost", "price", "qty", "alert_quantity", "promotion", "promotion_price", "starting_date", "last_date", "tax_id", "tax_method", "image", "file", "is_batch", "is_variant", "is_diffPrice", "featured", "product_list", "qty_list", "price_list", "product_details", "is_active"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'code' => 'string',
        'type' => 'string',
        'barcode_symbology' => 'string',
        'brand_id' => 'integer',
        'category_id' => 'integer',
        'unit_id' => 'integer',
        'purchase_unit_id' => 'integer',
        'sale_unit_id' => 'integer',
        'cost' => 'string',
        'price' => 'string',
        'qty' => 'float',
        'alert_quantity' => 'float',
        'promotion' => 'boolean',
        'promotion_price' => 'string',
        'starting_date' => 'string',
        'last_date' => 'date',
        'tax_id' => 'integer',
        'tax_method' => 'integer',
        'image' => 'string',
        'file' => 'string',
        'is_variant' => 'boolean',
        'is_batch' => 'boolean',
        'is_diffPrice' => 'boolean',
        'featured' => 'boolean',
        'product_list' => 'string',
        'qty_list' => 'string',
        'price_list' => 'string',
        'product_details' => 'string',
        'is_active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:191',
        'code' => 'nullable|string|max:191',
        'type' => 'nullable|string|max:191',
        'barcode_symbology' => 'required|string|max:191',
        'brand_id' => 'nullable|integer',
        'category_id' => 'required|integer',
        'unit_id' => 'required|integer',
        'purchase_unit_id' => 'required|integer',
        'sale_unit_id' => 'required|integer',
        'cost' => 'required|string|max:191',
        'price' => 'required|string|max:191',
        'qty' => 'nullable|numeric',
        'alert_quantity' => 'nullable|numeric',
        'promotion' => 'nullable|boolean',
        'promotion_price' => 'nullable|string|max:191',
        'starting_date' => 'nullable|string|max:200',
        'last_date' => 'nullable',
        'tax_id' => 'nullable|integer',
        'tax_method' => 'nullable|integer',
        'image' => 'nullable|string',
        'file' => 'nullable|string|max:191',
        'is_variant' => 'nullable|boolean',
        'is_batch' => 'nullable|boolean',
        'is_diffPrice' => 'nullable|boolean',
        'featured' => 'nullable|boolean',
        'product_list' => 'nullable|string|max:191',
        'qty_list' => 'nullable|string|max:191',
        'price_list' => 'nullable|string|max:191',
        'product_details' => 'nullable|string',
        'is_active' => 'nullable|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
