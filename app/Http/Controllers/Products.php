<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    
    protected static $all_products;
    
    function __construct()
    {
      self::$all_products = $this->all_products()['products'];  
    }
    private function all_products() 
    {
        $newsMassive = [
            'products' => [
            '1' => [
            'title'=>'orange',
            'image_url' =>'https://i.pinimg.com/originals/72/f6/fe/72f6fe384180442d9cd835abd4e021d9.jpg',
            ],
            '2' => [
            'title'=>'apple',
            'image_url'=>
            'https://i.pinimg.com/originals/72/f6/fe/72f6fe384180442d9cd835abd4e021d9.jpg',
            ],
            '3' => [
            'title'=>'banana',
            'image_url'=>
            'https://i.pinimg.com/originals/72/f6/fe/72f6fe384180442d9cd835abd4e021d9.jpg',
            ]
            ]
            
            ];
            return $newsMassive;
    }
    protected function find($id) 
    {
            return self::$all_products[$id];
    }
    protected function index() 
    {
        return view('products.index', [ 'all_posts' => self::$all_products]);
    }
    protected function show($id)
    {
        return view('products.product', ['product' => $this->find($id), 'list_items' => $this->list_items($id)]);
    }
    protected function list_items($id) 
    {
        $new_array = [];
        foreach( self::$all_products as $key => $value) {
            $id!=$key ? $new_array[$key]=$this->find($key) : false;
        }
        return $new_array;
    }
}
