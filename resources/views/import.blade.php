<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Test Import</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <div class="pt-4">
                <h2>Import your file</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" class="form-control" name="file_import">
                    <div class="pt-3">
                        <button type="submit" class="btn btn-outline-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>