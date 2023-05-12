<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Screen - 4</title>
    {{-- include file --}}
    @include('title')
</head>
<div class="container">
    <!-- Header -->
    @include('user.header-user')
    <div class="table-responsive">
        <table class="table mt-3 table-bordered" id="myTable">
            <thead class="bg-darkblue text-white font-lucida">
                <tr>
                    <th class="col-2">Agenda No</th>
                    <th>Details</th>
                    <th class="text-center">Update</th>
                </tr>
            </thead>
            <tbody class="font-verdana">
                <tr>
                    <td class="bg-yellow bg-new">RC-7-7
                    </td>
                    <td class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th class="col-2">
                                        Title
                                    </th>
                                    <td>
                                        Project Planning and Implementation Strategy
                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-2">
                                        Discussion
                                    </th>
                                    <td>
                                        Make it a team effort. Everyone on your team wants the same thing: a
                                        successful
                                        project.
                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-2">
                                        Resolution
                                    </th>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-2">
                                        Action
                                    </th>
                                    <td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td class="text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn new-btn btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Modify
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="bg-new">RC-7-13
                    </td>
                    <td class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th class="col-2">
                                        Title
                                    </th>
                                    <td>
                                        qq
                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-2">
                                        Discussion
                                    </th>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-2">
                                        Resolution
                                    </th>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-2">
                                        Action
                                    </th>
                                    <td>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td class="text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn new-btn btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Modify
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RC-7-14
                    </td>
                    <td class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th class="col-2">
                                        Title
                                    </th>
                                    <td>
                                        Dev
                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-2">
                                        Discussion
                                    </th>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-2">
                                        Resolution
                                    </th>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="col-2">
                                        Action
                                    </th>
                                    <td>

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </td>
                    <td class="text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn new-btn btn-sm" disabled="" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Modify
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modify</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                <button type="button" class="btn new-btn-reverse btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn new-btn btn-sm">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

@include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    new DataTable('#myTable');
</script>
</body>

</html>