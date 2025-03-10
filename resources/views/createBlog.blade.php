@extends('/layouts/master')

@section('contents')

<div class="grid1440">
    <div class="ext-margin">
        <h1>Blogs Create</h1>

        <form method="POST" action="/blogs/store" class="create-blog-form">
            @csrf
            <div class="form-field-container blog-name-container">
                <label for="blog-name" class="input-field-label">Blog Name</label> <br>
                <input type="text" name="name" id="blog-name" placeholder="Enter the Blog name">
            </div>

            <div class="form-field-container blog-desc-container">
                <label for="blog-desc" class="input-field-label">Blog Description</label> <br>
                <textarea type="text" name="description" id="blog-desc" placeholder="Enter the Blog description"></textarea>
            </div>

            <div class="form-field-container blog-desc-container">
                <label for="blog-image" class="input-field-label">Choose Blog Image</label> <br>
                <input type="file" name="" id="blog-image">
            </div>

            <div class="form-field-container">
                <input type="submit" value="Submit" class="btn-submit" name="submit">
            </div>
        </form>
    </div>
</div>

@endsection