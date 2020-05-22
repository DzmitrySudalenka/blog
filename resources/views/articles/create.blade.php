@extends ('layout')

@section ('head')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">

@endsection

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>New article</h2>
                </div>

                <form method="POST" action="/articles">
                    @csrf

                    <div class="field">

                        <label for="title">Title</label>

                        <div class="control">

                            <input class="input @error('title') is-danger @enderror"
                                   type="text"
                                   name="title"
                                   id="title"
                                   value="{{ old('title') }}">

                            @error('title')

                                <p class="help is-danger">{{ $errors->first('title') }}</p>

                            @enderror

                        </div>

                    </div>

                    <div class="field">

                        <label for="title">Excerpt</label>

                        <div class="control">

                            <textarea class="textarea  @error('excerpt') is-danger @enderror"
                                      name="excerpt"
                                      id="excerpt"
                            >{{ old('excerpt') }}</textarea>

                            @error('excerpt')

                                <p class="help is-danger">{{ $errors->first('excerpt') }}</p>

                            @enderror

                        </div>

                    </div>

                    <div class="field">

                        <label for="title">Body</label>

                        <div class="control">

                            <textarea class="textarea @error('body') is-danger @enderror"
                                      name="body"
                                      id="body"
                            >{{ old('body') }}</textarea>

                            @error('body')

                                <p class="help is-danger">{{ $errors->first('body') }}</p>

                            @enderror

                        </div>

                    </div>

                    <div class="field">

                        <label for="title">Tags</label>

                        <div class="control select is-multiple">

                            <select
                                name="tags[]"
                                multiple
                            >
                                @foreach($tags as $tag)

                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>

                                @endforeach

                            </select>

                            @error('tags')

                                <p class="help is-danger">{{ $message }}</p>

                            @enderror

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
