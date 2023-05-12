<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Meeting</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- animation-->
    
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
    integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    
    {{-- icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
         body {
            background-color: #fbfbfb;
        }
    </style>
</head>
<body>
    @include('user.header-user')
    <div class="container">     
        <div class="card box-shadow mt-3 ">
            <div class="card-body">
                <form action="#" method="POST">
                    <table class="table table-hover table-striped table-bordered res">
                        <thead class="bg-darkblue text-white font-lucida">
                            <tr>
                                <th scope="col" colspan="2">Meeting Shedule</th>
                            </tr>
                        </thead>
                        <tbody class="font-verdana ">
                            <tr>
                                <td>
                                    <label for="meetingno">Meeting No</label>
                                    <input type="text" name="meetingno" placeholder="Enter Meeting No " required>
                                </td>
                                <td>
                                    <label for="venue">Venue</label>
                                    <input type="venue" name="venue" placeholder="Enter Place" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="date" class="col">Date</label>
                                    <input type="date" name="date" required>
                                </td>
                                <td>
                                    <label for="time">Time</label>
                                    <input type="time" name="time" placeholder="Enter time" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#" class="btn new-btn col-sm-12 col-md-4 col-lg-2"> Arrange Metting</a>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <h3 class="font-verdana mx-3">
            Previous Summary
        </h3>
        <table class="table table table-hover table-striped table-bordered" id="myTable">
            <thead class="bg-darkblue text-white font-lucida text-center ">
                <tr>
                    <th scope="col">Committee</th>
                    <th scope="col">No of Members</th>
                    <th scope="col">Meeting No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Agenda No</th>
                    <th scope="col">Resolution No</th>
                    <th scope="col">Attendance</th>
                    <th scope="col">Present Members</th>
                    <th scope="col">Agenda-Entry/Edit</th>
                    <th scope="col">Resolution-Entry/Edit</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody class="font-verdana text-bgdark text-center animate__animated  animate__fadeIn">
                <tr>

                    <td>IQAC3</td>
                    <td>11</td>
                    <td>03</td>
                    <td>01-03-2023</td>
                    <td>08</td>
                    <td>06</td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td>10</td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td><a href="#" class="btn new-btn-yellow btn-sm">Deny</a></td>
                </tr>
                <tr>
                    <td>IQAC4</td>
                    <td>13</td>
                    <td>03</td>
                    <td>01-03-2023</td>
                    <td>08</td>
                    <td>06</td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td>10</td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td><a href="#" class="btn new-btn-yellow btn-sm">Deny</a></td>
                </tr>
                <tr>
                    <td>IQAC5</td>
                    <td>1</td>
                    <td>03</td>
                    <td>01-03-2023</td>
                    <td>08</td>
                    <td>06</td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td>10</td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td><a href="#" class="btn new-btn-yellow btn-sm">Deny</a></td>
                </tr>
                <tr>
                    <td>IQAC12</td>
                    <td>50</td>
                    <td>03</td>
                    <td>01-03-2023</td>
                    <td>08</td>
                    <td>06</td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td>10</td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td><a href="#" class="btn new-btn-yellow btn-sm">Deny</a></td>
                </tr>
                <tr>
                    <td>IQAC78</td>
                    <td>32</td>
                    <td>03</td>
                    <td>01-03-2023</td>
                    <td>08</td>
                    <td>06</td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td>10</td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td><a href="#" class="btn new-btn btn-sm">Edit</a></td>
                    <td><a href="#" class="btn new-btn-yellow btn-sm">Deny</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer>
        @include('footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#myTable');
    </script>
</body>

</html>