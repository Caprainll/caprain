<h1>Public Repositories of Octocat</h1>
<table>
    <thead>
        <tr>
            <th>Repository Name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($repos as $repo)
        <tr>
            <td>{{ $repo['name'] }}</td>
            <td>{{ $repo['description'] }}</td>
        </tr>

        @endforeach
    </tbody>
     <a href="{{ url('/fetch-astronomy-picture') }}">
        <button>Fetch Astronomy Picture</button>
    </a>
</table>
