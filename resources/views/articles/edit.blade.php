@extends ('layout')

@section ('head')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">

@endsection

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>Update article</h2>
                </div>

                <form method="POST" action="/articles/{{ $article->id }}">
                    @csrf
                    @method('PUT')

                    <div class="field">

                        <label for="title">Title</label>

                        <div class="control">

                            <input class="input" type="text" name="title" id="title" value="{{ $article->title }}">

                        </div>

                    </div>

                    <div class="field">

                        <label for="title">Excerpt</label>

                        <div class="control">

                            <textarea class="textarea" name="excerpt" id="excerpt">{{ $article->excerpt }}</textarea>

                        </div>

                    </div>

                    <div class="field">

                        <label for="title">Body</label>

                        <div class="control">

                            <textarea class="textarea" name="body" id="body">{{ $article->body }}</textarea>

                        </div>

                    </div>

                    <div class="field is-grouped">

                        <div class="control">

                            <button class="button is-link">Submit</button>

                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection
