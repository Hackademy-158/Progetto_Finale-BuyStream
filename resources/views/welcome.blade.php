<x-layout>
    <section class="hero-section"
        style="background-image: url('/img/hero.png'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row align-items-center vh-100">
                <div class="col-12 col-lg-7 offset-lg-1 text-center text-lg-start">
                    <h1 class="display-3 fw-bold mb-3" data-aos="zoom-in" data-aos-delay="300">
                        {{ __('ui.hero.your') }}<span class="highlight">{{ __('ui.hero.flow') }}</span>,<br>
                        {{ __('ui.hero.your') }}<span class="highlight">{{ __('ui.hero.shopping') }}</span>
                    </h1>
                    <p class="hero-subtitle mb-4 ml-lg-0 lead" data-aos="fade-up" data-aos-delay="500">
                        {{ __('ui.hero.discover_new_way') }}
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('article.create') }}" class="hero-button" data-aos="zoom-in"
                            data-aos-delay="700">
                            {{ __('ui.hero.button') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 text-center mt-5 mb-5">
                <h1>{{ __('ui.home.latest_articles') }}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            @forelse ($articles as $article)
                <div class="col-12 col-sm-6 col-md-3 m-1">
                    <livewire:article-card :article="$article" />
                </div>
            @empty
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mt-3 mb-3">
                            <div class="col-12">
                                @auth
                                    <p>{{__('ui.home.no_articles')}}</p>
                                    <a href="{{ route('article.create') }}" style="color:#198754">{{ __('ui.home.create_article')}}</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center mt-3 mb-3">
                                <div class="col-12">
                                    @guest
                                        <p>{{__('ui.last_articles.no_articles')}}</p>
                                        <a href="{{ route('register') }}" style="color:#198754"> {{ __('ui.articles.create_one')}} </a>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                AOS.init({
                    duration: 1000,
                    once: true
                });
            });
        </script>
    @endpush


    <section>
        <div class="container-fluid position-relative">
            <div class="row">
                <h1 class=" text-center fw-bold display-3 text-main mt-5 mb-3">{{__('ui.features.one_click')}} <span
                        class="text-uppercase text-success">{{__('ui.features.big_click')}}</span></h1>
            </div>
            <div class="container-fluid position-relative">
                <div class="row">
                    <div class="col-lg-1 hero-content display-3 fw-bold mb-3 margin-right-0" style="text-align:right">
                        <i class="bi bi-check-circle"></i>
                    </div>
                    <div class=" col-lg-5 hero-content" style="margin-left:0; padding-left:0">
                        <h3 class="display-3 fw-bold mb-3">{{__('ui.features.quality_work')}} <span class="text-success">{{__('ui.features.quality_green')}}</span></h3>
                        <h4>{{__('ui.features.timely_delivery')}}</h4>
                    </div>
                    <div class="col-lg-5" style="padding-top:100px">
                        <img src="{{ asset('img/welcome/') }}" alt="">
                    </div>
                </div>


            </div>
            <div class="container-fluid position-relative">
                <div class="row">
                    <div class="col-lg-5" style="padding-top:100px">
                        <img src="https://picsum.photos/400" alt="">
                    </div>
                    <div class="col-lg-1 hero-content display-3 fw-bold mb-3 margin-right-0" style="text-align:right">
                        <i class="bi bi-check-circle"></i>
                    </div>

                    <div class=" col-lg-5 hero-content" style="margin-left:0; padding-left:0">
                        <h3 class="display-3 fw-bold mb-3">{{__('ui.features.protected_payments')}}<span class="text-success"> {{__('ui.features.payment_green')}}</span></h3>
                        <h4>{{__('ui.features.transaction_unlock')}}</h4>
                    </div>
                </div>

                <div class="container-fluid position-relative">
                    <div class="row">
                        <div class="col-lg-1 hero-content display-3 fw-bold mb-3 margin-right-0"
                            style="text-align:right">
                            <i class="bi bi-check-circle"></i>
                        </div>
                        <div class=" col-lg-5 hero-content" style="margin-left:0; padding-left:0">
                            <h3 class="display-3 fw-bold mb-3">{{__('ui.features.local_global')}} <span class="text-success"> {{__('ui.features.local_green')}}</span>
                            </h3>
                            <h4>{{__('ui.features.choice_yours')}}</h4>
                        </div>
                        <div class="col-lg-5  " style="padding-top:100px">
                            <img src="https://picsum.photos/400" alt="">
                        </div>
                    </div>
                    <div class="container-fluid position-relative">
                        <div class="row">
                            <div class="col-lg-5  " style="padding-top:100px">
                                <img src="{{ asset('img/welcome/24oree.png') }}" alt="">
                            </div>
                            <div class="col-lg-1 hero-content display-3 fw-bold mb-3 margin-right-0"
                                style="text-align:right">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <div class=" col-lg-5 hero-content" style="margin-left:0; padding-left:0">
                                <h3 class="display-3 fw-bold mb-3">{{__('ui.features.support')}}<span class="text-success"> {{__('ui.features.support_green')}}</span>
                                </h3>
                                <h4>{{__('ui.features.support_description')}}</h4>
                            </div>
                        </div>
    </section>
    <!-- SEZIONE NUMERI INCREMENTALI gestiti con js in main.js-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5 mb-5">
                    <h2>{{__('ui.stats.title')}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4 text-center">
                    <img src="https://picsum.photos/200" />
                    <h3 id="firstNumber"></h3>
                    <p>{{__('ui.stats.satisfied_clients')}}</p>
                </div>
                <div class="col-4 text-center">
                    <img src="https://picsum.photos/200" />
                    <h3 id="secondNumber"></h3>
                    <p>{{__('ui.stats.positive_reviews')}}</p>
                </div>
                <div class="col-4 text-center">
                    <img src="https://picsum.photos/200" />
                    <h3 id="thirdNumber"></h3>
                    <p>{{__('ui.stats.partners')}}</p>
                </div>
            </div>
        </div>
    </section>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    </section>
    <!-- Sezione Our Team -->
    <div class="container">
        <div class="spacer"></div>
        <div class="spacer"></div>
        <div class="row">
            <div class="col-sm-12 mt-5 mb-5">
                <h3 class="text-center text-uppercase">{{__('ui.about.title')}}</h3>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="spacer"></div>
        <div class="row">
            <div class="col-sm-6 col-md-2 text-center mx-4 mb-5">
                <img src="https://lipsum.app//id/07/150x150/" class="rounded-circle team-pic" alt="Cinque Terre">
                <div class="spacer"></div>
                <h3 class="">Danilo</h3>
                <p>Full Stack Developer</p>
                <i class="bi bi-facebook  margin-right-20"></i>
                <i class="bi bi-linkedin  margin-right-20"></i>
                <i class="bi bi-instagram"></i>
            </div>
            <div class="col-sm-6 col-md-2 text-center mx-4">
                <img src="https://lipsum.app//id/07/150x150/" class="rounded-circle team-pic" alt="Cinque Terre">
                <div class="spacer"></div>
                <h3 class="">Alessio</h3>
                <p>Full Stack Developer</p>
                <i class="bi bi-facebook  margin-right-20"></i>
                <i class="bi bi-linkedin  margin-right-20"></i>
                <i class="bi bi-instagram "></i>
            </div>
            <div class="col-sm-6 col-md-2 text-center mx-4">
                <img src="https://lipsum.app//id/07/150x150/" class="rounded-circle team-pic" alt="Cinque Terre">
                <div class="spacer"></div>
                <h3 class="">Matteo</h3>
                <p>Full Stack Developer</p>
                <i class="bi bi-facebook  margin-right-20"></i>
                <i class="bi bi-linkedin  margin-right-20"></i>
                <i class="bi bi-instagram "></i>
            </div>
            <div class="col-sm-6 col-md-2 text-center mx-4">
                <img src="https://lipsum.app//id/07/150x150/" class="rounded-circle team-pic" alt="Cinque Terre">
                <div class="spacer"></div>
                <h3 class="">Anna</h3>
                <p>Full Stack Developer</p>
                <i class="bi bi-facebook  margin-right-20"></i>
                <i class="bi bi-linkedin  margin-right-20"></i>
                <i class="bi bi-instagram "></i>
            </div>
            <div class="col-sm-6 col-md-2 text-center">
                <img src="https://lipsum.app//id/07/150x150/" class="rounded-circle team-pic" alt="Cinque Terre">
                <div class="spacer"></div>
                <h3 class="">Flavio</h3>
                <p>Full Stack Developer</p>
                <i class="bi bi-facebook  margin-right-20"></i>
                <i class="bi bi-linkedin  margin-right-20"></i>
                <i class="bi bi-instagram"></i>
            </div>
        </div>
</x-layout>
