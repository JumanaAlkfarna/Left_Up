@extends('website.parent')

@section('title', 'Title')


@section('styles')

@endsection

@section('content')

    <form>
        <section class=" text-center py-5">
            <ul class="nav nav-pills  " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="pp active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true"> 5 Thousand oil
                    </button>
                </li>
                <li class="nav-item ms-4" role="presentation">
                    <button class="pp" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> 10 Thousand oil
                    </button>
                </li>


            </ul>
            <div class="  tab-content  " id="pills-tabContent">
                <div class=" py-4 px-5 tab-pane fade description show active" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab" tabindex="0">

                    <div class=" dd oty mt-5  ">
                        <label for=""> <span>QTY</span> <br>

                            <div class="input-group d-flex">
                                <button type="button" class="btn ">
                                    <i class="fa-regular fa-plus"></i>
                                </button>
                                <input type="text" class="form-control"
                                    aria-label="Text input with segmented dropdown button" value="1">


                                <button type="button" class="btn">
                                    <i class="fa-regular fa-minus"></i>
                                </button>


                            </div>

                        </label>
                    </div>


                    <div class="main-carousel  pt-3 mt-5  ">

                        @foreach ($oils as $oil)
                            <div class=" cell">
                                <input type="radio" id="html" name="fav_language" value="HTML">
                                <label for="html">
                                    <div class="content mt-4 pt-2">
                                        <div class="box ">
                                            <img src="{{ asset('storage/images/oil/' . $oil->image) }}" alt="Oil_five">
                                        </div>
                                        <span class="title">
                                            {{ $oil->nameEn }}
                                            <p class="price">{{ $oil->price }} SAR</p>
                                        </span>

                                    </div>
                                </label><br>


                            </div>
                        @endforeach



                        {{-- <div class=" cell">
                            <input type="radio" id="css" name="fav_language" value="CSS">
                            <label for="css">
                                <div class="content mt-4 pt-2">
                                    <div class="box ">
                                        <img src="./assets/LOGO_LEFT_UP-removebg-preview.png" alt="">
                                    </div>
                                    <span class="title">
                                        Lorem, ipsum dolor.
                                        <p class="price">24 SAR</p>
                                    </span>

                                </div>
                            </label><br>


                        </div> --}}















                    </div>

                </div>

                <div class="tab-pane  fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">

                    <div class="main-carousel  pt-3  pb-3">


                        @foreach ($oilTens as $oil)
                            <div class=" cell">
                                <input type="radio" id="html" name="fav_language" value="HTML">
                                <label for="html">
                                    <div class="content mt-4 pt-2">
                                        <div class="box ">
                                            <img src="{{ asset('storage/images/oil/' . $oil->image) }}" alt="Oil_five">
                                        </div>
                                        <span class="title">
                                            {{ $oil->nameEn }}
                                            <p class="price">{{ $oil->price }} SAR</p>
                                        </span>

                                    </div>
                                </label><br>


                            </div>
                        @endforeach












                    </div>



                </div>



            </div>


        </section>

        <div class="container">

            {{-- <div class="icheck-primary d-inline">
                <input type="checkbox" id="permission_{{ $permission->id }}"
                    onchange="storeRolePermission({{ $roleId }},{{ $permission->id }})"
                    @if ($permission->active) checked @endif>
                <label for="permission_{{ $permission->id }}">
                </label>
            </div> --}}

        </div>

        <section class="services  text-center pt-3 pb-5 mb-3 px-5">
            <h2>Services</h2>
            <div class="main-carousel  pt-3  pb-3">

                <div class="form-check cell">
                    <label for="" class="ll">
                        <input type="checkbox" class="radio" value="1" name="fooby[1][]" />
                        <span class="checkmark"></span>
                        <div class="content">
                            <div class="box ">
                                <img src="./assets/LOGO_LEFT_UP-removebg-preview.png" alt="">
                            </div>
                            <span class="title">
                                Lorem, ipsum dolor.
                                <p class="price">24 SAR</p>
                            </span>

                        </div>

                    </label>
                </div>

                <div class="form-check cell">
                    <label for="" class="ll">
                        <input type="checkbox" class="radio" value="1" name="fooby[1][]" />
                        <span class="checkmark"></span>
                        <div class="content">
                            <div class="box ">
                                <img src="./assets/LOGO_LEFT_UP-removebg-preview.png" alt="">
                            </div>
                            <span class="title">
                                Lorem, ipsum dolor.
                                <p class="price">24 SAR</p>
                            </span>

                        </div>

                    </label>
                </div>


                <div class="form-check cell">
                    <label for="" class="ll">
                        <input type="checkbox" class="radio" value="1" name="fooby[1][]" />
                        <span class="checkmark"></span>
                        <div class="content">
                            <div class="box ">
                                <img src="./assets/LOGO_LEFT_UP-removebg-preview.png" alt="">
                            </div>
                            <span class="title">
                                Lorem, ipsum dolor.
                                <p class="price">24 SAR</p>
                            </span>

                        </div>

                    </label>
                </div>

                <div class="form-check cell">
                    <label for="" class="ll">
                        <input type="checkbox" class="radio" value="1" name="fooby[1][]" />
                        <span class="checkmark"></span>
                        <div class="content">
                            <div class="box ">
                                <img src="./assets/LOGO_LEFT_UP-removebg-preview.png" alt="">
                            </div>
                            <span class="title">
                                Lorem, ipsum dolor.
                                <p class="price">24 SAR</p>
                            </span>

                        </div>

                    </label>
                </div>

                <div class="form-check cell">
                    <label for="" class="ll">
                        <input type="checkbox" class="radio" value="1" name="fooby[1][]" />
                        <span class="checkmark"></span>
                        <div class="content">
                            <div class="box ">
                                <img src="./assets/LOGO_LEFT_UP-removebg-preview.png" alt="">
                            </div>
                            <span class="title">
                                Lorem, ipsum dolor.
                                <p class="price">24 SAR</p>
                            </span>

                        </div>

                    </label>
                </div>


                <div class="form-check cell">
                    <label for="" class="ll">
                        <input type="checkbox" class="radio" value="1" name="fooby[1][]" />
                        <span class="checkmark"></span>
                        <div class="content">
                            <div class="box ">
                                <img src="./assets/LOGO_LEFT_UP-removebg-preview.png" alt="">
                            </div>
                            <span class="title">
                                Lorem, ipsum dolor.
                                <p class="price">24 SAR</p>
                            </span>

                        </div>

                    </label>
                </div>

                <div class="form-check cell">
                    <label for="" class="ll">
                        <input type="checkbox" class="radio" value="1" name="fooby[1][]" />
                        <span class="checkmark"></span>
                        <div class="content">
                            <div class="box ">
                                <img src="./assets/LOGO_LEFT_UP-removebg-preview.png" alt="">
                            </div>
                            <span class="title">
                                Lorem, ipsum dolor.
                                <p class="price">24 SAR</p>
                            </span>

                        </div>

                    </label>
                </div>

                <div class="form-check cell">
                    <label for="" class="ll">
                        <input type="checkbox" class="radio" value="1" name="fooby[1][]" />
                        <span class="checkmark"></span>
                        <div class="content">
                            <div class="box ">
                                <img src="./assets/LOGO_LEFT_UP-removebg-preview.png" alt="">
                            </div>
                            <span class="title">
                                Lorem, ipsum dolor.
                                <p class="price">24 SAR</p>
                            </span>

                        </div>

                    </label>
                </div>


                <div class="form-check cell">
                    <label for="" class="ll">
                        <input type="checkbox" class="radio" value="1" name="fooby[1][]" />
                        <span class="checkmark"></span>
                        <div class="content">
                            <div class="box ">
                                <img src="./assets/LOGO_LEFT_UP-removebg-preview.png" alt="">
                            </div>
                            <span class="title">
                                Lorem, ipsum dolor.
                                <p class="price">24 SAR</p>
                            </span>

                        </div>

                    </label>
                </div>









            </div>
        </section>

        <section class="text-center   foot bg-info">
            <div class="cont">
                <p class="total">
                    123 SAR
                </p>
                <button class="btn">Confirmation <i class="fa-regular fa-arrow-right-long"></i></button>
            </div>
        </section>

    </form>

@endsection

@section('scripts')

@endsection
