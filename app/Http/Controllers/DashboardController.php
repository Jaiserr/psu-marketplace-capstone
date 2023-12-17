<?php

namespace App\Http\Controllers;

use App\Mail\ApprovedSeller;
use App\Mail\BlockedMail;
use App\Models\ApprovalNotification;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function index() {
        if (Auth::user()->hasRole("superadministrator")) {
            $sellers = User::whereHasRole('seller')->orderBy('created_at', 'desc')->take(10)->get();
            $customers = User::whereHasRole('customer')->orderBy('created_at', 'desc')->take(10)->get();
            $sellersCount = User::whereHasRole('seller')->count();
            $sellersApproved = User::whereHasRole('seller')->where('approved', 1)->count();
            $sellersPending = User::whereHasRole('seller')->where('approved', null)->count();
            $customersCount = User::whereHasRole('customer')->count();
            $productsCount = Products::count();
            $productsApproved = Products::where('approved', 1)->count();
            $productsPending = Products::where('approved', null)->count();
            $products = Products::orderBy('created_at', 'desc')->take(10)->get();
            return view('administrator.dashboard.index', compact('sellers', 'products', 'customers', 'sellersCount', 'sellersApproved', 'sellersPending', 'productsCount', 'productsApproved', 'productsPending', 'customersCount'));
        } elseif (Auth::user()->hasRole('seller')) {
            $products = Products::where('availability', 'Available')->where('approved', 1)->orderBy('created_at', 'desc')->take(30)->get();
            $productsExchange = Products::where('availability', 'Available')->where('approved', 1)->where('exchange', 'Yes')->orderBy('created_at', 'desc')->take(30)->get();
            $productsSchool = Products::where('availability', 'Available')->where('approved', 1)->where('category', 'School Uniforms & Supplies')->orderBy('created_at', 'desc')->take(30)->get();
            $productsMobile = Products::where('availability', 'Available')->where('approved', 1)->where('category', 'Mobile Phones & Gadgets')->orderBy('created_at', 'desc')->take(30)->get();
            $productsMen = Products::where('availability', 'Available')->where('approved', 1)->where('category', 'Men Fashion')->orderBy('created_at', 'desc')->take(30)->get();
            $productsWomen = Products::where('availability', 'Available')->where('approved', 1)->where('category', 'Women Fashion')->orderBy('created_at', 'desc')->take(30)->get();
            $productsComputer = Products::where('availability', 'Available')->where('approved', 1)->where('category', 'Computer & Techs')->orderBy('created_at', 'desc')->take(30)->get();
            $productsFood = Products::where('availability', 'Available')->where('approved', 1)->where('category', 'Food & Drinks')->orderBy('created_at', 'desc')->take(30)->get();
            $productsHome = Products::where('availability', 'Available')->where('approved', 1)->where('category', 'Home Appliances')->orderBy('created_at', 'desc')->take(30)->get();
            $productsMusical = Products::where('availability', 'Available')->where('approved', 1)->where('category', 'Musical Instruments')->orderBy('created_at', 'desc')->take(30)->get();
            $productsSports = Products::where('availability', 'Available')->where('approved', 1)->where('category', 'Sports Equipment')->orderBy('created_at', 'desc')->take(30)->get();
            $productsToys = Products::where('availability', 'Available')->where('approved', 1)->where('category', 'Toys & Games')->orderBy('created_at', 'desc')->take(30)->get();
            $productsFurniture = Products::where('availability', 'Available')->where('approved', 1)->where('category', 'Furniture & Home Living')->orderBy('created_at', 'desc')->take(30)->get();
            $productsVehicles = Products::where('availability', 'Available')->where('approved', 1)->where('category', 'Vehicles & Components')->orderBy('created_at', 'desc')->take(30)->get();
            return view('seller.dashboard.index', compact('products','productsExchange','productsSchool','productsMobile','productsMen','productsWomen','productsComputer','productsHome','productsFood','productsMusical','productsSports','productsToys','productsFurniture','productsVehicles'));
        }  elseif (Auth::user()->hasRole('customer')) {
            $products = Products::where('availability', 'Available')->where('approved', 1)->orderBy('created_at', 'desc')->get();
            $wishlistItemsCount = auth()->user()->wishlists->count();
            return view('customer.dashboard.index', compact('products', 'wishlistItemsCount'));
        };
    }

    public function approve(Request $request)
    {
       User::where('id', $request->id)->update([
            'approved' => 1,
        ]);

        $user = User::findOrFail($request->id);
        $user->approvalNotifications()->create([
            'message' => 'Your account has been approved.',
        ]);

        $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new ApprovedSeller($data));


        return redirect()->back();
    }

    public function block(Request $request)
    {
       User::where('id', $request->id)->update([
            'approved' => null,
        ]);

        $user = User::findOrFail($request->id);
        $user->approvalNotifications()->where('user_id', $request->id)->delete();

        $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new BlockedMail($data));


        return redirect()->back()->with('danger-message', 'Seller Blocked!');
    }

    public function approveProduct(Request $request)
    {
       Products::where('id', $request->id)->update([
            'approved' => 1,
        ]);

        $user_id = Products::where('id', $request->id)->value('user_id');
        $user = User::findOrFail($user_id);
        $user->approvalNotifications()->create([
            'message' => 'Your product has been approved.',
        ]);

        return redirect()->back()->with('success-message', 'Product Approved!');
    }

    public function blockProduct(Request $request)
    {
       Products::where('id', $request->id)->update([
            'approved' => null,
        ]);


        $user_id = Products::where('id', $request->id)->value('user_id');
        $user = User::findOrFail($user_id);
        $user->approvalNotifications()->where('user_id', $user_id)->delete();

        return redirect()->back()->with('danger-message', 'Product Blocked!');
    }

    public function privacyPolicy() {
        return view('privacy-policy');
    }

    public function termsAndConditions() {
        return view('terms-and-conditions');
    }
}
