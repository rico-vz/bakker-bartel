<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assortment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assortment');
    }
};


// // data
// INSERT INTO `assortment_bakery` (`id`, `category`, `product_name`, `price`, `description`, `image`) VALUES
// (1,'Bread','Sourdough', 4,'A classic sourdough bread made with natural fermentation and organic flour','sourdough.jpg'),
// (2, 'Pastry', 'Croissant', 3, 'Flaky and buttery croissant made with French butter and all-purpose flour', 'croissant.jpg'),
// (3, 'Cake', 'Chocolate Cake', 6, 'Rich and moist chocolate cake with chocolate ganache and chocolate shavings', 'chocolate_cake.jpg'),
// (4, 'Cookie', 'Oatmeal Raisin', 2, 'Chewy oatmeal raisin cookies made with organic oats and raisins', 'oatmeal_raisin.jpg'),
// (5, 'Bread', 'Multigrain', 5, 'A healthy and hearty multigrain bread made with a variety of whole grains and seeds', 'multigrain.jpg'),
// (6, 'Pastry', 'Apple Pie', 6, 'Classic homemade apple pie with a flaky crust and a sweet and tangy apple filling', 'apple_pie.jpg'),
// (7, 'Cake', 'Cheesecake', 7, 'Smooth and creamy cheesecake with a graham cracker crust', 'cheesecake.jpg'),
// (8, 'Cookie', 'Peanut Butter', 2, 'Chewy and delicious peanut butter cookies made with all-natural peanut butter', 'peanut_butter.jpg'),
// (9, 'Bread', 'Focaccia', 5, 'A traditional Italian focaccia bread made with olive oil and herbs', 'focaccia.jpg'),
// (10, 'Pastry', 'Cannoli', 4, 'A classic Sicilian cannoli filled with sweet ricotta cheese and chocolate chips', 'cannoli.jpg'),
// (11, 'Cake', 'Vanilla Sponge', 5, 'A classic vanilla sponge cake with a light and fluffy texture', 'vanilla_sponge.jpg'),
// (12, 'Cookie', 'Chocolate Chip', 2, 'Soft and chewy chocolate chip cookies made with semisweet chocolate chips', 'chocolate_chip.jpg'),
// (13, 'Bread', 'Ciabatta', 4, 'A traditional Italian ciabatta bread made with a high-gluten flour', 'ciabatta.jpg'),
// (14, 'Pastry', 'Eclairs', 5, 'A classic French eclair filled with a light vanilla custard and topped with chocolate ganache', 'eclairs.jpg'),
// (15, 'Cake', 'Carrot Cake', 6, 'A moist and flavorful carrot cake made with grated carrots, nuts, and spices', 'carrot_cake.jpg'),
// (16, 'Cookie', 'Ginger Snap', 2, 'A classic ginger snap cookie made with molasses and ginger', 'ginger_snap.jpg'),
// (17, 'Bread', 'Baguette', 3, 'A traditional French baguette made with a high-gluten flour and a crispy crust', 'baguette.jpg'),
// (18, 'Pastry', 'Napoleon', 6, 'A classic French Napoleon pastry made with layers of flaky puff pastry and vanilla custard', 'napoleon.jpg'),
// (19, 'Cake', 'Red Velvet', 7, 'A classic red velvet cake made with a red cocoa powder and a cream cheese frosting', 'red_velvet.jpg'),
// (20, 'Cookie', 'Sugar', 2, 'A classic sugar cookie made with butter and sugar', 'sugar.jpg'),
// (21, 'Bread', 'Pumpernickel', 4, 'A dense and flavorful pumpernickel bread made with a combination of rye and wheat flour', 'pumpernickel.jpg'),
// (22, 'Pastry', 'Tiramisu', 6, 'A classic Italian tiramisu made with layers of ladyfingers, mascarpone cheese, and espresso', 'tiramisu.jpg'),
// (23, 'Cake', 'Lemon Cake', 6, 'A light and refreshing lemon cake made with fresh lemon juice and lemon zest', 'lemon_cake.jpg'),
// (24, 'Bread', 'Pita', 3, 'A classic pita bread made with wheat flour and yeast', 'https://www.example.com/images/pita.jpg'),
// (25, 'Pastry', 'Danish', 4, 'A flaky and buttery Danish pastry filled with sweet custard and topped with icing', 'https://www.example.com/images/danish.jpg');