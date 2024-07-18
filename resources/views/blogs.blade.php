@extends('/layouts/master')

@section('contents')
<div class="grid1440">
    <div class="ext-margin">
        <h1 class="blog-heading">Blogs</h1>
        <a class="btn btn-create-blog" href="/blogs/create">Create a new blog post</a>
    </div>
    <div class="ext-margin">


        @foreach($blogs as $blog)

        <a href="/blogs/{{$blog->id}}/show" class="blogs-link">
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
        </a>
        <!-- <h1>Blog Heading : {{$blog->name}}</h1> <br>
            <p>Blog Description : {{$blog->description}}</p> <br><br><br> -->
        @endforeach



    </div>
</div>
@endsection