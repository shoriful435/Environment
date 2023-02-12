<div class="container jumbotron mt-5 ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6  text-center">
            <h1 class="page-top-title mt-3">- -</h1>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">


        @foreach ($posts as $post=>$data)

        <div class="col-md-4 p-1 ">
            <div class="card">
                <img class="w-100" src="/images/blog.jpg" alt="Card image cap">
                <div class="w-100 p-4">
                    <h5 class="blog-card-title mt-2">{{$data->title}}</h5>
                    <h5 class="blog-card-title mt-2">{{$data->name}}</h5>
                    <h5 class="blog-card-title mt-2">{{$data->id}}</h5>
                    <h6 class="blog-card-subtitle p-0 ">{{$data->discripsion}}</h6>
                    <h6 class="blog-card-date "> <i class="far fa-clock"></i>{{$data->created_at}}</h6>

                    <a href="{{ route('singlePost',$data->id)}}" class="btn btn-outline-primary">Read
                        More</a>
                    <a href="{{ route('edit',$data->id)}}" class="btn btn-outline-primary">Edit</a>
                    <a href="{{ route('Delete',$data->id)}}" class="btn btn-outline-primary">Delete</a>
                </div>
            </div>
        </div>

        @endforeach

    </div>