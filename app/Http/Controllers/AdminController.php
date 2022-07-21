<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\City;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Discount;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Region;
use App\Models\Tag;
use App\Models\Tool;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function test()
    {
        return view('test');
    }
    //index
    public function adminIndex()
    {
        return view('admin.layout.adminLayout');
    }
    //user
    public function adminVisitUser()
    {
        return view('admin.user.adminVisitUser');
    }

    public function adminAddUser()
    {
        return view('admin.user.adminAddUser');
    }

    public function adminPostAddUser(Request $request)
    {
        return redirect(route('adminVisitUser'));
    }

    public function adminUpdateUser($id)
    {
        return view('admin.user.adminUpdateUser');
    }

    public function adminPostUpdateUser()
    {
        return redirect(route('adminVisitUser'));
    }
    //permission
    public function adminVisitPermission()
    {
        return view('admin.permission.adminVisitPermission');
    }

    public function adminAddPermission()
    {
        return view('admin.permission.adminAddPermission');
    }

    public function adminUpdatePermission()
    {
        return view('admin.permission.adminUpdatePermission');
    }

    public function adminPostAddPermission(Request $request)
    {
        return redirect(route('adminVisitPermission'));
    }

    public function adminPostUpdatePermission()
    {
        return redirect(route('adminVisitPermission'));
    }

    public function adminDeletePermission()
    {
        return redirect(route('adminVisitPermission'));
    }
    //role
    public function adminVisitRole()
    {
        return view('admin.role.adminVisitRole');
    }

    public function adminAddRole()
    {
        return view('admin.role.adminAddRole');
    }

    public function adminUpdateRole($roleId)
    {
        return view('admin.role.adminUpdateRole');
    }
    public function adminPostAddRole()
    {
        return redirect(route('adminVisitRole'));
    }

    public function adminPostUpdateRole()
    {
        return redirect(route('adminVisitRole'));
    }

    public function adminDeleteRole()
    {
        return redirect(route('adminVisitRole'));
    }
    //category
    public function adminVisitCategory()
    {
        return view('admin.category.adminVisitCategory');
    }

    public function adminAddCategory()
    {
        return view('admin.category.adminAddCategory');
    }

    public function adminAddParentCategory()
    {
        return view('admin.category.adminAddParentCategory');
    }

    public function adminUpdateCategory()
    {
        return view('admin.category.adminUpdateCategory');
    }
    public function adminPostAddCategory(Request $request)
    {
        return redirect(route('adminVisitCategory'));
    }
    public function adminPostAddParentCategory()
    {
        return redirect(route('adminVisitCategory'));
    }
    public function adminPostUpdateCategory()
    {
        return redirect(route('adminVisitCategory'));
    }
    //tag
    public function adminVisitTag()
    {
        return view('admin.tag.adminVisitTag');
    }

    public function adminAddTag()
    {
        return view('admin.tag.adminAddTag');
    }

    public function adminUpdateTag()
    {
        return view('admin.tag.adminUpdateTag');
    }
    public function adminPostAddTag()
    {
        return redirect(route('adminVisitTag'));
    }
    public function adminPostUpdateTag()
    {
        return redirect(route('adminVisitTag'));
    }
    //discount
    public function adminVisitDiscount()
    {
        return view('admin.discount.adminVisitDiscount');
    }
    public function adminAddDiscount()
    {
        return view('admin.discount.adminAddDiscount');
    }
    public function adminUpdateDiscount()
    {
        return view('admin.discount.adminUpdateDiscount');
    }
    public function adminPostAddDiscount()
    {
        return redirect(route('adminVisitDiscount'));
    }
    public function adminPostUpdateDiscount()
    {
        return redirect(route('adminVisitDiscount'));
    }
    //product
    public function adminVisitProduct()
    {
        return view('admin.product.adminVisitProduct');
    }
    public function adminAddProduct()
    {
        return view('admin.product.adminAddProduct');
    }
    public function adminUpdateProduct()
    {
        return view('admin.product.adminUpdateProduct');
    }
    public function adminPostAddProduct()
    {
        return redirect(route('adminVisitProduct'));
    }
    public function adminPostUpdateProduct()
    {
        return redirect(route('adminVisitProduct'));
    }

    public function adminDeleteProductImage($imageID)
    {
        return redirect(route('adminVisitProduct'));
    }
    //comment
    public function adminVisitComment()
    {
        return view('admin.comment.adminVisitComment');
    }
    public function adminUpdateComment()
    {
        return view('admin.comment.adminUpdateComment');
    }
    public function adminPostUpdateComment()
    {
        return redirect(route('adminVisitComment'));
    }
    //region & city & zone
    //region
    public function adminVisitRegion()
    {
        return view('admin.RCZ.adminVisitRegion');
    }
    public function adminAddRegion()
    {
        return view('admin.RCZ.adminAddRegion');
    }
    public function adminUpdateRegion()
    {
        return view('admin.RCZ.adminUpdateRegion');
    }
    public function adminPostAddRegion()
    {
        return redirect(route('adminVisitRegion'));
    }
    public function adminPostUpdateRegion()
    {
        return redirect(route('adminVisitRegion'));
    }
    //city
    public function adminVisitCity()
    {
        return view('admin.RCZ.adminVisitCity');
    }
    public function adminAddCity($regionID)
    {
        return view('admin.RCZ.adminAddCity',compact('regionID'));
    }
    public function adminUpdateCity($cityID)
    {
        return view('admin.RCZ.adminUpdateCity');
    }
    public function adminPostAddCity()
    {
        return redirect(route('adminVisitCity'));
    }
    public function adminPostUpdateCity()
    {
        return redirect(route('adminVisitCity'));
    }
    //address
    public function adminVisitAddress()
    {
        return view('admin.address.adminVisitAddress');
    }
    public function adminDeleteAddress($addressID)
    {
        return redirect(route('adminVisitAddress'));
    }
    //order
    public function adminVisitOrder()
    {
        return view('admin.order.adminVisitOrder');
    }
    //transaction
    public function adminVisitTransaction()
    {
        return view('admin.transaction.adminVisitTransaction');
    }
    //contact
    public function adminVisitContact()
    {
        return view('admin.contact.adminVisitContact');
    }
}
