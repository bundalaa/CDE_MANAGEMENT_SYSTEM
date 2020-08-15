<html>
    <head>
        <style type="text/css">
            .tg  {border-collapse:collapse;border-spacing:0;}
            .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
              overflow:hidden;padding:10px 70px;word-break:normal;}
            .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
              font-weight:normal;overflow:hidden;padding:10px 70px;word-break:normal;}
            .tg .tg-0lax{text-align:left;vertical-align:top}
            </style>
    </head>
    <body>
        <h2 style="text-align: center"><b>List of Challenges</b></h2>
                                    <table class="tg" style="padding-left:10%">
                                        <thead class="tg-0lax">
                                            <tr>
                                                <th style="font-weight: bold">#</th>
                                                <th style="font-weight: bold">Name</th>
                                                <th style="font-weight: bold">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Challenges as $Challenge)
                                            <tr>
                                                <td>{{ $Challenge->id }}</td>
                                                <td>{{ $Challenge->name }}</td>
                                                <td>{{ $Challenge->description }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
    </body>
</html>

