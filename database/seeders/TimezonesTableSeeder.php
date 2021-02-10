<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimezonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timezones')->insert([
            'code' => 'UTC',
            'name' => 'UTC',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Abidjan',
            'name' => 'Abidjan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Accra',
            'name' => 'Accra',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Addis_Ababa',
            'name' => 'Addis_Ababa',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Algiers',
            'name' => 'Algiers',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Asmara',
            'name' => 'Asmara',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Bamako',
            'name' => 'Bamako',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Bangui',
            'name' => 'Bangui',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Banjul',
            'name' => 'Banjul',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Bissau',
            'name' => 'Bissau',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Blantyre',
            'name' => 'Blantyre',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Brazzaville',
            'name' => 'Brazzaville',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Bujumbura',
            'name' => 'Bujumbura',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Cairo',
            'name' => 'Cairo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Casablanca',
            'name' => 'Casablanca',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Ceuta',
            'name' => 'Ceuta',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Conakry',
            'name' => 'Conakry',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Dakar',
            'name' => 'Dakar',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Dar_es_Salaam',
            'name' => 'Dar_es_Salaam',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Djibouti',
            'name' => 'Djibouti',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Douala',
            'name' => 'Douala',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/El_Aaiun',
            'name' => 'El_Aaiun',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Freetown',
            'name' => 'Freetown',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Gaborone',
            'name' => 'Gaborone',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Harare',
            'name' => 'Harare',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Johannesburg',
            'name' => 'Johannesburg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Juba',
            'name' => 'Juba',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Kampala',
            'name' => 'Kampala',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Khartoum',
            'name' => 'Khartoum',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Kigali',
            'name' => 'Kigali',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Kinshasa',
            'name' => 'Kinshasa',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Lagos',
            'name' => 'Lagos',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Libreville',
            'name' => 'Libreville',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Lome',
            'name' => 'Lome',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Luanda',
            'name' => 'Luanda',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Lubumbashi',
            'name' => 'Lubumbashi',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Lusaka',
            'name' => 'Lusaka',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Malabo',
            'name' => 'Malabo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Maputo',
            'name' => 'Maputo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Maseru',
            'name' => 'Maseru',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Mbabane',
            'name' => 'Mbabane',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Mogadishu',
            'name' => 'Mogadishu',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Monrovia',
            'name' => 'Monrovia',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Nairobi',
            'name' => 'Nairobi',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Ndjamena',
            'name' => 'Ndjamena',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Niamey',
            'name' => 'Niamey',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Nouakchott',
            'name' => 'Nouakchott',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Ouagadougou',
            'name' => 'Ouagadougou',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Porto-Novo',
            'name' => 'Porto-Novo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Sao_Tome',
            'name' => 'Sao_Tome',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Tripoli',
            'name' => 'Tripoli',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Tunis',
            'name' => 'Tunis',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Africa/Windhoek',
            'name' => 'Windhoek',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Adak',
            'name' => 'Adak',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Anchorage',
            'name' => 'Anchorage',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Anguilla',
            'name' => 'Anguilla',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Antigua',
            'name' => 'Antigua',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Araguaina',
            'name' => 'Araguaina',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Argentina/Buenos_Aires',
            'name' => 'Buenos_Aires',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Argentina/Catamarca',
            'name' => 'Catamarca',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Argentina/Cordoba',
            'name' => 'Cordoba',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Argentina/Jujuy',
            'name' => 'Jujuy',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Argentina/La_Rioja',
            'name' => 'La_Rioja',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Argentina/Mendoza',
            'name' => 'Mendoza',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Argentina/Rio_Gallegos',
            'name' => 'Rio_Gallegos',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Argentina/Salta',
            'name' => 'Salta',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Argentina/San_Juan',
            'name' => 'San_Juan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Argentina/San_Luis',
            'name' => 'San_Luis',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Argentina/Tucuman',
            'name' => 'Tucuman',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Argentina/Ushuaia',
            'name' => 'Ushuaia',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Aruba',
            'name' => 'Aruba',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Asuncion',
            'name' => 'Asuncion',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Atikokan',
            'name' => 'Atikokan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Bahia',
            'name' => 'Bahia',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Bahia_Banderas',
            'name' => 'Bahia_Banderas',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Barbados',
            'name' => 'Barbados',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Belem',
            'name' => 'Belem',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Belize',
            'name' => 'Belize',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Blanc-Sablon',
            'name' => 'Blanc-Sablon',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Boa_Vista',
            'name' => 'Boa_Vista',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Bogota',
            'name' => 'Bogota',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Boise',
            'name' => 'Boise',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Cambridge_Bay',
            'name' => 'Cambridge_Bay',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Campo_Grande',
            'name' => 'Campo_Grande',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Cancun',
            'name' => 'Cancun',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Caracas',
            'name' => 'Caracas',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Cayenne',
            'name' => 'Cayenne',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Cayman',
            'name' => 'Cayman',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Chicago',
            'name' => 'Chicago',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Chihuahua',
            'name' => 'Chihuahua',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Costa_Rica',
            'name' => 'Costa_Rica',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Creston',
            'name' => 'Creston',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Cuiaba',
            'name' => 'Cuiaba',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Curacao',
            'name' => 'Curacao',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Danmarkshavn',
            'name' => 'Danmarkshavn',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Dawson',
            'name' => 'Dawson',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Dawson_Creek',
            'name' => 'Dawson_Creek',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Denver',
            'name' => 'Denver',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Detroit',
            'name' => 'Detroit',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Dominica',
            'name' => 'Dominica',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Edmonton',
            'name' => 'Edmonton',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Eirunepe',
            'name' => 'Eirunepe',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/El_Salvador',
            'name' => 'El_Salvador',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Fort_Nelson',
            'name' => 'Fort_Nelson',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Fortaleza',
            'name' => 'Fortaleza',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Glace_Bay',
            'name' => 'Glace_Bay',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Goose_Bay',
            'name' => 'Goose_Bay',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Grand_Turk',
            'name' => 'Grand_Turk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Grenada',
            'name' => 'Grenada',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Guadeloupe',
            'name' => 'Guadeloupe',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Guatemala',
            'name' => 'Guatemala',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Guayaquil',
            'name' => 'Guayaquil',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Guyana',
            'name' => 'Guyana',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Halifax',
            'name' => 'Halifax',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Havana',
            'name' => 'Havana',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Hermosillo',
            'name' => 'Hermosillo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Indiana/Indianapolis',
            'name' => 'Indianapolis',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Indiana/Knox',
            'name' => 'Knox',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Indiana/Marengo',
            'name' => 'Marengo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Indiana/Petersburg',
            'name' => 'Petersburg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Indiana/Tell_City',
            'name' => 'Tell_City',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Indiana/Vevay',
            'name' => 'Vevay',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Indiana/Vincennes',
            'name' => 'Vincennes',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Indiana/Winamac',
            'name' => 'Winamac',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Inuvik',
            'name' => 'Inuvik',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Iqaluit',
            'name' => 'Iqaluit',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Jamaica',
            'name' => 'Jamaica',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Juneau',
            'name' => 'Juneau',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Kentucky/Louisville',
            'name' => 'Louisville',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Kentucky/Monticello',
            'name' => 'Monticello',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Kralendijk',
            'name' => 'Kralendijk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/La_Paz',
            'name' => 'La_Paz',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Lima',
            'name' => 'Lima',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Los_Angeles',
            'name' => 'Los_Angeles',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Lower_Princes',
            'name' => 'Lower_Princes',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Maceio',
            'name' => 'Maceio',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Managua',
            'name' => 'Managua',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Manaus',
            'name' => 'Manaus',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Marigot',
            'name' => 'Marigot',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Martinique',
            'name' => 'Martinique',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Matamoros',
            'name' => 'Matamoros',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Mazatlan',
            'name' => 'Mazatlan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Menominee',
            'name' => 'Menominee',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Merida',
            'name' => 'Merida',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Metlakatla',
            'name' => 'Metlakatla',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Mexico_City',
            'name' => 'Mexico_City',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Miquelon',
            'name' => 'Miquelon',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Moncton',
            'name' => 'Moncton',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Monterrey',
            'name' => 'Monterrey',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Montevideo',
            'name' => 'Montevideo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Montserrat',
            'name' => 'Montserrat',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Nassau',
            'name' => 'Nassau',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/New_York',
            'name' => 'New_York',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Nipigon',
            'name' => 'Nipigon',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Nome',
            'name' => 'Nome',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Noronha',
            'name' => 'Noronha',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/North_Dakota/Beulah',
            'name' => 'Beulah',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/North_Dakota/Center',
            'name' => 'Center',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/North_Dakota/New_Salem',
            'name' => 'New_Salem',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Nuuk',
            'name' => 'Nuuk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Ojinaga',
            'name' => 'Ojinaga',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Panama',
            'name' => 'Panama',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Pangnirtung',
            'name' => 'Pangnirtung',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Paramaribo',
            'name' => 'Paramaribo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Phoenix',
            'name' => 'Phoenix',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Port-au-Prince',
            'name' => 'Port-au-Prince',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Port_of_Spain',
            'name' => 'Port_of_Spain',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Porto_Velho',
            'name' => 'Porto_Velho',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Puerto_Rico',
            'name' => 'Puerto_Rico',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Punta_Arenas',
            'name' => 'Punta_Arenas',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Rainy_River',
            'name' => 'Rainy_River',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Rankin_Inlet',
            'name' => 'Rankin_Inlet',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Recife',
            'name' => 'Recife',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Regina',
            'name' => 'Regina',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Resolute',
            'name' => 'Resolute',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Rio_Branco',
            'name' => 'Rio_Branco',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Santarem',
            'name' => 'Santarem',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Santiago',
            'name' => 'Santiago',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Santo_Domingo',
            'name' => 'Santo_Domingo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Sao_Paulo',
            'name' => 'Sao_Paulo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Scoresbysund',
            'name' => 'Scoresbysund',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Sitka',
            'name' => 'Sitka',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/St_Barthelemy',
            'name' => 'St_Barthelemy',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/St_Johns',
            'name' => 'St_Johns',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/St_Kitts',
            'name' => 'St_Kitts',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/St_Lucia',
            'name' => 'St_Lucia',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/St_Thomas',
            'name' => 'St_Thomas',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/St_Vincent',
            'name' => 'St_Vincent',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Swift_Current',
            'name' => 'Swift_Current',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Tegucigalpa',
            'name' => 'Tegucigalpa',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Thule',
            'name' => 'Thule',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Thunder_Bay',
            'name' => 'Thunder_Bay',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Tijuana',
            'name' => 'Tijuana',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Toronto',
            'name' => 'Toronto',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Tortola',
            'name' => 'Tortola',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Vancouver',
            'name' => 'Vancouver',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Whitehorse',
            'name' => 'Whitehorse',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Winnipeg',
            'name' => 'Winnipeg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Yakutat',
            'name' => 'Yakutat',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'America/Yellowknife',
            'name' => 'Yellowknife',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Antarctica/Casey',
            'name' => 'Casey',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Antarctica/Davis',
            'name' => 'Davis',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Antarctica/DumontDUrville',
            'name' => 'DumontDUrville',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Antarctica/Macquarie',
            'name' => 'Macquarie',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Antarctica/Mawson',
            'name' => 'Mawson',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Antarctica/McMurdo',
            'name' => 'McMurdo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Antarctica/Palmer',
            'name' => 'Palmer',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Antarctica/Rothera',
            'name' => 'Rothera',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Antarctica/Syowa',
            'name' => 'Syowa',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Antarctica/Troll',
            'name' => 'Troll',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Antarctica/Vostok',
            'name' => 'Vostok',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Arctic/Longyearbyen',
            'name' => 'Longyearbyen',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Aden',
            'name' => 'Aden',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Almaty',
            'name' => 'Almaty',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Amman',
            'name' => 'Amman',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Anadyr',
            'name' => 'Anadyr',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Aqtau',
            'name' => 'Aqtau',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Aqtobe',
            'name' => 'Aqtobe',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Ashgabat',
            'name' => 'Ashgabat',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Atyrau',
            'name' => 'Atyrau',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Baghdad',
            'name' => 'Baghdad',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Bahrain',
            'name' => 'Bahrain',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Baku',
            'name' => 'Baku',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Bangkok',
            'name' => 'Bangkok',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Barnaul',
            'name' => 'Barnaul',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Beirut',
            'name' => 'Beirut',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Bishkek',
            'name' => 'Bishkek',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Brunei',
            'name' => 'Brunei',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Chita',
            'name' => 'Chita',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Choibalsan',
            'name' => 'Choibalsan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Colombo',
            'name' => 'Colombo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Damascus',
            'name' => 'Damascus',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Dhaka',
            'name' => 'Dhaka',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Dili',
            'name' => 'Dili',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Dubai',
            'name' => 'Dubai',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Dushanbe',
            'name' => 'Dushanbe',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Famagusta',
            'name' => 'Famagusta',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Gaza',
            'name' => 'Gaza',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Hebron',
            'name' => 'Hebron',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Ho_Chi_Minh',
            'name' => 'Ho_Chi_Minh',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Hong_Kong',
            'name' => 'Hong_Kong',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Hovd',
            'name' => 'Hovd',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Irkutsk',
            'name' => 'Irkutsk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Jakarta',
            'name' => 'Jakarta',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Jayapura',
            'name' => 'Jayapura',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Jerusalem',
            'name' => 'Jerusalem',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Kabul',
            'name' => 'Kabul',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Kamchatka',
            'name' => 'Kamchatka',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Karachi',
            'name' => 'Karachi',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Kathmandu',
            'name' => 'Kathmandu',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Khandyga',
            'name' => 'Khandyga',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Kolkata',
            'name' => 'Kolkata',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Krasnoyarsk',
            'name' => 'Krasnoyarsk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Kuala_Lumpur',
            'name' => 'Kuala_Lumpur',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Kuching',
            'name' => 'Kuching',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Kuwait',
            'name' => 'Kuwait',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Macau',
            'name' => 'Macau',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Magadan',
            'name' => 'Magadan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Makassar',
            'name' => 'Makassar',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Manila',
            'name' => 'Manila',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Muscat',
            'name' => 'Muscat',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Nicosia',
            'name' => 'Nicosia',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Novokuznetsk',
            'name' => 'Novokuznetsk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Novosibirsk',
            'name' => 'Novosibirsk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Omsk',
            'name' => 'Omsk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Oral',
            'name' => 'Oral',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Phnom_Penh',
            'name' => 'Phnom_Penh',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Pontianak',
            'name' => 'Pontianak',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Pyongyang',
            'name' => 'Pyongyang',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Qatar',
            'name' => 'Qatar',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Qostanay',
            'name' => 'Qostanay',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Qyzylorda',
            'name' => 'Qyzylorda',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Riyadh',
            'name' => 'Riyadh',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Sakhalin',
            'name' => 'Sakhalin',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Samarkand',
            'name' => 'Samarkand',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Seoul',
            'name' => 'Seoul',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Shanghai',
            'name' => 'Shanghai',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Singapore',
            'name' => 'Singapore',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Srednekolymsk',
            'name' => 'Srednekolymsk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Taipei',
            'name' => 'Taipei',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Tashkent',
            'name' => 'Tashkent',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Tbilisi',
            'name' => 'Tbilisi',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Tehran',
            'name' => 'Tehran',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Thimphu',
            'name' => 'Thimphu',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Tokyo',
            'name' => 'Tokyo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Tomsk',
            'name' => 'Tomsk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Ulaanbaatar',
            'name' => 'Ulaanbaatar',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Urumqi',
            'name' => 'Urumqi',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Ust-Nera',
            'name' => 'Ust-Nera',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Vientiane',
            'name' => 'Vientiane',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Vladivostok',
            'name' => 'Vladivostok',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Yakutsk',
            'name' => 'Yakutsk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Yangon',
            'name' => 'Yangon',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Yekaterinburg',
            'name' => 'Yekaterinburg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Asia/Yerevan',
            'name' => 'Yerevan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Atlantic/Azores',
            'name' => 'Azores',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Atlantic/Bermuda',
            'name' => 'Bermuda',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Atlantic/Canary',
            'name' => 'Canary',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Atlantic/Cape_Verde',
            'name' => 'Cape_Verde',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Atlantic/Faroe',
            'name' => 'Faroe',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Atlantic/Madeira	',
            'name' => 'Madeira	',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Atlantic/Reykjavik',
            'name' => 'Reykjavik',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Atlantic/South_Georgia',
            'name' => 'South_Georgia',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Atlantic/St_Helena',
            'name' => 'St_Helena',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Atlantic/Stanley	',
            'name' => 'Stanley	',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Australia/Adelaide',
            'name' => 'Adelaide',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Australia/Brisbane	',
            'name' => 'Brisbane	',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Australia/Broken_Hill',
            'name' => 'Broken_Hill',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Australia/Currie',
            'name' => 'Currie',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Australia/Darwin',
            'name' => 'Darwin',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Australia/Eucla',
            'name' => 'Eucla',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Australia/Hobart',
            'name' => 'Hobart',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Australia/Lindeman',
            'name' => 'Lindeman',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Australia/Lord_Howe',
            'name' => 'Lord_Howe',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Australia/Melbourne',
            'name' => 'Melbourne',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Australia/Perth',
            'name' => 'Perth',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Australia/Sydney',
            'name' => 'Sydney',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Amsterdam',
            'name' => 'Amsterdam',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Andorra',
            'name' => 'Andorra',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Astrakhan',
            'name' => 'Astrakhan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Athens',
            'name' => 'Athens',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Belgrade',
            'name' => 'Belgrade',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Berlin',
            'name' => 'Berlin',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Bratislava',
            'name' => 'Bratislava',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Brussels',
            'name' => 'Brussels',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Bucharest',
            'name' => 'Bucharest',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Budapest',
            'name' => 'Budapest',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Busingen',
            'name' => 'Busingen',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Chisinau',
            'name' => 'Chisinau',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Copenhagen',
            'name' => 'Copenhagen',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Dublin',
            'name' => 'Dublin',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Gibraltar',
            'name' => 'Gibraltar',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Guernsey',
            'name' => 'Guernsey',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Helsinki',
            'name' => 'Helsinki',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Isle_of_Man',
            'name' => 'Isle_of_Man',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Istanbul',
            'name' => 'Istanbul',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Jersey',
            'name' => 'Jersey',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Kaliningrad',
            'name' => 'Kaliningrad',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Kiev',
            'name' => 'Kiev',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Kirov',
            'name' => 'Kirov',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Lisbon',
            'name' => 'Lisbon',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Ljubljana',
            'name' => 'Ljubljana',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/London',
            'name' => 'London',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Luxembourg',
            'name' => 'Luxembourg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Madrid',
            'name' => 'Madrid',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Malta',
            'name' => 'Malta',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Mariehamn',
            'name' => 'Mariehamn',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Minsk',
            'name' => 'Minsk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Monaco',
            'name' => 'Monaco',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Moscow',
            'name' => 'Moscow',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Oslo',
            'name' => 'Oslo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Paris',
            'name' => 'Paris',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Podgorica',
            'name' => 'Podgorica',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Prague',
            'name' => 'Prague',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Riga',
            'name' => 'Riga',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Rome',
            'name' => 'Rome',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Samara',
            'name' => 'Samara',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/San_Marino',
            'name' => 'San_Marino',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Sarajevo',
            'name' => 'Sarajevo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Saratov',
            'name' => 'Saratov',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Simferopol',
            'name' => 'Simferopol',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Skopje',
            'name' => 'Skopje',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Sofia',
            'name' => 'Sofia',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Stockholm',
            'name' => 'Stockholm',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Tallinn',
            'name' => 'Tallinn',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Tirane',
            'name' => 'Tirane',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Ulyanovsk',
            'name' => 'Ulyanovsk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Uzhgorod',
            'name' => 'Uzhgorod',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Vaduz',
            'name' => 'Vaduz',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Vatican',
            'name' => 'Vatican',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Vienna',
            'name' => 'Vienna',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Vilnius',
            'name' => 'Vilnius',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Volgograd',
            'name' => 'Volgograd',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Warsaw',
            'name' => 'Warsaw',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Zagreb',
            'name' => 'Zagreb',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Zaporozhye',
            'name' => 'Zaporozhye',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Europe/Zurich',
            'name' => 'Zurich',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Indian/Antananarivo',
            'name' => 'Antananarivo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Indian/Chagos',
            'name' => 'Chagos',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Indian/Christmas',
            'name' => 'Christmas',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Indian/Cocos',
            'name' => 'Cocos',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Indian/Comoro',
            'name' => 'Comoro',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Indian/Kerguelen',
            'name' => 'Kerguelen',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Indian/Mahe',
            'name' => 'Mahe',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Indian/Maldives',
            'name' => 'Maldives',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Indian/Mauritius',
            'name' => 'Mauritius',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Indian/Mayotte',
            'name' => 'Mayotte',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Indian/Reunion',
            'name' => 'Reunion',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Apia',
            'name' => 'Apia',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Auckland',
            'name' => 'Auckland',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Bougainville',
            'name' => 'Bougainville',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Chatham',
            'name' => 'Chatham',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Chuuk',
            'name' => 'Chuuk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Easter',
            'name' => 'Easter',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Efate',
            'name' => 'Efate',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Enderbury',
            'name' => 'Enderbury',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Fakaofo',
            'name' => 'Fakaofo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Fiji',
            'name' => 'Fiji',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Funafuti',
            'name' => 'Funafuti',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Galapagos',
            'name' => 'Galapagos',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Gambier',
            'name' => 'Gambier',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Guadalcanal',
            'name' => 'Guadalcanal',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Guam',
            'name' => 'Guam',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Honolulu',
            'name' => 'Honolulu',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Kiritimati',
            'name' => 'Kiritimati',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Kosrae',
            'name' => 'Kosrae',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Kwajalein',
            'name' => 'Kwajalein',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Majuro',
            'name' => 'Majuro',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Marquesas',
            'name' => 'Marquesas',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Midway',
            'name' => 'Midway',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Nauru',
            'name' => 'Nauru',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Niue',
            'name' => 'Niue',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Norfolk',
            'name' => 'Norfolk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Noumea',
            'name' => 'Noumea',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Pago_Pago',
            'name' => 'Pago_Pago',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Palau',
            'name' => 'Palau',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Pitcairn',
            'name' => 'Pitcairn',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Pohnpei',
            'name' => 'Pohnpei',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Port_Moresby',
            'name' => 'Port_Moresby',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Rarotonga',
            'name' => 'Rarotonga',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Saipan',
            'name' => 'Saipan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Tahiti',
            'name' => 'Tahiti',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Tarawa',
            'name' => 'Tarawa',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Tongatapu',
            'name' => 'Tongatapu',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Wake',
            'name' => 'Wake',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('timezones')->insert([
            'code' => 'Pacific/Wallis',
            'name' => 'Wallis',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
