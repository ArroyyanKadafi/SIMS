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
	<!-- <center>
		<h5>Eloquence Szerelem International Vocational Highschool</h5><hr class="bg-dark">
         <h5>Student Biodata</h5>
	</center> -->
 
    <div class="main-panel">          
        <div class="content-wrapper">
          <div class="row">
            <!-- <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-6"> --> 
                  <div class="col-lg-12">               
                    <div class="card border-dark">
                    <h5 class="text-center mt-3">Teacher Biodata <br> Eloquence Szerelem International Vocational Highschool <br> Years of learning 2022/2023 </h5><hr class="bg-dark">                            
                        
                        <!-- <img src="{{ asset('/images/') }}/user.png" class="rounded mx-auto d-block"> -->
                        
                        
                        <!-- <div class="card-body">                           -->
                        <div class="mb-3">
                                <label for="nama_guru" class="form-label ml-3">
                                 1. Teacher Name : {{ $guru->nama }}
                                </label><hr class="ml-3 mr-3 bg-secondary">
                            </div>
                            <div class="mb-3">
                                <label for="nip" class="form-label ml-3">
                                 2. EIN : {{ $guru->nip }} 
                                </label><hr class="ml-3 mr-3 bg-secondary">       
                            </div>              
                            <div class="mb-3">
                                <label for="kode_guru" class="form-label ml-3">
                                 3. Teacher Code : {{ $guru->kode_guru }}
                                </label><hr class="ml-3 mr-3 bg-secondary">  
                            </div>             
                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label ml-3">
                                4. Place of Birth :  {{ $guru->tempat_lahir }}
                                </label><hr class="ml-3 mr-3 bg-secondary">
                            </div>                            
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label ml-3">
                                5. Date of Birth :  {{ $guru->tanggal_lahir }}
                                </label><hr class="ml-3 mr-3 bg-secondary">
                            </div>
                            <div class="mb-3">                            
                               <label for="jk" class="form-label ml-3">
                                6. Gender : {{ $guru->jk }}
                                </label><hr class="ml-3 mr-3 bg-secondary">
                            </div>                        
                            <div class="mb-3">
                                <label for="alamat" class="form-label ml-3">
                                7. Address :  {{ $guru->alamat }}
                                </label><hr class="ml-3 mr-3 bg-secondary">
                            </div>           
                            <div class="mb-3">
                                <label for="honor_perjam" class="form-label ml-3">
                                8. Honor every hour : {{ $guru->honor_perjam }}
                                </label><hr class="ml-3 mr-3 bg-secondary">  
                            </div>                               
                <!-- </div>                         -->
              </div>
            </div>                  
          </div>
        </div>
    </body>
</html>


                            <div class="mb-3">                            
                               <label for="disabledSelect" class="form-label">Gender :</label>
                               <input class="form-control" type="text" value="{{ $guru->jk }}" aria-label="Disabled input example" disabled readonly>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Address :</label>
                                <input class="form-control" type="text" value="{{ $guru->alamat }}" aria-label="Disabled input example" disabled readonly>
                            </div>
                            <div class="mb-3">
                                <label for="honor_perjam" class="form-label">Honor every hour :</label>
                                <input class="form-control" type="text" value="{{ $guru->honor_perjam }}" aria-label="Disabled input example" disabled readonly>
                            </div> 