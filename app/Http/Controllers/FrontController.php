<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\WishList;
use App\Category;
use App\Brand;
use App\UserRegister;
use App\Order;
use App\Contact;
use Session;
use DB;
use Cart;


class FrontController extends Controller
{
    public function index()
    {

      // $ip = $_SERVER['REMOTE_ADDR'];
      // echo $ip;

        $categories = Category::orderBy('category_id', 'desc')->limit(10)->get();
        $brands = Brand::orderBy('brand_id', 'desc')->limit(10)->get();
        $featureProducts = Product::where('productDisplay', 1)->orderBy('id', 'desc')->limit(9)->get();
        $generalProducts = Product::where('productDisplay', 0)->orderBy('id', 'desc')->limit(9)->get();
        $products = Product::inRandomOrder()->limit(10)->get();

        return  view('home_content')
        ->with('featureProducts', $featureProducts)
        ->with('generalProducts', $generalProducts)
        ->with('products', $products)
        ->with('categories', $categories)
        ->with('brands', $brands);
    }
    public function products()
    {
        $categories = Category::orderBy('category_id', 'desc')->limit(10)->get();
        $brands = Brand::orderBy('brand_id', 'desc')->limit(10)->get();
        $featureProducts = Product::where('productDisplay', 1)->orderBy('id', 'desc')->limit(9)->get();
        $generalProducts = Product::where('productDisplay', 0)->orderBy('id', 'desc')->limit(9)->get();
        $products = Product::inRandomOrder()->limit(10)->get();

        $allProduct = Product::orderBy('id', 'desc')->paginate(12);
        return view('pages.product')
        ->with('featureProducts', $featureProducts)
        ->with('generalProducts', $generalProducts)
        ->with('products', $products)
        ->with('categories', $categories)
        ->with('brands', $brands)
        ->with('allProduct', $allProduct);
    }

    public function productsByCategory($categoryId)
    {
        $categories = Category::orderBy('category_id', 'desc')->limit(10)->get();
        $brands = Brand::orderBy('brand_id', 'desc')->limit(10)->get();
        $featureProducts = Product::where('productDisplay', 1)->orderBy('id', 'desc')->limit(9)->get();
        $generalProducts = Product::where('productDisplay', 0)->orderBy('id', 'desc')->limit(9)->get();
        $products = Product::inRandomOrder()->limit(10)->get();

        $allProductByCat = Product::where('productCategory', $categoryId)->orderBy('id', 'desc')->paginate(12);
        return view('pages.product_by_cat')
        ->with('featureProducts', $featureProducts)
        ->with('generalProducts', $generalProducts)
        ->with('products', $products)
        ->with('categories', $categories)
        ->with('brands', $brands)
        ->with('allProduct', $allProductByCat);
    }

    public function productsByBrand($brandId)
    {
        $categories = Category::orderBy('category_id', 'desc')->limit(10)->get();
        $brands = Brand::orderBy('brand_id', 'desc')->limit(10)->get();
        $featureProducts = Product::where('productDisplay', 1)->orderBy('id', 'desc')->limit(9)->get();
        $generalProducts = Product::where('productDisplay', 0)->orderBy('id', 'desc')->limit(9)->get();
        $products = Product::inRandomOrder()->limit(10)->get();

        $allProductByBrand = Product::where('productBrand', $brandId)->orderBy('id', 'desc')->paginate(12);
        return view('pages.product_by_bnd')
        ->with('featureProducts', $featureProducts)
        ->with('generalProducts', $generalProducts)
        ->with('products', $products)
        ->with('categories', $categories)
        ->with('brands', $brands)
        ->with('allProduct', $allProductByBrand);
    }

    public function productDetails($productId)
    {
        $categories = Category::orderBy('category_id', 'desc')->limit(10)->get();
        $brands = Brand::orderBy('brand_id', 'desc')->limit(10)->get();
        $featureProducts = Product::where('productDisplay', 1)->orderBy('id', 'desc')->limit(9)->get();
        $generalProducts = Product::where('productDisplay', 0)->orderBy('id', 'desc')->limit(9)->get();
        $products = Product::inRandomOrder()->limit(10)->get();

        $getProduct = DB::table('products')
        ->select('*')
        ->join('categories', 'products.productCategory', '=', 'categories.category_id')
        ->join('brands', 'products.productBrand', '=', 'brands.brand_id')
        ->where('products.id', $productId)
        ->first();

        $getSimiller = DB::table('products')
        ->select('*')
        ->join('categories', 'products.productCategory', '=', 'categories.category_id')
        ->where('categories.category_id', $getProduct->productCategory)
        ->join('brands', 'products.productBrand', '=', 'brands.brand_id')
        ->where('brands.brand_id', $getProduct->productBrand)
        ->limit(6)
        ->get();

        return view ('pages.product_details')
        ->with('featureProducts', $featureProducts)
        ->with('generalProducts', $generalProducts)
        ->with('products', $products)
        ->with('categories', $categories)
        ->with('brands', $brands)
        ->with('getProduct', $getProduct)
        ->with('getSimiller', $getSimiller);
    }

