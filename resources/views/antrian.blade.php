@extends('layouts.appantrian')

@section('content')
<div class="container">



    <!-- topics -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="section-title">DAFTAR ANTRIAN</h2>
                </div>
                <!-- topic-item -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <a class="px-4 py-5 bg-white shadow text-center d-block match-height">
                        <i class="fas fa-credit-card-alt icon text-primary d-block mb-4"></i>
                        <h3 class="mb-3 mt-0">0</h3>
                        <p class="mb-0">Contumer Service</p>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <a class="px-4 py-5 bg-white shadow text-center d-block match-height">
                        <i class="fas fa-credit-card-alt icon text-primary d-block mb-4"></i>
                        <h3 class="mb-3 mt-0">0</h3>
                        <p class="mb-0">Teller 1</p>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <a class="px-4 py-5 bg-white shadow text-center d-block match-height">
                        <i class="fas fa-credit-card-alt icon text-primary d-block mb-4"></i>
                        <h3 class="mb-3 mt-0">0</h3>
                        <p class="mb-0">Teller 2</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /topics -->

    <!-- call to action -->
    {{-- <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section px-3 bg-white shadow text-center">
                        <h2 class="mb-4">Didn&rsquo;t find an answer to your question?</h2>
                        <p class="mb-4">Musce libero nunc, dignissim quis turpis quis, semper vehicula dolor. Suspendisse tincidunt
                            consequat quam.</p>
                        <a href="contact.html" class="btn btn-primary">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</div>
@endsection
