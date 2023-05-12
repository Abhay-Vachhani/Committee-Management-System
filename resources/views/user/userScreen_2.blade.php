<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Screen - 2 </title>
    {{-- include file --}}
    @include('title')
    <style>
        body {
            background-image: linear-gradient(rgb(245, 247, 255), rgb(255, 255, 255));
            background-attachment: fixed;
        }

        label {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container" style="min-height: 85vh;">
        <!-- Header -->
        @include('user.header-user')
        <!-- Model -->
        <div class="row  text-center">
            <div class="col-sm-12 col-md-6 mt-1">
                <!-- Button trigger modal -->
                <button type="button" class="btn new-btn btn-sm mt-3" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Add New Agenda
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Meeting Topics</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Model Body Start -->
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-3">
                                        <thead class="bg-darkblue text-white font-lucida">
                                            <tr>
                                                <th colspan="3">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody class="font-verdana">
                                            <tr>
                                                <td class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th class="col-2">
                                                                    Title
                                                                </th>
                                                                <td>
                                                                    <input type="text" name="title" class="w-100">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-2">
                                                                    Discussion
                                                                </th>
                                                                <td>
                                                                    <input type="text" name="discussion" class="w-100">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-2">
                                                                    Resolution
                                                                </th>
                                                                <td>
                                                                    <input type="text" name="resolution" class="w-100">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-2">
                                                                    Action
                                                                </th>
                                                                <td>
                                                                    <input type="text" name="action" class="w-100">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn new-btn-reverse" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn new-btn">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mt-1">
                <button type="button" class="btn new-btn btn-sm mt-3">
                    Download Agenda
                </button>
            </div>
        </div>
        <!-- Table -->
        <div class="table-responsive">
            <table class=" table mt-4 table-bordered bg-white table-striped" id="myTable">
                <thead class="bg-darkblue text-white">
                    <tr>
                        <th scope="col">Agenda No</th>
                        <th scope="col">Details</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">IQAC-03-01</th>
                        <td>Ratification of Previous Meeting Agenda</td>
                    </tr>
                    <tr>
                        <th scope="row">IQAC-03-02</th>
                        <td>Ratification of Previous Meeting Agenda</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!--  -->

    @include('footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#myTable');
    </script>
</body>

</html>