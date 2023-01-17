<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Note;
use App\Models\page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class pageController extends Controller
{
   public function show()
   {
    $pages = DB::table('pages')->get();
    return view('pages.show' , compact('pages'));
   }

   public function onepage(page $page)
   {
    return view('pages.onepage' , compact('page'));
   }


   public function store(Request $request)
   {
    $page = new page;
    $page->title = $request->title;
    $page->save();
    return back();
   }

   public function delete(page $page){
      if(count($page->notes)){
         return view('pages.deleteall' , compact('page'));
      }else{
    $page->delete();
    return back();
      }
   }

   public function deleteall(page $page){
      $page->delete();
      $page->notes()->delete();
      return redirect('../../pages');
     }

}
