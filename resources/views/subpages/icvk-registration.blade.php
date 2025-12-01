@extends('main')



@section('title')
Registration for ICVK
@endsection

@section('content')


<!-- Page Header Start -->
<div class="container-fluid isvkpage-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <nav aria-label="breadcrumb animated slideInDown">

        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Team Start -->
<section class="pb-5" style="background: #f5dbe0;">
    <div class="container-md bg-gradient py-4 px-md-4 position-relative" style="z-index: 2; margin-top: -200px;">
        <div class="d-block">
            <h3 class="ph-1">Register for ICVK <small class="fw-normal">(Indian Cultural and Values for Kids)</small>
            </h3>
            <div class="card rounded-1 border-0 my-2 px-4 py-3 bg-light-2 d-none">
                <h3 class="ph-2 text-muted">Oops!</h3>
                <p></p>
            </div>
            <form class="mt-4" novalidate="" action="{{route('post.icvk.registration')}}" method="post" id="RegPost">
                @csrf
                <input type="hidden" name="pageid" value="ICVK Registration">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="ud-form-group ">
                            <label for="cname">Name of the Child*</label>
                            <input type="text" class="form-control checkchar" id="cname" name="cname">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="ud-form-group ">
                            <label for="dob">Date of Birth <small class="text-muted">(DD-MM-YYYY)</small>*</label>
                            <input type="text" class="form-control datepicker" id="dob" name="dob" readonly>
                        </div>
                    </div>
                </div>

                <div class="ud-form-group "><label for="batch">Select Batch*</label>
                    <div class="d-none">
                        <div class="form-check form-check-inline"><input class="form-check-input btchInput" type="radio"
                                name="batch" id="batch1" value="Gopalas"><label class="form-check-label"
                                for="batch1">Gopalas (Age group: 3 to 5 years)</label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input btchInput" type="radio"
                                name="batch" id="batch2" value="Keshavas"><label class="form-check-label"
                                for="batch2">Keshavas (Age group: 6 to 10 years)</label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input btchInput" type="radio"
                                name="batch" id="batch3" value="Govindas"><label class="form-check-label"
                                for="batch3">Govindas (Age group: 11 to 15 years)</label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="py-2 px-3 my-1 border-0 ud-border bg-white batchBox" id="1" tabindex="1"
                                role="button" style="border-radius: 2px;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <p class="bt-0 text-dark fw-bold">Gopalas</p>
                                        <p class="bt-1 text-dark" style="padding-right: 32px;">Age group: 3 to 5 years
                                        </p>
                                    </div><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        class="tickSvg1 tksvg" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z">
                                        </path>
                                        <path
                                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="py-2 px-3 my-1 border-0 ud-border bg-white batchBox" id="2" tabindex="2"
                                role="button" style="border-radius: 2px;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <p class="bt-0 text-dark fw-bold">Keshavas</p>
                                        <p class="bt-1 text-dark" style="padding-right: 32px;">Age group: 6 to 10 years
                                        </p>
                                    </div><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        class="tickSvg2 tksvg" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z">
                                        </path>
                                        <path
                                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="py-2 px-3 my-1 border-0 ud-border bg-white batchBox" id="3" tabindex="3"
                                role="button" style="border-radius: 2px;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <p class="bt-0 text-dark fw-bold">Govindas</p>
                                        <p class="bt-1 text-dark" style="padding-right: 32px;">Age group: 11 to 15 years
                                        </p>
                                    </div><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        class="tickSvg3 tksvg" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z">
                                        </path>
                                        <path
                                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ud-form-group "><label for="mode" class="mb-1">Preferred mode*</label>
                    <div class="d-none">
                        <div class="form-check form-check-inline"><input class="form-check-input modInput" type="radio"
                                name="mode" id="mode1" value="Online"><label class="form-check-label" for="mode1">Online
                                (₹1,000)</label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input modInput" type="radio"
                                name="mode" id="mode2" value="Offline"><label class="form-check-label"
                                for="mode2">Offline (₹1,500)</label></div>
                    </div>
                    <div class="hstack gap-2 mb-1">
                        <div class="px-3 pt-1 bt-1_5 ud-border paymentMode bg-white text-dark" id="1" role="button"
                            tabindex="0" style="border-radius: 2px;"><span>Online (₹1,000)</span></div>
                        <div class="px-3 pt-1 bt-1_5 ud-border paymentMode bg-white text-dark" id="2" role="button"
                            tabindex="1" style="border-radius: 2px;"><span>Offline (₹1,500)</span></div>
                    </div>
                </div>
                <div class="ud-form-group "><label for="school">Name of the School*</label><input type="text"
                        class="form-control checkchar" id="school" name="school"></div>
                <div class="ud-form-group "><label for="city">City*</label><input type="text" class="form-control checkchar"
                        id="city" name="city"></div>
                <div class="ud-form-group "><label for="name">Name of the Parent/Guardian*</label><input type="text"
                        class="form-control checkchar" id="name" name="name"></div>
                <div class="ud-form-group "><label for="phone">Phone no.* <small class="text-muted">(Your 10 digit phone
                            no.)</small></label><input type="tel" class="form-control num" id="phone" name="phone"
                        maxlength="10" oninput="checkValidMobilesec()"></div>
                <div class="ud-form-group "><label for="email">Email*</label><input type="email" class="form-control"
                        id="email" name="email"></div>
                <div class="ud-form-group "><label for="pan">PAN</label><input type="text" class="form-control" id="pan"
                        name="pan" maxlength="10"></div>
                <div class="row">
                    <div class="col-md-12 text-left">
                        <p class="form-error mb-3"></p>
                    </div>
                </div>
                <div class="ud-form-group mb-0"><button type="button" class="btn btn-hkm proceedBtn">Proceed to
                        Pay</button></div>
            </form>
        </div>
    </div>
</section>

<!-- Team End -->


@endsection