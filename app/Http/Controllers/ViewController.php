<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Message;
use App\Models\Page;
use App\Models\Product;
use App\Models\Special;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ViewController extends Controller
{
    // to return index (wecome page with contents)
    public function index()
    {
    	// getting cookies
    	$cookies = SubCategory::with('products')->get();
    	// getting cornflakes
    	$cornflakes = Category::with('products')->get();
    	$special = Special::with('products')->orderByDesc('created_at')->first();
        $banners = Banner::all();
        $metaInfo = Page::where('title', 'Home')->first();
        // return $metaInfo;
    	// return $special;
    	return view('welcome',[
    		'cookies'=>$cookies,
    		'cornflakes'=>$cornflakes,
    		'special'=>$special,
            'banners'=>$banners,
            'metaInfo'=>$metaInfo,
    	]);
    }

    // to return about page with contents
    public function getAbout()
    {
        $metaInfo = Page::where('title', 'About')->first();
        $aboutUs = AboutUs::all();
        return view('front.about', [
            'metaInfo'=>$metaInfo,
            'aboutUs'=>$aboutUs,
        ]);
    }


    // tor return cookies bnlog only
    public function cookiesBlog(Product $product, $id)
    {
        $product = Product::findOrFail($id);
        $subCategory = SubCategory::where('id', $product->child_id)->first();
        $category= Category::findOrFail($subCategory->parent_id);
        return view('front.blog', [
            'cookies'=>SubCategory::with('products')->get(),
            'product'=>$product,
            'cornflakes' => Category::with('products')->get(),
            'subCategory'=>$subCategory,
            'category'=>$category,
        ]);
    }
    // to return cornflakes blog only
    public function cornflakesBlog(Product $product)
    {
        $category= Category::findOrFail($product->parent_id);
        // return $subCategory;
        return view('front.cornflakes-blog', [
            'cookies'=>SubCategory::with('products')->get(),
            'product'=>$product,
            'cornflakes' => Category::with('products')->get(),
            'category'=>$category,
        ]);
    }
    // to return profucts
    public function getProduct($id, $is_child)
    {
        $products='';
        if($is_child == 1)
        {
            $products = SubCategory::with('products')->where('id', $id)->first();
        }else{
            $products = Category::with('products')->where('id', $id)->first();
        }
        return view('front.dcookies', [
            'products'=>$products,
        ]);
    }
    // to return all products 
    public function getProducts()
    {
        return view('front.products', [
            'cookies'=>SubCategory::with('products')->get(),
            'cornflakes' => Category::with('products')->where('has_child', 0)->first(),
        ]);
    }
// to return contact
    public function getContact()
    {
         $metaInfo = Page::where('title', 'Contact')->first();
         return view('front.contact', [
            'metaInfo'=>$metaInfo,
         ]);
    }


    // to sent mail 
    public function sentMail(Request $request, $is_feedback)
    {
        $validator = Validator::make($request->all(), [
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ], 
        $message=[
            'first_name.required'=>'The First Name Field could not be empty',
            'last_name.required'=>'The Laste Name Field Could not be empty',
            'email.required'=>'The Email Field Could not be empty',
            'message.required'=>'Your Message Body Could not be empty',
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        // creating data to send mail
         $data=array(
            'email'=>SITE_EMAIL,
            'from'=>$request->email,
            'content'=>$request->message,
            'name'=>$request->first_name. ' '. $request->last_name,
        );


        $message = new Message();
        $message->fill($request->all());
        $message->is_feedback=$is_feedback;
        $message->count=count(Message::all())+1;
        if($message->save()){
            Mail::send('emails.feedback-mail',$data, function ($message) use ($data){
                 $message->from($data['from']);
                 $message->to($data['email']);
             });
            return back()->with('success', 'Successfully You Mail Sent');
        }else{
            return back()->with('error', 'Could not Sent please try again');
        }
    }

// to return all cokies to blog cookies-all page
    public function getAllCookies()
    {
        $categories = SubCategory::with('products')->get();
        $subCategory=SubCategory::orderByDesc('created_at')->first();
        $metaInfo['title_tag'] = $subCategory->title_tag;
        $metaInfo['meta_keywords']=$subCategory->meta_keywords;
        $metaInfo['meta_description'] = $subCategory->meta_description;
        return view('front.cookies-all', [
            'categories'=>$categories,
            'metaInfo'=>$metaInfo
        ]);
    }

// to return all cornflakes to blog cornflakes-all page
    public function getAllCornflakes()
    {
        $categories = Category::with('products')->where('has_child', 0)->first();
        $metaInfo['title_tag'] = $categories->title_tag;
        $metaInfo['meta_keywords']=$categories->meta_keywords;
        $metaInfo['meta_description'] = $categories->meta_description;
        return view('front.cornflakes-all', [
            'categories'=>$categories,
            'metaInfo'=>$metaInfo,
        ]);
    }
}
