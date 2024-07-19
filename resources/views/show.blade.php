@extends('/layouts/master')


@section('contents')

<div class="grid1440">
    <div class="ext-margin">
        <div class="blogs-card">
            <div class="blog-card-image">
                <img src="/assets/images/travel-blog.jpg" alt="Travel Blog">
            </div>
            <div class="blog-content">
                <h1 class="blog-heading">
                    {{$blog->name}}
                </h1>
                <article class="blog-description">
                    {{$blog->description}}
                </article>
            </div>
        </div>

        <div class="form-button-container">

            <form action="/blogs/{{$blog->id}}/edit" method="GET" class="show-blog-form edit-button-form-container">
                <div class="form-field-container">
                    <input type="submit" value="Edit Post" class="btn-submit edit-post" name="edit-post">
                </div>
            </form>

            <form action="/blogs/{{$blog->id}}" method="POST" class="show-blog-form delete-button-form-container">
                @csrf
                @method("DELETE")
                <div class="form-field-container">
                    <input type="submit" value="Delete Post" class="btn-submit delete-post" name="delete-post">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection