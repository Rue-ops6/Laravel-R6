<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trashed classes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: "Lato", sans-serif;
    }
  </style>
</head>

<body>
  <main>
    <div class="container my-5">
      <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Trashed classes</h2>
        <table class="table table-hover">
          <thead>
            <tr class="table-dark">
              <th scope="col">Class Title</th>
              <th scope="col">Capacity</th>
              <th scope="col">Fulled</th>
              <th scope="col">Price</th>
              <th scope="col">Beginning Time</th>
              <th scope="col">Ending Time</th>
              <th scope="col">Edit</th>
              <th scope="col">Restore</th>
              <th scope="col">Permenant Delete</th>

            </tr>
          </thead>
          <tbody>

            @foreach ($classes as $class)
            <tr>
              <td scope="row"><a href="{{route('classes.details', $class['id'])}}">{{$class['classTitle']}}</a></td> <!--<td scope="row">{{$class['classTitle']}}</td>-->
              <td>{{$class['capacity']}}</td>
              <td>{{($class['fulled'] == 1) ? "yes" : "no"}}</td> <!-- <td>@if($class['fulled']== 1) yes @else no @endif</td> -->
              <td>{{$class['price']}} $</td>
              <td>{{$class['begTime']}}</td>
              <td>{{$class['endTime']}}</td>
              <td><a href="{{route('classes.edit', $class['id'])}}">Edit</a></td>
              <td>
                <form action="{{route('classes.restore', $class['id'])}}" method='POST'>
                  @csrf
                  @method("patch")
                  <button type="submit" class="btn btn-link m-0 p-0">Restore</button>
                </form>
              </td>
              <td> <form onclick="return confirm('Are you sure you want to delete?')" action="{{route('classes.destroy', $class['id'])}}" method='POST' >
                  @csrf
                  @method("delete")
                  <button type="submit" class="btn btn-link m-0 p-0">ForceDel</button>
                </form>
              </td>


            </tr> @endforeach


          </tbody>
        </table>
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>