<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Screen</title>
    {{--
    <link rel="stylesheet" type="text/css" href="style.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Admin Login Screen</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card border-success mb-3">
                    <div class="card-header bg-transparent border-success ">Committee Constituion</div>
                    <div class="card-body text-success ">
                        <div class="row g-3 align-items-center ">
                            <div class="col-2 ">
                                <label for="inputText " class="col-form-label ">Type</label>
                            </div>
                            <div class="col-5 ">
                                <select class="form-select" aria-label="Default select example" name="type">
                                    <option value="1">Statutory</option>
                                    <option value="0">Non Statutory</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 mt-2 align-items-center ">
                            <div class="col-2 ">
                                <label for="inputText " class="col-form-label ">Name</label>
                            </div>
                            <div class="col-5 ">
                                <input type="text " class="form-control " name="name">
                            </div>

                        </div>
                        <div class="row g-3 mt-2 align-items-center ">
                            <div class="col-2 ">
                                <label for="inputText " class="col-form-label ">Short Name</label>
                            </div>
                            <div class="col-5 ">
                                <input type="text " class="form-control " name="short_name">
                            </div>

                            <div class="col-3">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#memberModal">
                                    Add Committee
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col ">

            </div>
        </div>

        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Committee</th>
                    <th scope="col">No. of Members</th>
                    <th scope="col">Meeting No</th>
                    <th scope="col">Date</th>
                    <th scope="col">No of Agenda</th>
                    <th scope="col">No of Resolution</th>
                    <th scope="col">Present Members</th>
                    <th scope="col">Agenda Entry / Edit</th>
                    <th scope="col">Resolution Entry / Edit</th>
                    <th scope="col">Status</th>
                    <th scope="col">Next Date</th>
                </tr>
            </thead>
            <tbody class="small">
                @foreach ($meetings as $meeting)
                    <tr>
                        @foreach ($meeting as $key => $value)
                            <td>{{ $value }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Modal -->
        {{-- <div class="modal fade" id="memberModal" tabindex="-1" aria-labelledby="memberModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="memberModalLabel">
                            Select Members
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Member Id</th>
                                        <th scope="col" class="text-center">Member Name</th>
                                        <th scope="col" class="text-center">Designation</th>
                                        <th scope="col" class="text-center">Chair Person</th>
                                        <th scope="col" class="text-center">Secratory</th>
                                        <th scope="col" class="text-center">Member</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $member)
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="text" value="{{$member->id}}">
                                        </td>
                                        <td>{{$member->name}}</td>
                                        <td>{{$member->designation}}</td>
                                        <td class="text-center">
                                            <input class="form-check-input" type="checkbox"
                                                onchange="checkBoxChecked(this)" id="chair_person_{{$member->id}}">
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input" type="checkbox"
                                                onchange="checkBoxChecked(this)" id="secratory_{{$member->id}}">
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input" type="checkbox"
                                                onchange="checkBoxChecked(this)" id="member_{{$member->id}}">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                        <script>
                            checkBoxChecked = (e) => {
                                id = e.id.split('_')
                                role = id[0]
                                id = id[id.length - 1]

                                member = document.getElementById('member_' + id)

                                if (role == 'secratory') {
                                    chair_person = document.getElementById('chair_person_' + id)
                                    if (chair_person.checked)
                                        chair_person.checked = false
                                    if (!member.checked)
                                        member.checked = true
                                }
                                else if (role == 'chair') {
                                    secratory = document.getElementById('secratory_' + id)
                                    if (secratory.checked)
                                        secratory.checked = false
                                    if (!member.checked)
                                        member.checked = true
                                }
                                else if (role == 'member') {
                                    if (!member.checked) {
                                        chair_person = document.getElementById('chair_person_' + id)
                                        secratory = document.getElementById('secratory_' + id)
                                        chair_person.checked = false
                                        secratory.checked = false
                                    }
                                }
                            }
                        </script>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    {{--
    <script async src="https://cdn.jsdelivr.net/npm/es-module-shims@1/dist/es-module-shims.min.js"
        crossorigin="anonymous"></script> --}}
    {{--
    <script type="importmap">
        { "imports": { "@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/esm/popper.min.js", "bootstrap": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.esm.min.js" } }
    </script>
    <script type="module">
        import * as bootstrap from 'bootstrap';
        const myModal = new bootstrap.Modal(document.getElementById('memberModal'), {});
        myModal.show()
    </script> --}}
</body>

</html>