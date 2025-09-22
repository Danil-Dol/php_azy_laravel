<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = [
            ['id' => 1, 'ChatGPT' => 'ИИ от OpenAi', 'price' => 1500, 'path' => 'Logo-1.jpg'],
            ['id' => 2, 'Copilot' => 'ИИ от Microsoft', 'price' => 750, 'path' => 'Logo-2.jpg'],
            ['id' => 3, 'Grok' => 'ИИ от xAI', 'price' => 500, 'path' => 'Logo-3.jpg'],
            ['id' => 4, 'DeepSeek' => 'ИИ от Hangzhou DeepSeek AI', 'price' => 0, 'path' => 'Logo-4.jpg'],
            ['id' => 5, 'GigaChat' => 'ИИ от Сбера', 'price' => 300, 'path' => 'Logo-5.jpg'],
            ['id' => 6, 'Gemini' => 'ИИ от Hangzhou DeepSeek AI', 'price' => 0, 'path' => 'Logo-6.jpg'],
            ['id' => 7, 'Apple Intelligence ' => 'ИИ от Apple', 'price' => 0, 'path' => 'Logo-7.jpg']
        ];
        return view('home', compact('array'));
    }
}
