@extends('front.template')
@section('pageTitle')
    Document
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection




@section('main')
<!-- 倫波 -->
<section id="carousel">

    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/1920x1080.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/1920x1080.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/1920x1080.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</section>
<!-- 中間 -->
<section id="text">
    <div class="container mb-5 col-12 col-lg-12 col-md-6 col-sm-6 ">

        <div class="head-text  text-center mt-5 pt-5 pb-3 ">Raw Denim Heirloom Man Braid</div>
        <div class="mean-text mx-auto  col-7 ">
            <p class="text-center mb-4">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                taxidermy.Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>
        </div>

        <div class="unber-line-Box d-flex justify-content-center">
            <div class="unber-line"></div>
        </div>
    </div>

    <div class="container  d-md-flex  mx-auto my-5 ">
        <div class=" col-12 col-md-4 py-3    ">
            <div class="card border-0  text-center my-auto">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class=" svg-icon01 mx-auto  " viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
                <div class="card-body p-0">
                    <p class="card-main-text font-weight-normal text-center">Shooting Stars</p>
                    <p class="card-text  text-center">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                        taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                    <div class="d-flex align-items-center justify-content-center ">

                        <div class="next-more one-bule  ">Learn More </div>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class=" one-bule arrow ml-1" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-12 col-md-4 py-3  ">
            <div class="card border-0 text-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class=" svg-icon01 mx-auto " viewBox="0 0 24 24">
                    <circle cx="6" cy="6" r="3"></circle>
                    <circle cx="6" cy="18" r="3"></circle>
                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
                <div class="card-body p-0">
                    <p class="card-main-text font-weight-normal text-center">The Catalyzer</p>
                    <p class="card-text pb-3 text-center">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                        taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                </div>
                <div class="d-flex align-items-center justify-content-center ">
                    <div class="next-more one-bule  ">Learn More </div>
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class=" one-bule arrow ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class=" col-12 col-md-4 py-3  ">
            <div class="card border-0 text-center ">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class=" svg-icon01 mx-auto " viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <div class="card-body p-0">
                    <p class="card-main-text font-weight-normal text-center">Neptune</p>
                    <p class="card-text pb-3 text-center">Blue bottle crucifix vinyl post-ironic four dollar toast
                        vegan
                        taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                </div>
                <div class="d-flex align-items-center justify-content-center ">
                    <div class="next-more one-bule  ">Learn More </div>
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class=" one-bule arrow ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </div>

    </div>
    <div class="container  d-flex justify-content-center mx-auto my-5 pt-3 pb-5">
        <button class="btn btn-primary btn-size " type="submit">Button</button>
    </div>
</section>
<!-- 切塊圖 -->
<section id="diagram">

    <div class="container  mx-auto py-5 ">
        <div class="row my-5 pt-5">

            <div class="tito d-lg-flex ml-2 ">
                <div class=" main-text  col-12 col-lg-5 pr-0 ">Master Cleanse Reliac Heirloom</div>
                <div class="  thing-text col-12  col-lg-7 pb-4 pl-0">Whatever cardigan tote bag tumblr hexagon brooklyn
                    asymmetrical
                    gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep
                    jianbing selfies heirloom.</div>
            </div>
        </div>
        <div class=" all-pic d-flex my-5">
            <div class="pic-right col-6 p-0">
                <div class="pic-Rtop d-flex ">
                    <div class="500 col-6 p-2"><img src="./img/500x300.png" alt=""></div>
                    <div class="501 col-6  p-2"><img class="small-pic" src="./img/501x301.png" alt=""></div>
                </div>
                <div class="picRdon  col-12 p-2"><img src="./img/600x360.png" alt=""></div>
            </div>
            <div class="pic-left col-6 p-0">
                <div class="pic-Ltop  col-12 p-2 "><img src="./img/601x361.png" alt=""></div>
                <div class="pic-Ldon d-flex ">
                    <div class="502 col-6 p-2"><img class="small-pic" src="./img/502x302.png" alt=""></div>
                    <div class="503 col-6 p-2  "><img class="small-pic" src="./img/503x303.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>


