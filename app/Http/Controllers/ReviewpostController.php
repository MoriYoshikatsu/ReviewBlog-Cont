<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviewpost;

class ReviewpostController extends Controller
{

    //第1問
    //index1関数の中身を編集し、resources/Reviewposts/index1.blade.phpを画面に表示できるようにしてください。
    //今回記述するのはindex1関数だけなので、他の場所は編集しないでください。
    //なお、reviewpostsテーブルにはテスト用データが5件入っています。
    //見るべきファイルはReviwpostController.phpです。
    public function index1(Reviewpost $reviewpost)
    {
        return view('Reviewposts.index1')->with('posts', $reviewpost->getPaginateByLimit());
    }
    
    //第2問
    //詳細画面を開くと、タイトルや本文が表示されないまま表示されてしまいます。
    //show関数を修正して、正しく詳細画面が表示させてください。
    //今回記述するのはshow関数だけなので、他の場所は編集しないでください。
    //見るべきファイルはReviewpostController.php, web.phpの２つです。
    public function show(Reviewpost $reviewpost)
    {
        return view('Reviewposts/show')->with(['post' => $reviewpost]);
    }

    //第3問
    //以下のindex2関数をそのまま実行するとエラーが出てしまいます。
    //なぜなら、Reviewpost.phpにpaginateByLimitが記述されていないからです。
    //なので paginateByLimitを使わずに、以下の要件を満たす形で動作させてください。
    //要件：最新の投稿が1番上にくる形にし、一度に表示される件数が3件。なおかつペジネーションを実装できる形式にしてください。
    //今回記述するのはindex2関数だけなので、他の場所は編集しないでください。
    //見るべきファイルはReviepostController.phpのみです。
    public function index2(Reviewpost $reviewpost)
    {
        return view('Reviewposts/index2')->with(['items' => $reviewpost->getPaginateByLimit(3)]);
    }
    
    public function create()
    {
        return view('Reviewposts/create');
    }
    
    //第4問
    //以下のstore関数をそのまま実行するとうまく保存ができず、エラーが出てしまいます。
    //なぜエラーが出てしまうのかを考え、コードを修正してください。
    //今回記述するのはstore関数だけなので、他の場所は編集しないでください。
    //見るべきファイルはReviewpostController.php, create.blade.phpの２つです。
    public function store(Request $request, Reviewpost $reviewpost)
    {
        $input = $request['item'];
        $reviewpost->fill($input)->save();
        return redirect('/reviewpost/' . $reviewpost->id);
    }
}