    public function cheekOut()
    {
        if(!Session::get('id')){
            Session::flash('warning', 'You Must Login First!!!');
            return redirect()->route('user.login');
        }
        $categories = Category::orderBy('category_id', 'desc')->limit(10)->get();
        $brands = Brand::orderBy('brand_id', 'desc')->limit(10)->get();
        $featureProducts = Product::where('productDisplay', 1)->orderBy('id', 'desc')->limit(9)->get();
        $generalProducts = Product::where('productDisplay', 0)->orderBy('id', 'desc')->limit(9)->get();
        $products = Product::inRandomOrder()->limit(10)->get();

        $user = UserRegister::where('id', Session::get('id'))->first();

        return view ('pages.cheekout')
        ->with('featureProducts', $featureProducts)
        ->with('generalProducts', $generalProducts)
        ->with('products', $products)
        ->with('categories', $categories)
        ->with('brands', $brands)
        ->with('user', $user);
    }

    public function cart(){
        $categories = Category::orderBy('category_id', 'desc')->limit(10)->get();
        $brands = Brand::orderBy('brand_id', 'desc')->limit(10)->get();
        $featureProducts = Product::where('productDisplay', 1)->orderBy('id', 'desc')->limit(9)->get();
        $generalProducts = Product::where('productDisplay', 0)->orderBy('id', 'desc')->limit(9)->get();
        $products = Product::inRandomOrder()->limit(10)->get();
        return view ('pages.cart')
        ->with('featureProducts', $featureProducts)
        ->with('generalProducts', $generalProducts)
        ->with('products', $products)
        ->with('categories', $categories)
        ->with('brands', $brands);
    }

