<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class FileController extends Controller
{


	 public function uploadsingle(Request $request){

        // $fileName = time().'.'.$request->file->getClientOriginalExtension();
        // $request->file->move(public_path('upload'), $fileName);
              
        // return response()->json(['success'=>'You have successfully upload file.']);

 //        return response($request->file->getClientOriginalExtension());

 // $files = [];
 //        foreach($request->file->getClientOriginalExtension() as $file)
 //            {
 //                return response($file);
 //            }

        // store uploaded files if any
        // return response($request->sellerid);

        if ($request->file('singlefile') && count($request->file('singlefile')) > 0) {
            $i = 1;
            foreach ($request->file('singlefile') as $file) {


                $fileName = date("YmdHis",time()).'.'.$file->getClientOriginalName();

                $table = new ProductImage;
                $table->image_id = $i;
                $table->image = $fileName;
                $table->type = $request->imagetype;
                $table->product_sku = $request->mysku;
                $table->seller_id = $request->sellerid;
                $table->save();

                $file->move('C:/Users/digital/Desktop/Projects/Prototype/yup/yupstore/src/assets/upload/'.$request->sellerid, $fileName);
            }
            // $data['files_path'] = $upDir;
        }
    }

        

         public function uploadmultiple(Request $request) {
            if ($request->file('files') && count($request->file('files')) > 0) {
             

                if(ProductImage::where('product_sku',  $request->mysku)
                ->where('seller_id',  $request->sellerid)
                ->where('type',  'gallery')->get()) {
                     $order = ProductImage::max('image_id');
                    $i = $order+1;
                } else {
                    $i = 1;
                }
                
                foreach ($request->file('files') as $file) {
                    $fileName = date("YmdHis",time()).'.'.$file->getClientOriginalName();

                    $table = new ProductImage;
                    $table->image_id = $i;
                    $table->image = $fileName;
                    $table->type = $request->imagetype;
                    $table->product_sku = $request->mysku;
                    $table->seller_id = $request->sellerid;
                    $table->save();

                    $file->move('C:/Users/digital/Desktop/Projects/Prototype/yup/yupstore/src/assets/upload/'.$request->sellerid, $fileName);
                    $i++;
                }
            }
         }

        public function singlepicker(Request $request) {
            if(ProductImage::where('product_sku',  $request->sku)
                ->where('seller_id',  $request->sellerid)
                ->where('type',  'main')->first()) {
                // return response('true');

             return response()->json([
                'status' => 'true',
                'data'   => ProductImage::where('product_sku',  $request->sku)
                ->where('seller_id',  $request->sellerid)
                ->where('type',  'main')->first()
            ]);


            } else {
                return response('false');
            }
        }



        public function multiplepicker(Request $request) {
            if(ProductImage::where('product_sku',  $request->sku)
                ->where('seller_id',  $request->sellerid)
                ->where('type',  'gallery')->get()) {
                // return response('true');

             return response()->json([
                'status' => 'true',
                'data'   => ProductImage::where('product_sku',  $request->sku)
                ->where('seller_id',  $request->sellerid)
                ->where('type',  'gallery')->get()
            ]);


            } else {
                return response('false');
            }
        }


        public function galleryorder(Request $request) {
            $newkey = 1;

            // ProductImage::where('product_sku',  $request[$newkey]->sku)
            //     ->where('seller_id',  $request->sellerid)
            //     ->where('type',  'gallery')->get()

            // return response($request->value);

            foreach ($request->value as $requestdata) {
                // return response($key);
               ProductImage::where('product_sku',  $requestdata['product_sku'])
                ->where('seller_id',  $requestdata['seller_id'])
                ->where('type', 'gallery')
                ->where('id',  $requestdata['id'])->update(['image_id' => $newkey]);

                // echo '<pre>';
                // print_r($requestdata);
                // echo '</pre>';

                $newkey++;
            }
            // if(ProductImage::where('product_sku',  $request->sku)
            //     ->where('seller_id',  $request->sellerid)
            //     ->where('type',  'gallery')->get()) {
            //     // return response('true');

            //  return response()->json([
            //     'status' => 'true',
            //     'data'   => ProductImage::where('product_sku',  $request->sku)
            //     ->where('seller_id',  $request->sellerid)
            //     ->where('type',  'gallery')->get()
            // ]);


            // } else {
            //     return response('false');
            // }
        }


        public function deleteimage(Request $request) {
            // return response($request->imageid);
            // echo $request->sku.'<br>';
            // echo $request->sellerid.'<br>';
            // echo $request->imageid.'<br>';
            
            return response(ProductImage::where('product_sku',  $request->sku)
                ->where('seller_id',  $request->sellerid)
                ->where('image_id', $request->imageid)
                ->where('type', 'gallery')->delete());
        }   

}
