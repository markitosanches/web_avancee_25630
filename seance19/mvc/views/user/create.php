{{ include('layouts/header.php', {'title': 'New User'})}}

<form method="post">
    <h2>Registartion</h2>
    <label>Name
        <input type="text" name="name">
    </label>
    <label>Username
        <input type="email" name="username" placeholder="Use your email">
    </label>
    <label>Password
        <input type="password" name="password">
    </label>
    <label>Privilege
       <select name="privilege_id">
            <option value="">Select privilege</option>
            {% for privilege in privileges %}
            <option value="{{privilege.id}}">{{privilege.privilege}}</option>
            {% endfor %}
       </select>
    </label>
    <input type="submit" class="btn" value="Save">
</form>

{{ include('layouts/footer.php')}}