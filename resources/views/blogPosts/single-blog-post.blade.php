@extends('layout')

@section('main')
<main>
    <section id="home-featured">
        <div class="container p-0"  style="max-width: 1140px;">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h1 class="fw-normal my-3">Building my 1st Bootstrap Template</h1>
                    <h6 class="fw-semibold">By DONDEX CHAVEZ</h6>
                    <hr/>
                    <h6 class="fw-semibold">Posted on July 7, 2022 at 9:49 AM</h6>
                    <hr/>
                    <div class="teaser col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <div class="mb-3">
                            <img class="img-fluid" src="{{asset('/image/blog-image/home-blog.jpg')}}" alt="covid-19">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 py-3">
                    <div class="teaser d-flex position-relative flex-column">
                        <div class="bg-danger">
                            <h5 class="text-light fw-light px-2 py-1">
                                <strong>Top Stories</strong>
                            </h5>
                        </div>
                        <div class="">
                            <img class="img-fluid" src="{{asset('/image/web-design.jpg')}}" alt="covid-19">
                        </div>
                    </div>
                    <div class="">
                        <ul class="p-0 pt-2" style="list-style-type: none; font-size: 15px;">
                            <li class="py-2" style="border-bottom: 1px solid #D8D8D8;"><a style="color: #000; text-decoration: none;" href="#">Manila stays under Alert Level 1</a></li>
                            <li class="py-2" style="border-bottom: 1px solid #D8D8D8;"><a style="color: #000; text-decoration: none;" href="#">11 NCR cities see continued rise in cases</a></li>
                            <li class="py-2" style="border-bottom: 1px solid #D8D8D8;"><a style="color: #000; text-decoration: none;" href="#">in US could soon be vaccinated vs COVID</a></li>
                            <li class="py-2" style="border-bottom: 1px solid #D8D8D8;"><a style="color: #000; text-decoration: none;" href="#">SUV driver in hit-and-run vows support for victim</a></li>
                            <li class="py-2" style="border-bottom: 1px solid #D8D8D8;"><a style="color: #000; text-decoration: none;" href="#">Hit-and-run victim: Case will push through</a></li>
                            <li class="py-2" style="border-bottom: 1px solid #D8D8D8;"><a style="color: #000; text-decoration: none;" href="#">Bus operators seek fare hike amid rising costs</a></li>
                            <li class="py-2" style="border-bottom: 1px solid #D8D8D8;"><a style="color: #000; text-decoration: none;" href="#">Comelec OKs Guanzon’s party-list substitution bid</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home-featured">
        <div class="container p-0"  style="max-width: 1140px;">
            <div class="row">
                <!-- POST CONTENT-->
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora est perspiciatis officia dolore beatae velit optio doloremque minima deleniti pariatur debitis illum earum, consectetur quidem at, neque, sapiente ex porro voluptatibus ad voluptatum in reiciendis doloribus nobis! Saepe, iste perspiciatis sed reiciendis asperiores, architecto sit unde amet incidunt ducimus cum pariatur facere ad voluptas, iure distinctio ullam? Ea, sed, fugiat iusto ratione ipsum qui provident, blanditiis eius ducimus sit id iure aspernatur amet nam placeat.</p>

                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit, voluptates. Nulla consequuntur corrupti suscipit soluta perspiciatis animi! Deleniti, recusandae! Nihil exercitationem dolor quidem quia unde tempora vel delectus, quaerat accusantium distinctio earum neque itaque soluta fugiat magni possimus eveniet magnam iusto facilis omnis! Laborum, at eos tempora numquam harum ipsa?</p>

                    <blockquote class="blockquote">
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique sed amet vero architecto eius eaque, cumque sit doloremque vel officiis?</p>
                        <footer class="blockquote-footer">Someone famous in
                            <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>

                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, perferendis quisquam vitae perspiciatis veritatis vel magnam aspernatur! Soluta saepe perferendis doloremque repellendus sit vel veritatis inventore eos, laboriosam consequatur, praesentium debitis eligendi blanditiis magni fugit commodi maiores consectetur tempore! Soluta dolore ratione maxime doloremque. Dolorum facilis soluta explicabo odio nemo, sapiente impedit, libero sequi veritatis, quibusdam doloribus facere iste quis atque illo necessitatibus est ad suscipit porro minima inventore corporis repellat velit dignissimos? Quasi totam alias voluptatem harum esse. Eaque impedit adipisci voluptas quod, consequuntur veniam ab? Repellendus, illum saepe.</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus enim alias deserunt debitis pariatur similique animi architecto harum in temporibus soluta sit cupiditate explicabo, amet illum obcaecati consectetur atque vitae ratione ad. Veniam, aspernatur distinctio doloremque officia obcaecati in deserunt iusto odio ipsa cum quam tempora officiis nam cupiditate laboriosam suscipit perferendis optio. Natus, provident. Vero blanditiis optio veniam impedit voluptas laboriosam tempora et fugiat? Dolor porro laudantium minima sit reprehenderit, eveniet libero fugit tempore.</p>

                    <blockquote class="blockquote">
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique sed amet vero architecto eius eaque, cumque sit doloremque vel officiis?</p>
                        <footer class="blockquote-footer">Someone famous in
                            <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab tempora aut fugiat nisi reprehenderit illum consequuntur, aliquam excepturi minus, obcaecati saepe vitae officia? Exercitationem earum incidunt placeat delectus veniam! Illo autem quisquam id. Facilis eaque alias ex amet fugit. Aperiam, dolores eaque deserunt accusantium, perspiciatis quod nihil nemo alias iste culpa, odit deleniti quisquam sint fugit quos cupiditate? Vero incidunt, harum explicabo veritatis ducimus corporis est aliquam doloremque! Recusandae amet, eaque veritatis, unde saepe exercitationem, mollitia aliquam perferendis laudantium iste maxime ipsam nostrum qui ab ipsa. Minima architecto dolore, accusamus porro quod vel sapiente possimus quos. Aut necessitatibus iste quos fugit. Unde, repudiandae adipisci vel eligendi tenetur voluptas ipsa. Est nihil expedita doloremque asperiores, illum laborum ipsam sunt ratione id veritatis reprehenderit voluptatibus quidem placeat! Molestias sed facilis quisquam? Quod inventore, voluptas reiciendis illum quos quo alias accusantium, distinctio vero, beatae fugiat nostrum sit nesciunt fuga accusamus velit labore. Itaque cum distinctio cumque nisi repellat. Nulla aliquid deleniti asperiores ratione accusantium consequuntur quibusdam ea, atque nemo repellendus dolor a ad porro, maiores eveniet. Quisquam earum explicabo, eaque nesciunt dicta id itaque pariatur cupiditate expedita. Fuga eos voluptatem, repellendus nemo quia laudantium praesentium alias consequuntur incidunt hic numquam maxime commodi, aperiam aut deleniti ipsam dolor itaque cupiditate sequi? Animi illo, excepturi atque, consequatur voluptas aspernatur labore quia minima laudantium commodi beatae voluptatem illum! Commodi molestiae, distinctio doloribus molestias tempora quae, illo obcaecati dicta corrupti, ex laborum reprehenderit placeat ipsum dolore nemo consequatur et. Dolore deleniti exercitationem commodi, soluta nesciunt quam fuga!</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 py-3">
                    <div class="teaser d-flex position-relative flex-column">
                        <div class="bg-dark">
                            <h5 class="text-light fw-light px-2 py-1">
                                <strong>Live Stream</strong>
                            </h5>
                        </div>
                        <div class="">
                            <iframe width="363.5" height="300"
                                src="{{asset('https://www.youtube.com/embed/5YDVJaItmaY')}}">
                            </iframe>
                        </div>
                    </div>
                    <div class="my-5">
                        <iframe width="363.5" height="315"
                            src="{{asset('https://www.youtube.com/embed/kUMV7jmbpPY')}}">
                        </iframe>
                    </div>
                    <div class="mb-5">
                        <img style="width: 100%; height: 200px;" src="{{asset('./image/blog-image/sponsor-logo2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ads-2">
        <div class="container bg-primary" style="max-width: 1140px; height: 20vh;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="text-center text-light my-5">
                        Advertisement
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section id="Related">
        <div class="container p-0" style="max-width: 1140px;">
            <h2 class="fw-normal my-3">Related Blog</h2>
            <hr style="border: 3px solid #000;"/>
        </div>
        <div class="container p-0" style="max-width: 1140px;">
            <div class="row py-2">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-2">
                    <div class="post-item">
                        <div>
                            <img class="img-fluid" src="{{asset('/image/responsive.jpg')}}" alt="">
                            <h5 class="pt-2" style="color: #000;">   This country wants a four-day work week. But it's not about making workers happy </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-2">
                    <div class="post-item">
                        <div>
                            <img class="img-fluid" src="{{asset('/image/responsive.jpg')}}" alt="">
                            <h5 class="pt-2" style="color: #000;">   Here's why crypto experts are shrugging off the bitcoin crash </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-2">
                    <div class="post-item">
                        <div>
                            <img class="img-fluid" src="{{asset('/image/responsive.jpg')}}" alt="">
                            <h5 class="pt-2" style="color: #000;">   John Stamos 'disappointed' In Memoriam tribute at Tonys didn't include Bob Saget </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection