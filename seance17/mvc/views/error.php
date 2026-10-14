{{ include('layouts/header.php', {'title': 'Error'})}}
<h1 class="text-danger">
    ERROR :( 
</h1>
<h2 class="text-danger">
    {{ msg }}
</h2>
{{ include('layouts/footer.php')}}