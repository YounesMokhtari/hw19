

<form action="{{route('users.store')}}" method="post">
@csrf

<input type="text" placeholder="first name" name="first_name">
<input type="text" placeholder="last name" name="last_name">
<input type="email" placeholder="email" name="email">
<input type="text" placeholder="city" name="city">

<input type="submit">
</form>