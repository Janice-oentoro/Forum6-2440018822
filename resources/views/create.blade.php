@section('title', 'Insert Student')
@include('home')

@extends('footer')

<h1>Insert Student</h1>
        <form action="/stores" method="POST">
          @csrf

            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>

            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="number" class="form-control" name="nim" id="nim" placeholder="Student NIM">
            </div>

            <div class="form-group">
                <label for="grade">Grade</label>
                <input type="text" class="form-control" name="grade" id="grade" placeholder="Grade">
              </div>
            
            <button class="btn btn-primary">Add Student</button>

        </form>
    </div>

</body>
</html>
