<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>
<body class="bg-light">
     
<div class="container d-grid gap-2 col-6 mx-auto">
    <br>
    <h2>Begin search...</h2>
  <br>
    <input class="typeahead form-control" id="search" type="text">
</div>
     
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
  
    $('#search').typeahead({
            source: function (query, process) {
                return $.get(path, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
  
</script>
     
</body>
<footer class="position-absolute top-100 start-50 translate-middle">Powered by <a href="https://medium.com/@fleelycodes">Fleely codes</a></footer>
</html>