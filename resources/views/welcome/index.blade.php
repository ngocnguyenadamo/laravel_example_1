<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ex1</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref" style="margin-bottom:50px;">
            <div class="content">
                <div class="title m-b-md">
                    Laravel Example 1
                </div>
                <div>
                    - Neil Nguyen | Adamo - 
                </div>
            </div>
        </div>
        <hr>
        <div class="flex-center position-ref">
            <div class="content" style="width:100%; margin-bottom: 100px;">
                <h2> List of students </h2>
                
                <table border="1" style="width:50%; margin: 0 auto;">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Avartar</td>
                    </tr>
                    @foreach ($students As $key => $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>
                                @if ($value->avatar) 
                                    <img src="{{ Storage::url($value->avatar) }}" alt="{{ $value->avatar }}" width="300" heigh="300"/>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>

                <h2>Create new student</h2>
                <form action="/createStudent" method="post" enctype='multipart/form-data'>
                    @csrf
                    <label>Name</label>
                    <input type="text" name="name"/>
                    <label>Avatar</label>
                    <input type="file" name="avatar"/>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>
