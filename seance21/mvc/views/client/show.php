{{include('layouts/header.php', {'title':'client'})}}
    <h1>Client Show</h1>
    <p><strong>Name: </strong>{{ client.name }}</p>
    <p><strong>Address: </strong>{{ client.address }}</p>
    <p><strong>Phone: </strong>{{ client.phone }}</p>
    <p><strong>Email: </strong>{{ client.email }}</p>
    <p><strong>Zip Code: </strong>{{ client.zip_code }}</p>
    <p><strong>City: </strong>{{ cityName }}</p>
    {% if session.user_privilege == 1 %}
    <a href="{{base}}/client/edit?id={{client.id}}" class="btn">Edit</a>
    {% endif %}
    <form action="{{base}}/client/delete" method="post">
        <input type="hidden" name="id" value="{{ client.id }}">
        <input type="submit" value="delete" class="btn-danger">
    </form>
{{include('layouts/footer.php')}}