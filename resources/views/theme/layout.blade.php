<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commitee - Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
    <style>
       
        @media screen and (min-width: 600px ) {
                        .container .row h3 {
                            text-align: center
                        }
        }
        @media screen and (max-width: 600px ) {
                        .container .row h3 {
                            text-align: center;
                        }
        }

        body{
            box-sizing: border-box;
            /* overflow: hidden; */
            /* background-color: #f2f2f2; */
        }

        section{
            background-image: url('../img/bg.jpg');
            background-color: #cccccc;
            background-repeat: no-repeat ;
            background-size: cover;
            background-position: center;
            /* background-image: linear-gradient(rgb(255, 255, 255), rgb(147, 183, 255), rgb(255, 255, 255)); */
            /* background-image:radial-gradient(rgb(241, 241, 241),rgb(255, 185, 185)); */
    }
        
     .col-form-label{
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        font-size:1.4em;
        color: navy;
        /* font-weight: bolder; */
     }
     .bg-transparent{
        background-color: #252258 !important;
        color: white;
     }
     .card-body{
        background-color: aliceblue
     }
     /* .btn-member{
        background-color: #252258;
        color: white; 
     }
     .btn-member:hover{
        background-color: transparent;
        border: 2px solid #252258;
        color: #252258
    } */
    .btn-create-comittee{
        background-color: #252258;
        color: white; 
        font-size: larger;
    }
    .btn-create-comittee:hover{
        background-color: transparent;
        border: 2px solid #252258;
        color: #252258
     }
     .form-control,.form-select{
        padding: 10px;
        font-size: large;
     }
     .card{
        border: none;
        box-shadow:0px 0px 6px black;
     }
     .btn-grad {
            background-image: linear-gradient(to right, #314755 0%, #26a0da 51%, #314755 100%);
            margin: 10px;
            padding: 10px 30px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
            border: none;
        }

        .btn-grad:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }
        /*  */
     .btn-grad2 {
            background-image: linear-gradient(to right, #314755 0%, #26a0da 51%, #314755 100%);
            margin: 10px;
            padding: 10px 30px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
            border: none;
            margin: auto
        }

        .btn-grad2:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }
        .form-control,.form-select{
            background-color: transparent;
            border: 2px solid #252258;
        }
        select{
            font-family: Verdana, Geneva, Tahoma, sans-serif
        }
        .modal-body label{
            /* background-color: #efefef; */
            padding: 9px 10px;
            border: none;
            box-shadow: 0px 0 4px black;
            border-radius: 5px;
            margin-bottom: 20px;

        }
        .modal-body table th {
            background-color: #252258;
            color: white;
        }
        .modal-body{
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }
        .form-check-input:checked{
            background-color: #252258;
            border: transparent;
        }
        /*  */
        /* #member_data_table_previous{
            background-color: #252258 !important;
            color: white !important;
            border-radius: 4px;
            
        }
        #member_data_table_previous:hover{
            background-color: transparent !important ;
            color: #252258 !important;
            border:1px solid #252258;
            border-radius: 4px;

        }
        .paginate_button{
            background-color: #252258 !important;
            color: white !important;
        }

        .btn-color{
            background-color: #252258 !important;
            color: white !important;
            border-radius: 4px;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current{
            background-color: #252258 !important;
            color: white !important;
            border-radius: 4px;
        } */
        /*  */

        .btn{
            font-family: Verdana, Geneva, Tahoma, sans-serif !important ;
        }
        .new-btn{
            background-color: #252258;
            color: white;
            border: 1px solid #252258;
            border-radius: 4px;
            padding: 10px;
           
        }
        .new-btn:hover{
            border: 1px solid #252258;
            color: #252258;
        }

        .new-btn-reverse{
            background-color: #b18f40;
            color: white;
            border: 1px solid transparent;
            border-radius: 4px;
            padding: 8px;
        }
        .new-btn-reverse:hover{
            background-color:#95762d ;
            color: white;
        }
        #meeting_data_table_length{
            margin-bottom: 27px;
            font-size: 1.2em;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-left:20px
        }
        #meeting_data_table_filter{
            margin-bottom: 27px;
            font-size: 1.2em;
            margin-right: 45px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            
        }
    
    </style>
</head>
<body>
    @include('theme.header')
    <div id="root"></div>
    
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('toastify.js') }}"></script>

    <script>
        submitForm = (form)=>{
            console.log(form.action)
            console.log(form.method)
            
            let data = new URLSearchParams();
            for (const pair of new FormData(form)) {
                data.append(pair[0], pair[1]);
            }
            
            fetch(form.action, {
                method: form.method == 'post' ? 'POST' : 'GET',
                body: data,
                credentials: 'same-origin'
            }).then(async res => {
                var myWindow = window.open("", "MsgWindow", "width=800,height=600");
                // console.log(await res.text())
                myWindow.document.write(await res.text());
                // document.write(await res.text())
            }).catch(err => {
                console.log(err)
            })

            return false
        }
    </script>
    
    @yield('content')

    <link rel="stylesheet" href="{{ asset('toastify.css') }}">
    @isset($message)
        <script>
            let message = {!! json_encode($message) !!}
            if (message.type == 'default')
                toast(message.text, JSON.parse(message.options))
            else
                toast[message.type](message.text, JSON.parse(message.options))
        </script>
    @endisset
</body>

</html>