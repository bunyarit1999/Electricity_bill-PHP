<?php
    require_once('electricity.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>
<body>

<div class="container"> <br>

  <div class="card text-center">
        <div class="card-header">
          <h5 class="card-header"> <i class="fa-solid fa-bolt"></i> เว็บไซต์คำนวณค่าไฟ</h5>
        </div>

        <div class="card-body">
            <p class="card-text">ค่าไฟหน่วยละ 4 บาท</p>
        </div>

        <form action=" " method="GET" class="row g-3">

            <div class="col-md-6">
                <label for="meter" class="form-label">มิเตอร์ไฟฟ้า เดือนปัจจุบัน</label>
                <input type="number" name="meter" value="<?=$meter?>" class="form-control" placeholder="กรุณาใส่มิเตอร์ไฟฟ้าเดือนปัจจุบัน ..." required>
            </div>

            <div class="col-md-6">
                <label for="meter2" class="form-label">มิเตอร์ไฟฟ้า เดือนที่แล้ว</label>
                <input type="number" name="meter2" value="<?=$meter2?>" class="form-control" placeholder="กรุณาใส่มิเตอร์ไฟฟ้าเดือนที่แล้ว ..." required>
            </div> 

            <span>หน่วยที่ได้ : <?=$total?> </span> 
            <span>ราคา : <?=$total2?> </span> 

            <p style="color:red"> <?=$error?>  </p> 

            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-outline-success">คำนวณค่าไฟฟ้า</button>
                <button class="btn btn-outline-danger" name="Delect">ล้างข้อมูล</button>
            </div>

        </form> 
    <br>

    </div>

</div>


</body>
</html>