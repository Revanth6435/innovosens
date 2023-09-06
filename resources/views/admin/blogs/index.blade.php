@include('admin.layouts.head')

<body>

  <!-- ======= Header ======= -->
  @include('admin.layouts.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.layouts.sidebar')
  <!-- End Sidebar-->

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Blogs</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Blogs</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Blogs</h5>
            <!-- Table with stripped rows -->
            <a href="{{route('blogs.create')}}" class="btn btn-sm btn-primary">Create Blog</a>
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Author</th>
                  <th scope="col">Banner</th>
                  <th scope="col">Title</th>
                  <th scope="col">Image</th>
                  <th scope="col">Status</th>
                  <th scope="col">Published At</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($blogs as $key => $blog)
                  <tr>
                    <th scope="row">{{1+$key}}</th>
                    <td>{{$blog->user->name}}</td>
                    <td><img src="{{Storage::url($blog->banner)}}" width="50" alt="" srcset=""></td>
                    <td>{{$blog->title}}</td>
                    <td><img src="{{Storage::url($blog->image)}}" width="50" alt="" srcset=""></td>
                    <td>{{$blog->status}}</td>
                    <td>{{$blog->published_at}}</td>
                    <td>
                      <a href="{{route('blogs.edit',$blog->id)}}" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                      <form action="{{route('blogs.show',$blog->id)}}" method="post">
                        @csrf
                        @method('GET')
                        <button class="btn btn-sm btn-primary" type="submit" data-toggle="tooltip" data-placement="bottom" title="View Blog"><i
                            class="bi bi-eye-fill"></i></button>
                      </form>
                      <form action="{{route('blogs.destroy',$blog->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure!')" type="submit" data-toggle="tooltip"
                          data-placement="bottom" title="Delete Blog"><i class="bi bi-trash-fill"></i></button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

  <!-- ======= Footer ======= -->
  @include('admin.layouts.footer')

</body>

</html>