<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\productAttrbiuteModel;
use Illuminate\Http\Request;

class productAttributeController extends Controller
{
        public function store($attributes , $product){

            foreach($attributes as $key => $value){

            productAttrbiuteModel::create([

                'product_id' => $product->id,
                'attribute_id' => $key,
                'value' => $value

            ]);
        }

        }

        public function update($getAttributes){

            foreach($getAttributes as $key=>$getValue){
                $upAtt = productAttrbiuteModel::findOrFail($key);

                $upAtt->update([

                    'value' => $getValue

                ]);

            }

        }


        public function change($attributes , $product){

            productAttrbiuteModel::where('product_id' , $product->id)->delete();

            foreach($attributes as $key => $value){

                productAttrbiuteModel::create([

                    'product_id' => $product->id,
                    'attribute_id' => $key,
                    'value' => $value

                ]);
            }

        }
}
