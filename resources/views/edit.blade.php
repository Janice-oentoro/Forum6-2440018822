@section('title', 'Edit Student')
@include('home')

@extends('footer')

<h1>Edit Student</h1>
        <form action="/update/{{$student->id}}" method="POST">
          @csrf
          @method('put')

            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" class="form-control" value="{{$student->name}}" name="name" id="name" placeholder="Name">
            </div>

            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="number" class="form-control" value="{{$student->nim}}" name="nim" id="nim" placeholder="Student NIM">
            </div>

            <div class="form-group">
                <label for="grade">Grade</label>
                <input type="text" class="form-control" value="{{$student->grade}}" name="grade" id="grade" placeholder="Grade">
              </div>
            
              <a href="/list" class="btn btn-success">Back</a>
            <button class="btn">Save Edit</button>

        </form>
    </div>

</body>
</html>