<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commitee Management</title>

    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <style>
        /* .container{
    background-color: rgba(12, 12, 231, 0.937);
}

.fs-4 {
    color: white;
} */
        
        .container-fluid {
            height: 100px;
        }
        
        .row {
            background-color: #252258;
            height: 100%;
        }
        
        .row2 {
            margin-top: 10px;
            background-color: #252258;
            color: white;
        }
        
        .col>h1 {
            color: white;
            padding-top: 20px;
        }
        
        thead {
            background-color: rgba(249, 212, 117, 0.725);
        }
        
        .center {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <!-- STTRIPED AND HOVERED TABLE -->
        <div class="table-responsive">
            <table class="table table-group-divider table-striped table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>short name</th>
                        <th>effect_date</th>
                        <th>valid_upto</th>
                        <th>meeting_frequency</th>
                        <th>chair_person</th>
                        <th>secretary</th>
                        <th>Edit</th>
                        </tr>
                </thead>

                <tbody class="table-group-divider">
                    @foreach ($committees as $committee)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$committee->name}}</td>
                            <td>{{$committee->short_name}}</td>
                            <td>{{$committee->effect_date}}</td>
                            <td>{{$committee->valid_upto}}</td>
                            <td>{{$committee->meeting_frequency}}</td>
                            <td>{{$committee->chair_person}}</td>
                            <td>{{$committee->secratory}}</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#committeeModal_{{$committee->id}}">Edit</button>
                                <form method="POST">
                                    @csrf
                                    <div class="modal fade" id="committeeModal_{{$committee->id}}" tabindex="-1" aria-labelledby="committeeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="committeeModalLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" value="{{$committee->id}}">
                                                    <label for="" class="name">name</label>
                                                    <input type="text" name="name" placeholder="name" value="{{$committee->name}}">
                                                    <br>
                                                    <label for="" class="name">short name</label>
                                                    <input type="text" name="short name" placeholder="short name" value="{{$committee->short_name}}">
                                                    <br>
                                                    <label for="" class="name">effect_date</label>
                                                    <input type="text" name="effect_date" placeholder="effect_date" value="{{$committee->effect_date}}">
                                                    <br>
                                                    <label for="" class="name">valid_upto</label>
                                                    <input type="text" name="valid_upto" placeholder="valid_upto" value="{{$committee->valid_upto}}">
                                                    <br>
                                                    <label for="" class="name">meeting_frequency</label>
                                                    <input type="text" name="meeting_frequency" placeholder="meeting_frequency" value="{{$committee->meeting_frequency}}">
                                                    <br>
                                                    <label for="" class="name">chair_person</label>
                                                    <input type="text" name="chair_person" placeholder="chair_person" value="{{$committee->chair_person}}">
                                                    <br>
                                                    <label for="" class="name">secretary</label>
                                                    <input type="text" name="secratory" placeholder="secretary" value="{{$committee->secratory}}">
                                                    <br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <!-- <tr>
                        <td>1</td>
                        <td>Development commttiee</td>
                        <td>DC</td>
                        <td>21-07-2020</td>
                        <td>05-02-2024</td>
                        <td>10</td>
                        <td>10</td>
                        <td>1</td>
                        <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#committeeModal">Edit</button></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Guest Faculty commttiee</td>
                        <td>DFC</td>
                        <td>31-11-2021</td>
                        <td>05-12-2024</td>
                        <td>8</td>
                        <td>9</td>
                        <td>2</td>
                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Residential commttiee</td>
                        <td>RC</td>
                        <td>31-07-2020</td>
                        <td>11-12-2024</td>
                        <td>8</td>
                        <td>8</td>
                        <td>3</td>
                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Pre-payment post purchase commttiee</td>
                        <td>PPC</td>
                        <td>02-11-2020</td>
                        <td>01-05-2023</td>
                        <td>7</td>
                        <td>7</td>
                        <td>4</td>
                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Purchase commttiee</td>
                        <td>PC</td>
                        <td>03-08-2020</td>
                        <td>04-04-2023</td>
                        <td>6</td>
                        <td>6</td>
                        <td>3</td>
                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Maintaintance commttiee</td>
                        <td>MC</td>
                        <td>04-08-2020</td>
                        <td>08-04-2023</td>
                        <td>5</td>
                        <td>5</td>
                        <td>2</td>
                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Examination commttiee</td>
                        <td>EC</td>
                        <td>05-09-2019</td>
                        <td>07-06-2024</td>
                        <td>4</td>
                        <td>4</td>
                        <td>1</td>
                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>Time-Table commttiee</td>
                        <td>TC</td>
                        <td>04-11-2020</td>
                        <td>01-09-2023</td>
                        <td>5</td>
                        <td>5</td>
                        <td>2</td>
                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>Addmission commttiee</td>
                        <td>AC</td>
                        <td>09-01-2020</td>
                        <td>09-12-2024</td>
                        <td>4</td>
                        <td>2</td>
                        <td>1</td>
                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td>Library commttiee</td>
                        <td>LC</td>
                        <td>22-02-2020</td>
                        <td>03-07-2025</td>
                        <td>3</td>
                        <td>5</td>
                        <td>8</td>
                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                    </tr> -->

                </tbody>
            </table>
        </div>
        <!-- table div over -->

    </div>

    

</body>

</html>