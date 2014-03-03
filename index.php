<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="dist/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="dist/css/bootstrap-theme.min.css" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script type="text/javascript" src="/resume3/js/vendor/jquery.js"> </script>

<script type="text/javascript" src="dist/js/bootstrap.min.js"> </script>
<script type="text/javascript" src="lib/backbone.min.js"> </script>
<script type="text/javascript" src="lib/iCanHaz.js"> </script>

<script type="text/javascript" src="fieldguide.js">

</script>
<script type="text/html" id="searchResult">
<div>
{{pokeNumber}}: {{name}}
</div>
</script>
</head>
<script type="text/javascript">
var pokedexJson = <?php include('pokedex.json'); ?>
</script>
<body>
<div class="container">
<div class="row" id="pokesearch">
    <div class="col-md-12">
    Search
    <form class="form-inline" role="form">
        <div class="form-group">
        <input type="search" class="form-control" placeholder="Pokemon Name" id="poke-search-input" />
        <button type="submit" class="btn btn-default">Search</button>
        </div>
    </form>
    </div>
    <div class="col-md-12" id="poke-search-results">
    
    </div>
</div>
</div>
</body>
</html>