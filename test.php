<?php
require "functions.php";
require "config.php";
$db = new DB;
// $res = $db->where('id', '=', 23)->update(['title' => 'this is title', "body" => "this is body"], 'blogs');
// $res = $db->where('name', 'LIKE', "%" . "versace" . "%")->orWhere('id', '<', 10)->orWhere('tag_id', '=', 1)->get('products');
// $res = $db->find('products', 3);
// $res = $db->where('id', 'in', [3, 6])->all('products');
// $res = $db->where('id', '=', 3)->update(['quantity' => 26], 'products');
// $res = $db->between('id', 1, 3)->all('products');
// $res = $db->where('price', '<', "0")->orWhere('id', '<', 100)->groupWhere()
//     ->where('tag_id', '=', 1)->groupWhere()->where('category_id', '=', 2)->get('products');
// $res = $db->where([
//     $db->where('price', '<', 10)
//         ->orWhere('quantity', '<=', 10)
// ])->where('id', '<', 5)->get('products');
// $res = $db->where('price', '<', 500)
//     ->orWhere('quantity', '>', 20)
//     ->groupWhere()
//     ->where('tag_id', '=', 1)
//     ->get('products');
// $res = $db->where('id', '=', 343)
//     ->orWhere('user_id', '=', 42)
//     ->groupWhere()
//     ->where('ff', "<", 43)
//     ->update([
//         'title' => "this is title",
//         'body' => "lorem ispun some words hello world/."
//     ], 'blogs');
// $res = $db->between('id', 1, 6)->orderBy('created_at', "DESC")->limit(0, 2)->get('todo');

//instantiate with table name
// $db = new DB('user');
// $res = $db->all('todo');
// $res = $db->where('name', 'LIKE', '%' . 'san' . '%')
//     ->where('id', '<', '87')
//     ->groupWhere()
//     ->where('id', '<', '86')
//     ->get();


// instantiate with table name
$user = new DB('user');
// $res = $user->all();
// $res = $user->where('id', '<', 10)->orderBy('id')->limit(0, 3)->get();
// $res = $user->between('id', 0, 10)->get();
// $res = $user->find('77');
// $res = $user->store(["id" => 2, 'name' => 'WOWO']);
// $res = $user->where('id', '=', 1)->update(['name' => "NMK"]);


// instantiate without table name
$db = new DB;
// $res = $db->all('todo');
// $res = $db->orderBy('id', 'DESC')->limit(0, 3)->get('user');
// $res = $db->between('id', 0, 5)->get('todo');
// $res = $db->find('1', 'id', 'user');
// $res = $db->store(['id' => 1, "name" => "Naing Min Khant"], 'user');
// $res = $db->where('id', '=', '1')->update(['name' => "nmk"], 'user');



////testing 
// $res = $user->where('id', 77)->orWhere('id', '=', 44)->dd();
// $res = $user->where(function ($query) {
//     $query->where('id', 4)
//         ->orWhere('id', '=', 77);
// })->where('id', '<', 100)->get();


// $res = $user->where('id', '<', 100)->where(function ($query) {
//     $query->where(function ($query) {
//         $query->where('id', "=", 4)
//             ->orWhere('id', '=', 77);
//     })->orWhere('name', '=', 'ggg');
// })->get();

$res = $user->where('name', "LIKE", "%mg mg%")
    ->where(function ($query) {
        $query->where('id', '<', 80)
            ->orWhere("id", ">", 883);
    })->orderBy('id', 'desc')->get();

dd($res);
