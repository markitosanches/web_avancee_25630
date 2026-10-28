{{ include('layouts/header.php', {'title': 'Login'})}}

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
    <h2>Login</h2>

    <label>Username
        <input type="email" name="username" placeholder="Use your email" value="{{user.username}}">
    </label>
    <label>Password
        <input type="password" name="password">
    </label>

    <input type="submit" class="btn" value="Login">
</form>

{{ include('layouts/footer.php')}}