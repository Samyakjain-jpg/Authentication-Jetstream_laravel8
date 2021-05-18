<form method="post" action="/submitEditstudent">
@csrf
  @if(session()->has ("success"))
    <div class="alert alert-success">
    {{ session("success") }}
    </div>    
  @endif
<input type="hidden" value="{{ $student->id }}" name="student_id"/>
<p>
Name: <input type="text" name="name" value="{{ $student->name }}">
</p>
<p>
Email: <input type="email" name="email" value="{{ $student->email }}">
</p>
<p>
Mobile: <input type="text" name="mobile" value="{{ $student->mobile }}">
</p>
<p>
<button type="submit">Update</button>
</p>
</form>