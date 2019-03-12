<html>
<head>

</head>
<body style="background-color:green">

<div>
    @include('layouts.sidebar')
    <form>
    <table border=1 width="100%" height="500px">
                <tr><th> sidebar</th>
                <th> <center> content </center> </th>     
        </table>  
    </form>
</div>

<div class="container">
    @yield('content')
</div>

</body>
</html>