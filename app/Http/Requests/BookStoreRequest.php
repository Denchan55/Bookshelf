<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'isbn' => ['required', 'string', 'max:20'],
            'published_at' => ['required', 'date'],
            'description' => ['required', 'string'],
            'image_url' => ['nullable', 'url'],
            'genres' => ['required', 'array'],
            'genres.*' => ['integer'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'タイトルは必須です',
            'author.required' => '著者名は必須です',
            'isbn.required' => 'ISBNは必須です',
            'published_at.required' => '出版日は必須です',
            'description.required' => '説明は必須です',
            'image_url.url' => '画像URLは正しい形式で入力してください',
            'genres.required' => 'ジャンルを選択してください',
        ];
    }
}
