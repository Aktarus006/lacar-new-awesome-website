<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Category;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Category
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('home');
    $trail->push($category->name, route('category', $category->slug), ['type' => 'category']);
});

Breadcrumbs::for('kit', function (BreadcrumbTrail $trail, $kit) {
    $trail->parent('home');
    foreach ($kit->categories as $cat) {
        $trail->push($cat->name, route('category', $cat->slug), ['type' => 'category']);
    }
    $trail->push($kit->name, route('kit', $kit->slug), ['type' => 'kit']);
});

Breadcrumbs::for('errors.404', function ($trail) {
    $trail->parent('home');
    $trail->push('Page Not Found');
});
