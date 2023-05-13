<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Linking Page : USER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
</head>

<body>
    <div class="container" style="min-height:90vh;">
        @include('user.header-user')
        <section>
            <h5 class="bg-darkblue p-3 text-white font-verdana mt-4">
                Welcome, @user
            </h5>
            <!-- Add -->
            <div class="row mt-5">
                <div class=" col-sm-12 col-xs-12 col-md-6 mt-2">
                    <div class="box">
                        <div class="card">
                            <div class="card-body font-lucida">
                                <h5 class="card-title">Arrange Metting</h5>
                                <p class="card-text">To arrange metting a committee as per requirement</p>
                                <a href="#" class="btn new-btn btn-md">Visit page</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-12 col-xs-12 col-md-6 mt-2">
                    <div class="box">
                        <div class="card">
                            <div class="card-body font-lucida">
                                <h5 class="card-title">See Agenda</h5>
                                <p class="card-text">To see agenda of metting as per requirement</p>
                                <a href="#" class="btn new-btn btn-md">Visit Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- view -->
            <div class="row mt-3">
                <div class=" col-sm-12 col-xs-12 col-md-6 mt-2">
                    <div class="box">
                        <div class="card">
                            <div class="card-body font-lucida">
                                <h5 class="card-title">See MoM</h5>
                                <p class="card-text">To see MoM of committee as per requirement</p>
                                <a href="#" class="btn new-btn btn-md">Visit PAge</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-12 col-xs-12 col-md-6 mt-2">
                    <div class="box">
                        <div class="card">
                            <div class="card-body font-lucida">
                                <h5 class="card-title">Comming Soon...</h5>
                                <p class="card-text"> </p>
                                <button class="btn new-btn " disabled="">Visit Page</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!-- footer -->
   @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>