<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <h1>
            取得データ
            @if(isset($result))
            {{$result}}
            @endif
        </h1>
        <!-- All -->
        <form action="/x_x_x_masters" method="post" id="All">
            @csrf
            axreq:All<input type="hidden" name="axreq" value="All">
            <input type="submit" value="送信" form="All"><br>
        </form>

        <!-- Single -->
        <form action="/x_x_x_masters" method="post" id="Single">
            @csrf
            axreq:Single<input type="hidden" name="axreq" value="Single"><br>
            id:<input type="lavel" name="id" value="1">
            <input type="submit" value="送信" form="Single">
        </form>

        <!-- Single -->
        <form action="/x_x_x_masters" method="post" id="Update">
            @csrf
            axreq:Update<input type="hidden" name="axreq" value="Update"><br>
            id:<input type="lavel" name="id" value="1"><br>
            name:<input type="lavel" name="name" value=""><br>
            title:<input type="lavel" name="title" value=""><br>
            <input type="submit" value="送信" form="Update">
        </form>


        <!-- Single -->
        <form action="/x_x_x_masters" method="post" id="AddSingle">
            @csrf
            axreq:AddSingle<input type="hidden" name="axreq" value="AddSingle"><br>
            name:<input type="lavel" name="name" value=""><br>
            title:<input type="lavel" name="title" value=""><br>
            <input type="submit" value="送信" form="AddSingle">
        </form>
    </body>
</html>