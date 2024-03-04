<?php

use App\Livewire\BlogDetail;
use App\Livewire\ShowBlog;
use App\Livewire\ShowContactPage;
use App\Livewire\ShowFaqPage;
use App\Livewire\ShowHome;
use App\Livewire\ShowPage;
use App\Livewire\ShowServices;
use App\Livewire\ShowteamPage;
use App\Livewire\ViewServices;
use Illuminate\Support\Facades\Route;



Route::get('/',ShowHome::class)->name('home');

Route::get('/services',ShowServices::class)->name('services');

Route::get('/service/{id}',ViewServices::class)->name('service');

Route::get('/team',ShowteamPage::class)->name('teamPage');

Route::get('/blog',ShowBlog::class)->name('blog');

Route::get('/blog/{id}',BlogDetail::class)->name('blogDetail');

Route::get('/faqs',ShowFaqPage::class)->name('faqs');

Route::get('/page/{id}',ShowPage::class)->name('page');

Route::get('/contact',ShowContactPage::class)->name('contact');


