<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holiday Packages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
   
  {{--   @dump($packages) --}}

  <div class="container">
      <div class="row row-cols-3">
        @foreach ($packages as $package)
        <div class="col">
        <div class="card p-5 my-5">
          <h2 class="title pb-3 text-center">{{ $package['title'] }}</h2>
          <h4><strong>Destination: </strong>{{ $package['destination'] }}</h4>
          <h5>From {{ $package['start'] }} - To {{ $package['end'] }}</h5>
          <p>{{ $package['description'] }}</p>
          <hr>
          <h5>Price: &#128; {{ $package['amount'] }}</h5>
      </div>
    </div>
        @endforeach
      
      </div>
  </div>
</body>
</html>