</section>
<!-- 價目表 -->
<section id="Price">
    <div class="container">
        <div class="pric-text text-center mt-5 pb-5 pt-5">
            <div class="pric pt-5 pb-2  ">Pricing</div>
            <div class="pric-thing mx-auto text-center ">Banh mi cornhole echo park skateboard authentic
                crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee</div>
        </div>
    </div>
    </div>
    <div class="container py-5 mb-5 ">
        <div class="row rounded-top">
            <table class="table  mx-auto col-9  ">
                <thead class="chat ">
                    <tr class="">
                        <td class="col-3 border-top-0 rounded-left" scope="col">Plan</td>
                        <td class="col-3 border-top-0" scope="col">Speed</td>
                        <td class="col-3 border-top-0" scope="col">Storage</td>
                        <td class="col-2 border-top-0" scope="col">Price</td>
                        <td class="col-2 border-top-0 rounded-right"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Start</td>
                        <td>5 Mb/s</td>
                        <td>15 GB</td>
                        <td>Free</td>
                        <td class="text-right"><input type="radio" name="price"></td>
                    </tr>
                    <tr>
                        <td>Pro</td>
                        <td>25 Mb/s</td>
                        <td>25 GB</td>
                        <td>$24</td>
                        <td class="text-right"><input type="radio" name="price"></td>
                    </tr>
                    <tr>
                        <td>Business</td>
                        <td>36 Mb/s</td>
                        <td>40 GB</td>
                        <td>$50</td>
                        <td class="text-right"><input type="radio" name="price"></td>
                    </tr>
                    <tr>
                        <td class="bodrer-b-2">Exclusive</td>
                        <td>48 Mb/s</td>
                        <td>120 G</td>
                        <td>$72</td>
                        <td class="text-right"><input type="radio" name="price"></td>
                    </tr>
                    <tr>
                        <td class="d-flex align-items-center">
                            <div class="next-more">Learn More </div>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="arrow ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-right pr-0">
                            <div class="button  ">
                                <button class="btn btn-primary button " type="submit">Button</button>
                            </div>
                        </td>
                    </tr>


                </tbody>

            </table>








        </div>

    </div>

</section>
<!-- 圖片展示 -->
<section id="pic-show">
    <div class="container py-5   d-flex">
        <div class="row  pt-5">
            <div class="   main-text col-lg-6 ">Pitchfork Kickstarter Taxidermy
                <div class="unber-line-Box d-flex ">
                    <div class="unber-line-two"></div>
                </div>
            </div>

            <div class="thing-text mt-2 mt-lg-0 col-lg-6">Whatever cardigan tote bag tumblr hexagon brooklyn
                asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them
                man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</div>
        </div>

    </div>

    <!-- 圖片 -->
    <div class="container d-flex p-0 ">
        <div class="row  col-xl-3 col-md-6 col-10 mb-3 mx-auto ">
            <div class="bgc ">
                <div class="card  border-0 bg-gray-100   ">
                    <img src="./img/720x400.png" class="card-img-top" alt="...">
                    <div class="card-body pl-0 mt-1 ">
                        <p style="font-size:12px; color: #6366f1;" class="m-0">SUBTITLE</p>
                        <div style="font-size: 18px;" class="mb-3 ">Chichen Itza</div>
                        <p class="card-text " style="font-size: 16px;">Fingerstache flexitarian street art 8-bit
                            waistcoat. Distillery hexagon
                            disrupt edison bulbche.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  col-xl-3 col-md-6 col-10  mb-3 mx-auto ">
            <div class="bgc ">

                <div class="card border-0 bg-gray-100   ">
                    <img src="./img/721x401.png" class="card-img-top" alt="...">
                    <div class="card-body pl-0 mt-1 ">
                        <p style="font-size:12px; color: #6366f1;" class="m-0">SUBTITLE</p>
                        <div style="font-size: 18px;" class="mb-3 ">Colosseum Roma</div>
                        <p class="card-text " style="font-size: 16px;">Fingerstache flexitarian street art 8-bit
                            waistcoat. Distillery hexagon
                            disrupt edison bulbche.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  col-xl-3 col-md-6 col-10   mb-3 mx-auto ">
            <div class="bgc ">

                <div class="card  border-0 bg-gray-100   ">

                    <img src="./img/722x402.png" class="card-img-top" alt="...">
                    <div class="card-body pl-0 mt-1 ">
                        <p style="font-size:12px; color: #6366f1;" class="m-0">SUBTITLE</p>
                        <div style="font-size: 18px;" class="mb-3 ">Great Pyramid of Giza</div>
                        <p class="card-text " style="font-size: 16px;">Fingerstache flexitarian street art 8-bit
                            waistcoat. Distillery hexagon
                            disrupt edison bulbche.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  col-xl-3 col-md-6 col-10  mb-3 mx-auto  ">
            <div class="bgc ">

                <div class="card  border-0 bg-gray-100   ">
                    <img src="./img/723x403.png" class="card-img-top" alt="...">
                    <div class="card-body pl-0 mt-1 ">
                        <p style="font-size:12px; color: #6366f1;" class="m-0">SUBTITLE</p>
                        <div style="font-size: 18px;" class="mb-3 ">San Francisco</div>
                        <p class="card-text " style="font-size: 16px;">Fingerstache flexitarian street art 8-bit
                            waistcoat. Distillery hexagon
                            disrupt edison bulbche.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 文字 -->
    <div class="container mt-5 ">
        <div class="row   col-12 d-sm-flex text justify-content-center">

            <div class="pic-svgicon d-sm-flex  justify-content-center text-center text-sm-left">
                <div class="min-svg col-12 col-sm-2 border-bottom-0 border-sm-bottom">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="svg-icon  my-5 " viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="pic-text col-sm-9  mt-5  text-center text-sm-left  border-bottom">
                    <div class="tito-text">Shooting Stars</div>
                    <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                        juice poutine.</p>
                    <div class="next-more one-bule pb-3">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="arrow ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  col-12 d-sm-flex text justify-content-center">
            <div class="pic-svgicon d-sm-flex justify-content-center  text-center ">


                <div class="min-svg col-12 col-sm-2 mt-5  mt-sm-0 order-sm-1  border-bottom-0 border-sm-bottom ">

                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="svg-icon my-sm-5   " viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                </div>
                <div class="pic-text col-sm-9  mt-5 text-center text-sm-left border-bottom">
                    <div class="tito-text">The Catalyzer</div>
                    <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                        juice poutine.</p>
                    <div class="next-more one-bule pb-3">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="arrow ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>



            </div>
        </div>
        <div class="row   pb-2 col-12 d-sm-flex text justify-content-center">
            <div class="pic-svgicon d-sm-flex  justify-content-center  text-center text-sm-left">
                <div class="min-svg col-12 col-sm-2  ">

                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="svg-icon  my-5" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="pic-text col-sm-9   mt-5  text-center text-sm-left">
                    <div class="tito-text">The 400 Blows</div>
                    <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                        juice poutine.</p>
                    <div class="next-more one-bule ">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="arrow ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </div>

        </div>
        <div class="container d-flex justify-content-center my-5  pt-4 pb-5">
            <button class="btn btn-primary btn-size " type="submit">Button</button>
        </div>
    </div>

