<div class="blog-card slidein">
    <img src="{{Storage::url($image)}}" alt="">
    <div class="blog-card-text">
        <h4>{{$title}}</h4>
        <p class="b2">{{$attributes['short_desc']}}</p>
        <a href="{{url('blogpage',$id)}}"><span class="color-textlink">Read more</span></a>
    </div>
</div>