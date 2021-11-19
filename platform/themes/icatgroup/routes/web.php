<?php

// Custom routes
// You can delete this route group if you don't need to add your custom routes.
Route::group(['namespace' => 'Theme\Icatgroup\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/go-markets', 'IcatgroupController@goMarkets')
            ->name('public.markets');
        // Add your custom route here
        // Ex: Route::get('hello', 'IcatgroupController@getHello');
        Route::get('/tuyen-dung', 'IcatgroupController@getRecruitment')
            ->name('public.recruitment');


    });
});

Theme::routes();

Route::group(['namespace' => 'Theme\Icatgroup\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/', 'IcatgroupController@getIndex')
            ->name('public.index');

        Route::get('sitemap.xml', 'IcatgroupController@getSiteMap')
            ->name('public.sitemap');

        Route::get('{slug?}' . config('core.base.general.public_single_ending_url'), 'IcatgroupController@getView')
            ->name('public.single');

    });
});
