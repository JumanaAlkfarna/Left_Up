@extends('website.parent')

@section('title', 'Title')


@section('styles')

@endsection

@section('content')


    <section class="product ">
        <div class="container-fluid text-center py-4">
            <div class="kha mb-4">
                <input type="text">
                <button>apply</button>

            </div>
            <!-- <p >Total : <span>234</span> SAR </p> -->
            <div class=" tt ">
                <table class="table mx-auto ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                        </tr>

                    </tbody>
                </table>
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

@endsection

@section('scripts')

@endsection
