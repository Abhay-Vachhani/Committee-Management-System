<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Screen - 3</title>

    <link rel="stylesheet" href="{{url('style.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <style>

    body{
    background-color: transparent;
    background-attachment: fixed;
    
    }
    footer {
    position: fixed;
    width: 100%;
    bottom: 0;
	}
    
    </style>
</head>

<body>

    @include('user.header-user')
    <div class="container-fluid">
        <section class="form mt-5">
            <form action="#" method="post">
                <input type="hidden" value="#" name="meeting_id" />
                <div class="table-responsive">
                    <table class="table table-group-divider table-striped table-hover">
                        <thead class="bg-darkblue text-white font-lucida ">
                            <tr>
                                <th>Member Name</th>
                                <th>Designation</th>
                                <th>Commitee Designation</th>
                                <th class="center">Present</th>
                                <th class="center">Absent</th>
                                <th class="center">Leave of absence</th>
                                <th class="center">Online</th>
                            </tr>
                        </thead>

                        <tbody class="table-group-divider font-verdana">
                             {{-- @foreach ($members as $member) --> --}}
                            <tr>
                                <td>Dr.Dev Rupani</td>
                                <td>Head of Department</td>
                                <td>
                                     {{-- @if ($chair_person == $member->member_id)
                                    Chair Person
                                    @elseif ($sec == $member->member_id)
                                    Secratory
                                    @else
                                    Member
                                    @endif
                                    Committee --}}
                                </td>
                                <td class="center"><input type="radio" class="radio" name="_"
                                        value="1">
                                </td>
                                {{-- name="att_{{ $member->member_id }} --}}
                                <td class="center"><input type="radio" class="radio" name="_"
                                        value="-1">
                                </td>
                                <td class="center"><input type="radio" class="radio" name="_"
                                        value="0">
                                </td>
                                <td class="center"><input type="radio" class="radio" name="_"
                                        value="2">
                                </td>
                            </tr>
                             {{-- @endforeach  --}}
                        </tbody>
                    </table>
                </div>
                    <a class="btn bg-darkblue text-white btn-sm" href="#">save</a>
                <!-- table div over -->
            </form>
        </section>
    </div>
   <div class="mt-5"></div>
    @include('footer')
    </div>

    <!-- main div over -->
</body>

</html>