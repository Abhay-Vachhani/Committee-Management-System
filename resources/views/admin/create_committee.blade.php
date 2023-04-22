@extends('theme.layout')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <h3 class="fw-bold fs-1 " style="letter-spacing: 1px;word-spacing:1px;color:#252258;margin-bottom:20px;padding:10px;background-color:#b18f40;color:white">ADMIN LOGIN SCREEN</h3>
                </div>
                <form action="{{ route('committee.create') }}" method="POST" onsubmit="return submitForm(this)"> @csrf <div class="row">
                        <div class="col col-12 col-sm-12 col-md-12">
                            <div class="card border-success mb-3">
                                <div class="card-header bg-transparent border-success fw-semibold fs-4">Committee Constituion</div>
                                <div class="card-body text-success ">
                                    <div class="row g-3 align-items-center ">
                                        <div class="col-md-3 col-12">
                                            <label for="inputText" class="col-form-label">Type</label>
                                        </div>
                                        <div class="col-md-5 col-12 ">
                                            <select class="form-select" aria-label="Default select example" name="type">
                                                <option value="1">Statutory</option>
                                                <option value="0">Non Statutory</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-2 align-items-center ">
                                        <div class="col-md-3 col-12">
                                            <label for="inputText " class="col-form-label ">Name</label>
                                        </div>
                                        <div class="col-md-5 col-12 ">
                                            <input type="text " class="form-control " name="name" onkeyup="handleShortName(this)">
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-2 align-items-center ">
                                        <div class="col-md-3 col-12">
                                            <label for="inputText " class="col-form-label">Short Name</label>
                                        </div>
                                        <div class="col-md-5 col-12 ">
                                            <input type="text " class="form-control" name="short_name" id="short_name">
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-2 align-items-center ">
                                        <div class="col-md-3 col-12">
                                            <label for="inputText " class="col-form-label ">Members</label>
                                        </div>
                                        <div class="col-md-5 col-12 ">
                                            <button type="button" class="btn-grad" data-bs-toggle="modal" data-bs-target="#memberModal"> Select Members </button>
                                            <span class="text-dark" id="selected_member_count">&nbsp;&nbsp;0 member selected</span>
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-2 align-items-center ">
                                        <div class="col-md-3 col-12">
                                            <label for="inputText" class="col-form-label ">Effect Date</label>
                                        </div>
                                        <div class="col-md-5 col-12 ">
                                            <input type="datetime-local" name="effect_date " class="form-control">
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-2 align-items-center ">
                                        <div class="col-md-3 col-12">
                                            <label for="inputText " class="col-form-label">Meeting Frequency</label>
                                        </div>
                                        <div class="col-md-5 col-12 ">
                                            <input type="number" value="0" min="0" max="20" class="form-control" name="meeting_frequency">
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-2 align-items-center ">
                                        <div class="col-md-3 col-12">
                                            <label for="inputText " class="col-form-label ">Restructuring Date</label>
                                        </div>
                                        <div class="col-md-5 col-12 ">
                                            <input type="datetime-local" class="form-control" name="valid_upto">
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-2 align-items-center ">
                                        <div class="text-center btn-group-lg">
                                            <input type="submit" value="Create Committee" class="btn-grad2 ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col "></div>
            </div>
            <input type="hidden" id="selected_chair_person" name="selected_chair_person">
            <input type="hidden" id="selected_secratory" name="selected_secratory">
            <input type="hidden" id="selected_member" name="selected_member">
            </form>
        </div>
    </section>

    <div class="container-fluid table-responsive">
        <div class="mt-5">
            <table class="table text-center table-striped table-hover" style="border:1px solid rgb(223, 223, 223)" id="meeting_data_table">
                <thead style="background-color: #252258;color:white; font-family:Verdana, Geneva, Tahoma, sans-serif">
                    <tr style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
                        <th scope="col">Sr No.</th>
                        <th scope="col">Committee</th>
                        <th scope="col">No. of Members</th>
                        <th scope="col">Meeting No</th>
                        <th scope="col">Date</th>
                        <th scope="col">No of Agenda</th>
                        <th scope="col">No of Resolution</th>
                        <th scope="col">Present Members</th>
                        <th scope="col">Agenda and Resolution</th>
                        <th scope="col">Report</th>
                        <th scope="col">Status</th>
                        <th scope="col">Next Date</th>
                    </tr>
                </thead>
                <tbody class="small"> @foreach ($meetings as $meeting) <tr style="font-family: Verdana, Geneva, Tahoma, sans-serif ; font-size:1.2em">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $meeting->short_name }}</td>
                        <td>{{ $meeting->no_of_members }}</td>
                        <td>{{ $meeting->meeting_id }}</td>
                        <td>{{ $meeting->meeting_time }}</td>
                        <td>{{ $meeting->no_of_agendas }}</td>
                        <td>{{ $meeting->no_of_resolutions }}</td>
                        <td>{{ $meeting->present_members }}</td>
                        {{-- @foreach ($meeting as $key => $value) 
                                    
                                                        <td>{{$key}}-{{ $value }}</td> @endforeach --}} <td scope="col"></td>
                        <td scope="col">
                            <a class="btn new-btn-reverse " href="{{ route('admin.committeeConstitutionReport', ['committee_id'=>$meeting->committee_id]) }}">View / Print</a>
                        </td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                    </tr> @endforeach </tbody>
            </table>
        </div>
        <!-- Member Modal -->
        <div class="modal fade" id="memberModal" tabindex="-1" aria-labelledby="memberModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold fs-4" id="memberModalLabel"> Select Members </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped table-hover" id="member_data_table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Member Name</th>
                                    <th scope="col" class="text-center">Designation</th>
                                    <th scope="col" class="text-center">Chair Person</th>
                                    <th scope="col" class="text-center">Secratory</th>
                                    <th scope="col" class="text-center">Member</th>
                                </tr>
                            </thead>
                            <tbody id="members"> @foreach ($members as $member) <tr>
                                    <td>{{$member->name}}</td>
                                    <td>{{$member->designation}}</td>
                                    <td class="text-center">
                                        <input class="form-check-input" type="checkbox" onchange="checkBoxChecked(this)" id="chair_person_{{$member->id}}">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input" type="checkbox" onchange="checkBoxChecked(this)" id="secratory_{{$member->id}}">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input" type="checkbox" onchange="checkBoxChecked(this)" id="member_{{$member->id}}">
                                    </td>
                                </tr> @endforeach </tbody>
                        </table>
                        <script></script>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn new-btn" data-bs-dismiss="modal" onclick="getSelectedMembers()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report Modal -->
    <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="reportModalLabel"> Meeting Report </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <iframe src="" style="width: 100%; height: 1000px;"></iframe> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="getSelectedMembers()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function handleShortName(name) {
            short_name.value = name.value.split(' ').map(e => e[0]).filter(e => e !== undefined && e.toUpperCase() === e).join('')
        }

        function getSelectedMembers() {
            tableData = document.querySelectorAll('#members > tr > td > input');
            committeeMembers = {
                'chair_person': [],
                'secratory': [],
                'member': [],
            }
            tableData.forEach(checkBox => {
                if (checkBox.checked) {
                    if (checkBox.id.startsWith('chair_person')) {
                        id = checkBox.id.split('_')
                        id = id[id.length - 1]
                        committeeMembers['chair_person'].push(id)
                    } else if (checkBox.id.startsWith('secratory')) {
                        id = checkBox.id.split('_')
                        id = id[id.length - 1]
                        committeeMembers['secratory'].push(id)
                    } else if (checkBox.id.startsWith('member')) {
                        id = checkBox.id.split('_')
                        id = id[id.length - 1]
                        committeeMembers['member'].push(id)
                    }
                }
            });
            document.getElementById('selected_member_count').innerHTML = '&nbsp;' + committeeMembers['member'].length + ' member selected'
            document.getElementById('selected_chair_person').value = committeeMembers['chair_person'].toString()
            document.getElementById('selected_secratory').value = committeeMembers['secratory'].toString()
            document.getElementById('selected_member').value = committeeMembers['member'].toString()
            return false
        }
        checkBoxChecked = (e) => {
            id = e.id.split('_')
            role = id[0]
            id = id[id.length - 1]
            member = document.getElementById('member_' + id)
            if (role == 'secratory') {
                chair_person = document.getElementById('chair_person_' + id)
                if (chair_person.checked) chair_person.checked = false
                if (!member.checked) member.checked = true
            } else if (role == 'chair') {
                secratory = document.getElementById('secratory_' + id)
                if (secratory.checked) secratory.checked = false
                if (!member.checked) member.checked = true
            } else if (role == 'member') {
                if (!member.checked) {
                    chair_person = document.getElementById('chair_person_' + id)
                    secratory = document.getElementById('secratory_' + id)
                    chair_person.checked = false
                    secratory.checked = false
                }
            }
        }
        new DataTable('#meeting_data_table');
        new DataTable('#member_data_table');
    </script>
@endsection