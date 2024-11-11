<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;

class MultiApiController extends Controller
{
    public function fetchAstronomyPicture()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.nasa.gov/planetary/apod', [
            'query' => [
                'api_key' => '1VR9pTSfwaLJ8WziXHAroledzfyas5E3K7xNHFPx'
            ]
        ]);
        $pictureData = json_decode($response->getBody(), true);

        return view('astronomy_picture', ['pictureData' => $pictureData]);
    }



    public function fetchGithubRepos()
    {
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://api.github.com/users/octocat/repos');
            $repos = json_decode($response->getBody(), true);
            return view('github_repos', ['repos' => $repos]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }
    





}
