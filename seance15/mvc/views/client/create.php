{{ include('layouts/header.php', {'title': 'New client'})}}
        <!-- <form action="{{base}}/client/create" method="post"> -->
        <form method="post">
            <h2>New client</h2>
            <label>Name
                <input type="text" name="name">
            </label>
            <label>Address
                <input type="text" name="address">
            </label>
            <label>Zip Code
                <input type="text" name="zip_code">
            </label>
            <label>Phone
                <input type="text" name="phone">
            </label>
            <label>Email
                <input type="email" name="email">
            </label>
            <label>City
                <select name="city_id">
                    <option value="">Please Select a City</option>
                    {% for city in cities %}
                    <option value="{{city.id}}">{{city.city}}</option>
                    {% endfor %}
                </select>
            </label>
            <!-- <label>Keep connected
                <input type="checkbox" value="1" name="connected">
            </label> -->
            <input type="submit" class="btn" value="Save"> 
        </form>
{{ include('layouts/footer.php')}}