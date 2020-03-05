<!-- INSTAGRAM Section -->


<section class="instagram">
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-12 pt-5">
                <h2 class="text-center pt-5">Instagram</h2>

                <h3 class="text-center pt-3 pb-5">
                    Siga o nosso perfil <a href="https://www.instagram.com/parlamentojuvenilrj/" target="_blank"> @parlamentojuvenilrj </a>
                </h3>


                <div class="card-columns">
                    @foreach($instagramPictures as $image)
                        <div class="card">
                            <img src=" {{ $image }}" alt="" class="img-fluid" />
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>



{{--



<div class="container-fluid instagram-images">
    <div class="row">

        @foreach($instagramPictures as $image)
            <div class="col-md-3">
                <img src=" {{ $image }}" alt="" class="img-fluid" />
            </div>
        @endforeach

    </div>
</div>


--}}
