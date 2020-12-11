<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CarBrandSerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_brand_series')->delete();
        DB::table('car_brand_series')->insert(
            array(
                array('id' => '8','car_brand_id' => '8', 'car_brand_serie' => 'C3'),
                array('id' => '9','car_brand_id' => '8', 'car_brand_serie' => 'C2'),
                array('id' => '10','car_brand_id' => '8', 'car_brand_serie' => 'C5'),
                array('id' => '11','car_brand_id' => '11', 'car_brand_serie' => 'F40'),
                array('id' => '12','car_brand_id' => '11','car_brand_serie' => '488 SPIDER'),
                array('id' => '13','car_brand_id' => '11', 'car_brand_serie' => '360 MONDELA'),
                array('id' => '14','car_brand_id' => '5', 'car_brand_serie' => 'A1'),
                array('id' => '15','car_brand_id' => '5', 'car_brand_serie' => 'A2'),
                array('id' => '16','car_brand_id' => '5', 'car_brand_serie' => 'A3'),
                array('id' => '17','car_brand_id' => '5', 'car_brand_serie' => 'A4'),
                array('id' => '18','car_brand_id' => '5', 'car_brand_serie' => 'A5'),
                array('id' => '19','car_brand_id' => '5', 'car_brand_serie' => 'A6'),
                array('id' => '20','car_brand_id' => '5', 'car_brand_serie' => 'A7'),
                array('id' => '21','car_brand_id' => '5', 'car_brand_serie' => 'A8'),
                array('id' => '22','car_brand_id' => '5', 'car_brand_serie' => 'R8'),
                array('id' => '23','car_brand_id' => '6', 'car_brand_serie' => 'X1'),
                array('id' => '24','car_brand_id' => '6', 'car_brand_serie' => 'X2'),
                array('id' => '25','car_brand_id' => '6', 'car_brand_serie' => 'X3'),
                array('id' => '26','car_brand_id' => '6', 'car_brand_serie' => 'X4'),
                array('id' => '27','car_brand_id' => '6', 'car_brand_serie' => 'X5'),
                array('id' => '28','car_brand_id' => '6', 'car_brand_serie' => 'X6'),
                array('id' => '29','car_brand_id' => '7', 'car_brand_serie' => 'CAMARO'),
                array('id' => '30','car_brand_id' => '7', 'car_brand_serie' => 'EPICA'),
                array('id' => '31','car_brand_id' => '7', 'car_brand_serie' => 'NOVA'),
                array('id' => '32','car_brand_id' => '7', 'car_brand_serie' => 'SPARK'),
                array('id' => '33','car_brand_id' => '7', 'car_brand_serie' => 'TRACKER'),
                array('id' => '34','car_brand_id' => '8', 'car_brand_serie' => 'BERLINGO'),
                array('id' => '35','car_brand_id' => '8', 'car_brand_serie' => 'C4'),
                array('id' => '36','car_brand_id' => '8', 'car_brand_serie' => 'C3 PICASSO'),
                array('id' => '37','car_brand_id' => '8', 'car_brand_serie' => 'C4 PICASSO'),
                array('id' => '38','car_brand_id' => '9', 'car_brand_serie' => 'DOKKER'),
                array('id' => '39','car_brand_id' => '9', 'car_brand_serie' => 'DUSTER'),
                array('id' => '40','car_brand_id' => '9', 'car_brand_serie' => 'LOGAN'),
                array('id' => '41','car_brand_id' => '9', 'car_brand_serie' => 'NOVA'),
                array('id' => '42','car_brand_id' => '9', 'car_brand_serie' => 'SANDERO'),
                array('id' => '43','car_brand_id' => '9', 'car_brand_serie' => 'SOLENZO'),
                array('id' => '44','car_brand_id' => '9', 'car_brand_serie' => 'SUPER NOVA'),
                array('id' => '45','car_brand_id' => '10', 'car_brand_serie' => 'AVENGER'),
                array('id' => '46','car_brand_id' => '10', 'car_brand_serie' => 'CALIBER'),
                array('id' => '47','car_brand_id' => '10', 'car_brand_serie' => 'NITRO'),
                array('id' => '48','car_brand_id' => '10', 'car_brand_serie' => 'RAM'),
                array('id' => '49','car_brand_id' => '10', 'car_brand_serie' => 'VIPER'),
                array('id' => '50','car_brand_id' => '12', 'car_brand_serie' => '500'),
                array('id' => '51','car_brand_id' => '12', 'car_brand_serie' => 'BRAVO'),
                array('id' => '52','car_brand_id' => '12', 'car_brand_serie' => 'COUPER'),
                array('id' => '53','car_brand_id' => '12', 'car_brand_serie' => 'CROMA'),
                array('id' => '54','car_brand_id' => '12', 'car_brand_serie' => 'DOBLO'),
                array('id' => '55','car_brand_id' => '12', 'car_brand_serie' => 'FIORINO'),
                array('id' => '56','car_brand_id' => '12', 'car_brand_serie' => 'LINEA'),
                array('id' => '57','car_brand_id' => '13', 'car_brand_serie' => 'CONTOUR'),
                array('id' => '58','car_brand_id' => '13', 'car_brand_serie' => 'ESCORT'),
                array('id' => '59','car_brand_id' => '13', 'car_brand_serie' => 'FIESTA'),
                array('id' => '60','car_brand_id' => '13', 'car_brand_serie' => 'FACUS'),
                array('id' => '61','car_brand_id' => '13', 'car_brand_serie' => 'FUSION'),
                array('id' => '62','car_brand_id' => '13', 'car_brand_serie' => 'SIORRA'),
                array('id' => '63','car_brand_id' => '13', 'car_brand_serie' => 'TAORUS'),
                array('id' => '64','car_brand_id' => '13', 'car_brand_serie' => 'TRANSIT'),
                array('id' => '65','car_brand_id' => '14', 'car_brand_serie' => 'ACCORD'),
                array('id' => '66','car_brand_id' => '14', 'car_brand_serie' => 'CITY'),
                array('id' => '67','car_brand_id' => '14', 'car_brand_serie' => 'LEGEND'),
                array('id' => '68','car_brand_id' => '14', 'car_brand_serie' => 'PRELODE'),
                array('id' => '69','car_brand_id' => '14', 'car_brand_serie' => 'VIGOR'),
                array('id' => '70','car_brand_id' => '15', 'car_brand_serie' => 'ELANTRA'),
                array('id' => '71','car_brand_id' => '15', 'car_brand_serie' => 'AZERA'),
                array('id' => '72','car_brand_id' => '15', 'car_brand_serie' => 'COUNTY'),
                array('id' => '73','car_brand_id' => '15', 'car_brand_serie' => 'GENESIS'),
                array('id' => '74','car_brand_id' => '15', 'car_brand_serie' => 'I10'),
                array('id' => '75','car_brand_id' => '15', 'car_brand_serie' => 'I20'),
                array('id' => '76','car_brand_id' => '15', 'car_brand_serie' => 'I30'),
                array('id' => '77','car_brand_id' => '15', 'car_brand_serie' => 'I40'),
                array('id' => '78','car_brand_id' => '16', 'car_brand_serie' => 'EX35'),
                array('id' => '79','car_brand_id' => '16', 'car_brand_serie' => 'FX35'),
                array('id' => '80','car_brand_id' => '16', 'car_brand_serie' => 'G35'),
                array('id' => '81','car_brand_id' => '16', 'car_brand_serie' => 'Q45'),
                array('id' => '82','car_brand_id' => '23', 'car_brand_serie' => '190'),
                array('id' => '83','car_brand_id' => '23', 'car_brand_serie' => '200'),
                array('id' => '84','car_brand_id' => '23', 'car_brand_serie' => '220'),
                array('id' => '85','car_brand_id' => '23', 'car_brand_serie' => '250'),
                array('id' => '86','car_brand_id' => '23', 'car_brand_serie' => '280'),
                array('id' => '87','car_brand_id' => '23', 'car_brand_serie' => 'AMG GTS'),
                array('id' => '88','car_brand_id' => '23', 'car_brand_serie' => 'CLA'),
                array('id' => '89','car_brand_id' => '23', 'car_brand_serie' => 'CLASSE A'),
                array('id' => '90','car_brand_id' => '30', 'car_brand_serie' => 'ESPACE'),
                array('id' => '91','car_brand_id' => '30', 'car_brand_serie' => 'EXPRESS'),
                array('id' => '92','car_brand_id' => '30', 'car_brand_serie' => 'FUEGO'),
                array('id' => '93','car_brand_id' => '30', 'car_brand_serie' => 'KANGO'),
                array('id' => '94','car_brand_id' => '30', 'car_brand_serie' => 'LAGUNA'),
                array('id' => '95','car_brand_id' => '30', 'car_brand_serie' => 'SCENIC'),
                array('id' => '96','car_brand_id' => '30', 'car_brand_serie' => 'TRAFIC'),
                array('id' => '97','car_brand_id' => '31', 'car_brand_serie' => 'POLO'),
                array('id' => '98','car_brand_id' => '32', 'car_brand_serie' => '208 WHAITE'),
                array('id' => '99','car_brand_id' => '32', 'car_brand_serie' => '208 LIKE'),
                array('id' => '100','car_brand_id' => '31', 'car_brand_serie' => 'POLO 5.TREND75 TDI'),
                array('id' => '101','car_brand_id' => '30', 'car_brand_serie' => 'CLIO 4'),
                array('id' => '102','car_brand_id' => '15', 'car_brand_serie' => 'HY'),
                array('id' => '103','car_brand_id' => '15', 'car_brand_serie' => 'ACCENT'),
                array('id' => '104','car_brand_id' => '33', 'car_brand_serie' => 'YARIS'),
                array('id' => '105','car_brand_id' => '32', 'car_brand_serie' => 'WHAITE EDITEON'),
                array('id' => '106','car_brand_id' => '32', 'car_brand_serie' => 'PARTNER TEPEE')
              )
        );
    }
}
