@extends('layout.app')
@section('content')
    <div class="block-30 block-30-sm item" style="background-image: url('{{ asset('/site/images/about_1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <span class="subheading-sm">About</span>
                    <h2 class="heading">Who We Are</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light site-section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-md-7 section-heading">
                    <span class="subheading-sm">About</span>

                    <p>Ivhobe Inn is a 16 rooms Inn located in the heart of Agenebode City, Edo State, Nigeria. It commenced operations with state-of-the-art hospitable facilities and qualified staff who are willing to be dedicated to providing exceptional quality and service to guests.
                        Ivhobe Inn’s strong values of “Peace & Hospitality” strives to have a long-lasting, positive influence on the community of Agenebode and Nigeria as a whole.
                        So why not visit us today and experience comfort like you've never had!</p>
                </div>
            </div>

        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5">
                    <img src="{{ asset('site/images/about_4.jpg') }}" alt="Image placeholder" class="img-fluid img-shadow mb-4">
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <img src="{{ asset('site/images/about_3.jpg') }}" alt="Image placeholder" class="img-fluid img-shadow mb-4">
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <img src="{{ asset('site/images/about_1.jpg') }}" alt="Image placeholder" class="img-fluid img-shadow mb-4">
                </div>
            </div>
            <div class="row">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qNywt_Kn4x0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>


    @endsection
