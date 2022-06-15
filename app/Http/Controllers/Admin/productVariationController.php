<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\productVariationModel;
use Illuminate\Http\Request;

class productVariationController extends Controller
{
    public function store($variations , $attributeId , $product){

        $counter = count($variations['value']);

        for($i = 0; $i < $counter ; $i++){

            productVariationModel::create([

                'attribute_id' => $attributeId,
                'product_id' => $product->id,
                'value' => $variations['value'][$i],
                'price' => $variations['price'][$i],
                'quantity' => $variations['quantity'][$i],
                'sku' => $variations['sku'][$i]

            ]);

        }

    }

    public function update($getIds){



        foreach ($getIds as $key => $getId) {

            $upVar = productVariationModel::findOrFail($key);

            $upVar->update([

                'price' => $getId['price'],
                'quantity' => $getId['quantity'],
                'sku' => $getId['sku'],
                'sale_price' => $getId['sale_price'],
                'date_on_sale_from' => convert($getId['date_on_sale_from']),
                'date_on_sale_to' => convert($getId['date_on_sale_to'])

            ]);


        }



    }


    public function change($variations , $attributeId , $product){

        productVariationModel::where('product_id' , $product->id);

        $counter = count($variations['value']);

        for($i = 0; $i < $counter ; $i++){

            productVariationModel::create([

                'attribute_id' => $attributeId,
                'product_id' => $product->id,
                'value' => $variations['value'][$i],
                'price' => $variations['price'][$i],
                'quantity' => $variations['quantity'][$i],
                'sku' => $variations['sku'][$i]

            ]);

        }

    }
}