    public function login(){
     if(Session::get('id')){
        return redirect()->route('shopHome');
    }

    $categories = Category::orderBy('category_id', 'desc')->limit(10)->get();
    $brands = Brand::orderBy('brand_id', 'desc')->limit(10)->get();
    $featureProducts = Product::where('productDisplay', 1)->orderBy('id', 'desc')->limit(9)->get();
    $generalProducts = Product::where('productDisplay', 0)->orderBy('id', 'desc')->limit(9)->get();
    $products = Product::inRandomOrder()->limit(10)->get();

    return view ('pages.login')
    ->with('featureProducts', $featureProducts)
    ->with('generalProducts', $generalProducts)
    ->with('products', $products)
    ->with('categories', $categories)
    ->with('brands', $brands);
} 

public function addWishList($id){
    if(!Session::get('id')){
        Session::flash('warning', 'You Must Login First!!!');
        return redirect()->route('user.login');
    }

    $product = Product::find($id);
    $productId = $product->id;
    $productName = $product->productName;
    $productImage = $product->productImage;
    $productPrice = $product->productPrice;
    $userId = Session::get('id');

    $wishList = new wishList;
    $wishList->productId = $productId;
    $wishList->productName = $productName;
    $wishList->productImage = $productImage;
    $wishList->productPrice = $productPrice;
    $wishList->userId = $userId;
    $wishList->save();
    Session::flash('success', 'Add to WishList Successfully');
    return redirect()->back();
    
}
public function showWishList(){
    $id = Session::get('id');

    $categories = Category::orderBy('category_id', 'desc')->limit(10)->get();
    $brands = Brand::orderBy('brand_id', 'desc')->limit(10)->get();
    $featureProducts = Product::where('productDisplay', 1)->orderBy('id', 'desc')->limit(9)->get();
    $generalProducts = Product::where('productDisplay', 0)->orderBy('id', 'desc')->limit(9)->get();
    $products = Product::inRandomOrder()->limit(10)->get();

    $data['wishLists'] = WishList::where('userId',$id)->get();
    return view('pages.wishList',$data)
    ->with('featureProducts', $featureProducts)
    ->with('generalProducts', $generalProducts)
    ->with('products', $products)
    ->with('categories', $categories)
    ->with('brands', $brands);
}


/*** work by rasel 18 may    ***/

public function deleteWishList($id){
    $wishlist = WishList::find($id);
    $wishlist->delete();
    Session::flash('success', 'delete WishList Successfully');
    return redirect()->back();


}

public function orderStore(Request $request) 
{

 $request->validate([
    'name' => 'required',
    'email' => 'required|email',
    'phone'=>'required|regex:/(01)[0-9]{9}/|min:11|max:11',
    'address'=>'required'
]);


 $data = [];
 foreach (Cart::content() as $row) {
    $data[] = [
      'name' => $request->name,
      'email' => $request->email,
      'phone' => $request->phone,
      'address' => $request->address,
      'productId' => $row->id,
      'productName' => $row->name,
      'price' => $row->price,
      'qty' =>$row->qty,
      'totalPrice' => $row->total,
      'image'=>$row->options->image,
      'orderDate'=> date("Y-m-d"),
  ];

}
Order::insert($data);
Cart::destroy();
Session::flash('success', 'Order Successfully Done');
return redirect()->back();



}

public function contact()
{
    $categories = Category::orderBy('category_id', 'desc')->limit(10)->get();
    $brands = Brand::orderBy('brand_id', 'desc')->limit(10)->get();
    $featureProducts = Product::where('productDisplay', 1)->orderBy('id', 'desc')->limit(9)->get();
    $generalProducts = Product::where('productDisplay', 0)->orderBy('id', 'desc')->limit(9)->get();
    $products = Product::inRandomOrder()->limit(10)->get();
    return view ('pages.contact')
        // ->with('featureProducts', $featureProducts)
        // ->with('generalProducts', $generalProducts)
    ->with('products', $products)
    ->with('categories', $categories)
    ->with('brands', $brands);
}

public function contactStore(Request $request)
{
   $contact = new Contact();
   $contact->name = $request->name;
   $contact->email = $request->email;
   $contact->subject = $request->subject;
   $contact->message = $request->message;
   $contact->save();
   Session::flash('success', 'message Successfully Done');
   return redirect()->back();
}


public function search(Request $request)
{

  $result = $request->search;
  $categories = Category::orderBy('category_id', 'desc')->limit(10)->get();
  $brands = Brand::orderBy('brand_id', 'desc')->limit(10)->get();
  $featureProducts = Product::where('productDisplay', 1)->orderBy('id', 'desc')->limit(9)->get();
  $generalProducts = Product::where('productDisplay', 0)->orderBy('id', 'desc')->limit(9)->get();
  $products = Product::inRandomOrder()->limit(10)->get();

  $allProduct = Product::orderBy('id', 'desc')
  ->where('productName','like','%' .$result. '%')
  ->get();

  return view('pages.search')
  ->with('featureProducts', $featureProducts)
  ->with('generalProducts', $generalProducts)
  ->with('products', $products)
  ->with('categories', $categories)
  ->with('brands', $brands)
  ->with('allProduct', $allProduct);

}

public function createProfile()
{
    $userId = Session::get('id');
    $categories = Category::orderBy('category_id', 'desc')->limit(10)->get();
    $brands = Brand::orderBy('brand_id', 'desc')->limit(10)->get();
    $featureProducts = Product::where('productDisplay', 1)->orderBy('id', 'desc')->limit(9)->get();
    $generalProducts = Product::where('productDisplay', 0)->orderBy('id', 'desc')->limit(9)->get();
    $products = Product::inRandomOrder()->limit(10)->get();
    $user = @UserRegister::where('id',$userId)->first();
    return view ('pages.user_profile')
        // ->with('featureProducts', $featureProducts)
        // ->with('generalProducts', $generalProducts)
    ->with('products', $products)
    ->with('categories', $categories)
    ->with('brands', $brands)
    ->with('user',$user);

}

public function userRegistrationUpdate(Request $request,$id)
{

    $request->validate([
    'name' => 'required',
    'email' => 'required|email',
    'phone'=>'regex:/(01)[0-9]{9}/|min:11|max:11',
]);
    $user = UserRegister::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->date = $request->date;
    $user->address = $request->address;
    $user->save();
    return redirect()->back();
}
}
