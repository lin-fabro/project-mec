<?php

namespace App\Imports;

use App\ImportProducts;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataFromExcelImport implements OnEachRow, WithHeadingRow
{
    /**
    * @param Row $row
    */
    public function onRow(Row $row)
    {

        $row = $row->toArray();

        //Inserts records into the import_products table
        ImportProducts::updateOrCreate(
            [
                'series_number'   => $row['series_number'],
                'product_code'   => $row['product_id']
            ],
            [
                'product_name' => $row['product_name'],
                'size' => $row['size'],
                'box_carton'    => $row['box_carton'],
                'item_weight'   => $row['item_weight'],
                'shipping_weight'   => $row['shipping_weight'],
                'item_dimension'   => $row['item_dimension'],
                'shipping_dimension'   => $row['shipping_dimension'],
                'color'   => $row['color'],
                'material'   => $row['material'],
                'note'   => $row['note'],
                'finish'   => $row['finish'],
                'features_benefits'   => $row['features_benefits'],
                'includes'   => $row['includes'],
                'functionalities'   => $row['functionalities'],
                'category_code_one'   => $row['category_code_one'],
                'category_name_one'   => $row['category_name_one'],
                'category_code_two'   => $row['category_code_two'],
                'category_name_two'   => $row['category_name_two'],
                'category_code_three'   => $row['category_code_three'],
                'category_name_three'   => $row['category_name_three'],
                'process_flag'   => $row['process_flag']
            ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
