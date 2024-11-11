<?php
use App\Http\Controllers\MultiApiController;


Route::get('/fetch-github-repos', [MultiApiController::class, 'fetchGithubRepos']);
Route::get('/fetch-astronomy-picture', [MultiApiController::class, 'fetchAstronomyPicture']);
Route::get('/fetch-data', function () {
    return view('fetch_data');
});