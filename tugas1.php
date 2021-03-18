<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Formulir Nilai Siswa</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="form_nilai.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" name="nim" class="form-control">
                </div>
                <label for="">Mata Kuliah</label>
                <select class="form-select form-control" class="form-control" name="lesson">
                    <option selected>MatKul yang di pilih :</option>
                    <option value="WEB Programming">PKN</option>
                    <option value="Database">Database</option>
                    <option value="Statistika">Statiska</option>
                    <option value="PKN">Web Progamming</option>
                </select>
                <div class="form-group">
                    <label for=""> Nilai UTS</label>
                    <input type="text" name="uts" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Nilai UAS</label>
                    <input type="text" name="uas" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Nilai Penugasan</label>
                    <input type="text" name="assignment" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">
            </form>
            </div>

            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama :</li>
                    <li class="list-group-item">Nim :</li>
                    <li class="list-group-item">Mata Kuliah:</li>
                    <li class="list-group-item"> Nilai UTS : </li>
                    <li class="list-group-item">Nilai UAS : </li>
                    <li class="list-group-item">Nilai Penugasan </li>
                    <li class="list-group-item">Total Nilai :  </li>
                    <li class="list-group-item">Nilai dalam Alfabet: </li>
                    
                    
                </ul>
                </div>
            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 80 - 100</li>
                    <li class="list-group-item">B : 65 - 79</li>
                    <li class="list-group-item">C: 45 - 64</li>
                    <li class="list-group-item">D : 30 - 44 </li>
                    <li class="list-group-item">C : Dibawah 30 </li>
                    
                    
                </ul>
                </div>
        </div>
        
    </div>
</body>
</html>