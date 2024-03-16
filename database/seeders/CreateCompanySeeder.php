<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Companie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companys = [
            ["designation"=>"IFS","status"=>"active"],
            ["designation"=>"AEL(AECI)","status"=>"active"],
            ["designation"=>"EPIROC","status"=>"active"],
            ["designation"=>"CMCK","status"=>"active"],
            ["designation"=>"PANACO","status"=>"active"],
            ["designation"=>"GROUPE 4 SECURITY","status"=>"active"],
            ["designation"=>"GBC","status"=>"active"],
            ["designation"=>"USHINDI","status"=>"active"],
            ["designation"=>"MINAF","status"=>"active"],
            ["designation"=>"MAMBA SECURITY","status"=>"active"],
            ["designation"=>"NUPHAZE","status"=>"active"],
            ["designation"=>"LODAS","status"=>"active"],
            ["designation"=>"YELLOW RIVER","status"=>"active"],
            ["designation"=>"JMMC","status"=>"active"],
            ["designation"=>"ECCO","status"=>"active"],
            ["designation"=>"KANU","status"=>"active"],
            ["designation"=>"SANDVIK","status"=>"active"],
            ["designation"=>"PERFECT","status"=>"active"],
            ["designation"=>"FASCO ","status"=>"active"],
            ["designation"=>"KIN BETON","status"=>"active"],
            ["designation"=>"UNDER PROJECT DEPARTMENT: RENTAL VEHICLES, GLOBAL LABORATOIRES, CRODEN, SHUANG DUN, ECCO","status"=>"active"],
            ["designation"=>"SIC","status"=>"active"],
            ["designation"=>"ELON","status"=>"active"],
            ["designation"=>"ONM","status"=>"active"],
            ["designation"=>"LAMBANO","status"=>"active"],
            ["designation"=>"MORINA","status"=>"active"],
            ["designation"=>"CIC GLOBAL","status"=>"active"],
            ["designation"=>"GNB( GLOBAL NETWORK BREAKING)","status"=>"active"],
            ["designation"=>"JBK","status"=>"active"],
            ["designation"=>"XXSOLUTIONS","status"=>"active"],
            ["designation"=>"CGS","status"=>"active"],
            ["designation"=>"GSM(GLORHIS MULTI SERVICES)","status"=>"active"],
            ["designation"=>"SOKO EATOM","status"=>"active"],
            ["designation"=>"GCA","status"=>"active"],
            ["designation"=>"RUBATEK","status"=>"active"],
        ];
        foreach($companys as $company){
            Companie::create($company);
        }
        $this->command->info("companys seeded!");
    }
}
