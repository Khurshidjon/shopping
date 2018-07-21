<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PhotoRequest;
use App\Product;
use App\ProductPhoto;

use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('shopping.index', ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*Create a new product*/
    public function create(Request $request)
    {
        /*if($request->ajax()){*/
            $request->validate([
                'uploadFile' => 'image | mimes:jpg, jpeg, bmp, png | max:7096',
            ]);

            $category_id = $request->get('category_id');

            $product = Product::create([
                'name' => $request->proName,
                'description' => $request->proDescription,
                'price' => $request->proPrice,
                'details' => $request->proDetails,
                'category_id' => $category_id,
            ]);

            if($request->hasFile('photos'))
            {
                foreach ($request->file('photos') as $item)
                {
                    $filename = $item->store(date('Y-m'), 'public');

                    ProductPhoto::create([
                        'images' => $filename,
                        'product_id' => $product->id,
                    ]);
                }
            }
        $notification = array(
            'message' => 'Product created successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);


        /*}*/

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    /*Create a new category*/
    public function store(Request $request)
    {
        if ($request->ajax()){
            $name = $request->name;
            Category::create([
                'name' => $name,
            ]);
            return 'success';
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    /*Show one product for add to cart*/

    public function show(Product $product)
    {
        $randoms = Product::where('slug', '!=', $product)->get()->random(1);

        return view('shopping.show', ['product' => $product, 'randoms' => $randoms]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, ProductPhoto $photo)
    {
        $product->update(
            [
                'title'=>$request->title,
                'slug'=>SlugService::createSlug(Post::class, 'slug', $request->title),
                'body'=>$request->body,
                'user_id'=>$post->user->id,
                'category_id'=>$request->get('category'),
                'page_view'=>$post->page_view,
            ]
        );
        foreach ($request->photos as $item) {
            $filename = $item->store('image');
            $photo->update([
                'filename'=>$filename,
                'post_id'=>$post->id,
            ]);
        }
        return redirect()->route('home')->with('info', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
