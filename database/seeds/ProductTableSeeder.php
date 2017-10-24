<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      $product = new \App\Product([
        	'imagePath' => 'http://www.elist10.com/wp-content/uploads/2013/10/violin.png',
        	'title' => 'Violinist',
        	'description' => 'Super cool violinist',
        	'price' => 10
     ]);
     $product->save();
        
     $product = new \App\Product([
        	'imagePath' => 'https://i.ebayimg.com/thumbs/images/g/qZMAAOSwbopZSv86/s-l225.jpg',
        	'title' => 'Guitarist',
        	'description' => 'Super cool guitarist',
        	'price' => 20
     ]);
     $product->save();
     
     $product = new \App\Product([
        	'imagePath' => 'https://i.ebayimg.com/thumbs/images/g/0pkAAOSwIxxZnIxN/s-l225.jpg',
        	'title' => 'drummer',
        	'description' => 'Super cool drummer',
        	'price' => 30
     ]);
     $product->save();
        
     $product = new \App\Product([
        	'imagePath' => 'http://www.kanstul.com/wp-content/uploads/2017/03/1600-Bb-Trumpet.png',
        	'title' => 'Trumpist',
        	'description' => 'Super cool trumpist',
        	'price' => 40
     ]);
     $product->save();
     
     $product = new \App\Product([
        	'imagePath' => 'https://3.imimg.com/data3/JY/NV/GLADMIN-33710/music-instruments-250x250.jpg',
        	'title' => 'French Hornist',
        	'description' => 'Super cool french hornist',
        	'price' => 50
     ]);
     $product->save();
     
     $product = new \App\Product([
        	'imagePath' => 'https://3.imimg.com/data3/EU/FM/MY-149236/saxaphone-250x250.jpg',
        	'title' => 'Saxophonist',
        	'description' => 'Super cool Saxophonist',
        	'price' => 60
     ]);
     $product->save();
        //
    }
}
