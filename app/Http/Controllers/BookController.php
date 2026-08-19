<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    /**
     * 書籍一覧を表示
     */
public function index(): View
{
    $books = Book::with('genres')->paginate(10);
    return view('books.index', compact('books'));
}



    /**
     * 書籍詳細を表示
     */
    public function show($id)
{
    $book = Book::with('genres')->findOrFail($id);
    return view('books.show', compact('book'));
}


    /**
     * 書籍登録フォームを表示
     */
    public function create(): View
{
    $book = new Book(); // 空のモデル
    $genres = Genre::all(); // ジャンル一覧

    return view('books.create', compact('book', 'genres'));
}


    /**
     * 書籍登録処理
     */
    public function store(Request $request)
    {
        // TODO: バリデーションと保存処理を実装
        return redirect()->route('books.index');
    }
}
