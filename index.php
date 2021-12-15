<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
</style>
<body class="container  bg-dark">
    <div class="container bg-dark card border-primary border-3 mt-4" style="width:550px">
        <div class="container" style="margin-top: 20px;">
            <!-- Text Field -->
            <div class="text-center mb-4 text-white">
                <h1 class=" display-5  text-uppercase fst-italic ">แบบฟอร์ม</h1>
            </div>
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text">เลขประชาชน</span>
                </div>
                <input type="text" placeholder="ป้อนเลขประชาชน" class="form-control" id="cardnumber">
            </div>
            <div class="input-group mb-1 ">
                <label class="input-group-text" for="sel1">เพศ</label>
                <select class=" form-control" id="sex">
                    <option disabled selected value=""> โปรดเลือกเพศ </option>
                    <option value="man">ชาย</option>
                    <option value="female">หญิง</option>
                    <option value="null">ไม่ระบุ</option>
                </select>
            </div>
            <div class="input-group mb-1 ">
                <div class="input-group-prepend">
                    <span class="input-group-text">ชื่อและนามสกุล</span>
                </div>
                <input type="text" placeholder="ป้อนชื่อ" class="form-control" id="fname">
                <input type="text" placeholder="ป้อนนามสกุล" class="form-control" id="lname">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="sel1">ศาสนา</label>
                <select class="form-control" id="religion">
                    <option disabled selected value="Buddhist">โปรดเลือกศาสนา</option>
                    <option value="Buddhist">พุทธ</option>
                    <option value="Christianity">คริสตร์</option>
                    <option value="islam">อิสลาม</option>
                    <option value="null">ไม่ระบุ</option>
                </select>
            </div>
            <div class="input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text">บ้านเลขที่</span>
                </div>
                <input type="text" placeholder="บ้านเลขที่" class="form-control" id="address">
                <div class="input-group-prepend">
                    <span class="input-group-text">หมู่ที่</span>
                </div>
                <input type="text" placeholder="ระบุหมู่" class="form-control" id="village">
            </div>
            <div class="input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text">ถนน</span>
                </div>
                <input type="text" placeholder="ระบุหรือไม่ก็ได้" class="form-control" id="road">
                <div class="input-group-prepend">
                    <span class="input-group-text">ตำบล/แขวง</span>
                </div>
                <input type="text" placeholder="ตำบล/แขวง" class="form-control" id="district">
            </div>
            <div class="input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text">อำเภอ/เขต</span>
                </div>
                <input type="text" placeholder="อำเภอ/เขต" class="form-control" id="city">
                <div class="input-group-prepend"></div>
                <label class="input-group-text" for="sel1">จังหวัด*</label>
                <select class="form-control" required id="province">
                    <option disabled selected value="">โปรดเลือกจังหวัด</option>
                    <optgroup label="ภาคใต้">
                        <option value="กระบี่">กระบี่</option>
                        <option value="ชุมพร">ชุมพร</option>
                        <option value="ตรัง">ตรัง</option>
                        <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
                        <option value="นราธิวาส">นราธิวาส</option>
                        <option value="ปัตตานี">ปัตตานี</option>
                        <option value="พังงา">พังงา</option>
                        <option value="พัทลุง">พัทลุง</option>
                        <option value="ภูเก็ต">ภูเก็ต</option>
                        <option value="ยะลา">ยะลา</option>
                        <option value="ระนอง">ระนอง</option>
                        <option value="สงขลา">สงขลา</option>
                        <option value="สตูล">สตูล</option>
                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                    </optgroup>
                    <optgroup label="ภาคกลาง">
                        <option value="ชัยนาท">ชัยนาท</option>
                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                        <option value="ลพบุรี">ลพบุรี</option>
                        <option value="สระบุรี">สระบุรี</option>
                        <option value="สิงห์บุรี">สิงห์บุรี</option>
                        <option value="อ่างทอง">อ่างทอง</option>
                    </optgroup>
                    <optgroup label="ภาคตะวันออก">
                        <option value="จันทบุรี">จันทบุรี</option>
                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                        <option value="ชลบุรี">ชลบุรี</option>
                        <option value="ตราด">ตราด</option>
                        <option value="นครนายก">นครนายก</option>
                        <option value="ปราจีนบุรี">ปราจีนบุรี</option>
                        <option value="ระยอง">ระยอง</option>
                        <option value="สระแก้ว">สระแก้ว</option>
                    </optgroup>
                    <optgroup label="ภาคตะวันออกเฉียงเหนือ">
                        <option value="กาฬสินธุ์">กาฬสินธุ์</option>
                        <option value="ขอนแก่น">ขอนแก่น</option>
                        <option value="ชัยภูมิ">ชัยภูมิ</option>
                        <option value="นครพนม">นครพนม</option>
                        <option value="นครราชสีมา">นครราชสีมา</option>
                        <option value="บึงกาฬ">บึงกาฬ</option>
                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                        <option value="มหาสารคาม">มหาสารคาม</option>
                        <option value="มุกดาหาร">มุกดาหาร</option>
                        <option value="ยโสธร">ยโสธร</option>
                        <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
                        <option value="เลย">เลย</option>
                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                        <option value="สกลนคร">สกลนคร</option>
                        <option value="สุรินทร์">สุรินทร์</option>
                        <option value="หนองคาย">หนองคาย</option>
                        <option value="หนองบัวลำภู">หนองบัวลำภู</option>
                        <option value="อำนาจเจริญ">อำนาจเจริญ</option>
                        <option value="อุดรธานี">อุดรธานี</option>
                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                    </optgroup>
                    <optgroup label="ภาคเหนือ">
                        <option value="กำแพงเพชร">กำแพงเพชร</option>
                        <option value="เชียงราย">เชียงราย</option>
                        <option value="เชียงใหม่">เชียงใหม่</option>
                        <option value="ตาก">ตาก</option>
                        <option value="นครสวรรค์">นครสวรรค์</option>
                        <option value="น่าน">น่าน</option>
                        <option value="พะเยา">พะเยา</option>
                        <option value="พิจิตร">พิจิตร</option>
                        <option value="พิษณุโลก">พิษณุโลก</option>
                        <option value="เพชรบูรณ์">เพชรบูรณ์</option>
                        <option value="แพร่">แพร่</option>
                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                        <option value="ลำปาง">ลำปาง</option>
                        <option value="ลำพูน">ลำพูน</option>
                        <option value="สุโขทัย">สุโขทัย</option>
                        <option value="อุตรดิตถ์">อุตรดิตถ์</option>
                        <option value="อุทัยธานี">อุทัยธานี</option>
                    </optgroup>
                    <optgroup label="กรุงเทพฯและปริมณฑล">
                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                        <option value="นครปฐม">นครปฐม</option>
                        <option value="นนทบุรี">นนทบุรี</option>
                        <option value="ปทุมธานี">ปทุมธานี</option>
                        <option value="สมุทรปราการ">สมุทรปราการ</option>
                        <option value="สมุทรสาคร">สมุทรสาคร</option>
                    </optgroup>
                    <optgroup label="ภาคตะวันตก">
                        <option value="กาญจนบุรี">กาญจนบุรี</option>
                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                        <option value="เพชรบุรี">เพชรบุรี</option>
                        <option value="ราชบุรี">ราชบุรี</option>
                        <option value="สมุทรสงคราม">สมุทรสงคราม</option>
                        <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                    </optgroup>
                </select>
                </select>
            </div>
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text">รหัสไปรษณีย์</span>
                </div>
                <input type="text" placeholder="รหัสไปรษณีย์" class="form-control" id="postNumber" min="1000" max="9999">
            </div>
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text">โทรศัพท์บ้าน</span>
                </div>
                <input type="text" placeholder="ระบุหรือไม่ก็ได้" class="form-control" id="homePhone">
            </div>
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text">เบอร์โทรศัพท์</span>
                </div>
                <input type="text" placeholder="0xx-xxx-xxx-x" class="form-control" id="phoneNumber">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="majer">สาขาที่ชื่นชอบ</label>
                </div>
                <select class="form-control" id="majer">
                    <option disabled selected value="">เลือกสาขาที่ชื่นชอบ</option>
                    <option value="MTA">เทคโนโลยีมัลติมีเดีย แอนิเมชั่น และเกม</option>
                    <option value="ITD">เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล</option>
                    <option value="DCM">ดิจิทัลคอนเทนต์และสื่อ</option>
                    <option value="IMI">นวัตกรรมสารสนเทศทางการแพทย์</option>
                    <option value="DCA">นิเทศศาสตร์ดิจิทัล</option>
                </select>
            </div>
            <div class="d-grid gap-2 ">
                <button  id="dataSubmit" class="btn text-white  btn-outline-success mt-3 mb-4" type="button">
                    <h5 class=" mb-0"> Submit </h5>
                </button>
            </div>
        </div>
    </div>
    </div>
