<?php $page = 'faq'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            FAQ
        @endslot
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            FAQ
        @endslot
    @endcomponent
    <!-- FAQ  -->
    <section class="section faq-section">
        <div class="container">
            <div class="faq-info">
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqOne" aria-expanded="false">What is about rental
                            car deals?</a>
                    </h4>
                    <div id="faqOne" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                            sequi nesciunt.</p>
                    </div>
                </div>
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqTwo" aria-expanded="false">In which areas
                            do you operate?</a>
                    </h4>
                    <div id="faqTwo" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                            sequi nesciunt.</p>
                    </div>
                </div>
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqThree" aria-expanded="false">Sed ut
                            perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium?</a>
                    </h4>
                    <div id="faqThree" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                            sequi nesciunt.</p>
                    </div>
                </div>
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqFour" aria-expanded="false">Nemo enim ipsam
                            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia?</a>
                    </h4>
                    <div id="faqFour" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                            sequi nesciunt.</p>
                    </div>
                </div>
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqFive" aria-expanded="false">Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor?</a>
                    </h4>
                    <div id="faqFive" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                            sequi nesciunt.</p>
                    </div>
                </div>
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqSix" aria-expanded="false">eque porro
                            quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit?</a>
                    </h4>
                    <div id="faqSix" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                            sequi nesciunt.</p>
                    </div>
                </div>
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqSeven" aria-expanded="false">Nam libero
                            tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod?</a>
                    </h4>
                    <div id="faqSeven" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                            sequi nesciunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /FAQ -->

@endsection
