{{ include('layouts/header.php', {title: 'Clients'})}}
        <h1>Clients</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Zip Code</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                {% for client in clients %}
                <tr>
                    <td>{{ client.name }}</td>
                    <td>{{ client.address }}</td>
                    <td>{{ client.zip_code }}</td>
                    <td>{{ client.phone }}</td>
                    <td>{{ client.email }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
        <div style="margin-top:25px;">
            <a href="{{base}}/client/create" class="btn">New Client</a>
        </div>
        
        {# commentaire #}
{{ include('layouts/footer.php')}}