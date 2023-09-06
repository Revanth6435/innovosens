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
      <h1>Edit Blogs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item active">Edit Blog</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Edit Blogs</h5>
              <!-- Table with stripped rows -->
              <div class="float-right">
                <a href="{{route('blogs.index')}}" class="btn btn-sm btn-primary">Back</a>
              </div>
            </div>
            <div class="card-body">
              <!-- Multi Columns Form -->
              <form class="row g-3" action="{{route('blogs.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="col-md-6">
                  <label for="banner" class="form-label">Banner</label>
                  <input type="file" name="banner" class="form-control" id="banner">
                  <a href="{{Storage::url($blog->banner)}}" target="_blank">View</a>
                  <span class="text-danger">
                    @error('banner')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" value="{{$blog->title}}" name="title" class="form-control" id="title">
                  <span class="text-danger">
                    @error('title')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-12">
                  <label for="short_description" class="form-label">Short Description</label>
                  <textarea class="form-control" name="short_description" id="short_description">{{$blog->short_description}}</textarea>
                  <span class="text-danger">
                    @error('short_description')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-12">
                  <label for="content" class="form-label">Content</label>
                  <textarea class="form-control" name="content" id="content">{{$blog->content}}</textarea>
                  <span class="text-danger">
                    @error('content')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-6">
                  <label for="image" class="form-label">Image</label>
                  <input type="file" name="image" class="form-control" id="image">
                  <a href="{{Storage::url($blog->image)}}" target="_blank">View</a>
                  <span class="text-danger">
                    @error('image')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-6">
                  <label for="status" class="form-label">Status</label>
                  <select id="status" name="status" class="form-select">
                    <option value="">Choose...</option>
                    <option value="pending" @selected($blog->status == 'pending')>Pending</option>
                    <option value="draft" @selected($blog->status == 'draft')>Draft</option>
                    <option value="published" @selected($blog->status == 'published')>Published</option>
                  </select>
                  <span class="text-danger">
                    @error('status')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-6">
                  <label for="published_at" class="form-label">Published At</label>
                  <input type="date" value="{{$blog->published_at}}" name="published_at" class="form-control" id="published_at">
                  <span class="text-danger">
                    @error('published_at')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-6">
                  <label for="meta_title" class="form-label">Meta Title</label>
                  <textarea class="form-control" name="meta_title" id="meta_title">{{$blog->meta_title}}</textarea>
                  <span class="text-danger">
                    @error('meta_title')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-6">
                  <label for="meta_keywords" class="form-label">Meta Keywords</label>
                  <textarea class="form-control" name="meta_keywords" id="meta_keywords">{{$blog->meta_keywords}}</textarea>
                  <span class="text-danger">
                    @error('meta_keywords')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-6">
                  <label for="meta_description" class="form-label">Meta Description</label>
                  <textarea class="form-control" name="meta_description" id="meta_description">{{$blog->meta_description}}</textarea>
                  <span class="text-danger">
                    @error('meta_description')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
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