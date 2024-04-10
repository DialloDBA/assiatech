@extends("includes.assia.app")

@section("content")
<div class="r-bg-a pt85 pb120">
    <div class="container">
        <div class="row pt80">
            <div class="col-lg-5">
                <div class="page-headings">
                    <span class="sub-heading mb15"><i class="fas fa-book mr5"></i> Blogs & Actualités</span>
                    <h1 class="mb15">Notre <span class="ree-text rt40">Blog</span></h1>
                    <p>Qu'aimeriez-vous apprendre à faire ?</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ree-subs-from">
                    <h4>Abonnez-vous pour recevoir les dernières informations dans votre boîte de réception.</h4>
                    <form class="mt20">
                        <input type="text" name="subs" id="subs-email" placeholder="Votre e-mail s'il vous plaît"
                            class="subs-input">
                        <button class="ree-btn-grdt1 subs-btn"><i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-block sec-pad pt80">
    <div class="container">
        <div class="blog-post">
            <div class="row">
                @foreach ($posts as $a)
                <div class="col-lg-4 col-sm-6">
                    <div class="ree-media-crd">
                        <div class="rpl-img">
                            <a href="{{route('posts.single',$a)}}"><img src="{{asset('storage').'/'.$a->image_min }}" alt="blog" class="fill-fixed" /> </a>
                        </div>
                        <div class="rpl-contt">
                            <div class="blog-quick-inf mb20 mt30">
                                <span><i class="far fa-calendar-alt"></i> {{ (new DateTime($a->created_at))->format("d M Y")}}</span> <span><i class="fas fa-clock"></i> {{rand(1,10)}} minutes de lecture</span>
                            </div>
                            <h4><a href="{{route('posts.single',$a)}}">{{$a->titre}}</a></h4>
                        </div>
                    </div>
                </div>                
                @endforeach

                {{ $posts->links()}}
                {{-- <div class="col-lg-12 col-sm-12 mt100">
                    <ul class="pagination shadows">
                        <li><a href="#" class="prev">Prev</a></li>
                        <li class="pageNumber active"><a href="#">1</a></li>
                        <li class="pageNumber"><a href="#">2</a></li>
                        <li class="pageNumber"><a href="#">3</a></li>
                        <li class="pageNumber"><a href="#">4</a></li>
                        <li><a href="#" class="next">Next</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@stop