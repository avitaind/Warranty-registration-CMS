<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_numbers')->insert([
            [
                "product_model_id"        => "1",
                "product_number"          => "NS14L001LIBER",
                "titleName"               => "LIBER NS14L001",
                "created_at"              => "2022-04-18 10:09:31",
                "updated_at"              => "2022-04-18 10:09:31"
            ],
            [
                "product_model_id"        => "2",
                "product_number"          => "NS14L002LIBER",
                "titleName"               => "LIBER NS14L002",
                "created_at"              => "2022-04-18 10:10:00",
                "updated_at"              => "2022-04-18 10:10:00"
            ],
            [
                "product_model_id"        => "3",
                "product_number"          => "NS14P001PURA",
                "titleName"               => "PURA NS14P001",
                "created_at"              => "2022-04-18 10:10:41",
                "updated_at"              => "2022-04-18 10:10:41"
            ],
            [
                "product_model_id"        => "4",
                "product_number"          => "NS14P002PURA",
                "titleName"               => "NS14P002 PURA",
                "created_at"              => "2022-04-18 10:11:01",
                "updated_at"              => "2022-04-18 10:11:01"
            ],
            [
                "product_model_id"        => "5",
                "product_number"          => "COSMOS001COSMOS",
                "titleName"               => "COSMOS001 COSMOS 2-IN-1",
                "created_at"              => "2022-04-18 10:11:46",
                "updated_at"              => "2022-04-18 10:11:46"
            ],
            [
                "product_model_id"        => "6",
                "product_number"          => "COSMOS002COSMOS",
                "titleName"               => "COSMOS002 COSMOS 2-IN-1",
                "created_at"              => "2022-04-18 10:12:05",
                "updated_at"              => "2022-04-18 10:12:05"
            ],
            [
                "product_model_id"        => "7",
                "product_number"          => "NS14E001ESSENTIAL",
                "titleName"               => "ESSENTIAL NS14E001",
                "created_at"              => "2022-04-18 10:12:33",
                "updated_at"              => "2022-04-18 10:12:33"
            ],
            [
                "product_model_id"        => "8",
                "product_number"          => "NS14E002ESSENTIAL",
                "titleName"               => "ESSENTIAL NS14E002",
                "created_at"              => "2022-04-18 10:13:04",
                "updated_at"              => "2022-04-18 10:13:04"
            ],
            [
                "product_model_id"        => "9",
                "product_number"          => "IMAGO001IMAGO",
                "titleName"               => "IMAGO001 IMAGO",
                "created_at"              => "2022-04-18 10:13:43",
                "updated_at"              => "2022-04-18 10:13:43"
            ],
            [
                "product_model_id"        => "10",
                "product_number"          => "IMAGO002IMAGO",
                "titleName"               => "IMAGO IMAGO002",
                "created_at"              => "2022-04-18 10:14:03",
                "updated_at"              => "2022-04-18 10:14:03"
            ],
            [
                "product_model_id"        => "11",
                "product_number"          => "MODUS001MODUS",
                "titleName"               => "MODUS MODUS001",
                "created_at"              => "2022-04-18 10:14:32",
                "updated_at"              => "2022-04-18 10:14:32"
            ],
            [
                "product_model_id"        => "12",
                "product_number"          => "MODUS002MODUS",
                "titleName"               => "MODUS MODUS002",
                "created_at"              => "2022-04-18 10:14:56",
                "updated_at"              => "2022-04-18 10:14:56"
            ],
            [
                "product_model_id"        => "13",
                "product_number"          => "SLEEVE001SLEEVE",
                "titleName"               => "SLEEVE SLEEVE001",
                "created_at"              => "2022-04-18 10:15:21",
                "updated_at"              => "2022-04-18 10:15:21"
            ],
            [
                "product_model_id"        => "14",
                "product_number"          => "SLEEVE002SLEEVE",
                "titleName"               => "SLEEVE SLEEVE002",
                "created_at"              => "2022-04-18 10:15:40",
                "updated_at"              => "2022-04-18 10:15:40"
            ],
            [
                "product_model_id"        => "15",
                "product_number"          => "MOUSE001MOUSE",
                "titleName"               => "MOUSE MOUSE001",
                "created_at"              => "2022-04-18 10:16:18",
                "updated_at"              => "2022-04-18 10:16:18"
            ],
            [
                "product_model_id"        => "16",
                "product_number"          => "MOUSE002MOUSE",
                "titleName"               => "MOUSE MOUSE002",
                "created_at"              => "2022-04-18 10:16:34",
                "updated_at"              => "2022-04-18 10:16:34"
            ],
            [
                "product_model_id"        => "17",
                "product_number"          => "DOMBULB001DOMUSBULB",
                "titleName"               => "DOMUS BULB DOMBULB001",
                "created_at"              => "2022-04-18 10:17:21",
                "updated_at"              => "2022-04-18 10:17:21"
            ],
            [
                "product_model_id"        => "18",
                "product_number"          => "DOMBULB002DOMUSBULB",
                "titleName"               => "DOMUS BULB DOMBULB002",
                "created_at"              => "2022-04-18 10:18:15",
                "updated_at"              => "2022-04-18 10:18:15"
            ],
            [
                "product_model_id"        => "19",
                "product_number"          => "DOMLED001DOMUSLED",
                "titleName"               => "DOMUS LED DOMLED001",
                "created_at"              => "2022-04-18 10:18:43",
                "updated_at"              => "2022-04-18 10:18:43"
            ],
            [
                "product_model_id"        => "20",
                "product_number"          => "DOMLED002DOMUSLED",
                "titleName"               => "DOMUS LED DOMLED002",
                "created_at"              => "2022-04-18 10:19:14",
                "updated_at"              => "2022-04-18 10:19:14"
            ],
        ]);
    }
}
