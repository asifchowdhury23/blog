@extends('admin.master')
@section('title')
    Blog Table
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <h5 class="mb-0">Manage Category</h5>
                    </div>
                    <hr/>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered" id="example2">
                            <thead>
                            <tr>
                                <th>sl</th>
                                <th>Category Name</th>
                                <th>Author Name</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Blog Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @php $i=1; @endphp
                            @foreach($blogs as $blog)

                                <tbody>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$blog->category_name}}</td>
                                    <td>{{$blog->author_name}}</td>
                                    <td>{{substr($blog->title,0,100)}}</td>
                                    <td>{{substr($blog->slug,0,10)}}</td>
                                    <td>{{substr($blog->description,0,1000)}}</td>
                                    <td>
                                        <img src="{{asset($blog->image)}}" class="img-fluid" height="20px"; width="20" alt="">
                                    </td>
                                    <td>{{$blog->date}}</td>
                                    <td>{{$blog->blog_type}}</td>
                                    <td>{{$blog->status==1 ? 'published':'unpublished'}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">edit</a>
                                        @if($blog->status==1)
                                        <a href="{{route('status',['id'=>$blog->id])}}" class="btn btn-warning btn-sm">unpublished</a>
                                        @else
                                        <a href="{{route('status',['id'=>$blog->id])}}" class="btn btn-success btn-sm">published</a>
                                        @endif
                                        <form action="{{route('blog.delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete or Not')" value="submit">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
