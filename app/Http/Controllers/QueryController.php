<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller {

    public function index() {
        // $books = DB::table('books')->get();
        // $authors = DB::table('authors')->limit(3)->offset(2)->get();
        // $count = count($authors);
        // $count = DB::table('authors')->count();
        // where id = 2
        // $books = DB::table('books')->where('id','<',5)->get();
        // where id = 2 and some other condition like price > 100
        // $books = DB::table('books')->where('id','<',5)->where('price','<=',14)->get();
        // or
        // $books = DB::table('books')->where(
        //     ['id','<',5],
        //     ['price','<',14]
        // )->get();

        // by column name
        // $books = DB::table('books')->wherePrice(14)->get();

        // between a range
        // $books = DB::table('books')->whereBetween('id',[3,6])->get();
        // or
        // $books = DB::table('books')->where('id','>=',3)->where('id','<=',6)->get();

        // maximum priced book
        // $max = DB::table('books')->max('price');
        // $maxPricedBook = DB::table('books')->where('price', $max)->get();

        // minimum priced book
        // $books = DB::table('books')->min('price');
        // sum of prices
        // $books = DB::table('books')->sum('price');
        // average of prices
        // $books = DB::table('books')->avg('price');

        // order by
        // $books = DB::table('books')->orderBy('price','desc')->get();
        // $maxPrice = DB::table('books')->orderBy('price','desc')->first();

        // join
        // $books = DB::table('books')
        // ->join('authors','books.author_id','=','authors.id')
        // ->select('books.title','authors.name','authors.id as author_id','books.id as book_id')
        // ->get();

        // find where author id 1 and to sql
        // $books = DB::table('books')
        // ->join('authors','books.author_id','=','authors.id')
        // ->select('books.title','authors.name','authors.id as author_id','books.id as book_id')
        // ->where('authors.id','=',1)
        // ->toSql();
        
        // find max priced book and where price between 12 and 14
        // $max = DB::table('books')->max('price');
        // $books = DB::table('books')
        // ->join('authors','books.author_id','=','authors.id')
        // ->select('books.title','authors.name','authors.id as author_id','books.id as book_id','books.price as book_price')
        // ->wherePrice($max)
        // ->orWhereBetween('price',[12,14])
        // ->get();

        //books and authors join
        // $books = DB::table('books')
        // ->leftJoin('authors','books.author_id','=','authors.id')
        // ->select('books.title','authors.name','authors.id as author_id','books.id as book_id')
        // ->get(); 
        
        // left join with authors
    //     $books = DB::table('authors')
    //     ->leftJoin('books','books.author_id','=','authors.id')
    //     ->select('books.title','authors.name as Author','books.author_id','books.id as book_id')
    //     ->orderBy('books.title','desc')
    //     ->get();


    //    return response()->json($books);
    }


    function store(){
        // add a new author with name Rokibol
        // DB::table('authors')->insert([
        //     'name' => 'Rokibol',
        //     'bio'  => 'English novelist',
        // ]);

        // insert a new author named Sharif and his book bangla choti
        // $newAuthorId = DB::table('authors')->insertGetId([
        //     'name' => 'Sharif',
        //     'bio'  => 'English Choti Writer',
        // ]);

        // DB::table('books')->insert([
        //     'title' => 'Bangla Choti',
        //     'author_id' => $newAuthorId,
        // ]);

        // $books = DB::table('books')
        // ->join('authors','books.author_id','=','authors.id')
        // ->select('books.title','authors.name as Author','books.author_id','books.id as book_id')
        // ->get();

        // update a price of a book to 20 where id = 10
        // DB::table('books')->where('id',10)->update([
        //     'price' => 20
        // ]);
        // get the book now
        // $books = DB::table('books')
        // ->join('authors','books.author_id','=','authors.id')
        // ->select('books.title','authors.name as Author','books.author_id','books.id as book_id','books.price as book_price')
        // ->get();

        // delete all books where price > 19
        // DB::table('books')->where('price','>',19)->delete();
        // $books = DB::table('books')
        // ->join('authors','books.author_id','=','authors.id')
        // ->select('books.title','authors.name as Author','books.author_id','books.id as book_id','books.price as book_price')
        // ->get();

        // return $books;


    }
}
