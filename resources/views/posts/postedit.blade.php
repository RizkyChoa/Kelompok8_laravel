@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">update postingan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">update postingan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.post.update',['id' => $data->id]) }}" method="POST">
                @csrf <!-- kepentingan security -->
                @method('PUT')
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form ubah postingan</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Judul</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Enter title" value="{{ $data->title }}">
                                        @error('title')
                                        <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug"
                                            placeholder="Enter slug" value="{{ $data->slug }}">
                                        @error('slug')
                                        <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="author">author</label>
                                        <select class="custom-select form-control-border border-width-2" name="user_id"
                                            id="user_id">
                                            @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('author')
                                        <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="categories">Categories</label>
                                        <select class="custom-select form-control-border border-width-2"
                                            name="category_id" id="category_id">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="text">body</label>
                                        <textarea class="form-control" rows="5" id="body" name="body"
                                            placeholder="Tambahkan isi nya di sini ya mamen...">{{ $data->body }}</textarea>

                                        @error('body')
                                        <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->



                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
        </div><!-- /.container-fluid -->
        </form>
    </section>


</div>
@endsection