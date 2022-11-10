@section('title', 'Insert Student')
@include('home')

@extends('footer')

    <div class="container_2">
      <div class="row">
        @foreach($students as $student)
          <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{{$student->nim}}</h5>
                <p class="card-text">Name: {{$student->name}}</p>
                <p class="card-text">Grade: {{$student->grade}}</p>

              <a href="/update/{{$student->id}}" class="btn">Edit</a>

                <form action="/delete/{{$student->id}}" method="POST">
                    @csrf
                    @method('delete')
                   <button class="btn">Delete</button> 
                </form>
              </div>
            </div>
          </div>
        @endforeach 
      </div>  
    </div>
</body>
</html>