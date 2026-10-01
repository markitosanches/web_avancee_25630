{{include('layouts/header.php', {'title':'client'})}}
    <h1>Client Show</h1>
    <p><strong>Name: </strong>{{ client.name }}</p>
    <p><strong>Address: </strong>{{ client.address }}</p>
    <p><strong>Phone: </strong>{{ client.phone }}</p>
    <p><strong>Email: </strong>{{ client.email }}</p>
    <p><strong>Zip Code: </strong>{{ client.zip_code }}</p>
    <a href="client/edit?id={{client.id}}" class="btn">Edit</a>
    <!-- <form action="client-delete.php" method="post">
        <input type="hidden" name="id" value="<?=  $id;?>">
        <input type="submit" value="delete" class="btn red">
    </form> -->
{{include('layouts/footer.php')}}