</section>
<!-- 最香商品 -->
<section>
    <div class="container">
        <div class="row py-5 my-5 ">
            <div class="commodity mx-auto d-lg-flex mt-5  ">
                <div class="big-pic col-12 col-lg-6 text-lg-right text-center  ">
                    <img src="./img/400x400.png" alt="...">
                </div>

                <div class="describe  col-10 col-lg-6 mx-auto mt-3 mt-sm-0">

                    <div class="small">BRAND NAME</div>
                    <div class="shop-name">The Catcher in the Rye</div>
                    <div class="evaluate d-flex">
                        <div class="star ">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="svg-size one-bule text-indigo-500"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="svg-size one-bule text-indigo-500"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="svg-size one-bule text-indigo-500"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="svg-size one-bule text-indigo-500"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="svg-size one-bule text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <span class=" ml-2">4 Reviews</span>
                        </div>
                        <div class="link border-left ml-2">
                            <span>
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="svg-size" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z">
                                    </path>
                                </svg>
                            </span>
                            <span>
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="svg-size" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </span>
                            <span>
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="svg-size" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="text col-12 col-lg-11 mt-3 ">
                        <p>
                            Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia
                            microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn.
                            Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle
                            pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.
                        </p>
                        <div class="chose d-flex align-items-center border-bottom my-3 py-4">
                            <span class="content-text mr-3">Color</span>
                            <button class="bg-white buttons "></button>
                            <button class="bg-dark buttons mx-2"></button>
                            <button class="bule buttons mr-2"></button>
                            <span class="mr-2">Size </span>
                            <select>
                                <option>SM</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                        </div>
                        <div class="pay d-flex  justify-content-between ">
                            <div class="money mr-5">$58.00 </div>
                            <div class="user-button d-flex ">
                                <button class="btn btn-primary mr-3 " type="submit">Button</button>
                                <div class="heart ">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="" viewBox="0 0 24 24">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                        </path>
                                    </svg>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- 其他商品 -->
