<html>
    <head>
        <style type="text/css">
            .tg  {border-collapse:collapse;border-spacing:0;}
            .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
              overflow:hidden;padding:10px 5px;word-break:normal;}
            .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
              font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
            .tg .tg-0lax{text-align:left;vertical-align:top}
            </style>
    </head>
    <body>
        <h2 style="text-align: center;color:rgb(161, 212, 246)"><b>LIST OF USERS</b></h2>
                                    <table class="tg" style="padding-left:20%">
                                        <thead class="tg-0lax">
                                            <tr>
                                                <th style="font-weight: bold">#</th>
                                                <th style="font-weight: bold">Name</th>
                                                <th style="font-weight: bold">Email</th>
                                                <th style="font-weight: bold">Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                            {{$user->roles[0]->name}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
    </body>
</html>

