<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use App\Models\ProductImage;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

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
        // return response(Auth::user()->seller_id);



        if ($request->hasFile('singlefile')) {
            
            $i = 1;
            
                $file = $request->file('singlefile');

                $fileName = date("YmdHis",time()).'.'.$file->getClientOriginalName();

                $table = new ProductImage;
                $table->image_id = $i;
                $table->image = $fileName;
                $table->type = $request->imagetype;
                $table->product_sku = $request->mysku;
                $table->seller_id = Auth::user()->seller_id;
                $table->save();

                $file->move('upload/'.Auth::user()->seller_id, $fileName);

            return response('Uploaded Succesfully');
            // $data['files_path'] = $upDir;
        }
        
    }

        

         public function uploadmultiple(Request $request) {

             $i = 1;

             // print_r($request);


             if(ProductImage::where('product_sku',  $request->mysku)
                ->where('seller_id',  Auth::user()->seller_id)
                ->where('type',  'gallery')->get()) {
                     $order = ProductImage::max('image_id');
                    $i = $order+1;
                } else {
                    $i = 1;
                }


             foreach($request->file('multiplefile') as $file) {

                $fileName = date("YmdHis",time()).'.'.$file->getClientOriginalName();

                $table = new ProductImage;
                $table->image_id = $i;
                $table->image = $fileName;
                $table->type = $request->imagetype;
                $table->product_sku = $request->mysku;
                $table->seller_id = Auth::user()->seller_id;
                $table->save();

                $file->move('upload/'.Auth::user()->seller_id, $fileName);
                $i++;

            }
                
            return response('Uploaded Succesfully');
            
         }

        public function singlepicker(Request $request) {
            if(ProductImage::where('product_sku',  $request->sku)
                ->where('seller_id',  Auth::user()->seller_id)
                ->where('type',  'main')->first()) {
                // return response('true');

             return response()->json([
                'status' => 'true',
                'data'   => ProductImage::where('product_sku',  $request->sku)
                ->where('seller_id',  Auth::user()->seller_id)
                ->where('type',  'main')->first()
            ]);


            } else {
                return response('false');
            }
        }



        public function multiplepicker(Request $request) {
            if(ProductImage::where('product_sku',  $request->sku)
                ->where('seller_id',  Auth::user()->seller_id)
                ->where('type',  'gallery')->get()) {
                // return response('true');

             return response()->json([
                'status' => 'true',
                'data'   => ProductImage::where('product_sku',  $request->sku)
                ->where('seller_id',  Auth::user()->seller_id)
                ->where('type',  'gallery')->get()
            ]);


            } else {
                return response('false');
            }
        }


        public function galleryorder(Request $request) {
            $newkey = 1;

            // ProductImage::where('product_sku',  $request[$newkey]->sku)
            //     ->where('seller_id',  Auth::user()->seller_id)
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
            //     ->where('seller_id',  Auth::user()->seller_id)
            //     ->where('type',  'gallery')->get()) {
            //     // return response('true');

            //  return response()->json([
            //     'status' => 'true',
            //     'data'   => ProductImage::where('product_sku',  $request->sku)
            //     ->where('seller_id',  Auth::user()->seller_id)
            //     ->where('type',  'gallery')->get()
            // ]);


            // } else {
            //     return response('false');
            // }
        }


        public function deleteimage(Request $request) {
            // return response($request->imageid);
            // echo $request->sku.'<br>';
            // echo Auth::user()->seller_id.'<br>';
            // echo $request->imageid.'<br>';
            
            unlink('upload/'.Auth::user()->seller_id.'/'.$request->name);
            
            return response(ProductImage::where('product_sku',  $request->sku)
                ->where('seller_id',  Auth::user()->seller_id)
                ->where('image_id', $request->imageid)
                ->where('type', 'gallery')->delete());
        }   


        public function test(Request $request) {

        //     $file = Input::file('file');
        // $filename = $file->getClientOriginalName();
            
                return response($request->file('file_path')->getClientOriginalName());
            // }
        }

}
