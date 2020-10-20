<html>
<body>
<form  method="POST">
@csrf
<input type=text name="name" placeholder="enter your name">
<br><br>
<input type=text name="address" placeholder="enter your addres">
<br><br>
<input type=text name="mobile" placeholder="enter your mbl number">
<br><br>
<button type="submit" formaction="{{url('submit')}}">Submit</button>
<button type="update" formaction="{{url('update')}}">update</button>
</body>
</html>
