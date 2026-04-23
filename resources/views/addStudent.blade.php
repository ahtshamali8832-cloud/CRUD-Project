@include('header')
    <div class="container mt-5 p-4" id="form-id">
       <div class="row text-center">
            <div class="col-4">
                <h3>Student Form</h3>
            </div>
       </div>
       <div class="row d-flex justify-content-center">
        <div class="col-10">
            <form action="{{ route('Student.Add') }}" method="post">
                    @csrf
                <div class="row">
                    <div class="col-6">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control my-2" placeholder="Enter Name">
                    </div>
                    <div class="col-6">
                        <label for="father_name">Father's Name</label>
                        <input type="text" name="father_name" id="father_name" class="form-control my-2" placeholder="Enter Father's Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control my-2" placeholder="Enter Email">
                    </div>
                    <div class="col-6">
                        <label for="phone">Phone NO</label>
                        <input type="text" name="phone" id="phone" class="form-control my-2" placeholder="Enter Phone Number">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="class">Class</label>
                        <input type="text" name="class" id="class" class="form-control my-2" placeholder="Enter Class">
                    </div>
                    <div class="col-6">
                        <label for="roll_no">Roll NO</label>
                        <input type="text" name="roll_no" id="roll_no" class="form-control my-2" placeholder="Enter Roll Number">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex flex-row-reverse">
                        <input type="reset" value="Reset" class="btn btn-danger btn-sm ms-2">
                        <input type="submit" value="Submit" class="btn btn-primary btn-sm">
                    </div>
                </div>
                
            </form>
        </div>
       </div>
    </div>
</body>
</html>