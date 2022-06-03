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
		<h5>Eloquence Szerelem International Vocational Highschool</h5><hr class="bg-dark">        
        <h5 class="mt-3">Teacher Report</h5>	
	</center>
 
	    <table class="table table-bordered border-dark text-center mt-3">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">EIN</th>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Teacher Code</th>
                    <th scope="col">Honor every hour</th>                    
                </tr>
            </thead>
                <tbody>
                    @foreach($guru as $dataGuru)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $dataGuru->nip }}</td>
                          <td>{{ $dataGuru->nama }}</td>
                          <td>{{ $dataGuru->kode_guru }}</td>
                          <td>{{ $dataGuru->honor_perjam}}</td>                                                 
                    </tr>                       
                    @endforeach                 
                </tbody> 
    </body>
</html>