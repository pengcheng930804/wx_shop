<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoodsClass;

class CategoryController extends Controller
{
    //list
    public function  index(){

    }
    public function addCategory(){
        return view('admin/category/category_add');
    }
    public function category_product_add(){
        //获取分类列表
        $GoodsCategoryModel=new GoodsClass;
        //var_dump($GoodsCategoryModel);die;
        $categorys = $GoodsCategoryModel::getAllCategory();
        return view('admin/category/category_product_add',['categorys'=>$categorys]);
    }
}
