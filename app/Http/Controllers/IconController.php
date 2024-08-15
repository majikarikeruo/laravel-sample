<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Icon;
use Illuminate\Support\Facades\Auth;
use Exception;

class IconController extends Controller
{
    //


    public function index(Request $request)
    {



        $query = Icon::query();


        /**
         * $request->inputは指定したnameのユーザー入力値を取得する
         * filledは、そのパラメーターが存在してかつ空っぽではないというときに使う
         * hasはそのパラメータキーがRequestデータに存在するのをチェックするだけ
         *
         */
        if ($request->filled('search')) {
            $searchTerm = $request->input('search');
            $query->where('title', 'LIKE', "%{$searchTerm}%");
        }

        /**
         * whereなどを書いたのはSQLを入力しただけの状態
         * getやpaginateによって初めてSQLが実行される
         */
        $icons = $query->where('user_id', Auth::id())->paginate(10);


        return view('icon.index', compact('icons'));
    }

    public function create()
    {
        $is_edit = false;

        return view('icon.detail', compact('is_edit'));
    }

    public function store(Request $request)
    {

        /**
         * バリデーション実施
         * 仮に引っかかった場合、以降の処理は実行されずに
         * 自動的に前のページにリダイレクトされる
         * その際、古い入力データについてもセッションに保存される
         */
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        /**
         * save()はこける可能性があるのでtry catchを入れている
         */
        try {
            $new_icon  = new Icon();
            $new_icon->user_id = Auth::id();
            $new_icon->title = $request->title;
            $new_icon->description = $request->description;

            /**
             *  画像が存在する場合の処理
             *  storeメソッドは実際にファイルを保存する処理
             *  第一引数は保存先のフォルダ名を指定
             *  第二引数は使用するストレージディスク
             *  publicは公開アクセス可能な場所に保存されます。
             *  localはURL経由でのアクセスはできないけど内部のプログラムからのアクセスは可能
             */
            if ($request->hasFile('image')) {
                $new_icon->image_path = $request->file('image')->store('icons', 'public');
            }

            $new_icon->save();

            /** withはセッションへのメッセージ */
            return redirect()->route('dashboard')->with('success', 'アイコンが正常に作成されました。');
        } catch (Exception $e) {
            /**
             * redirect backは前の画面へ戻る
             * この際oldには元々の入力値が入る
             */
            return redirect()->back()->with('error', '登録処理時にエラーが発生しました。')->withInput();
        }
    }


    public function edit($id)
    {
        $icon = Icon::  ($id);

        if ($icon->user_id !== Auth::id()) {
            return redirect()->route('dashboard')->with('error', 'アクセス権限がありません。');
        }

        $is_edit = true;

        return view('icon.detail', compact('icon', 'is_edit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {


            /**
             * findOrDailはは該当のものがない場合は404が返る
             *
             *
             */
            $icon = Icon::findOrFail($id);

            if ($icon->user_id !== Auth::id()) {
                return redirect()->route('dashboard')->with('error', 'アクセス権限がありません。');
            }

            $icon->image_path = $request->image_path;
            $icon->title = $request->title;
            $icon->description = $request->description;

            /**
             * hasFileはファイルの有無を判定するときに使用する
             *
             */
            if ($request->hasFile('image')) {
                $icon->image_path = $request->file('image')->store('icons', 'public');
            }

            $icon->save();


            return redirect()->route('dashboard')->with('success', 'アイコンが正常に更新されました。');
        } catch (Exception $e) {
            return redirect()->back()->with('error', '更新処理時にエラーが発生しました。')->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $icon = Icon::findOrFail($id);

            if ($icon->user_id !== Auth::id()) {
                return redirect()->route('dashboard')->with('error', 'アクセス権限がありません。');
            }

            $icon->delete();

            return redirect()->route('dashboard')->with('success', 'アイコンが正常に削除されました。');
        } catch (Exception $e) {
            return redirect()->route('dashboard')->with('error', '削除処理時にエラーが発生しました。');
        }
    }
}
