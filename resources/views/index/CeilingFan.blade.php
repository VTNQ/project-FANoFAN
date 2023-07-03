@extends('layouts.template')

@section('title_page')

    Ceiling Fan

@endsection

@section('mycss')
    <style>
        .main-panel {
            background-color: #1c2331;
            color: white;

        }

        .py-4.px-lg-5.px-md-4.px-sm-4.form-section {
            background-color: skyblue;
        }

        body {
            font-family: 'Roboto Condensed', sans-serif;
            background-color: #f5f5f5
        }

        .hedding {
            font-size: 20px;
            color: #ab8181;
        }

        .main-section {
            position: absolute;
            left: 50%;
            right: 50%;
            transform: translate(-50%, 5%);
        }

        .left-side-product-box img {
            width: 100%;
        }

        .left-side-product-box .sub-img img {
            margin-top: 5px;
            width: 83px;
            height: 100px;
        }

        .right-side-pro-detail span {
            font-size: 15px;
        }

        .right-side-pro-detail p {
            font-size: 25px;
            color: #a1a1a1;
        }

        .right-side-pro-detail .price-pro {
            color: #E45641;
        }


        .right-side-pro-detail .tag-section {
            font-size: 18px;
            color: #5D4C46;
        }

        .pro-box-section .pro-box img {
            width: 100%;
            height: 200px;
        }

        @media (min-width: 360px) and (max-width: 640px) {
            .pro-box-section .pro-box img {
                height: auto;
            }
        }

        body {
            background: #eee
        }

        .date {
            font-size: 11px
        }

        .comment-text {
            font-size: 12px
        }

        .fs-12 {
            font-size: 12px
        }

        .shadow-none {
            box-shadow: none
        }

        .name {
            color: #007bff
        }

        .cursor:hover {
            color: blue
        }

        .cursor {
            cursor: pointer
        }

        .textarea {
            resize: none
        }
    </style>
@endsection

@section('body_content')

    <!-- product -->

    <div class="row m-0">
        <div class="col-lg-4 left-side-product-box pb-3">
            <img id="main-image" src="/public/upload/{{$photo->value}}" class=" p-3">
            @foreach($data3 as $row)
                <span class="sub-img">
						<img onclick="change_image(this)" src="/public/upload/{{$row->value}}" class=" p-2">

					</span>
            @endforeach
        </div>
        <div class="col-lg-8">
            <div class="right-side-pro-detail  p-3 m-0">
                <div class="row">
                    <div class="col-lg-12">

                        <p class="m-0 p-0">{{$photo->name_product}}</p>
                    </div>
                    <div class="col-lg-12">
                        <p class="m-0 p-0 price-pro">${{ $photo->money}}</p>
                        <hr class="p-0 m-0">
                    </div>
                    <div class="col-lg-12 pt-2">
                        <h5>Product Detail</h5>
                        <span>{!!$photo->content!!}</span>
                        <hr class="m-0 pt-2 mt-2">
                    </div>
                    

                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- product -->
    <!-- feedback -->

    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="d-flex flex-column comment-section">
                    <div class="bg-white p-2">


                        @foreach($Show_comment as $row)
                            <div class="d-flex flex-row user-info"><img class="rounded-circle"
                                                                        src="/public/upload/user.png" width="40">


                                <div class="d-flex flex-column justify-content-start ml-2"><span
                                        class="d-block font-weight-bold name">{{$row->username}}</span><span
                                        class="date text-black-50">{{date('M d,Y h:i A',strtotime($row->date_to))}}</span>
                                </div>
                            </div>
                            <div class="mt-2">
                                <p class="comment-text">{{$row->comment}}</p>
                            </div>
                    </div>


                    @endforeach
                    <div class="bg-light p-2">
                        <form action="/addFeedback/{{$photo->id_product}}" method="POST">
                            @csrf
                            <div class="d-flex flex-row align-items-start"><img class="rounded-circle"
                                                                                src="/public/upload/user.png"
                                                                                width="40"><textarea
                                    class="form-control ml-1 shadow-none textarea" name="Message"></textarea></div>
                            <div class="mt-2 text-right">
                                <button class="btn btn-primary btn-sm shadow-none" type="submit">Post comment</button>
                                <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function change_image(image){

var container = document.getElementById("main-image");

container.src = image.src;
}



document.addEventListener("DOMContentLoaded", function(event) {







});
    </script>
    <!-- feedback -->

@endsection
@section('footer')

@endsection

@section('myscript')

@endsection
