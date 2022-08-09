<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Lenovo G-Series',
                'price'=>'29798',
                'description'=>'68.6 cm (27 inch) QHD IPS Gaming Monitor | 165Hz, 1ms, NVIDIA G-Sync Compatible, Lenovo Artery, 1.07 Billion Colours, 400 nits',
                'category'=>'Gaming Monitor',
                'gallery'=>'https://m.media-amazon.com/images/I/810vOkomagS._SL1500_.jpg'
            ],
            [
                'name'=>'Samsung Odyssey G7',
                'price'=>'48600',
                'description'=>'28 inch IPS panel,Experience spellbinding visuals with UHD resolution, IPS',
                'category'=>'Gaming Monitor',
                'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/in/ls28ag700nwxxl/gallery/in-odyssey-g7-g70a-ls28ag700nwxxl-531705536?$650_519_PNG$'
            ]
            ,
            [
                'name'=>'Xiaomi BHR5133GL',
                'price'=>'51306',
                'description'=>'34 inch WQHD LED IPS 144Hz Curved Gaming Monitor',
                'category'=>'Gaming Monitor',
                'gallery'=>'https://www.batna24.com/img2/1000/329559_1.webp'
            ]
            ,
            [
                'name'=>'Gigabyte G34WQC',
                'price'=>'30356',
                'description'=>'27 inch 1500R curved gaming monitor provides a truly immersive experience that offers more realistic visuals and comfortable viewing',
                'category'=>'Gaming Monitor',
                'gallery'=>'https://kryptronix.in/wp-content/uploads/2021/10/GIGABYTE-G27FC-GAMING-MONITOR.png'
            ]
            ,
            [
                'name'=>'Amazfit Zepp',
                'price'=>'7999',
                'description'=>'E circle Smartwatch with blutooth calling and voice assistant',
                'category'=>'Smartwatch',
                'gallery'=>'https://cdn.shopify.com/s/files/1/0266/1371/0884/products/Ice_Blue_3_f44256ba-0851-4631-817a-f86413f2d736.png?v=1657287100'
            ]
            ,
            [
                'name'=>'Noise ColorFit',
                'price'=>'1999',
                'description'=>'Black smartwatch and magnetic charger set with bluetooth calling and voice assistant',
                'category'=>'Smartwatch',
                'gallery'=>'https://cdn.shopify.com/s/files/1/0997/6284/products/Side04_grande.png?v=1655378358'
            ]
            ,
            [
                'name'=>'boAt Xtend',
                'price'=>'2098',
                'description'=>'Smartwatch with Alexa Built-in, 1.69” HD Display, Multiple Watch Faces, Stress Monitor, Heart & SpO2 Monitoring, 14 Sports Modes, Sleep',
                'category'=>'Smartwatch',
                'gallery'=>'https://m.media-amazon.com/images/I/61gscZYmaoL._SL1377_.jpg'
            ]
            ,
            [
                'name'=>'Titan Smart Pro',
                'price'=>'9995',
                'description'=>'Black strip Aluminum case with bluetooth calling and voice assistant',
                'category'=>'Smartwatch',
                'gallery'=>'https://staticimg.titan.co.in/Titan/Catalog/90149AP01_1.jpg?pView=pdp'
            ]
            ,
            [
                'name'=>'Redmi 9 Activ',
                'price'=>'8999',
                'description'=>'Smartphone with triple camera and much more features',
                'category'=>'Smartphones',
                'gallery'=>'https://i02.appmifile.com/102_operator_in/24/09/2021/d9574be30b5ea24f4cad44430ccb0676.jpg'
            ]
            ,
            [
                'name'=>'Redmi note 10 lite',
                'price'=>'13999',
                'description'=>'Smartphone with quad camera and much more features',
                'category'=>'Smartphones',
                'gallery'=>'https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1632992446.88448211.jpg'
            ]
            ,
            [
                'name'=>'Xiaomi Redmi K50i ',
                'price'=>'19999',
                'description'=>'Smartphone with 5G, triple camera and much more features',
                'category'=>'Smartphones',
                'gallery'=>'https://cdn1.smartprix.com/rx-iQq6G8GB5-w1200-h1200/Qq6G8GB5.jpg'
            ]
            ,
            [
                'name'=>'Redmi Note 10S',
                'price'=>'13499',
                'description'=>'Smartphone with quad camera and much more features',
                'category'=>'Smartphones',
                'gallery'=>'https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1629200496.54463363.jpg'
            ]
            ,
            [
                'name'=>'Redmi Note 9',
                'price'=>'11999',
                'description'=>'✓High performance Helio G85 ✓48MP Quad Camera Array ✓5020mAh Fast-Charging Battery',
                'category'=>'Smartphones',
                'gallery'=>'https://i01.appmifile.com/webfile/globalimg/in/cms/D7A7DA95-AEF8-228B-A2D2-A3FEBF237C33.jpg'
            ]

        ]);
    }
}
