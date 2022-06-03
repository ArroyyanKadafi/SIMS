<!DOCTYPE html>
<html>
<head>
	<title>SCHOOL MANAGEMENT INFORMATION SYSTEM</title>
    <link rel="stylesheet" href="/frontend/fontawesome-free-6/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="/frontend/img/desktop.png" type="image/gif"/>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
    <h5 class="text-center mt-3">Student Biodata <br> Eloquence Szerelem International Vocational Highschool <br> Years of learning 2022/2023 </h5><hr class="bg-dark">
	</center>
 
	    <table class="table table-bordered border-dark  text-center mt-3">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">SPN</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Department</th>                   
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $dataSiswa)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $dataSiswa->nis }}</td>
                    <td>{{ $dataSiswa->nama }}</td>
                    <td>{{ $dataSiswa->kelas }}</td>
                    <td>{{ $dataSiswa->jurusan}}</td>                         
                </tr>                       
                @endforeach                
            </tbody> 
    </body>
</html>