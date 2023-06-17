<?php

namespace App\Models;


use App\Models\Category;
use App\Models\Busket;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;           

    public static function filter($category_id,Request $request){
        switch ($request->order){
            case "updated_at":
                $order='updated_at';
                $order_direction='asc';
                break;
            case "popular":
                $order='updated_at';
                $order_direction='asc';
                break;
            case "price_lesser":
                $order='price';
                $order_direction='asc';
                break;
            case "price_bigger":
                $order='price';
                $order_direction='desc';
                break;
            default:
                $order='updated_at';
                    $order_direction='asc';
                    break;

        }
        switch ($request->availability){
            
            case 'available':
                $availability=['>','0'];
                break;
            case 'not available':
                $availability=['=','0'];
                break;
            case 'order':
                $availability=['>=','50'];
                break;
            default:
                $availability=['>=','0'];
                break;
        }
        switch ($request->rating){
            
            case '5':
                $rates=['=','5'];
                break;
            case '4':
                $rates=['>=','4'];
                break;
            case 'order':
                $rates=['>=','3'];
                break;
            default:
                $rates=['>=','0'];
                break;
        }

        if ($request->bonus){
            $bonus=1;
        }
        else{
            $bonus=0;
        }
        
        $discount=$request->discount?1:0;
        
        //dd('quantity',$availability);
        $products=Products::orderBy($order,$order_direction)
        ->where('name','like','%'.$request->search.'%',)
        ->where('quantity',$availability[0],$availability[1])
        ->where('rates',$rates[0],$rates[1])
        ->where('bonus','>=',$bonus)
        ->where('discount','>=',$discount)
        ->where('price','>=',$request->min)
        ->where('price','<=',$request->max)
        ->where('category_id',$category_id)
        
        ->paginate(10);
        return $products;
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
		public function busket(){
			return $this->belongsTo(Busket::class);
		}
}
