{{ include('layouts/header.php', {'title': 'New User'})}}

<form method="post">
    {% if errors is defined %}
    <div class="error">
        <ul>
            {% for error in errors %}
            <li>{{ error }}</li>
            {% endfor %}
        </ul>
    </div>
    {% endif %}
    <h2>Registartion</h2>
    <label>Name
        <input type="text" name="name" value="{{user.name}}">
    </label>
    <label>Username
        <input type="email" name="username" placeholder="Use your email" value="{{user.username}}">
    </label>
    <label>Password
        <input type="password" name="password">
    </label>
    <label>Privilege
       <select name="privilege_id">
            <option value="">Select privilege</option>
            {% for privilege in privileges %}
            <option value="{{privilege.id}}" {% if privilege.id == user.privilege_id %}selected{% endif %}>{{privilege.privilege}}</option>
            {% endfor %}
       </select>
    </label>
    <input type="submit" class="btn" value="Save">
</form>

{{ include('layouts/footer.php')}}