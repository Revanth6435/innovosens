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
              <h5 class="card-title">View Blog</h5>
              <!-- Table with stripped rows -->
              <a href="{{route('blogs.index')}}" class="btn btn-sm btn-primary">Back</a>
              <div class="row g-3">
                <div class="col-md-12">
                  <label for="banner" class="form-label fw-bold">Banner</label>
                  <br>
                  <img src="{{Storage::url($blog->banner)}}"  width="600" alt="">
                </div>
                <div class="col-md-12">
                  <label for="title" class="form-label fw-bold">Title</label>
                  <p>{{$blog->title}}</p>
                </div>
                <div class="col-md-12">
                  <label for="short_description" class="form-label fw-bold">Short Description</label>
                  <p>{!!$blog->short_description!!}</p>
                </div>
                <div class="col-md-12">
                  <label for="content" class="form-label fw-bold">Content</label>
                  <p>{!!$blog->content!!}</p>
                </div>
                <div class="col-md-12">
                  <label for="image" class="form-label fw-bold">Image</label>
                  <br>
                  <img src="{{Storage::url($blog->image)}}" width="600" alt="">
                </div>
                <div class="col-md-12">
                  <label for="status" class="form-label fw-bold">Status</label>
                  <p>{{$blog->status}}</p>
                </div>
                <div class="col-md-12">
                  <label for="published_at" class="form-label fw-bold">Published At</label>
                  <p>{{$blog->published_at}}</p>
                </div>
                <div class="col-md-12">
                  <label for="meta_title" class="form-label fw-bold">Meta Title</label>
                  <p>{{$blog->meta_title}}</p>
                </div>
                <div class="col-md-12">
                  <label for="meta_keywords" class="form-label fw-bold">Meta Keyword</label>
                  <p>{{$blog->meta_keywords}}</p>
                </div>
                <div class="col-md-12">
                  <label for="meta_description" class="form-label fw-bold">Meta Description</label>
                  <p>{{$blog->meta_description}}</p>
                </div>
                <div class="col-md-12">
                  <label for="created_at" class="form-label fw-bold">Created At</label>
                  <p>{{$blog->created_at}}</p>
                </div>
              </div>
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