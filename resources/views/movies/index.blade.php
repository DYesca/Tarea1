<x-layout>
    <h1>Peliculas</h1>
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Studio</th>
                <th>Año de publicación</th>
                <th>Géneros</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->studio->name }}</td>
                    <td>{{ $movie->publication_year }}</td>
                    <td>
                        <ul>
                            @foreach ($movie->categories as $category)
                                <li>{{ $category->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
