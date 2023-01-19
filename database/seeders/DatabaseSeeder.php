<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Assortment;
use App\Models\Employee;
use App\Models\Function_db;
use App\Models\Order;
use App\Models\Product;
use App\Models\Stock;
use App\Models\User;
use App\Models\VacationRequest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
    {
        $function_data = [
            [
                'name' => 'Manager',
                'salary' => '60000',
            ],
            [
                'name' => 'Hoofd bakker',
                'salary' => '50000',
            ],
            [
                'name' => 'Bakker',
                'salary' => '35000',
            ],
            [
                'name' => 'Verkoper',
                'salary' => '25000',
            ],
            [
                'name' => 'Schoonmaker',
                'salary' => '15000',
            ]
        ];
        
        $employee_data = [
            [
                'function_id' => '1',
                'first_name' => 'Bart',
                'last_name' => 'Bartel',
                'date_of_birth' => '1970-02-02',
                'email' => 'bartb@bakkerijbartel.nl',
                'phone' => '0611117835',
                
                
                
                
        
        $assortment_data = [
            [
                'id' => '1',
                'category' => 'Brood',
                'product_name' => 'Zuurdesem',
                'price' => '3.79',
                'description' => 'Een klassiek zuurdesembrood gemaakt met natuurlijke gisting en biologisch meel.',
                'image' => 'https://recepten.ninja/wp-content/uploads/2021/02/zuurdesembrood-1_compressed.jpg'
            ],
            [
                'id' => '2',
                'category' => 'Brood',
                'product_name' => 'Croissant',
                'price' => '1.09',
                'description' => 'Bladerige en boterachtige croissant gemaakt met Franse boter en bloem. 1 stuks.',
                'image' => 'https://stadsbakker.lingacms.nl/upload/ds_4js0aazp/images/products/croissant_1_Wxh7jT.jpg'
            ],
            [
                'id' => '3',
                'category' => 'Gebak',
                'product_name' => 'Chocoladetaart',
                'price' => '24.99',
                'description' => 'Een klassieke chocoladetaart gemaakt met pure chocolade en een romige vulling. Voor 12 personen.',
                'image' => 'https://benineskitchen.com/wp-content/uploads/2021/08/IMG_5265-2-2-746x1024.jpg'
            ],
            [
                'id' => '4',
                'category' => 'Koekje',
                'product_name' => 'Havermout rozijnen',
                'price' => '3.95',
                'description' => 'Chewy havermout rozijnen-koekjes gemaakt met biologische haver en rozijnen. 4 stuks.',
                'image' => 'https://biteandride.be/wp-content/uploads/2019/11/Havermoutkoekjes-met-rozijnen.jpg'
            ],
            [
                'id' => '5',
                'category' => 'Brood',
                'product_name' => 'Meergranen',
                'price' => '2.35',
                'description' => 'Een gezond en stevig meergranenbrood gemaakt met een verscheidenheid aan volle granen en zaden.',
                'image' => 'https://www.bakkerijgeurten.nl/images/thumbs/0000307_360.jpeg'
            ],
            [
                'id' => '6',
                'category' => 'Gebak',
                'product_name' => 'Appeltaart',
                'price' => '17.49',
                'description' => 'Een klassieke appeltaart gemaakt met zoete appels en een kruimeldeegbodem. Voor 8 personen.',
                'image' => 'https://rutgerbakt.nl/wp-content/uploads/2017/05/appelkruimeltaart-e1495794621103.jpg'
            ],
            [
                'id' => '7',
                'category' => 'Gebak',
                'product_name' => 'Cheesecake',
                'price' => '22.49',
                'description' => 'Smeuïge, romige cheesecake met een graham cracker korst. Voor 8 personen.',
                'image' => 'https://www.kingarthurbaking.com/sites/default/files/2021-09/easy-cheesecake.jpg'
            ],
            [
                'id' => '8',
                'category' => 'Koekje',
                'product_name' => 'Pindakaas',
                'price' => '3.75',
                'description' => 'Chewy pindakaaskoekjes gemaakt met volledig natuurlijke pindakaas. 4 stuks.',
                'image' => 'https://iksnoepgezond.nl/wp-content/uploads/2021/09/Pindakaaskoekjes.jpg'
            ],
            [
                'id' => '9',
                'category' => 'Brood',
                'product_name' => 'Focaccia',
                'price' => '6.95',
                'description' => 'Een traditioneel Italiaans focaccia brood gemaakt met olijfolie en kruiden.',
                'image' => 'https://www.foodiesmagazine.nl/app/uploads/2019/09/focaccia.png'
            ],
            [
                'id' => '10',
                'category' => 'Gebak',
                'product_name' => 'Cannoli',
                'price' => '3.50',
                'description' => 'Een klassiek Siciliaanse cannoli gevuld met zoete ricotta kaas en stukjes chocolade. 2 stuks.',
                'image' => 'https://bakerbynature.com/wp-content/uploads/2016/11/untitled-35-of-101.jpg'
            ],
            [
                'id' => '11',
                'category' => 'Gebak',
                'product_name' => 'Vanille chiffon cake',
                'price' => '14.49',
                'description' => 'Indische sponscake met een lichte en luchtige textuur. Voor 8 personen.',
                'image' => 'https://preppykitchen.com/wp-content/uploads/2021/11/Chiffon-Cake-Recipe-Card.jpg'
            ],
            [
                'id' => '12',
                'category' => 'Koekje',
                'product_name' => 'Chocolate chip',
                'price' => '3.95',
                'description' => 'Zachte en chewy chocolate chip cookies gemaakt met melkchocolade chips. 4 stuks.',
                'image' =>
                'https://joyfoodsunshine.com/wp-content/uploads/2016/01/best-chocolate-chip-cookies-recipe-ever-no-chilling-1-500x375.jpg'
            ],
            [
                'id' => '13',
                'category' => 'Brood',
                'product_name' => 'Ciabatta',
                'price' => '3.29',
                'description' => 'Een traditioneel Italiaans ciabatta-brood gemaakt met tarwemeel en olijfolie.',
                'image' => 'https://images.immediate.co.uk/production/volatile/sites/30/2020/08/ciabatta-41788ca.jpg'
            ],
            [
                'id' => '14',
                'category' => 'Gebak',
                'product_name' => 'Eclair',
                'price' => '4.25',
                'description' => 'Een klassieke Franse eclair gevuld met romige vanillevla en overgoten met chocoladeganache. 2 stuks.',
                'image' => 'https://i.ytimg.com/vi/c_DxkexN7aY/maxresdefault.jpg'
            ],
            [
                'id' => '15',
                'category' => 'Gebak',
                'product_name' => 'Worteltaart',
                'price' => '15.49',
                'description' => 'Een vochtige en smaakvolle worteltaart gemaakt met geraspte wortelen, noten en kruiden. Voor 8
        personen.',
                'image' =>
                'https://www.solo.be/nl/-/media/Project/Upfield/Brands/Solo/Solo-be/Assets/Recipes/sync-images/60257419-d81f-4641-aa8b-d86cbc7bc53b.jpg?rev=a4b42f539c3c438bab4fdc99ee3e49c9&w=1600'
            ],
            [
                'id' => '16',
                'category' => 'Koekje',
                'product_name' => 'Gemberkoekje',
                'price' => '3.95',
                'description' => 'Een knapperig gemberkoekje gemaakt met gember, melasse en kruidnagel. 4 stuks.',
                'image' => 'https://sugarandcharm.com/wp-content/uploads/2021/12/gingersnap_cookie_recipe.jpg'
            ],
            [
                'id' => '17',
                'category' => 'Brood',
                'product_name' => 'Stokbrood',
                'price' => '1.75',
                'description' => 'Een traditioneel Frans stokbrood, met knapperige korst, gemaakt met tarwemeel.',
                'image' => 'https://img.static-rmg.be/a/view/q75/w620/h336/3299773/ll9-backtobasics-hr-32-jpg.jpg'
            ],
            [
                'id' => '18',
                'category' => 'Gebak',
                'product_name' => 'Napoleon',
                'price' => '4.09',
                'description' => 'Een klassiek Frans Napoleongebakje gemaakt met laagjes bladerdeeg en banketbakkersroom. 2 stuks.',
                'image' =>
                'https://popmenucloud.com/cdn-cgi/image/width%3D1200%2Cheight%3D1200%2Cfit%3Dscale-down%2Cformat%3Dauto%2Cquality%3D60/nxotikws/70af4423-7974-4e47-9299-3d0fd8bcdba5.jpg'
            ],
            [
                'id' => '19',
                'category' => 'Gebak',
                'product_name' => 'Red Velvet',
                'price' => '22.50',
                'description' => 'Een klassieke red velvet-cake gemaakt met cacaopoeder, rode kleurstof en roomkaas-glazuur. Voor 8
        personen.',
                'image' => 'https://www.patesserie.com/wp-content/uploads/2022/09/red-velvet-8.jpeg'
            ],
            [
                'id' => '20',
                'category' => 'Koekje',
                'product_name' => 'Suikerkoekje',
                'price' => '3.75',
                'description' => 'Een knapperig suikerkoekje gemaakt met suiker, boter en bloem. 4 stuks.',
                'image' => 'https://www.zandkoekjes.net/wp-content/uploads/2017/07/suikerkoekjes.jpg'
            ],
            [
                'id' => '21',
                'category' => 'Brood',
                'product_name' => 'Pompernikkel',
                'price' => '2.75',
                'description' => 'Een traditioneel Duits roggebrood met bitterzoete smaak, gemaakt met een combinatie van rogge- en
        tarwemeel.',
                'image' => 'https://okfrozendough.com/wp-content/uploads/2019/10/OK906-Pumpernickel-Bread-316x316.jpg'
            ],
            [
                'id' => '22',
                'category' => 'Gebak',
                'product_name' => 'Tiramisu',
                'price' => '17.50',
                'description' => 'Een Italiaans dessert gemaakt met laagjes lange vingers, mascarpone kaas en espresso. Voor 8
        personen.',
                'image' => 'https://www.dominosugar.com/sites/dominosugar_com/files/2022-08/Tiramisu-Crave_1570_Description_600x400.jpg'
            ],
            [
                'id' => '23',
                'category' => 'Gebak',
                'product_name' => 'Citroencake',
                'price' => '14.49',
                'description' => 'Een lichte, verfrissende citroencake gemaakt met citroenrasp, vers citroensap en citroenglazuur. Voor
        8 personen.',
                'image' => 'https://img.static-rmg.be/a/view/q75/w0/h0/2525705/citroencake-jpg.jpg'
            ],
            [
                'id' => '24',
                'category' => 'Brood',
                'product_name' => 'Pita',
                'price' => '3.95',
                'description' => 'Een traditioneel Turks plat brood gemaakt met tarwemeel, gist en olijfolie. 4 stuks.',
                'image' => 'https://bbq-junkie.nl/wp-content/uploads/2018/03/pita-broodjes-recept.jpg'
            ],
            [
                'id' => '25',
                'category' => 'Gebak',
                'product_name' => 'Skolebolle',
                'price' => '4.09',
                'description' => 'Scandinavische broodjes gevuld met vanillecustard en overgoten met glazuur en geraspte kokos. 2
        stuks.',
                'image' => 'https://coop.no/globalassets/coop-marked/bakelykke/skoleboller/skoleboller-hoved.jpg'
            ]
                ];

        // The seeders are called in the order they are listed here.
        // This is necessary because of the foreign keys.
        // Changing the order will result in an error.
                Employee::factory(10)->create();
                User::factory()->create([
                'employee_id' => '1',
                'name' => 'TestAdmin',
                'email' => 'test@admin.com',
                'password' => bcrypt('password'), // password
                ]);
        User::factory(10)->create();
        VacationRequest::factory(10)->create();
        Order::factory(10)->create();

        foreach ($function_data as $function) {
            Function_db::create($function);
        }
        
        foreach ($assortment_data as $assort) {
            Assortment::create($assort);
        }

        Product::factory(10)->create();
        Stock::factory(10)->create();
    }
}