<section>
    <div class="container d-md-flex flex-wrap-wrap pb-5 mb-5">
        <div class="pic-card   col-12 col-md-6 col-xl-3   p-0 ">
            <div class="card-box col-11 p-0">
                <div class="card border-0 ">
                    <img src="./img/420x260.png" class="card-img-top " alt="...">
                    <div class="card-body p-0 m-0 pt-2 pb-4 ">
                        <div class="small">CATEGORY</div>
                        <p class="card-text">The Catalyzer</p>
                        <div class="money02">$16.00</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="pic-card col-12 col-md-6 col-xl-3    p-0 ">
            <div class="card-box col-11 p-0">
                <div class="card border-0  ">
                    <img src="./img/421x261.png" class="card-img-top" alt="...">
                    <div class="card-body p-0 m-0 pt-2 pb-4">
                        <div class="small">CATEGORY</div>
                        <p class="card-text">Shooting Stars</p>
                        <div class="money02">$21.15</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="pic-card col-12 col-md-6 col-xl-3    p-0 ">
            <div class="card-box col-11 p-0">
                <div class="card border-0 ">
                    <img src="./img/422x262.png" class="card-img-top" alt="...">
                    <div class="card-body p-0 m-0 pt-2 pb-4">
                        <div class="small">CATEGORY</div>
                        <p class="card-text">Neptune</p>
                        <div class="money02">$12.00</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="pic-card col-12 col-md-6 col-xl-3    p-0 ">
            <div class="card-box col-11 p-0">
                <div class="card border-0 ">
                    <img src="./img/423x263.png" class="card-img-top" alt="...">
                    <div class="card-body p-0 m-0 pt-2 pb-4">
                        <div class="small">CATEGORY</div>
                        <p class="card-text">The 400 Blows</p>
                        <div class="money02">$18.40</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="pic-card col-12 col-md-6 col-xl-3    p-0 ">
            <div class="card-box col-11 p-0">
                <div class="card border-0 ">
                    <img src="./img/424x264.png" class="card-img-top" alt="...">
                    <div class="card-body p-0 m-0 pt-2 pb-4">
                        <div class="small">CATEGORY</div>
                        <p class="card-text">The Catalyzer</p>
                        <div class="money02">$16.00</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="pic-card col-12 col-md-6 col-xl-3    p-0 ">
            <div class="card-box col-11 p-0">
                <div class="card border-0 ">
                    <img src="./img/425x265.png" class="card-img-top" alt="...">
                    <div class="card-body p-0 m-0 pt-2 pb-4">
                        <div class="small">CATEGORY</div>
                        <p class="card-text">Shooting Stars</p>
                        <div class="money02">$21.15</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="pic-card col-12 col-md-6 col-xl-3    p-0 ">
            <div class="card-box col-11 p-0">
                <div class="card border-0 ">
                    <img src="./img/427x267.png" class="card-img-top" alt="...">
                    <div class="card-body p-0 m-0 pt-2 pb-4">
                        <div class="small">CATEGORY</div>
                        <p class="card-text">Neptune</p>
                        <div class="money02">$12.00</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="pic-card col-12 col-md-6 col-xl-3    p-0 ">
            <div class="card-box col-11 p-0">
                <div class="card border-0 ">
                    <img src="./img/428x268.png" class="card-img-top" alt="...">
                    <div class="card-body p-0 m-0 pt-2 pb-4">
                        <div class="small">CATEGORY</div>
                        <p class="card-text">The 400 Blows</p>
                        <div class="money02">$18.40</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- 地圖與意見 -->
<section id="map ">
    <div class="map-messenger position-relative ">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d466244.0404081637!2d120.8462863!3d24.0827952!3m2!1i1024!2i768!4f13.1!5e0!3m2!1szh-TW!2stw!4v1646891599751!5m2!1szh-TW!2stw"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="container    ">

            <form class=" message position-absolute">
                <div class="form-group ">
                    <div class="tito-map-name">
                        <p>Feedback</p>
                        <p>Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                    </div>
                    <label for="exampleFormControlInput1 mt-2">Email </label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>


                <div class="form-group ">

                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary col-12">Submit</button>
                <div class="small-text ">
                    <p>Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
                </div>
            </form>
        </div>

    </div>


</section>
@endsection




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>
</body>

</html>
