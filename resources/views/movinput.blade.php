<form action="/movies" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="description" placeholder="Description"></textarea>
    <input type="number" name="release_year" placeholder="Release Year" required>
    <input type="text" name="director" placeholder="Director" required>
    <button type="submit">Add Movie</button>
</form>