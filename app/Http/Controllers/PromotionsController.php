<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Promotion;
use App\Tag;
use App\Image;
use Carbon\Carbon;

class PromotionsController extends Controller
{
     public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
    	$promotions = Promotion::whereDate('end_at', '>=', Carbon::today()->toDateString())
                                    ->orderBy('published_at', 'desc')->get();
        $tags = Tag::all();
    	return view('promotions')->withPromotions($promotions)->withTags($tags);
    }

    public function show($id){
    	$promotion = Promotion::find($id);
    	return view('promotion')->withPromotion($promotion);
    }

    public function store(Request $request) {
        $promotion = new Promotion();
        $promotion->user_id = $request->user()->id;
        $promotion->title = $request->title;
        $promotion->body = $request->body;
        $promotion->start_at = $request->start_at;
        $promotion->end_at = $request->end_at;
        $promotion->published_at = Carbon::now();
        $promotion->place = $request->place;
        $promotion->save();

        $images = $request->images;
        foreach ($images as $img) {
            $extension = $img->getClientOriginalExtension();
            $filename =  str_random(40).time().'.'.$extension;
            $img->move('images/', $filename);
            
            $image = new Image();
            $image->path = $filename;
            $image->promotion_id = $promotion->id;
            $image->save();           
        }

        $tagsID = $request->tags;
        $promotion->tags()->sync($tagsID);

        return redirect()->back();
    }

    public function edit($id) {

    }

    public function update($id, Request $request) {

    }

    public function destroy($id) {
    	Promotion::delete($id);
    	return redirect()->back();
    }
}