</body>
<script>
    $(() => {
        $("#dataSubmit").click(() => {
            var obj = $.parseJSON(`{ 
                "personal information": {
                    "Idcardnumber": "${$("#cardnumber").val()}", 
                    "Sex":"${$("#sex").val()}", 
                    "FristName": "${$("#fname").val()}", 
                    "LastName": "${$("#lname").val()}", 
                    "Religion": "${$("#religion").val()}",
                    "MyfavoriteMajer": "${$("#majer").val()}"
                    },
                "Address": {
                    "HomeNumber":"${$("#address").val()}", 
                    "Village": "${$("#village").val()}", 
                    "Road": "${$("#road").val()}", 
                    "District": "${$("#district").val()}", 
                    "City": "${$("#city").val()}", 
                    "Province": "${$("#province").val()}", 
                    "PostNumber": "${$("#postNumber").val()}"
                },
                "phoneNumbers":{
                    "HomePhone":"${$("#homePhone").val()}", 
                    "PhoneNumber": "${$("#phoneNumber").val()}"
                }
                }`);
                console.log(obj);

                Swal.fire({
                    title: 'ยืนยันข้อมูลเสร็จเรียนร้อย',
                    width: 600,
                    padding: '3em',
                    color: 'rgb(0, 0, 0)',
                    background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
                    backdrop: ` rgb(0, 2, 68,0.9) url("https://sweetalert2.github.io/images/nyan-cat.gif") center top  no-repeat `,
                    
                })
            }); 
        })
</script>
</html>
