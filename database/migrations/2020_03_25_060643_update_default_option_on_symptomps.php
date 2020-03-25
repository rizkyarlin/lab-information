<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class UpdateDefaultOptionOnSymptomps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE `symptoms` 
        CHANGE COLUMN `fever` `fever` ENUM("0", "1", "2") NULL DEFAULT "0" COMMENT "0 = tidak keduanya | 1 = iya | 2 = tidak",
        CHANGE COLUMN `cough` `cough` ENUM("0", "1", "2") NULL DEFAULT "0" COMMENT "0 = tidak keduanya | 1 = iya | 2 = tidak",
        CHANGE COLUMN `sore_throat` `sore_throat` ENUM("0", "1", "2") NULL DEFAULT "0" COMMENT "0 = tidak keduanya | 1 = iya | 2 = tidak",
        CHANGE COLUMN `shortness_of_breath` `shortness_of_breath` ENUM("0", "1", "2") NULL DEFAULT "0" COMMENT "0 = tidak keduanya | 1 = iya | 2 = tidak",
        CHANGE COLUMN `flu` `flu` ENUM("0", "1", "2") NULL DEFAULT "0" COMMENT "0 = tidak keduanya | 1 = iya | 2 = tidak",
        CHANGE COLUMN `fatigue` `fatigue` ENUM("0", "1", "2") NULL DEFAULT "0" COMMENT "0 = tidak keduanya | 1 = iya | 2 = tidak",
        CHANGE COLUMN `headache` `headache` ENUM("0", "1", "2") NULL DEFAULT "0" COMMENT "0 = tidak keduanya | 1 = iya | 2 = tidak",
        CHANGE COLUMN `diarrhea` `diarrhea` ENUM("0", "1", "2") NULL DEFAULT "0" COMMENT "0 = tidak keduanya | 1 = iya | 2 = tidak",
        CHANGE COLUMN `nausea_or_vomiting` `nausea_or_vomiting` ENUM("0", "1", "2") NULL DEFAULT "0" COMMENT "0 = tidak keduanya | 1 = iya | 2 = tidak",
        CHANGE COLUMN `comorbid` `comorbid` ENUM("0", "1", "2") NULL DEFAULT "0" COMMENT "0 = tidak keduanya | 1 = iya | 2 = tidak",
        CHANGE COLUMN `pulmonary_xray` `pulmonary_xray` ENUM("0", "1", "2") CHARACTER SET "utf8" NULL DEFAULT "0" COMMENT "0 = tidak dilakukan | 1 = gambaran pneumonia | 2 = tidak ada gambaran pneumonia",
        CHANGE COLUMN `using_ventilator` `using_ventilator` ENUM("0", "1", "2") NULL DEFAULT "0" COMMENT "0 = tidak keduanya | 1 = iya | 2 = tidak";');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE `symptoms`
        CHANGE COLUMN `fever` `fever` TINYINT(1) NULL DEFAULT "0" ,
        CHANGE COLUMN `cough` `cough` TINYINT(1) NULL DEFAULT "0" ,
        CHANGE COLUMN `sore_throat` `sore_throat` TINYINT(1) NULL DEFAULT "0" ,
        CHANGE COLUMN `shortness_of_breath` `shortness_of_breath` TINYINT(1) NULL DEFAULT "0" ,
        CHANGE COLUMN `flu` `flu` TINYINT(1) NULL DEFAULT "0" ,
        CHANGE COLUMN `fatigue` `fatigue` TINYINT(1) NULL DEFAULT "0" ,
        CHANGE COLUMN `headache` `headache` TINYINT(1) NULL DEFAULT "0" ,
        CHANGE COLUMN `diarrhea` `diarrhea` TINYINT(1) NULL DEFAULT "0" ,
        CHANGE COLUMN `nausea_or_vomiting` `nausea_or_vomiting` TINYINT(1) NULL DEFAULT "0" ,
        CHANGE COLUMN `comorbid` `comorbid` TINYINT(1) NULL DEFAULT "0" ,
        CHANGE COLUMN `pulmonary_xray` `pulmonary_xray` ENUM("0", "1", "2") CHARACTER SET "utf8" NULL DEFAULT "0" COMMENT "0 = tidak dilakukan | 1 = gambaran pneumonia | 2 = tidak ada gambaran pneumonia" ,
        CHANGE COLUMN `using_ventilator` `using_ventilator` TINYINT(1) NULL DEFAULT "0" ;');
    }
}
