<!DOCTYPE html>
<html>
<head>
    <title>SCHOOL MANAGEMENT INFORMATION SYSTEM</title>
    <link rel="stylesheet" href="/frontend/fontawesome-free-6/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="/frontend/img/desktop.png" type="image/gif" />
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="card border-dark">
                <div class="card-body">
                    <h5 class="text-center">Teacher Payroll<br> Eloquence Szerelem International Vocational Highschool <br> Years of learning 2022/2023 </h5><hr class="bg-dark">                                    
                    <span>Here we present a list of teacher payroll for :</span><hr>
                    <span>EIN                 : {{ $gaji->nip }} </span><hr>                   
                    <span>Teacher Name        : {{ $gaji->nama }} </span><hr>
                    <span>Ammount of Salary   : {{ $gaji->bayar }} </span><hr>
                    <p>So this notice we convey, for his attention we thank you.</p>
                    <span class="float-right mt-5">Canada, {{$gaji->tanggal}} <br>Treasurer <br><br><br><br> Roberto Bernard</span>
                </div>
            </div>
        </div>
    </div>



   





</body>
</html>

<style type="text/css">        
        .container .card {           
            width: 36rem;     
            height: 40rem;       
            margin-top: 5vh;
            margin-left: 25vh;
            /* margin-bottom: 10vh; */
            /* display: flex;            
            align-items: center; 
            justify-content: center; */
        }        
    </style>