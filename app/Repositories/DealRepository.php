<?php

namespace App\Repositories;

use App\Models\Deal;
use App\Repositories\BaseRepository;

/**
 * Class DealRepository
 * @package App\Repositories
 * @version July 25, 2021, 7:19 pm PKT
*/

class DealRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'code',
        'type',
        'barcode_symbology',
        'brand_id',
        'category_id',
        'unit_id',
        'purchase_unit_id',
        'sale_unit_id',
        'cost',
        'price',
        'qty',
        'alert_quantity',
        'promotion',
        'promotion_price',
        'starting_date',
        'last_date',
        'tax_id',
        'tax_method',
        'image',
        'file',
        'is_variant',
        'is_batch',
        'is_diffPrice',
        'featured',
        'product_list',
        'qty_list',
        'price_list',
        'product_details',
        'is_active'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Deal::class;
    }
}
