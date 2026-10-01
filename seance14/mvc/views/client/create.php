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
                <input type="text" name="email">
            </label>
            <input type="submit" class="btn" value="Save"> 
        </form>
{{ include('layouts/footer.php')}}