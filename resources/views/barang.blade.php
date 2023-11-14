<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Page Title</title>

<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">
<style>
</style>
<script src=""></script>
<body>


<div class="">
    <h1>Passing Data ke Views</h1>
    <div class=""></div>
    @foreach ($idbarang as $index=>$id)
    {{ $id." - ".$namabarang[$index] }} <br/>
    @endforeach
</div>



</body>
</html>