<?php

namespace App\Imports;

use App\Models\Product;
use App\Models\product_model;
use App\Models\product_number;
use App\Models\product_type;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;



// class ImportAllProduct implements ToCollection, WithHeadingRow,WithValidation
class ImportAllProduct implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */

    public function headings():array{
        return[
            'Product Type','Product Series'
        ];
    }


    public function collection(Collection $rows)
    {

        foreach ($rows as $row) {

            //check product type
            $checkproducttype = \App\Models\product_type::where('name',$row['product_type'])->first();

            //create product type
            if($checkproducttype == null){
                product_type::create([
                    'name' => $row['product_type'],
                ]);
            }

            //check product type after product create
            if($checkproducttype == null){
                $checkproducttype = \App\Models\product_type::where('name',$row['product_type'])->first();
            }


            //check product series

            $checkseries = \App\Models\Product::where('name',$row['product_series'])->first();

            //create product series
            if(!isset($checkseries)){
                Product::create([
                    'name' => $row['product_series'],
                    'product_types_id' => $checkproducttype->id,
                ]);

                 $checkseries = \App\Models\Product::where('name',$row['product_series'])->first();

            }

            //check product model

            $checkproductmodel = \App\Models\product_model::where('model_number',$row['product_model'])->first();

            //create product model if not exist

            if($checkproductmodel == null){
                product_model::create([
                    'model_number' => $row['product_model'],
                    'products_id' => $checkseries->id,
                ]);

                $checkproductmodel = \App\Models\product_model::where('model_number',$row['product_model'])->first();

            }

            //check product Number

            $checkproductnumber = \App\Models\product_number::where('product_number',$row['product_number'])->where('product_model_id',$checkproductmodel->id)->first();
            $serialnumarr = [];
            if($checkproductnumber != null){
                $serialnumarr[] = explode(',', $checkproductnumber->serial_number);
            }
            // dd($serialnumarr[0],$row['serial_number'],$checkproductnumber != null  && in_array($row['serial_number'], $serialnumarr[0]));
            //product Number update
            // if($checkproductnumber != null  && in_array($row['serial_number'], $serialnumarr[0]) == false){

            //     DB::statement("update `product_numbers` set serial_number=concat(serial_number,'," . $row['serial_number'] . "') where `id` = '" . $checkproductnumber->id . "' ");

            // }
                // dd($row['serial_number'],$serialnumarr[0],in_array($row['serial_number'], $serialnumarr[0]) == true);
            if(isset($serialnumarr[0])){
            if(isset($serialnumarr[0]) && in_array($row['serial_number'], $serialnumarr[0]) == true){
                // dd("123");

            }else{
                // dd("456");
                DB::statement("update `product_numbers` set serial_number=concat(serial_number,'," . $row['serial_number'] . "') where `id` = '" . $checkproductnumber->id . "' ");
            }
            }

            //product Number create
            if($checkproductnumber == null ){
                product_number::create([
                    'product_number' => $row['product_number'],
                    'titleName' => $row['product_configuration'],
                    'product_model_id' => $checkproductmodel->id,
                    'serial_number' => $row['serial_number'],
                ]);
            }



        }

        return Redirect::back()->with('success', 'Sheet Will Upload Successfully...!');

    }

    // public function rules(): array
    //     {
    //         return[
    //             'nameType'              => 'required',
    //             'nameProduct'              => 'required',
    //             // 'model_number'      => 'required',
    //             // 'products_id'       => 'required',
    //             // 'product_model_id'  => 'required',
    //             // 'product_number'    => 'required',
    //             // 'titleName'         => 'required',
    //         ];
    //     }
}
