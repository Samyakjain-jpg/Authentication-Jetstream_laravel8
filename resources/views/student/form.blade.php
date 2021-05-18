@if(session()->has("success"))
    <h3> {{ session("success") }} </h3>
@endif
<form method="post" action="store_student">
@csrf
<p>
Name: <input type="text" name="name">
</p>
<p>
Email: <input type="email" name="email">
</p>
<p>
Mobile: <input type="text" name="mobile">
</p>
<p>
<button type="submit">Submit</button>
</p>
</form>