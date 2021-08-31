<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Session;

class Shop extends Model
{
    use HasFactory;

    public $products = ['apple'=>0,'orange'=>0];

    public $productsPrice = ['apple'=>0.7,'orange'=>0.35];

    public $items;

    public function __construct($items)
    {
       // $items =  Session::get('shop.items');
        $this->items = $items;
    }


    public function countItems()
    {   

        foreach($this->items as $item)
        {
            if(array_key_exists($item,$this->products))
            {
                $this->products[$item] +=1;
            }
        }
        
        return $this->products;
        
    }

    public function CalPrice($discount=false)
    {   
        $total = 0;

        if($discount==false){
            foreach($this->products as $key=>$number)
            {
                if(array_key_exists($key,$this->productsPrice))
                {
                   $total += $this->productsPrice[$key]*$number;
                }
            }
        }
        else{
            $total= $this->Discount();
        }

        $total = floatval($total);
        return $total;
    }

    public function Discount()
    {   
        $total = 0;
        foreach($this->products as $key=>$number)
        {
            if($key == 'apple')
            {
                if($number%2==0)
                {
                    $total += ($this->productsPrice[$key]*$number)/2;
                }
                elseif($number == 1)
                {
                    $total = $this->productsPrice[$key]*$number;
                }
                else
                {
                    $total += ($this->productsPrice[$key]*$number)/2+$this->productsPrice[$key];
                }
            }
            else
            {
                if($number%3 < 0)
                {
                   $total += $this->productsPrice[$key]*$number;
                }
                else
                {
                   $int = intval($number/3);
                   $total += $int*2*$this->productsPrice[$key]+($number-3*$int)*$this->productsPrice[$key];
                }
            }
        }
        return $total;
    }
}

