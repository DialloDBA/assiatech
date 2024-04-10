@extends("includes.assia.app")

@section("content")
<div class="r-bg-a pt85 pb120">
    <div class="container w-992">
        <div class="row pt80">
            <div class="col-lg-12">
                <div class="page-headings text-center">
                    <ul class="breadcrus mb20">
                        <li class="bread-non"><a href="{{route('posts')}}">Tous les articles du Blog</a></li>
                        <li>&nbsp;/&nbsp;</li>
                        <li class="bread-active"><a href="#">{{ $post->category->libelle_cat }}</a></li>
                    </ul>
                    <h1>{{ $post->titre }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="r-bg-x pb120">
    <div class="container w-992">
        <div class="blog-details">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sol-img mt60">
                        <img src="{{asset('storage')."/".$post->image_max}}" alt="{{ $post->titre }}" title="{{ $post->titre }}"  class="img-fluid"> 
                    </div>
                    <div class="ree-blog-details">
                        <div class="info-bar">
                            <div class="info-b-left">
                                <a href="#">#Marketing</a> <a href="#">#Seo</a> 
                            </div>
                            <div class="info-b-right">Par <a href="route('about')">{{ str()->ucfirst(str()->lower(config('app.name')))}}</a> • <span>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</span> </div>
                        </div>
                        {!! $post->contenu !!}
                        {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged.</p>
                        <h4>Website – The quickest way to take your business online</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged.</p>
                        <ul class="ul-list mb30">
                            <li>A Logical Roadmap</li>
                            <li>Crucial Business Information</li>
                            <li>Social Media Integration</li>
                            <li>A Mobile-Ready Version</li>
                            <li>Heading and tagline or USP</li>
                            <li>Testimonials and social proof</li>
                            <li>Optimise website speed and performance</li>
                            <li>Contact Information and Clear Navigation</li>
                            <li>Ability to easily update title tag and meta description</li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="sol-img mt45 mb10"> <img src="images/blogs/blog-details-2.jpg" alt="blog"
                                class="img-fluid"> </div>
                        <p class="small text-center pb25"> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.</p>
                        <h4>Preparing for the perfect brand strategy.</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged.</p>
                        <h6>1. The most downloaded graphic resource</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <h6>2. The most downloaded graphic resource</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <h6>3. The most downloaded graphic resource</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged.</p> --}}
                    </div>
                    <div class="center-btn"> 
                        <a href="{{route('posts')}}" class="ree-btn  ree-btn-grdt2 mr20">Retour aux Actualités
                            <i class="fas fa-arrow-left fa-btn"></i>
                        </a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script>
    $(document).ready(function(){
        $contenu = document.querySelectorAll(".ree-blog-details > ul");
        $contenu.forEach((element) => {
            element.removeAttribute("style");
            element.classList.add("ul-list");
            element.classList.add("mb30");
        });
    });
</script>
@stop