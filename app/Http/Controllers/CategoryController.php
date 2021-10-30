<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    function index(){

        echo 'Hiển thị danh sách danh mục thuộc cateogry controller';
    }

    function add(){
        DB::table('categories')->insert([
            'title'=>'Pháp luật',
            'parent_id'=>0,
            'desc'=>'Chuyên mục pháp luật đời sống'
        ]);
//        $mysql = new \mysqli('localhost','root','','lravel');
//        $query = "INSERT INTO categories(title, parent_id, desc) VALUES('Pháp luật',0,'Chuyên mục pháp luật đời sống')";
//        $mysql->query($query);
    }

    function update($id,$parent='100'){
        DB::table('categories')->where('id',102)->update([
            'title'=>'Sửa pháp luật'
        ]);
        echo 'Đã sửa thành công';
    }

    function delete(){
        DB::table('categories')->where('id',102)->delete();
        echo 'Đã xóa thành công';
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
