<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use App\Product;
use Illuminate\Http\Request;
use Session;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function categoryList()
    {
        $categories = Category::all();
        return view('admin.category.categoryList')->with('categories', $categories);
    }

    public function categoryAdd(Request $request)
    {
        $catName = $request->input('category');

        $category = Category::create([
            'categoryName' => $catName,
        ]);

        if($category) {
            Session::flash('success', 'Category Successfully Added');
            return redirect()->route('category');
        }
    }

    public function categoryDelete($categoryId)
    {
        DB::table('categories')
            ->where('category_id', $categoryId)
            ->delete();

        DB::table('products')
            ->where('productCategory', $categoryId)
            ->delete();

        Session::flash('success', 'Category Successfully Delete');
        return redirect()->route('category');
    }

    public function brandList()
    {
        $brands = Brand::all();
        return view('admin.brand.brandList')->with('brands', $brands);
    }

    public function brandAdd(Request $request)
    {
        $brandName = $request->input('brand');

        $brand = Brand::create([
            'brandName' => $brandName,
        ]);

        if($brand) {
            Session::flash('success', 'Brand Successfully Added');
            return redirect()->route('brand');
        }
    }

    public function brandDelete($brandId)
    {
        DB::table('brands')
            ->where('brand_id', $brandId)
            ->delete();

        DB::table('products')
            ->where('productBrand', $brandId)
            ->delete();

        Session::flash('success', 'Brand Successfully Delete');
        return redirect()->route('brand');
    }

    public function productList()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('admin.product.productList')->with('products', $products);
    }

    public function productAdd()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product.productAdd')->with('categories', $categories)->with('brands', $brands);
    }

    public function productStore(Request $request)
    {
        $data = array();
        $data['productName'] = $request->productName;
        $data['productCategory'] = $request->productCategory;
        $data['productBrand'] = $request->productBrand;
        $data['productDescription'] = $request->productDescription;
        $data['productPrice'] = $request->productPrice;
        $data['productDisplay'] = $request->productDisplay;

        $image = $request->file('productImage');
        if($image){
            $image_name         = str_random(20);
            $ext                = strtolower($image->getClientOriginalExtension());
            $image_full_name    = $image_name.'.'.$ext;
            $upload_path        = 'upload/';
            $image_url          = $upload_path.$image_full_name;
            $success            = $image->move($upload_path, $image_full_name);

            if ($success) {
                $data['productImage'] = $image_url;
                Product::insert($data);
                Session::flash('success', 'Product Added Successfully.....');
                return redirect()->route('product');
            }
        }

        $data['productImage'] = '';
        Product::insert($data);
        Session::flash('success', 'Product Added Successfully.....');
        return redirect()->route('product');
    }

    public function productView($id)
    {
        $product = DB::table('products')
                    ->select('*')
                    ->join('categories', 'products.productCategory', '=', 'categories.category_id')
                    ->join('brands', 'products.productBrand', '=', 'brands.brand_id')
                    ->where('products.id', $id)
                    ->first();
        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        return view('admin.product.productView')->with('product', $product);


    }
    public function productEdit($id)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $product = DB::table('products')
            ->select('*')
            ->join('categories', 'products.productCategory', '=', 'categories.category_id')
            ->join('brands', 'products.productBrand', '=', 'brands.brand_id')
            ->where('products.id', $id)
            ->first();

        return view('admin.product.productEdit')->with('product', $product)->with('categories', $categories)->with('brands', $brands);
    }

    public function productUpdate(Request $request, $product_id)
    {
        $data = array();
        $data['productName'] = $request->productName;
        $data['productCategory'] = $request->productCategory;
        $data['productBrand'] = $request->productBrand;
        $data['productDescription'] = $request->productDescription;
        $data['productPrice'] = $request->productPrice;
        $data['productDisplay'] = $request->productDisplay;

        $image = $request->file('productImage');
        if($image){
            $image_name         = str_random(20);
            $ext                = strtolower($image->getClientOriginalExtension());
            $image_full_name    = $image_name.'.'.$ext;
            $upload_path        = 'upload/';
            $image_url          = $upload_path.$image_full_name;
            $success            = $image->move($upload_path, $image_full_name);

            if ($success) {
                $data['productImage'] = $image_url;
                DB::table('products')
                    ->where('id', $product_id)
                    ->update($data);
                Session::flash('success', 'Product Updated Successfully.....');
                return redirect()->route('product');
            }
        }

        DB::table('products')
            ->where('id', $product_id)
            ->update($data);
        Session::flash('success', 'Product Updated Successfully.....');
        return redirect()->route('product');
    }
    public function productDelete($product_id)
    {
        $Path = DB::table('products')
            ->select('productImage')
            ->where('products.id', $product_id)
            ->first();

        if (file_exists($Path->productImage)){
            if (unlink($Path->productImage)) {
                DB::table('products')
                    ->where('id', $product_id)
                    ->delete();
                Session::flash('message', 'Product Deleted Successfully.....');
                return redirect()->back();
                // return redirect()->route('product');
            } else {
                Session::flash('error', 'Something Wrong. Please Try Again.....');
                return redirect()->back();
                // return redirect()->route('product');
            }
        } else {
            DB::table('products')
                ->where('id', $product_id)
                ->delete();
            Session::flash('message', 'Product Deleted Successfully.....');
            return redirect()->back();
            // return redirect()->route('product');
        }
    }
}
