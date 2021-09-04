<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    function index(){
        echo 'Hiển thị danh sách danh mục thuộc cateogry controller';
    }

    function add(){
echo 'Add function';
    }

    function update($id,$parent='100'){
        echo "Giá trị được truyền vào là, id=$id và parent = $parent";
    }

    function delete(){

    }
    function GetData(Request $request){
        //var_dump, die, beautiful

       dd($request->except('age'));
        die();
        dd($request->all());
        $ten = $request->is('lay*');

        echo  $ten;
        //dd($request->path());
        //$request
    }

    function SetCookie(){
        $res = new Response();
        $res->withCookie('name','IT18A1');
        $res->withCookie('school1','DongA');
        return $res;
    }

    function GetCookie(Request  $request){
        echo $request->cookie('school1');
    }

    function Upload(Request $request){
        echo $request->hasFile('image');
        $request->file('image')->storeAs('/','anh.jpg');
    }
}
