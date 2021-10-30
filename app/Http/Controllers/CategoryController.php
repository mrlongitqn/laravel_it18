<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    function index(){
        //Thuc hien lay tat ca du lieu tu bang users
        //$users = DB::table('users')->get();

      //  $users = DB::table('users')->orderBy('id','desc')->first();
        $users = DB::table('users')->select('name','email')->get();
        //orderBy('id','desc') sap xep

      //  $users = DB::table('users')->select('name','email')->skip(20)->take(10)->get();
      //  $users = DB::table('users')->where('email','LIKE','%4%')->select('name','email')->get();
//      $users = DB::table('users')->where([
//              ['email','LIKE','%4%'],
//              ['name', 'LIKE','%g%']
//      ])->select('name','email')->get();
        //$users = DB::table('users')->where('email','LIKE','%4%')->where('name', 'LIKE','%g%')->select('name','email')->get();
    //    $users = DB::table('users')->where('email','LIKE','%4%')->orWhere('name', 'LIKE','%g%')->select('name','email')->get();
        //>skip(20)->take(10) bỏ qua bao nhiêu dữ liêu, lấy bao nhiêu dữ liệu

      //  $users = DB::table('users')->select(DB::Raw('id as stt, name as ten'))->get();
        $posts = DB::table('posts')->join('categories','posts.category_id','categories.id')
            ->select('posts.id', 'posts.title as post_title','categories.title')->take(10)->get();
        dd($posts);
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
