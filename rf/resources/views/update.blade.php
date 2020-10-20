<html>
<body>
<form  method="POST">
@csrf
<select name=id>
<option value=1>akash</option>
<option value=3>ankith</option>
<option value=4>madhu</option>
</select>
<input type=text name="name" placeholder="enter your name">
<br><br>
<input type=text name="address" placeholder="enter your addres">
<br><br>
<input type=text name="mobile" placeholder="enter your mbl number">
<br><br>

<button type="update" formaction="{{url('akash')}}">update</button>
</body>
</html>