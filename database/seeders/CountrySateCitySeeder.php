<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Support\Facades\DB;

class CountrySateCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        /*------------------------------------------

        --------------------------------------------

        India Country Data

        --------------------------------------------

        --------------------------------------------*/

        // Country Data

        DB::table('countries')->insert([
            [
                "name"          =>               "India",
            ]
        ]);

        // States Data

        DB::table('states')->insert([
            [
                "name"              =>               "Andaman and Nicobar Islands",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Andhra Pradesh",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Arunachal Pradesh",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Assam",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Bihar",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Chandigarh",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Chhattisgarh",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Dadra and Nagar Haveli",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Delhi",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Goa",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Gujarat",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Haryana",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Himachal Pradesh",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Jammu and Kashmir",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Jharkhand",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Karnataka",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Karnatka",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Kerala",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Madhya Pradesh",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Maharashtra",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Manipur",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Meghalaya",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Mizoram",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Nagaland",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Odisha",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Puducherry",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Punjab",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Rajasthan",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Tamil Nadu",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Telangana",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Tripura",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Uttar Pradesh",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>               "Uttarakhand",
                "country_id"        =>               "1",
            ],
            [
                "name"              =>              "West Bengal",
                "country_id"        =>              "1",
            ]
        ]);

        // Cities Data



        DB::table('cities')->insert([
            [
                "name" => "Port Blair",
                "state_id" => "1",


            ],
            [
                "name" => "Adoni ",
                "state_id" => "2",


            ],
            [
                "name" => "Amalapuram ",
                "state_id" => "2",


            ],
            [
                "name" => "Anakapalle ",
                "state_id" => "2",


            ],
            [
                "name" => " Anantapur ",
                "state_id" => "2",


            ],
            [
                "name" => "Bapatla ",
                "state_id" => "2",


            ],
            [
                "name" => "Bheemunipatnam ",
                "state_id" => "2",


            ],
            [
                "name" => "Bhimavaram ",
                "state_id" => "2",


            ],
            [
                "name" => "Bobbili ",
                "state_id" => "2",


            ],
            [
                "name" => "Chilakaluripet ",
                "state_id" => "2",


            ],
            [
                "name" => "Chirala ",
                "state_id" => "2",


            ],
            [
                "name" => "Chittoor ",
                "state_id" => "2",


            ],
            [
                "name" => "Dharmavaram ",
                "state_id" => "2",


            ],
            [
                "name" => "Eluru ",
                "state_id" => "2",


            ],
            [
                "name" => "Gooty ",
                "state_id" => "2",


            ],
            [
                "name" => "Gudivada ",
                "state_id" => "2",


            ],
            [
                "name" => "Gudur ",
                "state_id" => "2",


            ],
            [
                "name" => "Guntakal ",
                "state_id" => "2",


            ],
            [
                "name" => "Guntur ",
                "state_id" => "2",


            ],
            [
                "name" => "Hindupur ",
                "state_id" => "2",


            ],
            [
                "name" => "Jaggaiahpet ",
                "state_id" => "2",


            ],
            [
                "name" => "Jammalamadugu ",
                "state_id" => "2",


            ],
            [
                "name" => "Kadapa ",
                "state_id" => "2",


            ],
            [
                "name" => "Kadiri ",
                "state_id" => "2",


            ],
            [
                "name" => "Kakinada ",
                "state_id" => "2",


            ],
            [
                "name" => "Kandukur ",
                "state_id" => "2",


            ],
            [
                "name" => "Kavali ",
                "state_id" => "2",


            ],
            [
                "name" => "Kovvur ",
                "state_id" => "2",


            ],
            [
                "name" => "Kurnool ",
                "state_id" => "2",


            ],
            [
                "name" => "Macherla ",
                "state_id" => "2",


            ],
            [
                "name" => "Machilipatnam ",
                "state_id" => "2",


            ],
            [
                "name" => "Madanapalle ",
                "state_id" => "2",


            ],
            [
                "name" => "Mandapeta ",
                "state_id" => "2",


            ],
            [
                "name" => "Markapur ",
                "state_id" => "2",


            ],
            [
                "name" => "Nagari ",
                "state_id" => "2",


            ],
            [
                "name" => "Naidupet ",
                "state_id" => "2",


            ],
            [
                "name" => "Nandyal ",
                "state_id" => "2",


            ],
            [
                "name" => "Narasapuram ",
                "state_id" => "2",


            ],
            [
                "name" => "Narasaraopet ",
                "state_id" => "2",


            ],
            [
                "name" => "Narsipatnam ",
                "state_id" => "2",


            ],
            [
                "name" => "Nellore ",
                "state_id" => "2",


            ],
            [
                "name" => "Nidadavole ",
                "state_id" => "2",


            ],
            [
                "name" => "Nuzvid ",
                "state_id" => "2",


            ],
            [
                "name" => "Ongole ",
                "state_id" => "2",


            ],
            [
                "name" => "Palacole ",
                "state_id" => "2",


            ],
            [
                "name" => "Palasa Kasibugga ",
                "state_id" => "2",


            ],
            [
                "name" => "Parvathipuram ",
                "state_id" => "2",


            ],
            [
                "name" => "Pedana ",
                "state_id" => "2",


            ],
            [
                "name" => "Peddapuram ",
                "state_id" => "2",


            ],
            [
                "name" => "Pithapuram ",
                "state_id" => "2",


            ],
            [
                "name" => "Ponnur ",
                "state_id" => "2",


            ],
            [
                "name" => "Proddatur ",
                "state_id" => "2",


            ],
            [
                "name" => "Punganur ",
                "state_id" => "2",


            ],
            [
                "name" => "Puttur ",
                "state_id" => "2",


            ],
            [
                "name" => "Rajahmundry ",
                "state_id" => "2",


            ],
            [
                "name" => "Rajam ",
                "state_id" => "2",


            ],
            [
                "name" => "Rajampet ",
                "state_id" => "2",


            ],
            [
                "name" => "Ramachandrapuram ",
                "state_id" => "2",


            ],
            [
                "name" => "Rayachoti ",
                "state_id" => "2",


            ],
            [
                "name" => "Rayadurg ",
                "state_id" => "2",


            ],
            [
                "name" => "Renigunta ",
                "state_id" => "2",


            ],
            [
                "name" => "Repalle ",
                "state_id" => "2",


            ],
            [
                "name" => "Salur ",
                "state_id" => "2",


            ],
            [
                "name" => "Samalkot ",
                "state_id" => "2",


            ],
            [
                "name" => "Sattenapalle ",
                "state_id" => "2",


            ],
            [
                "name" => "Srikakulam ",
                "state_id" => "2",


            ],
            [
                "name" => "Srikalahasti ",
                "state_id" => "2",


            ],
            [
                "name" => "Srisailam Project (Right Flank Colony) Township ",
                "state_id" => "2",


            ],
            [
                "name" => "Sullurpeta ",
                "state_id" => "2",


            ],
            [
                "name" => "Tadepalligudem ",
                "state_id" => "2",


            ],
            [
                "name" => "Tadpatri ",
                "state_id" => "2",


            ],
            [
                "name" => "Tanuku ",
                "state_id" => "2",


            ],
            [
                "name" => "Tenali ",
                "state_id" => "2",


            ],
            [
                "name" => "Tirupati ",
                "state_id" => "2",


            ],
            [
                "name" => "Tiruvuru ",
                "state_id" => "2",


            ],
            [
                "name" => "Tuni ",
                "state_id" => "2",


            ],
            [
                "name" => "Uravakonda ",
                "state_id" => "2",


            ],
            [
                "name" => "Venkatagiri ",
                "state_id" => "2",


            ],
            [
                "name" => "Vijayawada ",
                "state_id" => "2",


            ],
            [
                "name" => "Vinukonda ",
                "state_id" => "2",


            ],
            [
                "name" => "Visakhapatnam ",
                "state_id" => "2",


            ],
            [
                "name" => "Vizianagaram ",
                "state_id" => "2",


            ],
            [
                "name" => "Yemmiganur ",
                "state_id" => "2",


            ],
            [
                "name" => "Yerraguntla ",
                "state_id" => "2",


            ],
            [
                "name" => "Naharlagun",
                "state_id" => "3",


            ],
            [
                "name" => "Pasighat",
                "state_id" => "3",


            ],
            [
                "name" => "Barpeta",
                "state_id" => "4",


            ],
            [
                "name" => "Bongaigaon City",
                "state_id" => "4",


            ],
            [
                "name" => "Dhubri",
                "state_id" => "4",


            ],
            [
                "name" => "Dibrugarh",
                "state_id" => "4",


            ],
            [
                "name" => "Diphu",
                "state_id" => "4",


            ],
            [
                "name" => "Goalpara",
                "state_id" => "4",


            ],
            [
                "name" => "Guwahati",
                "state_id" => "4",


            ],
            [
                "name" => "Jorhat",
                "state_id" => "4",


            ],
            [
                "name" => "Karimganj",
                "state_id" => "4",


            ],
            [
                "name" => "Lanka",
                "state_id" => "4",


            ],
            [
                "name" => "Lumding",
                "state_id" => "4",


            ],
            [
                "name" => "Mangaldoi",
                "state_id" => "4",


            ],
            [
                "name" => "Mankachar",
                "state_id" => "4",


            ],
            [
                "name" => "Margherita",
                "state_id" => "4",


            ],
            [
                "name" => "Mariani",
                "state_id" => "4",


            ],
            [
                "name" => "Marigaon",
                "state_id" => "4",


            ],
            [
                "name" => "Nagaon",
                "state_id" => "4",


            ],
            [
                "name" => "Nalbari",
                "state_id" => "4",


            ],
            [
                "name" => "North Lakhimpur",
                "state_id" => "4",


            ],
            [
                "name" => "Rangia",
                "state_id" => "4",


            ],
            [
                "name" => "Sibsagar",
                "state_id" => "4",


            ],
            [
                "name" => "Silapathar",
                "state_id" => "4",


            ],
            [
                "name" => "Silchar",
                "state_id" => "4",


            ],
            [
                "name" => "Tezpur",
                "state_id" => "4",


            ],
            [
                "name" => "Tinsukia",
                "state_id" => "4",


            ],
            [
                "name" => "Araria",
                "state_id" => "5",


            ],
            [
                "name" => "Arrah",
                "state_id" => "5",


            ],
            [
                "name" => "Arwal",
                "state_id" => "5",


            ],
            [
                "name" => "Asarganj",
                "state_id" => "5",


            ],
            [
                "name" => "Aurangabad",
                "state_id" => "5",


            ],
            [
                "name" => "Bagaha",
                "state_id" => "5",


            ],
            [
                "name" => "Barh",
                "state_id" => "5",


            ],
            [
                "name" => "Begusarai",
                "state_id" => "5",


            ],
            [
                "name" => "Bettiah",
                "state_id" => "5",


            ],
            [
                "name" => "Bhabua",
                "state_id" => "5",


            ],
            [
                "name" => "Bhagalpur",
                "state_id" => "5",


            ],
            [
                "name" => "Buxar",
                "state_id" => "5",


            ],
            [
                "name" => "Chhapra",
                "state_id" => "5",


            ],
            [
                "name" => "Darbhanga",
                "state_id" => "5",


            ],
            [
                "name" => "Dehri-on-Sone",
                "state_id" => "5",


            ],
            [
                "name" => "Dumraon",
                "state_id" => "5",


            ],
            [
                "name" => "Forbesganj",
                "state_id" => "5",


            ],
            [
                "name" => "Gaya",
                "state_id" => "5",


            ],
            [
                "name" => "Gopalganj",
                "state_id" => "5",


            ],
            [
                "name" => "Hajipur",
                "state_id" => "5",


            ],
            [
                "name" => "Jamalpur",
                "state_id" => "5",


            ],
            [
                "name" => "Jamui",
                "state_id" => "5",


            ],
            [
                "name" => "Jehanabad",
                "state_id" => "5",


            ],
            [
                "name" => "Katihar",
                "state_id" => "5",


            ],
            [
                "name" => "Kishanganj",
                "state_id" => "5",


            ],
            [
                "name" => "Lakhisarai",
                "state_id" => "5",


            ],
            [
                "name" => "Lalganj",
                "state_id" => "5",


            ],
            [
                "name" => "Madhepura",
                "state_id" => "5",


            ],
            [
                "name" => "Madhubani",
                "state_id" => "5",


            ],
            [
                "name" => "Maharajganj",
                "state_id" => "5",


            ],
            [
                "name" => "Mahnar Bazar",
                "state_id" => "5",


            ],
            [
                "name" => "Makhdumpur",
                "state_id" => "5",


            ],
            [
                "name" => "Maner",
                "state_id" => "5",


            ],
            [
                "name" => "Manihari",
                "state_id" => "5",


            ],
            [
                "name" => "Marhaura",
                "state_id" => "5",


            ],
            [
                "name" => "Masaurhi",
                "state_id" => "5",


            ],
            [
                "name" => "Mirganj",
                "state_id" => "5",


            ],
            [
                "name" => "Mokameh",
                "state_id" => "5",


            ],
            [
                "name" => "Motihari",
                "state_id" => "5",


            ],
            [
                "name" => "Motipur",
                "state_id" => "5",


            ],
            [
                "name" => "Munger",
                "state_id" => "5",


            ],
            [
                "name" => "Murliganj",
                "state_id" => "5",


            ],
            [
                "name" => "Muzaffarpur",
                "state_id" => "5",


            ],
            [
                "name" => "Narkatiaganj",
                "state_id" => "5",


            ],
            [
                "name" => "Naugachhia",
                "state_id" => "5",


            ],
            [
                "name" => "Nawada",
                "state_id" => "5",


            ],
            [
                "name" => "Nokha",
                "state_id" => "5",


            ],
            [
                "name" => "Patna*",
                "state_id" => "5",


            ],
            [
                "name" => "Piro",
                "state_id" => "5",


            ],
            [
                "name" => "Purnia",
                "state_id" => "5",


            ],
            [
                "name" => "Rafiganj",
                "state_id" => "5",


            ],
            [
                "name" => "Rajgir",
                "state_id" => "5",


            ],
            [
                "name" => "Ramnagar",
                "state_id" => "5",


            ],
            [
                "name" => "Raxaul Bazar",
                "state_id" => "5",


            ],
            [
                "name" => "Revelganj",
                "state_id" => "5",


            ],
            [
                "name" => "Rosera",
                "state_id" => "5",


            ],
            [
                "name" => "Saharsa",
                "state_id" => "5",


            ],
            [
                "name" => "Samastipur",
                "state_id" => "5",


            ],
            [
                "name" => "Sasaram",
                "state_id" => "5",


            ],
            [
                "name" => "Sheikhpura",
                "state_id" => "5",


            ],
            [
                "name" => "Sheohar",
                "state_id" => "5",


            ],
            [
                "name" => "Sherghati",
                "state_id" => "5",


            ],
            [
                "name" => "Silao",
                "state_id" => "5",


            ],
            [
                "name" => "Sitamarhi",
                "state_id" => "5",


            ],
            [
                "name" => "Siwan",
                "state_id" => "5",


            ],
            [
                "name" => "Sonepur",
                "state_id" => "5",


            ],
            [
                "name" => "Sugauli",
                "state_id" => "5",


            ],
            [
                "name" => "Sultanganj",
                "state_id" => "5",


            ],
            [
                "name" => "Supaul",
                "state_id" => "5",


            ],
            [
                "name" => "Warisaliganj",
                "state_id" => "5",


            ],
            [
                "name" => "Chandigarh",
                "state_id" => "6",


            ],
            [
                "name" => "Ambikapur",
                "state_id" => "7",


            ],
            [
                "name" => "Bhatapara",
                "state_id" => "7",


            ],
            [
                "name" => "Bhilai Nagar",
                "state_id" => "7",


            ],
            [
                "name" => "Bilaspur",
                "state_id" => "7",


            ],
            [
                "name" => "Chirmiri",
                "state_id" => "7",


            ],
            [
                "name" => "Dalli-Rajhara",
                "state_id" => "7",


            ],
            [
                "name" => "Dhamtari",
                "state_id" => "7",


            ],
            [
                "name" => "Durg",
                "state_id" => "7",


            ],
            [
                "name" => "Jagdalpur",
                "state_id" => "7",


            ],
            [
                "name" => "Korba",
                "state_id" => "7",


            ],
            [
                "name" => "Mahasamund",
                "state_id" => "7",


            ],
            [
                "name" => "Manendragarh",
                "state_id" => "7",


            ],
            [
                "name" => "Mungeli",
                "state_id" => "7",


            ],
            [
                "name" => "Naila Janjgir",
                "state_id" => "7",


            ],
            [
                "name" => "Raigarh",
                "state_id" => "7",


            ],
            [
                "name" => "Raipur*",
                "state_id" => "7",


            ],
            [
                "name" => "Rajnandgaon",
                "state_id" => "7",


            ],
            [
                "name" => "Sakti",
                "state_id" => "7",


            ],
            [
                "name" => "Tilda Newra",
                "state_id" => "7",


            ],
            [
                "name" => "Silvassa",
                "state_id" => "8",


            ],
            [
                "name" => "Delhi",
                "state_id" => "9",


            ],
            [
                "name" => "New Delhi",
                "state_id" => "9",


            ],
            [
                "name" => "Mapusa",
                "state_id" => "10",


            ],
            [
                "name" => "Margao",
                "state_id" => "10",


            ],
            [
                "name" => "Marmagao",
                "state_id" => "10",


            ],
            [
                "name" => "Panaji",
                "state_id" => "10",


            ],
            [
                "name" => "Adalaj",
                "state_id" => "11",


            ],
            [
                "name" => "Ahmedabad",
                "state_id" => "11",


            ],
            [
                "name" => "Amreli",
                "state_id" => "11",


            ],
            [
                "name" => "Anand",
                "state_id" => "11",


            ],
            [
                "name" => "Anjar",
                "state_id" => "11",


            ],
            [
                "name" => "Ankleshwar",
                "state_id" => "11",


            ],
            [
                "name" => "Bharuch",
                "state_id" => "11",


            ],
            [
                "name" => "Bhavnagar",
                "state_id" => "11",


            ],
            [
                "name" => "Bhuj",
                "state_id" => "11",


            ],
            [
                "name" => "Chhapra",
                "state_id" => "11",


            ],
            [
                "name" => "Deesa",
                "state_id" => "11",


            ],
            [
                "name" => "Dhoraji",
                "state_id" => "11",


            ],
            [
                "name" => "Godhra",
                "state_id" => "11",


            ],
            [
                "name" => "Jamnagar",
                "state_id" => "11",


            ],
            [
                "name" => "Kadi",
                "state_id" => "11",


            ],
            [
                "name" => "Kapadvanj",
                "state_id" => "11",


            ],
            [
                "name" => "Keshod",
                "state_id" => "11",


            ],
            [
                "name" => "Khambhat",
                "state_id" => "11",


            ],
            [
                "name" => "Lathi",
                "state_id" => "11",


            ],
            [
                "name" => "Limbdi",
                "state_id" => "11",


            ],
            [
                "name" => "Lunawada",
                "state_id" => "11",


            ],
            [
                "name" => "Mahesana",
                "state_id" => "11",


            ],
            [
                "name" => "Mahuva",
                "state_id" => "11",


            ],
            [
                "name" => "Manavadar",
                "state_id" => "11",


            ],
            [
                "name" => "Mandvi",
                "state_id" => "11",


            ],
            [
                "name" => "Mangrol",
                "state_id" => "11",


            ],
            [
                "name" => "Mansa",
                "state_id" => "11",


            ],
            [
                "name" => "Mahemdabad",
                "state_id" => "11",


            ],
            [
                "name" => "Modasa",
                "state_id" => "11",


            ],
            [
                "name" => "Morvi",
                "state_id" => "11",


            ],
            [
                "name" => "Nadiad",
                "state_id" => "11",


            ],
            [
                "name" => "Navsari",
                "state_id" => "11",


            ],
            [
                "name" => "Padra",
                "state_id" => "11",


            ],
            [
                "name" => "Palanpur",
                "state_id" => "11",


            ],
            [
                "name" => "Palitana",
                "state_id" => "11",


            ],
            [
                "name" => "Pardi",
                "state_id" => "11",


            ],
            [
                "name" => "Patan",
                "state_id" => "11",


            ],
            [
                "name" => "Petlad",
                "state_id" => "11",


            ],
            [
                "name" => "Porbandar",
                "state_id" => "11",


            ],
            [
                "name" => "Radhanpur",
                "state_id" => "11",


            ],
            [
                "name" => "Rajkot",
                "state_id" => "11",


            ],
            [
                "name" => "Rajpipla",
                "state_id" => "11",


            ],
            [
                "name" => "Rajula",
                "state_id" => "11",


            ],
            [
                "name" => "Ranavav",
                "state_id" => "11",


            ],
            [
                "name" => "Rapar",
                "state_id" => "11",


            ],
            [
                "name" => "Salaya",
                "state_id" => "11",


            ],
            [
                "name" => "Sanand",
                "state_id" => "11",


            ],
            [
                "name" => "Savarkundla",
                "state_id" => "11",


            ],
            [
                "name" => "Sidhpur",
                "state_id" => "11",


            ],
            [
                "name" => "Sihor",
                "state_id" => "11",


            ],
            [
                "name" => "Songadh",
                "state_id" => "11",


            ],
            [
                "name" => "Surat",
                "state_id" => "11",


            ],
            [
                "name" => "Talaja",
                "state_id" => "11",


            ],
            [
                "name" => "Thangadh",
                "state_id" => "11",


            ],
            [
                "name" => "Tharad",
                "state_id" => "11",


            ],
            [
                "name" => "Umbergaon",
                "state_id" => "11",


            ],
            [
                "name" => "Umreth",
                "state_id" => "11",


            ],
            [
                "name" => "Una",
                "state_id" => "11",


            ],
            [
                "name" => "Unjha",
                "state_id" => "11",


            ],
            [
                "name" => "Upleta",
                "state_id" => "11",


            ],
            [
                "name" => "Vadnagar",
                "state_id" => "11",


            ],
            [
                "name" => "Vadodara",
                "state_id" => "11",


            ],
            [
                "name" => "Valsad",
                "state_id" => "11",


            ],
            [
                "name" => "Vapi",
                "state_id" => "11",


            ],
            [
                "name" => "Vapi",
                "state_id" => "11",


            ],
            [
                "name" => "Veraval",
                "state_id" => "11",


            ],
            [
                "name" => "Vijapur",
                "state_id" => "11",


            ],
            [
                "name" => "Viramgam",
                "state_id" => "11",


            ],
            [
                "name" => "Visnagar",
                "state_id" => "11",


            ],
            [
                "name" => "Vyara",
                "state_id" => "11",


            ],
            [
                "name" => "Wadhwan",
                "state_id" => "11",


            ],
            [
                "name" => "Wankaner",
                "state_id" => "11",


            ],
            [
                "name" => "Bahadurgarh",
                "state_id" => "12",


            ],
            [
                "name" => "Bhiwani",
                "state_id" => "12",


            ],
            [
                "name" => "Charkhi Dadri",
                "state_id" => "12",


            ],
            [
                "name" => "Faridabad",
                "state_id" => "12",


            ],
            [
                "name" => "Fatehabad",
                "state_id" => "12",


            ],
            [
                "name" => "Gohana",
                "state_id" => "12",


            ],
            [
                "name" => "Gurgaon",
                "state_id" => "12",


            ],
            [
                "name" => "Hansi",
                "state_id" => "12",


            ],
            [
                "name" => "Hisar",
                "state_id" => "12",


            ],
            [
                "name" => "Jind",
                "state_id" => "12",


            ],
            [
                "name" => "Kaithal",
                "state_id" => "12",


            ],
            [
                "name" => "Karnal",
                "state_id" => "12",


            ],
            [
                "name" => "Ladwa",
                "state_id" => "12",


            ],
            [
                "name" => "Mahendragarh",
                "state_id" => "12",


            ],
            [
                "name" => "Mandi Dabwali",
                "state_id" => "12",


            ],
            [
                "name" => "Narnaul",
                "state_id" => "12",


            ],
            [
                "name" => "Narwana",
                "state_id" => "12",


            ],
            [
                "name" => "Palwal",
                "state_id" => "12",


            ],
            [
                "name" => "Panchkula",
                "state_id" => "12",


            ],
            [
                "name" => "Panipat",
                "state_id" => "12",


            ],
            [
                "name" => "Pehowa",
                "state_id" => "12",


            ],
            [
                "name" => "Pinjore",
                "state_id" => "12",


            ],
            [
                "name" => "Rania",
                "state_id" => "12",


            ],
            [
                "name" => "Ratia",
                "state_id" => "12",


            ],
            [
                "name" => "Rewari",
                "state_id" => "12",


            ],
            [
                "name" => "Rohtak",
                "state_id" => "12",


            ],
            [
                "name" => "Safidon",
                "state_id" => "12",


            ],
            [
                "name" => "Samalkha",
                "state_id" => "12",


            ],
            [
                "name" => "Sarsod",
                "state_id" => "12",


            ],
            [
                "name" => "Shahbad",
                "state_id" => "12",


            ],
            [
                "name" => "Sirsa",
                "state_id" => "12",


            ],
            [
                "name" => "Sohna",
                "state_id" => "12",


            ],
            [
                "name" => "Sonipat",
                "state_id" => "12",


            ],
            [
                "name" => "Taraori",
                "state_id" => "12",


            ],
            [
                "name" => "Thanesar",
                "state_id" => "12",


            ],
            [
                "name" => "Tohana",
                "state_id" => "12",


            ],
            [
                "name" => "Yamunanagar",
                "state_id" => "12",


            ],
            [
                "name" => "Mandi",
                "state_id" => "13",


            ],
            [
                "name" => "Nahan",
                "state_id" => "13",


            ],
            [
                "name" => "Palampur",
                "state_id" => "13",


            ],
            [
                "name" => "Shimla",
                "state_id" => "13",


            ],
            [
                "name" => "Solan",
                "state_id" => "13",


            ],
            [
                "name" => "Sundarnagar",
                "state_id" => "13",


            ],
            [
                "name" => "Anantnag",
                "state_id" => "14",


            ],
            [
                "name" => "Baramula",
                "state_id" => "14",


            ],
            [
                "name" => "Jammu",
                "state_id" => "14",


            ],
            [
                "name" => "Kathua",
                "state_id" => "14",


            ],
            [
                "name" => "Punch",
                "state_id" => "14",


            ],
            [
                "name" => "Rajauri",
                "state_id" => "14",


            ],
            [
                "name" => "Sopore",
                "state_id" => "14",


            ],
            [
                "name" => "Srinagar",
                "state_id" => "14",


            ],
            [
                "name" => "Udhampur",
                "state_id" => "14",


            ],
            [
                "name" => "Adityapur",
                "state_id" => "15",


            ],
            [
                "name" => "Bokaro Steel City",
                "state_id" => "15",


            ],
            [
                "name" => "Chaibasa",
                "state_id" => "15",


            ],
            [
                "name" => "Chatra",
                "state_id" => "15",


            ],
            [
                "name" => "Chirkunda",
                "state_id" => "15",


            ],
            [
                "name" => "Medininagar (Daltonganj)",
                "state_id" => "15",


            ],
            [
                "name" => "Deoghar",
                "state_id" => "15",


            ],
            [
                "name" => "Dhanbad",
                "state_id" => "15",


            ],
            [
                "name" => "Dumka",
                "state_id" => "15",


            ],
            [
                "name" => "Giridih",
                "state_id" => "15",


            ],
            [
                "name" => "Gumia",
                "state_id" => "15",


            ],
            [
                "name" => "Hazaribag",
                "state_id" => "15",


            ],
            [
                "name" => "Jamshedpur",
                "state_id" => "15",


            ],
            [
                "name" => "Jhumri Tilaiya",
                "state_id" => "15",


            ],
            [
                "name" => "Lohardaga",
                "state_id" => "15",


            ],
            [
                "name" => "Madhupur",
                "state_id" => "15",


            ],
            [
                "name" => "Mihijam",
                "state_id" => "15",


            ],
            [
                "name" => "Musabani",
                "state_id" => "15",


            ],
            [
                "name" => "Pakaur",
                "state_id" => "15",


            ],
            [
                "name" => "Patratu",
                "state_id" => "15",


            ],
            [
                "name" => "Phusro",
                "state_id" => "15",


            ],
            [
                "name" => "Ramgarh",
                "state_id" => "15",


            ],
            [
                "name" => "Ranchi*",
                "state_id" => "15",


            ],
            [
                "name" => "Sahibganj",
                "state_id" => "15",


            ],
            [
                "name" => "Saunda",
                "state_id" => "15",


            ],
            [
                "name" => "Simdega",
                "state_id" => "15",


            ],
            [
                "name" => "Tenu dam-cum-Kathhara",
                "state_id" => "15",


            ],
            [
                "name" => "Adyar",
                "state_id" => "16",


            ],
            [
                "name" => "Afzalpur",
                "state_id" => "16",


            ],
            [
                "name" => "Arsikere",
                "state_id" => "16",


            ],
            [
                "name" => "Athni",
                "state_id" => "16",


            ],
            [
                "name" => "Bengaluru",
                "state_id" => "16",


            ],
            [
                "name" => "Belagavi",
                "state_id" => "16",


            ],
            [
                "name" => "Ballari",
                "state_id" => "16",


            ],
            [
                "name" => "Chikkamagaluru",
                "state_id" => "16",


            ],
            [
                "name" => "Davanagere",
                "state_id" => "16",


            ],
            [
                "name" => "Gokak",
                "state_id" => "16",


            ],
            [
                "name" => "Hubli-Dharwad",
                "state_id" => "16",


            ],
            [
                "name" => "Karwar",
                "state_id" => "16",


            ],
            [
                "name" => "Kolar",
                "state_id" => "16",


            ],
            [
                "name" => "Lakshmeshwar",
                "state_id" => "16",


            ],
            [
                "name" => "Lingsugur",
                "state_id" => "16",


            ],
            [
                "name" => "Maddur",
                "state_id" => "16",


            ],
            [
                "name" => "Madhugiri",
                "state_id" => "16",


            ],
            [
                "name" => "Madikeri",
                "state_id" => "16",


            ],
            [
                "name" => "Magadi",
                "state_id" => "16",


            ],
            [
                "name" => "Mahalingapura",
                "state_id" => "16",


            ],
            [
                "name" => "Malavalli",
                "state_id" => "16",


            ],
            [
                "name" => "Malur",
                "state_id" => "16",


            ],
            [
                "name" => "Mandya",
                "state_id" => "16",


            ],
            [
                "name" => "Mangaluru",
                "state_id" => "16",


            ],
            [
                "name" => "Manvi",
                "state_id" => "16",


            ],
            [
                "name" => "Mudalagi",
                "state_id" => "16",


            ],
            [
                "name" => "Mudabidri",
                "state_id" => "16",


            ],
            [
                "name" => "Muddebihal",
                "state_id" => "16",


            ],
            [
                "name" => "Mudhol",
                "state_id" => "16",


            ],
            [
                "name" => "Mulbagal",
                "state_id" => "16",


            ],
            [
                "name" => "Mundargi",
                "state_id" => "16",


            ],
            [
                "name" => "Nanjangud",
                "state_id" => "16",


            ],
            [
                "name" => "Nargund",
                "state_id" => "16",


            ],
            [
                "name" => "Navalgund",
                "state_id" => "16",


            ],
            [
                "name" => "Nelamangala",
                "state_id" => "16",


            ],
            [
                "name" => "Pavagada",
                "state_id" => "16",


            ],
            [
                "name" => "Piriyapatna",
                "state_id" => "16",


            ],
            [
                "name" => "Puttur",
                "state_id" => "16",


            ],
            [
                "name" => "Rabkavi Banhatti",
                "state_id" => "16",


            ],
            [
                "name" => "Raayachuru",
                "state_id" => "16",


            ],
            [
                "name" => "Ranebennuru",
                "state_id" => "16",


            ],
            [
                "name" => "Ramanagaram",
                "state_id" => "16",


            ],
            [
                "name" => "Ramdurg",
                "state_id" => "16",


            ],
            [
                "name" => "Ranibennur",
                "state_id" => "16",


            ],
            [
                "name" => "Robertson Pet",
                "state_id" => "16",


            ],
            [
                "name" => "Ron",
                "state_id" => "16",


            ],
            [
                "name" => "Sadalagi",
                "state_id" => "16",


            ],
            [
                "name" => "Sagara",
                "state_id" => "16",


            ],
            [
                "name" => "Sakaleshapura",
                "state_id" => "16",


            ],
            [
                "name" => "Sindagi",
                "state_id" => "16",


            ],
            [
                "name" => "Sanduru",
                "state_id" => "16",


            ],
            [
                "name" => "Sankeshwara",
                "state_id" => "16",


            ],
            [
                "name" => "Saundatti-Yellamma",
                "state_id" => "16",


            ],
            [
                "name" => "Savanur",
                "state_id" => "16",


            ],
            [
                "name" => "Sedam",
                "state_id" => "16",


            ],
            [
                "name" => "Shahabad",
                "state_id" => "16",


            ],
            [
                "name" => "Shahpur",
                "state_id" => "16",


            ],
            [
                "name" => "Shiggaon",
                "state_id" => "16",


            ],
            [
                "name" => "Shikaripur",
                "state_id" => "16",


            ],
            [
                "name" => "Shivamogga",
                "state_id" => "16",


            ],
            [
                "name" => "Surapura",
                "state_id" => "16",


            ],
            [
                "name" => "Shrirangapattana",
                "state_id" => "16",


            ],
            [
                "name" => "Sidlaghatta",
                "state_id" => "16",


            ],
            [
                "name" => "Sindhagi",
                "state_id" => "16",


            ],
            [
                "name" => "Sindhnur",
                "state_id" => "16",


            ],
            [
                "name" => "Sira",
                "state_id" => "16",


            ],
            [
                "name" => "Sirsi",
                "state_id" => "16",


            ],
            [
                "name" => "Siruguppa",
                "state_id" => "16",


            ],
            [
                "name" => "Srinivaspur",
                "state_id" => "16",


            ],
            [
                "name" => "Tarikere",
                "state_id" => "16",


            ],
            [
                "name" => "Tekkalakote",
                "state_id" => "16",


            ],
            [
                "name" => "Terdal",
                "state_id" => "16",


            ],
            [
                "name" => "Talikota",
                "state_id" => "16",


            ],
            [
                "name" => "Tiptur",
                "state_id" => "16",


            ],
            [
                "name" => "Tumkur",
                "state_id" => "16",


            ],
            [
                "name" => "Udupi",
                "state_id" => "16",


            ],
            [
                "name" => "Vijayapura",
                "state_id" => "16",


            ],
            [
                "name" => "Wadi",
                "state_id" => "16",


            ],
            [
                "name" => "Yadgir",
                "state_id" => "16",


            ],
            [
                "name" => "Mysore",
                "state_id" => "17",


            ],
            [
                "name" => "Adoor",
                "state_id" => "18",


            ],
            [
                "name" => "Alappuzha",
                "state_id" => "18",


            ],
            [
                "name" => "Attingal",
                "state_id" => "18",


            ],
            [
                "name" => "Chalakudy",
                "state_id" => "18",


            ],
            [
                "name" => "Changanassery",
                "state_id" => "18",


            ],
            [
                "name" => "Cherthala",
                "state_id" => "18",


            ],
            [
                "name" => "Chittur-Thathamangalam",
                "state_id" => "18",


            ],
            [
                "name" => "Guruvayoor",
                "state_id" => "18",


            ],
            [
                "name" => "Kanhangad",
                "state_id" => "18",


            ],
            [
                "name" => "Kannur",
                "state_id" => "18",


            ],
            [
                "name" => "Kasaragod",
                "state_id" => "18",


            ],
            [
                "name" => "Kayamkulam",
                "state_id" => "18",


            ],
            [
                "name" => "Kochi",
                "state_id" => "18",


            ],
            [
                "name" => "Kodungallur",
                "state_id" => "18",


            ],
            [
                "name" => "Kollam",
                "state_id" => "18",


            ],
            [
                "name" => "Kottayam",
                "state_id" => "18",


            ],
            [
                "name" => "Kozhikode",
                "state_id" => "18",


            ],
            [
                "name" => "Kunnamkulam",
                "state_id" => "18",


            ],
            [
                "name" => "Malappuram",
                "state_id" => "18",


            ],
            [
                "name" => "Mattannur",
                "state_id" => "18",


            ],
            [
                "name" => "Mavelikkara",
                "state_id" => "18",


            ],
            [
                "name" => "Mavoor",
                "state_id" => "18",


            ],
            [
                "name" => "Muvattupuzha",
                "state_id" => "18",


            ],
            [
                "name" => "Nedumangad",
                "state_id" => "18",


            ],
            [
                "name" => "Neyyattinkara",
                "state_id" => "18",


            ],
            [
                "name" => "Nilambur",
                "state_id" => "18",


            ],
            [
                "name" => "Ottappalam",
                "state_id" => "18",


            ],
            [
                "name" => "Palai",
                "state_id" => "18",


            ],
            [
                "name" => "Palakkad",
                "state_id" => "18",


            ],
            [
                "name" => "Panamattom",
                "state_id" => "18",


            ],
            [
                "name" => "Panniyannur",
                "state_id" => "18",


            ],
            [
                "name" => "Pappinisseri",
                "state_id" => "18",


            ],
            [
                "name" => "Paravoor",
                "state_id" => "18",


            ],
            [
                "name" => "Pathanamthitta",
                "state_id" => "18",


            ],
            [
                "name" => "Peringathur",
                "state_id" => "18",


            ],
            [
                "name" => "Perinthalmanna",
                "state_id" => "18",


            ],
            [
                "name" => "Perumbavoor",
                "state_id" => "18",


            ],
            [
                "name" => "Ponnani",
                "state_id" => "18",


            ],
            [
                "name" => "Punalur",
                "state_id" => "18",


            ],
            [
                "name" => "Puthuppally",
                "state_id" => "18",


            ],
            [
                "name" => "Koyilandy",
                "state_id" => "18",


            ],
            [
                "name" => "Shoranur",
                "state_id" => "18",


            ],
            [
                "name" => "Taliparamba",
                "state_id" => "18",


            ],
            [
                "name" => "Thiruvalla",
                "state_id" => "18",


            ],
            [
                "name" => "Thiruvananthapuram",
                "state_id" => "18",


            ],
            [
                "name" => "Thodupuzha",
                "state_id" => "18",


            ],
            [
                "name" => "Thrissur",
                "state_id" => "18",


            ],
            [
                "name" => "Tirur",
                "state_id" => "18",


            ],
            [
                "name" => "Vaikom",
                "state_id" => "18",


            ],
            [
                "name" => "Varkala",
                "state_id" => "18",


            ],
            [
                "name" => "Vatakara",
                "state_id" => "18",


            ],
            [
                "name" => "Alirajpur",
                "state_id" => "19",


            ],
            [
                "name" => "Ashok Nagar",
                "state_id" => "19",


            ],
            [
                "name" => "Balaghat",
                "state_id" => "19",


            ],
            [
                "name" => "Bhopal",
                "state_id" => "19",


            ],
            [
                "name" => "Ganjbasoda",
                "state_id" => "19",


            ],
            [
                "name" => "Gwalior",
                "state_id" => "19",


            ],
            [
                "name" => "Indore",
                "state_id" => "19",


            ],
            [
                "name" => "Itarsi",
                "state_id" => "19",


            ],
            [
                "name" => "Jabalpur",
                "state_id" => "19",


            ],
            [
                "name" => "Lahar",
                "state_id" => "19",


            ],
            [
                "name" => "Maharajpur",
                "state_id" => "19",


            ],
            [
                "name" => "Mahidpur",
                "state_id" => "19",


            ],
            [
                "name" => "Maihar",
                "state_id" => "19",


            ],
            [
                "name" => "Malaj Khand",
                "state_id" => "19",


            ],
            [
                "name" => "Manasa",
                "state_id" => "19",


            ],
            [
                "name" => "Manawar",
                "state_id" => "19",


            ],
            [
                "name" => "Mandideep",
                "state_id" => "19",


            ],
            [
                "name" => "Mandla",
                "state_id" => "19",


            ],
            [
                "name" => "Mandsaur",
                "state_id" => "19",


            ],
            [
                "name" => "Mauganj",
                "state_id" => "19",


            ],
            [
                "name" => "Mhow Cantonment",
                "state_id" => "19",


            ],
            [
                "name" => "Mhowgaon",
                "state_id" => "19",


            ],
            [
                "name" => "Morena",
                "state_id" => "19",


            ],
            [
                "name" => "Multai",
                "state_id" => "19",


            ],
            [
                "name" => "Mundi",
                "state_id" => "19",


            ],
            [
                "name" => "Murwara (Katni)",
                "state_id" => "19",


            ],
            [
                "name" => "Nagda",
                "state_id" => "19",


            ],
            [
                "name" => "Nainpur",
                "state_id" => "19",


            ],
            [
                "name" => "Narsinghgarh",
                "state_id" => "19",


            ],
            [
                "name" => "Narsinghgarh",
                "state_id" => "19",


            ],
            [
                "name" => "Neemuch",
                "state_id" => "19",


            ],
            [
                "name" => "Nepanagar",
                "state_id" => "19",


            ],
            [
                "name" => "Niwari",
                "state_id" => "19",


            ],
            [
                "name" => "Nowgong",
                "state_id" => "19",


            ],
            [
                "name" => "Nowrozabad (Khodargama)",
                "state_id" => "19",


            ],
            [
                "name" => "Pachore",
                "state_id" => "19",


            ],
            [
                "name" => "Pali",
                "state_id" => "19",


            ],
            [
                "name" => "Panagar",
                "state_id" => "19",


            ],
            [
                "name" => "Pandhurna",
                "state_id" => "19",


            ],
            [
                "name" => "Panna",
                "state_id" => "19",


            ],
            [
                "name" => "Pasan",
                "state_id" => "19",


            ],
            [
                "name" => "Pipariya",
                "state_id" => "19",


            ],
            [
                "name" => "Pithampur",
                "state_id" => "19",


            ],
            [
                "name" => "Porsa",
                "state_id" => "19",


            ],
            [
                "name" => "Prithvipur",
                "state_id" => "19",


            ],
            [
                "name" => "Raghogarh-Vijaypur",
                "state_id" => "19",


            ],
            [
                "name" => "Rahatgarh",
                "state_id" => "19",


            ],
            [
                "name" => "Raisen",
                "state_id" => "19",


            ],
            [
                "name" => "Rajgarh",
                "state_id" => "19",


            ],
            [
                "name" => "Ratlam",
                "state_id" => "19",


            ],
            [
                "name" => "Rau",
                "state_id" => "19",


            ],
            [
                "name" => "Rehli",
                "state_id" => "19",


            ],
            [
                "name" => "Rewa",
                "state_id" => "19",


            ],
            [
                "name" => "Sabalgarh",
                "state_id" => "19",


            ],
            [
                "name" => "Sagar",
                "state_id" => "19",


            ],
            [
                "name" => "Sanawad",
                "state_id" => "19",


            ],
            [
                "name" => "Sarangpur",
                "state_id" => "19",


            ],
            [
                "name" => "Sarni",
                "state_id" => "19",


            ],
            [
                "name" => "Satna",
                "state_id" => "19",


            ],
            [
                "name" => "Sausar",
                "state_id" => "19",


            ],
            [
                "name" => "Sehore",
                "state_id" => "19",


            ],
            [
                "name" => "Sendhwa",
                "state_id" => "19",


            ],
            [
                "name" => "Seoni",
                "state_id" => "19",


            ],
            [
                "name" => "Seoni-Malwa",
                "state_id" => "19",


            ],
            [
                "name" => "Shahdol",
                "state_id" => "19",


            ],
            [
                "name" => "Shajapur",
                "state_id" => "19",


            ],
            [
                "name" => "Shamgarh",
                "state_id" => "19",


            ],
            [
                "name" => "Sheopur",
                "state_id" => "19",


            ],
            [
                "name" => "Shivpuri",
                "state_id" => "19",


            ],
            [
                "name" => "Shujalpur",
                "state_id" => "19",


            ],
            [
                "name" => "Sidhi",
                "state_id" => "19",


            ],
            [
                "name" => "Sihora",
                "state_id" => "19",


            ],
            [
                "name" => "Singrauli",
                "state_id" => "19",


            ],
            [
                "name" => "Sironj",
                "state_id" => "19",


            ],
            [
                "name" => "Sohagpur",
                "state_id" => "19",


            ],
            [
                "name" => "Tarana",
                "state_id" => "19",


            ],
            [
                "name" => "Tikamgarh",
                "state_id" => "19",


            ],
            [
                "name" => "Ujjain",
                "state_id" => "19",


            ],
            [
                "name" => "Umaria",
                "state_id" => "19",


            ],
            [
                "name" => "Vidisha",
                "state_id" => "19",


            ],
            [
                "name" => "Vijaypur",
                "state_id" => "19",


            ],
            [
                "name" => "Wara Seoni",
                "state_id" => "19",


            ],
            [
                "name" => "Ahmednagar",
                "state_id" => "20",


            ],
            [
                "name" => "Akola",
                "state_id" => "20",


            ],
            [
                "name" => "Akot",
                "state_id" => "20",


            ],
            [
                "name" => "Amalner",
                "state_id" => "20",


            ],
            [
                "name" => "Ambejogai",
                "state_id" => "20",


            ],
            [
                "name" => "Amravati",
                "state_id" => "20",


            ],
            [
                "name" => "Anjangaon",
                "state_id" => "20",


            ],
            [
                "name" => "Arvi",
                "state_id" => "20",


            ],
            [
                "name" => "Aurangabad",
                "state_id" => "20",


            ],
            [
                "name" => "Bhiwandi",
                "state_id" => "20",


            ],
            [
                "name" => "Dhule",
                "state_id" => "20",


            ],
            [
                "name" => "Kalyan-Dombivali",
                "state_id" => "20",


            ],
            [
                "name" => "Ichalkaranji",
                "state_id" => "20",


            ],
            [
                "name" => "Kalyan-Dombivali",
                "state_id" => "20",


            ],
            [
                "name" => "Karjat",
                "state_id" => "20",


            ],
            [
                "name" => "Latur",
                "state_id" => "20",


            ],
            [
                "name" => "Loha",
                "state_id" => "20",


            ],
            [
                "name" => "Lonar",
                "state_id" => "20",


            ],
            [
                "name" => "Lonavla",
                "state_id" => "20",


            ],
            [
                "name" => "Mahad",
                "state_id" => "20",


            ],
            [
                "name" => "Malegaon",
                "state_id" => "20",


            ],
            [
                "name" => "Malkapur",
                "state_id" => "20",


            ],
            [
                "name" => "Mangalvedhe",
                "state_id" => "20",


            ],
            [
                "name" => "Mangrulpir",
                "state_id" => "20",


            ],
            [
                "name" => "Manjlegaon",
                "state_id" => "20",


            ],
            [
                "name" => "Manmad",
                "state_id" => "20",


            ],
            [
                "name" => "Manwath",
                "state_id" => "20",


            ],
            [
                "name" => "Mehkar",
                "state_id" => "20",


            ],
            [
                "name" => "Mhaswad",
                "state_id" => "20",


            ],
            [
                "name" => "Mira-Bhayandar",
                "state_id" => "20",


            ],
            [
                "name" => "Morshi",
                "state_id" => "20",


            ],
            [
                "name" => "Mukhed",
                "state_id" => "20",


            ],
            [
                "name" => "Mul",
                "state_id" => "20",


            ],
            [
                "name" => "Greater Mumbai*",
                "state_id" => "20",


            ],
            [
                "name" => "Murtijapur",
                "state_id" => "20",


            ],
            [
                "name" => "Nagpur",
                "state_id" => "20",


            ],
            [
                "name" => "Nanded-Waghala",
                "state_id" => "20",


            ],
            [
                "name" => "Nandgaon",
                "state_id" => "20",


            ],
            [
                "name" => "Nandura",
                "state_id" => "20",


            ],
            [
                "name" => "Nandurbar",
                "state_id" => "20",


            ],
            [
                "name" => "Narkhed",
                "state_id" => "20",


            ],
            [
                "name" => "Nashik",
                "state_id" => "20",


            ],
            [
                "name" => "Navi Mumbai",
                "state_id" => "20",


            ],
            [
                "name" => "Nawapur",
                "state_id" => "20",


            ],
            [
                "name" => "Nilanga",
                "state_id" => "20",


            ],
            [
                "name" => "Osmanabad",
                "state_id" => "20",


            ],
            [
                "name" => "Ozar",
                "state_id" => "20",


            ],
            [
                "name" => "Pachora",
                "state_id" => "20",


            ],
            [
                "name" => "Paithan",
                "state_id" => "20",


            ],
            [
                "name" => "Palghar",
                "state_id" => "20",


            ],
            [
                "name" => "Pandharkaoda",
                "state_id" => "20",


            ],
            [
                "name" => "Pandharpur",
                "state_id" => "20",


            ],
            [
                "name" => "Panvel",
                "state_id" => "20",


            ],
            [
                "name" => "Parbhani",
                "state_id" => "20",


            ],
            [
                "name" => "Parli",
                "state_id" => "20",


            ],
            [
                "name" => "Partur",
                "state_id" => "20",


            ],
            [
                "name" => "Pathardi",
                "state_id" => "20",


            ],
            [
                "name" => "Pathri",
                "state_id" => "20",


            ],
            [
                "name" => "Patur",
                "state_id" => "20",


            ],
            [
                "name" => "Pauni",
                "state_id" => "20",


            ],
            [
                "name" => "Pen",
                "state_id" => "20",


            ],
            [
                "name" => "Phaltan",
                "state_id" => "20",


            ],
            [
                "name" => "Pulgaon",
                "state_id" => "20",


            ],
            [
                "name" => "Pune",
                "state_id" => "20",


            ],
            [
                "name" => "Purna",
                "state_id" => "20",


            ],
            [
                "name" => "Pusad",
                "state_id" => "20",


            ],
            [
                "name" => "Rahuri",
                "state_id" => "20",


            ],
            [
                "name" => "Rajura",
                "state_id" => "20",


            ],
            [
                "name" => "Ramtek",
                "state_id" => "20",


            ],
            [
                "name" => "Ratnagiri",
                "state_id" => "20",


            ],
            [
                "name" => "Raver",
                "state_id" => "20",


            ],
            [
                "name" => "Risod",
                "state_id" => "20",


            ],
            [
                "name" => "Sailu",
                "state_id" => "20",


            ],
            [
                "name" => "Sangamner",
                "state_id" => "20",


            ],
            [
                "name" => "Sangli",
                "state_id" => "20",


            ],
            [
                "name" => "Sangole",
                "state_id" => "20",


            ],
            [
                "name" => "Sasvad",
                "state_id" => "20",


            ],
            [
                "name" => "Satana",
                "state_id" => "20",


            ],
            [
                "name" => "Satara",
                "state_id" => "20",


            ],
            [
                "name" => "Savner",
                "state_id" => "20",


            ],
            [
                "name" => "Sawantwadi",
                "state_id" => "20",


            ],
            [
                "name" => "Shahade",
                "state_id" => "20",


            ],
            [
                "name" => "Shegaon",
                "state_id" => "20",


            ],
            [
                "name" => "Shendurjana",
                "state_id" => "20",


            ],
            [
                "name" => "Shirdi",
                "state_id" => "20",


            ],
            [
                "name" => "Shirpur-Warwade",
                "state_id" => "20",


            ],
            [
                "name" => "Shirur",
                "state_id" => "20",


            ],
            [
                "name" => "Shrigonda",
                "state_id" => "20",


            ],
            [
                "name" => "Shrirampur",
                "state_id" => "20",


            ],
            [
                "name" => "Sillod",
                "state_id" => "20",


            ],
            [
                "name" => "Sinnar",
                "state_id" => "20",


            ],
            [
                "name" => "Solapur",
                "state_id" => "20",


            ],
            [
                "name" => "Soyagaon",
                "state_id" => "20",


            ],
            [
                "name" => "Talegaon Dabhade",
                "state_id" => "20",


            ],
            [
                "name" => "Talode",
                "state_id" => "20",


            ],
            [
                "name" => "Tasgaon",
                "state_id" => "20",


            ],
            [
                "name" => "Thane",
                "state_id" => "20",


            ],
            [
                "name" => "Tirora",
                "state_id" => "20",


            ],
            [
                "name" => "Tuljapur",
                "state_id" => "20",


            ],
            [
                "name" => "Tumsar",
                "state_id" => "20",


            ],
            [
                "name" => "Uchgaon",
                "state_id" => "20",


            ],
            [
                "name" => "Udgir",
                "state_id" => "20",


            ],
            [
                "name" => "Umarga",
                "state_id" => "20",


            ],
            [
                "name" => "Umarkhed",
                "state_id" => "20",


            ],
            [
                "name" => "Umred",
                "state_id" => "20",


            ],
            [
                "name" => "Uran",
                "state_id" => "20",


            ],
            [
                "name" => "Uran Islampur",
                "state_id" => "20",


            ],
            [
                "name" => "Vadgaon Kasba",
                "state_id" => "20",


            ],
            [
                "name" => "Vaijapur",
                "state_id" => "20",


            ],
            [
                "name" => "Vasai-Virar",
                "state_id" => "20",


            ],
            [
                "name" => "Vita",
                "state_id" => "20",


            ],
            [
                "name" => "Wadgaon Road",
                "state_id" => "20",


            ],
            [
                "name" => "Wai",
                "state_id" => "20",


            ],
            [
                "name" => "Wani",
                "state_id" => "20",


            ],
            [
                "name" => "Wardha",
                "state_id" => "20",


            ],
            [
                "name" => "Warora",
                "state_id" => "20",


            ],
            [
                "name" => "Warud",
                "state_id" => "20",


            ],
            [
                "name" => "Washim",
                "state_id" => "20",


            ],
            [
                "name" => "Yavatmal",
                "state_id" => "20",


            ],
            [
                "name" => "Yawal",
                "state_id" => "20",


            ],
            [
                "name" => "Yevla",
                "state_id" => "20",


            ],
            [
                "name" => "Imphal",
                "state_id" => "21",


            ],
            [
                "name" => "Lilong",
                "state_id" => "21",


            ],
            [
                "name" => "Mayang Imphal",
                "state_id" => "21",


            ],
            [
                "name" => "Thoubal",
                "state_id" => "21",


            ],
            [
                "name" => "Nongstoin",
                "state_id" => "22",


            ],
            [
                "name" => "Shillong",
                "state_id" => "22",


            ],
            [
                "name" => "Tura",
                "state_id" => "22",


            ],
            [
                "name" => "Aizawl",
                "state_id" => "23",


            ],
            [
                "name" => "Lunglei",
                "state_id" => "23",


            ],
            [
                "name" => "Saiha",
                "state_id" => "23",


            ],
            [
                "name" => "Dimapur",
                "state_id" => "24",


            ],
            [
                "name" => "Kohima",
                "state_id" => "24",


            ],
            [
                "name" => "Mokokchung",
                "state_id" => "24",


            ],
            [
                "name" => "Tuensang",
                "state_id" => "24",


            ],
            [
                "name" => "Wokha",
                "state_id" => "24",


            ],
            [
                "name" => "Zunheboto",
                "state_id" => "24",


            ],
            [
                "name" => "Balangir",
                "state_id" => "25",


            ],
            [
                "name" => "Baleshwar Town",
                "state_id" => "25",


            ],
            [
                "name" => "Barbil",
                "state_id" => "25",


            ],
            [
                "name" => "Bargarh",
                "state_id" => "25",


            ],
            [
                "name" => "Baripada Town",
                "state_id" => "25",


            ],
            [
                "name" => "Bhadrak",
                "state_id" => "25",


            ],
            [
                "name" => "Bhawanipatna",
                "state_id" => "25",


            ],
            [
                "name" => "Bhubaneswar",
                "state_id" => "25",


            ],
            [
                "name" => "Brahmapur",
                "state_id" => "25",


            ],
            [
                "name" => "Byasanagar",
                "state_id" => "25",


            ],
            [
                "name" => "Cuttack",
                "state_id" => "25",


            ],
            [
                "name" => "Dhenkanal",
                "state_id" => "25",


            ],
            [
                "name" => "Jatani",
                "state_id" => "25",


            ],
            [
                "name" => "Jharsuguda",
                "state_id" => "25",


            ],
            [
                "name" => "Kendrapara",
                "state_id" => "25",


            ],
            [
                "name" => "Kendujhar",
                "state_id" => "25",


            ],
            [
                "name" => "Malkangiri",
                "state_id" => "25",


            ],
            [
                "name" => "Nabarangapur",
                "state_id" => "25",


            ],
            [
                "name" => "Paradip",
                "state_id" => "25",


            ],
            [
                "name" => "Parlakhemundi",
                "state_id" => "25",


            ],
            [
                "name" => "Pattamundai",
                "state_id" => "25",


            ],
            [
                "name" => "Phulabani",
                "state_id" => "25",


            ],
            [
                "name" => "Puri",
                "state_id" => "25",


            ],
            [
                "name" => "Rairangpur",
                "state_id" => "25",


            ],
            [
                "name" => "Rajagangapur",
                "state_id" => "25",


            ],
            [
                "name" => "Raurkela",
                "state_id" => "25",


            ],
            [
                "name" => "Rayagada",
                "state_id" => "25",


            ],
            [
                "name" => "Sambalpur",
                "state_id" => "25",


            ],
            [
                "name" => "Soro",
                "state_id" => "25",


            ],
            [
                "name" => "Sunabeda",
                "state_id" => "25",


            ],
            [
                "name" => "Sundargarh",
                "state_id" => "25",


            ],
            [
                "name" => "Talcher",
                "state_id" => "25",


            ],
            [
                "name" => "Tarbha",
                "state_id" => "25",


            ],
            [
                "name" => "Titlagarh",
                "state_id" => "25",


            ],
            [
                "name" => "Karaikal",
                "state_id" => "26",


            ],
            [
                "name" => "Mahe",
                "state_id" => "26",


            ],
            [
                "name" => "Pondicherry",
                "state_id" => "26",


            ],
            [
                "name" => "Yanam",
                "state_id" => "26",


            ],
            [
                "name" => "Amritsar",
                "state_id" => "27",


            ],
            [
                "name" => "Barnala",
                "state_id" => "27",


            ],
            [
                "name" => "Batala",
                "state_id" => "27",


            ],
            [
                "name" => "Bathinda",
                "state_id" => "27",


            ],
            [
                "name" => "Dhuri",
                "state_id" => "27",


            ],
            [
                "name" => "Faridkot",
                "state_id" => "27",


            ],
            [
                "name" => "Fazilka",
                "state_id" => "27",


            ],
            [
                "name" => "Firozpur",
                "state_id" => "27",


            ],
            [
                "name" => "Firozpur Cantt.",
                "state_id" => "27",


            ],
            [
                "name" => "Gobindgarh",
                "state_id" => "27",


            ],
            [
                "name" => "Gurdaspur",
                "state_id" => "27",


            ],
            [
                "name" => "Hoshiarpur",
                "state_id" => "27",


            ],
            [
                "name" => "Jagraon",
                "state_id" => "27",


            ],
            [
                "name" => "Jalandhar Cantt.",
                "state_id" => "27",


            ],
            [
                "name" => "Jalandhar",
                "state_id" => "27",


            ],
            [
                "name" => "Kapurthala",
                "state_id" => "27",


            ],
            [
                "name" => "Khanna",
                "state_id" => "27",


            ],
            [
                "name" => "Kharar",
                "state_id" => "27",


            ],
            [
                "name" => "Kot Kapura",
                "state_id" => "27",


            ],
            [
                "name" => "Longowal",
                "state_id" => "27",


            ],
            [
                "name" => "Ludhiana",
                "state_id" => "27",


            ],
            [
                "name" => "Malerkotla",
                "state_id" => "27",


            ],
            [
                "name" => "Malout",
                "state_id" => "27",


            ],
            [
                "name" => "Mansa",
                "state_id" => "27",


            ],
            [
                "name" => "Moga",
                "state_id" => "27",


            ],
            [
                "name" => "Mohali",
                "state_id" => "27",


            ],
            [
                "name" => "Morinda, India",
                "state_id" => "27",


            ],
            [
                "name" => "Mukerian",
                "state_id" => "27",


            ],
            [
                "name" => "Muktsar",
                "state_id" => "27",


            ],
            [
                "name" => "Nabha",
                "state_id" => "27",


            ],
            [
                "name" => "Nakodar",
                "state_id" => "27",


            ],
            [
                "name" => "Nangal",
                "state_id" => "27",


            ],
            [
                "name" => "Nawanshahr",
                "state_id" => "27",


            ],
            [
                "name" => "Pathankot",
                "state_id" => "27",


            ],
            [
                "name" => "Patiala",
                "state_id" => "27",


            ],
            [
                "name" => "Pattran",
                "state_id" => "27",


            ],
            [
                "name" => "Patti",
                "state_id" => "27",


            ],
            [
                "name" => "Phagwara",
                "state_id" => "27",


            ],
            [
                "name" => "Phillaur",
                "state_id" => "27",


            ],
            [
                "name" => "Qadian",
                "state_id" => "27",


            ],
            [
                "name" => "Raikot",
                "state_id" => "27",


            ],
            [
                "name" => "Rajpura",
                "state_id" => "27",


            ],
            [
                "name" => "Rampura Phul",
                "state_id" => "27",


            ],
            [
                "name" => "Rupnagar",
                "state_id" => "27",


            ],
            [
                "name" => "Samana",
                "state_id" => "27",


            ],
            [
                "name" => "Sangrur",
                "state_id" => "27",


            ],
            [
                "name" => "Sirhind Fatehgarh Sahib",
                "state_id" => "27",


            ],
            [
                "name" => "Sujanpur",
                "state_id" => "27",


            ],
            [
                "name" => "Sunam",
                "state_id" => "27",


            ],
            [
                "name" => "Talwara",
                "state_id" => "27",


            ],
            [
                "name" => "Tarn Taran",
                "state_id" => "27",


            ],
            [
                "name" => "Urmar Tanda",
                "state_id" => "27",


            ],
            [
                "name" => "Zira",
                "state_id" => "27",


            ],
            [
                "name" => "Zirakpur",
                "state_id" => "27",


            ],
            [
                "name" => "Ajmer",
                "state_id" => "28",


            ],
            [
                "name" => "Alwar",
                "state_id" => "28",


            ],
            [
                "name" => "Bikaner",
                "state_id" => "28",


            ],
            [
                "name" => "Bharatpur",
                "state_id" => "28",


            ],
            [
                "name" => "Bhilwara",
                "state_id" => "28",


            ],
            [
                "name" => "Jaipur",
                "state_id" => "28",


            ],
            [
                "name" => "Jodhpur",
                "state_id" => "28",


            ],
            [
                "name" => "Lachhmangarh",
                "state_id" => "28",


            ],
            [
                "name" => "Ladnu",
                "state_id" => "28",


            ],
            [
                "name" => "Lakheri",
                "state_id" => "28",


            ],
            [
                "name" => "Lalsot",
                "state_id" => "28",


            ],
            [
                "name" => "Losal",
                "state_id" => "28",


            ],
            [
                "name" => "Makrana",
                "state_id" => "28",


            ],
            [
                "name" => "Malpura",
                "state_id" => "28",


            ],
            [
                "name" => "Mandalgarh",
                "state_id" => "28",


            ],
            [
                "name" => "Mandawa",
                "state_id" => "28",


            ],
            [
                "name" => "Mangrol",
                "state_id" => "28",


            ],
            [
                "name" => "Merta City",
                "state_id" => "28",


            ],
            [
                "name" => "Mount Abu",
                "state_id" => "28",


            ],
            [
                "name" => "Nadbai",
                "state_id" => "28",


            ],
            [
                "name" => "Nagar",
                "state_id" => "28",


            ],
            [
                "name" => "Nagaur",
                "state_id" => "28",


            ],
            [
                "name" => "Nasirabad",
                "state_id" => "28",


            ],
            [
                "name" => "Nathdwara",
                "state_id" => "28",


            ],
            [
                "name" => "Neem-Ka-Thana",
                "state_id" => "28",


            ],
            [
                "name" => "Nimbahera",
                "state_id" => "28",


            ],
            [
                "name" => "Nohar",
                "state_id" => "28",


            ],
            [
                "name" => "Nokha",
                "state_id" => "28",


            ],
            [
                "name" => "Pali",
                "state_id" => "28",


            ],
            [
                "name" => "Phalodi",
                "state_id" => "28",


            ],
            [
                "name" => "Phulera",
                "state_id" => "28",


            ],
            [
                "name" => "Pilani",
                "state_id" => "28",


            ],
            [
                "name" => "Pilibanga",
                "state_id" => "28",


            ],
            [
                "name" => "Pindwara",
                "state_id" => "28",


            ],
            [
                "name" => "Pipar City",
                "state_id" => "28",


            ],
            [
                "name" => "Prantij",
                "state_id" => "28",


            ],
            [
                "name" => "Pratapgarh",
                "state_id" => "28",


            ],
            [
                "name" => "Raisinghnagar",
                "state_id" => "28",


            ],
            [
                "name" => "Rajakhera",
                "state_id" => "28",


            ],
            [
                "name" => "Rajaldesar",
                "state_id" => "28",


            ],
            [
                "name" => "Rajgarh (Alwar)",
                "state_id" => "28",


            ],
            [
                "name" => "Rajgarh (Churu)",
                "state_id" => "28",


            ],
            [
                "name" => "Rajsamand",
                "state_id" => "28",


            ],
            [
                "name" => "Ramganj Mandi",
                "state_id" => "28",


            ],
            [
                "name" => "Ramngarh",
                "state_id" => "28",


            ],
            [
                "name" => "Ratangarh",
                "state_id" => "28",


            ],
            [
                "name" => "Rawatbhata",
                "state_id" => "28",


            ],
            [
                "name" => "Rawatsar",
                "state_id" => "28",


            ],
            [
                "name" => "Reengus",
                "state_id" => "28",


            ],
            [
                "name" => "Sadri",
                "state_id" => "28",


            ],
            [
                "name" => "Sadulshahar",
                "state_id" => "28",


            ],
            [
                "name" => "Sadulpur",
                "state_id" => "28",


            ],
            [
                "name" => "Sagwara",
                "state_id" => "28",


            ],
            [
                "name" => "Sambhar",
                "state_id" => "28",


            ],
            [
                "name" => "Sanchore",
                "state_id" => "28",


            ],
            [
                "name" => "Sangaria",
                "state_id" => "28",


            ],
            [
                "name" => "Sardarshahar",
                "state_id" => "28",


            ],
            [
                "name" => "Sawai Madhopur",
                "state_id" => "28",


            ],
            [
                "name" => "Shahpura",
                "state_id" => "28",


            ],
            [
                "name" => "Shahpura",
                "state_id" => "28",


            ],
            [
                "name" => "Sheoganj",
                "state_id" => "28",


            ],
            [
                "name" => "Sikar",
                "state_id" => "28",


            ],
            [
                "name" => "Sirohi",
                "state_id" => "28",


            ],
            [
                "name" => "Sojat",
                "state_id" => "28",


            ],
            [
                "name" => "Sri Madhopur",
                "state_id" => "28",


            ],
            [
                "name" => "Sujangarh",
                "state_id" => "28",


            ],
            [
                "name" => "Sumerpur",
                "state_id" => "28",


            ],
            [
                "name" => "Suratgarh",
                "state_id" => "28",


            ],
            [
                "name" => "Taranagar",
                "state_id" => "28",


            ],
            [
                "name" => "Todabhim",
                "state_id" => "28",


            ],
            [
                "name" => "Todaraisingh",
                "state_id" => "28",


            ],
            [
                "name" => "Tonk",
                "state_id" => "28",


            ],
            [
                "name" => "Udaipur",
                "state_id" => "28",


            ],
            [
                "name" => "Udaipurwati",
                "state_id" => "28",


            ],
            [
                "name" => "Vijainagar, Ajmer",
                "state_id" => "28",


            ],
            [
                "name" => "Arakkonam",
                "state_id" => "29",


            ],
            [
                "name" => "Aruppukkottai",
                "state_id" => "29",


            ],
            [
                "name" => "Chennai*",
                "state_id" => "29",


            ],
            [
                "name" => "Coimbatore",
                "state_id" => "29",


            ],
            [
                "name" => "Erode",
                "state_id" => "29",


            ],
            [
                "name" => "Gobichettipalayam",
                "state_id" => "29",


            ],
            [
                "name" => "Kancheepuram",
                "state_id" => "29",


            ],
            [
                "name" => "Karur",
                "state_id" => "29",


            ],
            [
                "name" => "Lalgudi",
                "state_id" => "29",


            ],
            [
                "name" => "Madurai",
                "state_id" => "29",


            ],
            [
                "name" => "Manachanallur",
                "state_id" => "29",


            ],
            [
                "name" => "Nagapattinam",
                "state_id" => "29",


            ],
            [
                "name" => "Nagercoil",
                "state_id" => "29",


            ],
            [
                "name" => "Namagiripettai",
                "state_id" => "29",


            ],
            [
                "name" => "Namakkal",
                "state_id" => "29",


            ],
            [
                "name" => "Nandivaram-Guduvancheri",
                "state_id" => "29",


            ],
            [
                "name" => "Nanjikottai",
                "state_id" => "29",


            ],
            [
                "name" => "Natham",
                "state_id" => "29",


            ],
            [
                "name" => "Nellikuppam",
                "state_id" => "29",


            ],
            [
                "name" => "Neyveli (TS)",
                "state_id" => "29",


            ],
            [
                "name" => "O' Valley",
                "state_id" => "29",


            ],
            [
                "name" => "Oddanchatram",
                "state_id" => "29",


            ],
            [
                "name" => "P.N.Patti",
                "state_id" => "29",


            ],
            [
                "name" => "Pacode",
                "state_id" => "29",


            ],
            [
                "name" => "Padmanabhapuram",
                "state_id" => "29",


            ],
            [
                "name" => "Palani",
                "state_id" => "29",


            ],
            [
                "name" => "Palladam",
                "state_id" => "29",


            ],
            [
                "name" => "Pallapatti",
                "state_id" => "29",


            ],
            [
                "name" => "Pallikonda",
                "state_id" => "29",


            ],
            [
                "name" => "Panagudi",
                "state_id" => "29",


            ],
            [
                "name" => "Panruti",
                "state_id" => "29",


            ],
            [
                "name" => "Paramakudi",
                "state_id" => "29",


            ],
            [
                "name" => "Parangipettai",
                "state_id" => "29",


            ],
            [
                "name" => "Pattukkottai",
                "state_id" => "29",


            ],
            [
                "name" => "Perambalur",
                "state_id" => "29",


            ],
            [
                "name" => "Peravurani",
                "state_id" => "29",


            ],
            [
                "name" => "Periyakulam",
                "state_id" => "29",


            ],
            [
                "name" => "Periyasemur",
                "state_id" => "29",


            ],
            [
                "name" => "Pernampattu",
                "state_id" => "29",


            ],
            [
                "name" => "Pollachi",
                "state_id" => "29",


            ],
            [
                "name" => "Polur",
                "state_id" => "29",


            ],
            [
                "name" => "Ponneri",
                "state_id" => "29",


            ],
            [
                "name" => "Pudukkottai",
                "state_id" => "29",


            ],
            [
                "name" => "Pudupattinam",
                "state_id" => "29",


            ],
            [
                "name" => "Puliyankudi",
                "state_id" => "29",


            ],
            [
                "name" => "Punjaipugalur",
                "state_id" => "29",


            ],
            [
                "name" => "Ranipet",
                "state_id" => "29",


            ],
            [
                "name" => "Rajapalayam",
                "state_id" => "29",


            ],
            [
                "name" => "Ramanathapuram",
                "state_id" => "29",


            ],
            [
                "name" => "Rameshwaram",
                "state_id" => "29",


            ],
            [
                "name" => "Rasipuram",
                "state_id" => "29",


            ],
            [
                "name" => "Salem",
                "state_id" => "29",


            ],
            [
                "name" => "Sankarankoil",
                "state_id" => "29",


            ],
            [
                "name" => "Sankari",
                "state_id" => "29",


            ],
            [
                "name" => "Sathyamangalam",
                "state_id" => "29",


            ],
            [
                "name" => "Sattur",
                "state_id" => "29",


            ],
            [
                "name" => "Shenkottai",
                "state_id" => "29",


            ],
            [
                "name" => "Sholavandan",
                "state_id" => "29",


            ],
            [
                "name" => "Sholingur",
                "state_id" => "29",


            ],
            [
                "name" => "Sirkali",
                "state_id" => "29",


            ],
            [
                "name" => "Sivaganga",
                "state_id" => "29",


            ],
            [
                "name" => "Sivagiri",
                "state_id" => "29",


            ],
            [
                "name" => "Sivakasi",
                "state_id" => "29",


            ],
            [
                "name" => "Srivilliputhur",
                "state_id" => "29",


            ],
            [
                "name" => "Surandai",
                "state_id" => "29",


            ],
            [
                "name" => "Suriyampalayam",
                "state_id" => "29",


            ],
            [
                "name" => "Tenkasi",
                "state_id" => "29",


            ],
            [
                "name" => "Thammampatti",
                "state_id" => "29",


            ],
            [
                "name" => "Thanjavur",
                "state_id" => "29",


            ],
            [
                "name" => "Tharamangalam",
                "state_id" => "29",


            ],
            [
                "name" => "Tharangambadi",
                "state_id" => "29",


            ],
            [
                "name" => "Theni Allinagaram",
                "state_id" => "29",


            ],
            [
                "name" => "Thirumangalam",
                "state_id" => "29",


            ],
            [
                "name" => "Thirupuvanam",
                "state_id" => "29",


            ],
            [
                "name" => "Thiruthuraipoondi",
                "state_id" => "29",


            ],
            [
                "name" => "Thiruvallur",
                "state_id" => "29",


            ],
            [
                "name" => "Thiruvarur",
                "state_id" => "29",


            ],
            [
                "name" => "Thuraiyur",
                "state_id" => "29",


            ],
            [
                "name" => "Tindivanam",
                "state_id" => "29",


            ],
            [
                "name" => "Tiruchendur",
                "state_id" => "29",


            ],
            [
                "name" => "Tiruchengode",
                "state_id" => "29",


            ],
            [
                "name" => "Tiruchirappalli",
                "state_id" => "29",


            ],
            [
                "name" => "Tirukalukundram",
                "state_id" => "29",


            ],
            [
                "name" => "Tirukkoyilur",
                "state_id" => "29",


            ],
            [
                "name" => "Tirunelveli",
                "state_id" => "29",


            ],
            [
                "name" => "Tirupathur",
                "state_id" => "29",


            ],
            [
                "name" => "Tirupathur",
                "state_id" => "29",


            ],
            [
                "name" => "Tiruppur",
                "state_id" => "29",


            ],
            [
                "name" => "Tiruttani",
                "state_id" => "29",


            ],
            [
                "name" => "Tiruvannamalai",
                "state_id" => "29",


            ],
            [
                "name" => "Tiruvethipuram",
                "state_id" => "29",


            ],
            [
                "name" => "Tittakudi",
                "state_id" => "29",


            ],
            [
                "name" => "Udhagamandalam",
                "state_id" => "29",


            ],
            [
                "name" => "Udumalaipettai",
                "state_id" => "29",


            ],
            [
                "name" => "Unnamalaikadai",
                "state_id" => "29",


            ],
            [
                "name" => "Usilampatti",
                "state_id" => "29",


            ],
            [
                "name" => "Uthamapalayam",
                "state_id" => "29",


            ],
            [
                "name" => "Uthiramerur",
                "state_id" => "29",


            ],
            [
                "name" => "Vadakkuvalliyur",
                "state_id" => "29",


            ],
            [
                "name" => "Vadalur",
                "state_id" => "29",


            ],
            [
                "name" => "Vadipatti",
                "state_id" => "29",


            ],
            [
                "name" => "Valparai",
                "state_id" => "29",


            ],
            [
                "name" => "Vandavasi",
                "state_id" => "29",


            ],
            [
                "name" => "Vaniyambadi",
                "state_id" => "29",


            ],
            [
                "name" => "Vedaranyam",
                "state_id" => "29",


            ],
            [
                "name" => "Vellakoil",
                "state_id" => "29",


            ],
            [
                "name" => "Vellore",
                "state_id" => "29",


            ],
            [
                "name" => "Vikramasingapuram",
                "state_id" => "29",


            ],
            [
                "name" => "Viluppuram",
                "state_id" => "29",


            ],
            [
                "name" => "Virudhachalam",
                "state_id" => "29",


            ],
            [
                "name" => "Virudhunagar",
                "state_id" => "29",


            ],
            [
                "name" => "Viswanatham",
                "state_id" => "29",


            ],
            [
                "name" => "Adilabad",
                "state_id" => "30",


            ],
            [
                "name" => "Bellampalle",
                "state_id" => "30",


            ],
            [
                "name" => "Bhadrachalam",
                "state_id" => "30",


            ],
            [
                "name" => "Bhainsa",
                "state_id" => "30",


            ],
            [
                "name" => "Bhongir",
                "state_id" => "30",


            ],
            [
                "name" => "Bodhan",
                "state_id" => "30",


            ],
            [
                "name" => "Farooqnagar",
                "state_id" => "30",


            ],
            [
                "name" => "Gadwal",
                "state_id" => "30",


            ],
            [
                "name" => "Hyderabad*",
                "state_id" => "30",


            ],
            [
                "name" => "Jagtial",
                "state_id" => "30",


            ],
            [
                "name" => "Jangaon",
                "state_id" => "30",


            ],
            [

                "name" => "Kagaznagar",
                "state_id" => "30",


            ],
            [

                "name" => "Kamareddy",
                "state_id" => "30",


            ],
            [

                "name" => "Karimnagar",
                "state_id" => "30",


            ],
            [

                "name" => "Khammam",
                "state_id" => "30",


            ],
            [

                "name" => "Koratla",
                "state_id" => "30",


            ],
            [

                "name" => "Kothagudem",
                "state_id" => "30",


            ],
            [

                "name" => "Kyathampalle",
                "state_id" => "30",


            ],
            [

                "name" => "Mahbubnagar",
                "state_id" => "30",


            ],
            [

                "name" => "Mancherial",
                "state_id" => "30",


            ],
            [

                "name" => "Mandamarri",
                "state_id" => "30",


            ],
            [

                "name" => "Manuguru",
                "state_id" => "30",


            ],
            [

                "name" => "Medak",
                "state_id" => "30",


            ],
            [

                "name" => "Miryalaguda",
                "state_id" => "30",


            ],
            [

                "name" => "Nagarkurnool",
                "state_id" => "30",


            ],
            [

                "name" => "Narayanpet",
                "state_id" => "30",


            ],
            [

                "name" => "Nirmal",
                "state_id" => "30",


            ],
            [

                "name" => "Nizamabad",
                "state_id" => "30",


            ],
            [

                "name" => "Palwancha",
                "state_id" => "30",


            ],
            [

                "name" => "Ramagundam",
                "state_id" => "30",


            ],
            [

                "name" => "Sadasivpet",
                "state_id" => "30",


            ],
            [

                "name" => "Sangareddy",
                "state_id" => "30",


            ],
            [

                "name" => "Siddipet",
                "state_id" => "30",


            ],
            [

                "name" => "Sircilla",
                "state_id" => "30",


            ],
            [

                "name" => "Suryapet",
                "state_id" => "30",


            ],
            [

                "name" => "Tandur",
                "state_id" => "30",


            ],
            [

                "name" => "Vikarabad",
                "state_id" => "30",


            ],
            [

                "name" => "Wanaparthy",
                "state_id" => "30",


            ],
            [

                "name" => "Warangal",
                "state_id" => "30",


            ],
            [

                "name" => "Yellandu",
                "state_id" => "30",


            ],
            [

                "name" => "Agartala",
                "state_id" => "31",


            ],
            [

                "name" => "Belonia",
                "state_id" => "31",


            ],
            [

                "name" => "Dharmanagar",
                "state_id" => "31",


            ],
            [

                "name" => "Kailasahar",
                "state_id" => "31",


            ],
            [

                "name" => "Khowai",
                "state_id" => "31",


            ],
            [

                "name" => "Pratapgarh",
                "state_id" => "31",


            ],
            [

                "name" => "Udaipur",
                "state_id" => "31",


            ],
            [

                "name" => "Achhnera",
                "state_id" => "32",


            ],
            [

                "name" => "Agra",
                "state_id" => "32",


            ],
            [

                "name" => "Aligarh",
                "state_id" => "32",


            ],
            [

                "name" => "Allahabad",
                "state_id" => "32",


            ],
            [

                "name" => "Amroha",
                "state_id" => "32",


            ],
            [

                "name" => "Azamgarh",
                "state_id" => "32",


            ],
            [

                "name" => "Bahraich",
                "state_id" => "32",


            ],
            [

                "name" => "Chandausi",
                "state_id" => "32",


            ],
            [

                "name" => "Etawah",
                "state_id" => "32",


            ],
            [

                "name" => "Firozabad",
                "state_id" => "32",


            ],
            [

                "name" => "Fatehpur Sikri",
                "state_id" => "32",


            ],
            [

                "name" => "Hapur",
                "state_id" => "32",


            ],
            [

                "name" => "Hardoi *",
                "state_id" => "32",


            ],
            [

                "name" => "Jhansi",
                "state_id" => "32",


            ],
            [

                "name" => "Kalpi",
                "state_id" => "32",


            ],
            [

                "name" => "Kanpur",
                "state_id" => "32",


            ],
            [

                "name" => "Khair",
                "state_id" => "32",


            ],
            [

                "name" => "Laharpur",
                "state_id" => "32",


            ],
            [

                "name" => "Lakhimpur",
                "state_id" => "32",


            ],
            [

                "name" => "Lal Gopalganj Nindaura",
                "state_id" => "32",


            ],
            [

                "name" => "Lalitpur",
                "state_id" => "32",


            ],
            [

                "name" => "Lalganj",
                "state_id" => "32",


            ],
            [

                "name" => "Lar",
                "state_id" => "32",


            ],
            [

                "name" => "Loni",
                "state_id" => "32",


            ],
            [

                "name" => "Lucknow*",
                "state_id" => "32",


            ],
            [

                "name" => "Mathura",
                "state_id" => "32",


            ],
            [

                "name" => "Meerut",
                "state_id" => "32",


            ],
            [

                "name" => "Modinagar",
                "state_id" => "32",


            ],
            [

                "name" => "Moradabad",
                "state_id" => "32",


            ],
            [

                "name" => "Nagina",
                "state_id" => "32",


            ],
            [

                "name" => "Najibabad",
                "state_id" => "32",


            ],
            [

                "name" => "Nakur",
                "state_id" => "32",


            ],
            [

                "name" => "Nanpara",
                "state_id" => "32",


            ],
            [

                "name" => "Naraura",
                "state_id" => "32",


            ],
            [

                "name" => "Naugawan Sadat",
                "state_id" => "32",


            ],
            [

                "name" => "Nautanwa",
                "state_id" => "32",


            ],
            [

                "name" => "Nawabganj",
                "state_id" => "32",


            ],
            [

                "name" => "Nehtaur",
                "state_id" => "32",


            ],
            [

                "name" => "Niwai",
                "state_id" => "32",


            ],
            [

                "name" => "Noida",
                "state_id" => "32",


            ],
            [

                "name" => "Noorpur",
                "state_id" => "32",


            ],
            [

                "name" => "Obra",
                "state_id" => "32",


            ],
            [

                "name" => "Orai",
                "state_id" => "32",


            ],
            [

                "name" => "Padrauna",
                "state_id" => "32",


            ],
            [

                "name" => "Palia Kalan",
                "state_id" => "32",


            ],
            [

                "name" => "Parasi",
                "state_id" => "32",


            ],
            [

                "name" => "Phulpur",
                "state_id" => "32",


            ],
            [

                "name" => "Pihani",
                "state_id" => "32",


            ],
            [

                "name" => "Pilibhit",
                "state_id" => "32",


            ],
            [

                "name" => "Pilkhuwa",
                "state_id" => "32",


            ],
            [

                "name" => "Powayan",
                "state_id" => "32",


            ],
            [

                "name" => "Pukhrayan",
                "state_id" => "32",


            ],
            [

                "name" => "Puranpur",
                "state_id" => "32",


            ],
            [

                "name" => "Purquazi",
                "state_id" => "32",


            ],
            [

                "name" => "Purwa",
                "state_id" => "32",


            ],
            [

                "name" => "Rae Bareli",
                "state_id" => "32",


            ],
            [

                "name" => "Rampur",
                "state_id" => "32",


            ],
            [

                "name" => "Rampur Maniharan",
                "state_id" => "32",


            ],
            [

                "name" => "Rampur Maniharan",
                "state_id" => "32",


            ],
            [

                "name" => "Rasra",
                "state_id" => "32",


            ],
            [

                "name" => "Rath",
                "state_id" => "32",


            ],
            [

                "name" => "Renukoot",
                "state_id" => "32",


            ],
            [

                "name" => "Reoti",
                "state_id" => "32",


            ],
            [

                "name" => "Robertsganj",
                "state_id" => "32",


            ],
            [

                "name" => "Rudauli",
                "state_id" => "32",


            ],
            [

                "name" => "Rudrapur",
                "state_id" => "32",


            ],
            [

                "name" => "Sadabad",
                "state_id" => "32",


            ],
            [

                "name" => "Safipur",
                "state_id" => "32",


            ],
            [

                "name" => "Saharanpur",
                "state_id" => "32",


            ],
            [

                "name" => "Sahaspur",
                "state_id" => "32",


            ],
            [

                "name" => "Sahaswan",
                "state_id" => "32",


            ],
            [

                "name" => "Sahawar",
                "state_id" => "32",


            ],
            [

                "name" => "Sahjanwa",
                "state_id" => "32",


            ],
            [

                "name" => "Saidpur",
                "state_id" => "32",


            ],
            [

                "name" => "Sambhal",
                "state_id" => "32",


            ],
            [

                "name" => "Samdhan",
                "state_id" => "32",


            ],
            [

                "name" => "Samthar",
                "state_id" => "32",


            ],
            [

                "name" => "Sandi",
                "state_id" => "32",


            ],
            [

                "name" => "Sandila",
                "state_id" => "32",


            ],
            [

                "name" => "Sardhana",
                "state_id" => "32",


            ],
            [

                "name" => "Seohara",
                "state_id" => "32",


            ],
            [

                "name" => "Shahabad, Hardoi",
                "state_id" => "32",


            ],
            [

                "name" => "Shahabad, Rampur",
                "state_id" => "32",


            ],
            [

                "name" => "Shahganj",
                "state_id" => "32",


            ],
            [

                "name" => "Shahjahanpur",
                "state_id" => "32",


            ],
            [

                "name" => "Shamli",
                "state_id" => "32",


            ],
            [

                "name" => "Shamsabad, Agra",
                "state_id" => "32",


            ],
            [

                "name" => "Shamsabad, Farrukhabad",
                "state_id" => "32",


            ],
            [

                "name" => "Sherkot",
                "state_id" => "32",


            ],
            [

                "name" => "Shikarpur, Bulandshahr",
                "state_id" => "32",


            ],
            [

                "name" => "Shikohabad",
                "state_id" => "32",


            ],
            [

                "name" => "Shishgarh",
                "state_id" => "32",


            ],
            [

                "name" => "Siana",
                "state_id" => "32",


            ],
            [

                "name" => "Sikanderpur",
                "state_id" => "32",


            ],
            [

                "name" => "Sikandra Rao",
                "state_id" => "32",


            ],
            [

                "name" => "Sikandrabad",
                "state_id" => "32",


            ],
            [

                "name" => "Sirsaganj",
                "state_id" => "32",


            ],
            [

                "name" => "Sirsi",
                "state_id" => "32",


            ],
            [

                "name" => "Sitapur",
                "state_id" => "32",


            ],
            [

                "name" => "Soron",
                "state_id" => "32",


            ],
            [

                "name" => "Suar",
                "state_id" => "32",


            ],
            [

                "name" => "Sultanpur",
                "state_id" => "32",


            ],
            [

                "name" => "Sumerpur",
                "state_id" => "32",


            ],
            [

                "name" => "Tanda",
                "state_id" => "32",


            ],
            [

                "name" => "Thakurdwara",
                "state_id" => "32",


            ],
            [

                "name" => "Thana Bhawan",
                "state_id" => "32",


            ],
            [

                "name" => "Tilhar",
                "state_id" => "32",


            ],
            [

                "name" => "Tirwaganj",
                "state_id" => "32",


            ],
            [

                "name" => "Tulsipur",
                "state_id" => "32",


            ],
            [

                "name" => "Tundla",
                "state_id" => "32",


            ],
            [

                "name" => "Ujhani",
                "state_id" => "32",


            ],
            [

                "name" => "Unnao",
                "state_id" => "32",


            ],
            [

                "name" => "Utraula",
                "state_id" => "32",


            ],
            [

                "name" => "Varanasi",
                "state_id" => "32",


            ],
            [

                "name" => "Vrindavan",
                "state_id" => "32",


            ],
            [

                "name" => "Warhapur",
                "state_id" => "32",


            ],
            [

                "name" => "Zaidpur",
                "state_id" => "32",


            ],
            [

                "name" => "Zamania",
                "state_id" => "32",


            ],
            [

                "name" => "Bageshwar",
                "state_id" => "33",


            ],
            [

                "name" => "Dehradun",
                "state_id" => "33",


            ],
            [

                "name" => "Haldwani-cum-Kathgodam",
                "state_id" => "33",


            ],
            [

                "name" => "Hardwar",
                "state_id" => "33",


            ],
            [

                "name" => "Kashipur",
                "state_id" => "33",


            ],
            [

                "name" => "Manglaur",
                "state_id" => "33",


            ],
            [

                "name" => "Mussoorie",
                "state_id" => "33",


            ],
            [

                "name" => "Nagla",
                "state_id" => "33",


            ],
            [

                "name" => "Nainital",
                "state_id" => "33",


            ],
            [

                "name" => "Pauri",
                "state_id" => "33",


            ],
            [

                "name" => "Pithoragarh",
                "state_id" => "33",


            ],
            [

                "name" => "Ramnagar",
                "state_id" => "33",


            ],
            [

                "name" => "Rishikesh",
                "state_id" => "33",


            ],
            [

                "name" => "Roorkee",
                "state_id" => "33",


            ],
            [

                "name" => "Rudrapur",
                "state_id" => "33",


            ],
            [

                "name" => "Sitarganj",
                "state_id" => "33",


            ],
            [

                "name" => "Srinagar",
                "state_id" => "33",


            ],
            [

                "name" => "Tehri",
                "state_id" => "33",


            ],
            [

                "name" => "?Adra",
                "state_id" => "34",


            ],
            [

                "name" => "Alipurduar",
                "state_id" => "34",


            ],
            [

                "name" => "Arambagh",
                "state_id" => "34",


            ],
            [

                "name" => "Asansol",
                "state_id" => "34",


            ],
            [

                "name" => "Baharampur",
                "state_id" => "34",


            ],
            [

                "name" => "Balurghat",
                "state_id" => "34",


            ],
            [

                "name" => "Bankura",
                "state_id" => "34",


            ],
            [

                "name" => "Darjiling",
                "state_id" => "34",


            ],
            [

                "name" => "English Bazar",
                "state_id" => "34",


            ],
            [

                "name" => "Gangarampur",
                "state_id" => "34",


            ],
            [

                "name" => "Habra",
                "state_id" => "34",


            ],
            [

                "name" => "Hugli-Chinsurah",
                "state_id" => "34",


            ],
            [

                "name" => "Jalpaiguri",
                "state_id" => "34",


            ],
            [

                "name" => "Jhargram",
                "state_id" => "34",


            ],
            [

                "name" => "Kalimpong",
                "state_id" => "34",


            ],
            [

                "name" => "Kharagpur",
                "state_id" => "34",


            ],
            [

                "name" => "Kolkata",
                "state_id" => "34",


            ],
            [

                "name" => "Mainaguri",
                "state_id" => "34",


            ],
            [

                "name" => "Malda",
                "state_id" => "34",


            ],
            [

                "name" => "Mathabhanga",
                "state_id" => "34",


            ],
            [

                "name" => "Medinipur",
                "state_id" => "34",


            ],
            [

                "name" => "Memari",
                "state_id" => "34",


            ],
            [

                "name" => "Monoharpur",
                "state_id" => "34",


            ],
            [

                "name" => "Murshidabad",
                "state_id" => "34",


            ],
            [

                "name" => "Nabadwip",
                "state_id" => "34",


            ],
            [

                "name" => "Naihati",
                "state_id" => "34",


            ],
            [

                "name" => "Panchla",
                "state_id" => "34",


            ],
            [

                "name" => "Pandua",
                "state_id" => "34",


            ],
            [

                "name" => "Paschim Punropara",
                "state_id" => "34",


            ],
            [

                "name" => "Purulia",
                "state_id" => "34",


            ],
            [

                "name" => "Raghunathpur",
                "state_id" => "34",


            ],
            [

                "name" => "Raghunathganj",
                "state_id" => "34",


            ],
            [

                "name" => "Raiganj",
                "state_id" => "34",


            ],
            [

                "name" => "Rampurhat",
                "state_id" => "34",


            ],
            [

                "name" => "Ranaghat",
                "state_id" => "34",


            ],
            [

                "name" => "Sainthia",
                "state_id" => "34",


            ],
            [

                "name" => "Santipur",
                "state_id" => "34",


            ],
            [

                "name" => "Siliguri",
                "state_id" => "34",


            ],
            [

                "name" => "Sonamukhi",
                "state_id" => "34",


            ],
            [

                "name" => "Srirampore",
                "state_id" => "34",


            ],
            [

                "name" => "Suri",
                "state_id" => "34",


            ],
            [

                "name" => "Taki",
                "state_id" => "34",


            ],
            [

                "name" => "Tamluk",
                "state_id" => "34",


            ],
            [

                "name" => "Tarakeswar",
                "state_id" => "34",


            ]
        ]);


        // $country = Country::create(['name' => 'India']);

        // $state = State::create(['country_id' => $country->id, 'name' => 'Gujarat']);
        // City::create(['state_id' => $state->id, 'name' => 'Rajkot']);
        // City::create(['state_id' => $state->id, 'name' => 'Surat']);

        // $state = State::create(['country_id' => $country->id, 'name' => 'Himachal Pradesh']);
        // City::create(['state_id' => $state->id, 'name' => 'Shimla']);
        // City::create(['state_id' => $state->id, 'name' => 'Dharamsala']);

        // $state = State::create(['country_id' => $country->id, 'name' => 'U.P']);
        // City::create(['state_id' => $state->id, 'name' => 'Bulandshahr']);
        // City::create(['state_id' => $state->id, 'name' => 'Agra']);
    }
}
