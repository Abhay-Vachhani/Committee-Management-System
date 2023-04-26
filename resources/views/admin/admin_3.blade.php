<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Screen - 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- animation-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
       
    </style>
</head>

<body>
    <div class="container">
        @include('admin.header-admin')
        <!--  -->
        <section >
            <div class="box mt-3 mb-3">
                <h5 class="bg-darkblue text-white p-2">
                    Master Record for Members
                </h5>
            </div>
        </section>
        <!-- Content -->
        <section class="sectiontable">
            <table class="table table-hover table-striped">
                <form action="#" method="POST">
                <thead class="font-lucida bg-yellow">
                    <tr>
                        <th colspan="2">
                            <div class="row">
                                <div class="col-md-4 col-12 text-center text-md-start">
                                    Add Member
                                </div>
                                <div class="col-md-7 col-12">
                                    <div class="input-group w-50 ms-auto me-md-0 me-auto">
                                        <span class="input-group-text bi bi-search" style="max-height: 30px;"
                                            id="basic-addon1"></span>
                                        <input type="text" class="form-control search" placeholder="Search Member"
                                            aria-label="Username" aria-describedby="basic-addon1"
                                            style="max-height: 30px;">
                                    </div>
                                </div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="font-verdana text-darkblue animate__animated  animate__fadeIn">
                    <tr>
                        <td>
                            Internal / External
                        </td>
                        <td>
                            {{-- <input type="text" class="form-control" id="internalexternal"
                                placeholder="Enter Internal / External"> --}}
                                <select class="form-select" aria-label="Default select example" name="type">
                                    <option value="1">Internal</option>
                                    <option value="0">External</option>
                                </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Designation
                        </td>
                        <td>
                            <input type="text" class="form-control" name="designation" placeholder="Enter Designation">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Department
                        </td>
                        <td>
                            <input type="text" class="form-control" name="department" placeholder="Enter Department">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Organization
                        </td>
                        <td>
                            <input type="text" class="form-control" name="organization" placeholder="Enter Organization">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <input type="email" class="form-control" name="email" placeholder="name@example.com">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mobile No.
                        </td>
                        <td>
                            <input type="number" class="form-control" name="mobile" placeholder="Enter contact">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Communication Address
                        </td>
                        <td>
                            <textarea class="form-control" id="address" rows="2" name="address" placeholder="Enter Address"></textarea>
                        </td>
                    </tr>
                    <tr class="med">
                        <td colspan="2">
                            <a href="#" class="btn new-btn btn-md " name="save" >Save</a>
                        </td>
                    </tr>
                </tbody>
            </form>
            </table>
        </section> <!-- Section Ending-->
    </div>
    <!-- Footer Start -->
    <footer>
        <div class="container-fluid">
            <img src="../img/Logo.png" class="img-2" alt="">
            <div class="row bg-darkblue text-white text-center p-4 con">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <span class="m-2"><i class="bi bi-telephone-outbound-fill"></i></span>
                    <span>+91 87584 80251</span>

                </div>
                <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <span class="m-2">
                        <i class="bi bi-person-lines-fill"></i>
                    </span>
                    <span>
                        +91 281 234098
                    </span>
                </div>
                <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <span class="m-2"><i class="bi bi-envelope-at-fill"></i></span>
                    <span>admin@atmiyauni.ac.in </span>

                </div>
                <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <span class="m-2"><i class="bi bi-browser-chrome"></i></span>
                    <span>
                        <a href="https://atmiyauni.ac.in/">
                            www.atmiyauni.ac.in
                        </a>
                    </span>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Ending -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>