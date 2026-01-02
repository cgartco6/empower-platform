import os

class PlatformBuilderAI:
    def build(self, plan):
        base = "output/afrihost_platform"
        os.makedirs(f"{base}/assets", exist_ok=True)

        files = {
            "index.php": self.index(),
            "login.php": self.login(),
            "register.php": self.register(),
            "dashboard.php": self.dashboard(),
            "course.php": self.course(),
            "create_course.php": self.create_course(),
            "create_lesson.php": self.create_lesson(),
            "payfast_checkout.php": self.payfast_checkout(),
            "payfast_itn.php": self.payfast_itn(),
            "eft_upload.php": self.eft_upload(),
            "admin_verify_eft.php": self.verify_eft(),
            "db.sql": self.database(),
            "assets/style.css": self.css()
        }

        for name, content in files.items():
            with open(f"{base}/{name}", "w") as f:
                f.write(content)

        return "Platform with payments & course builder generated"

    def index(self):
        return """<h1>Empower Platform</h1>
<a href="register.php">Register</a> | <a href="login.php">Login</a>"""

    def login(self):
        return """<?php session_start();
if($_POST){ $_SESSION['user']=1; $_SESSION['paid']=0; header("Location: dashboard.php"); }
?>
<form method="post">
<input name="email" placeholder="Email">
<input name="password" type="password" placeholder="Password">
<button>Login</button>
</form>"""

    def register(self):
        return """<form method="post">
<input name="email">
<input name="password" type="password">
<button>Register</button>
</form>"""

    def dashboard(self):
        return """<?php session_start(); if(!isset($_SESSION['user'])) die("Login required"); ?>
<h2>Dashboard</h2>
<a href="course.php?id=1">View Course</a><br>
<a href="payfast_checkout.php">Pay with PayFast</a><br>
<a href="eft_upload.php">Pay via EFT</a>"""

    def course(self):
        return """<?php session_start();
if(!isset($_SESSION['paid']) || $_SESSION['paid']!=1){
die("Course locked. Please pay.");
}
?>
<h2>Course Content</h2>
<p>Lesson 1: Welcome</p>"""

    def create_course(self):
        return """<?php
if($_POST){
file_put_contents("courses.txt", $_POST['title']."\\n", FILE_APPEND);
}
?>
<h3>Create Course</h3>
<form method="post">
<input name="title" placeholder="Course title">
<button>Create</button>
</form>"""

    def create_lesson(self):
        return """<?php
if($_POST){
file_put_contents("lessons.txt", $_POST['lesson']."\\n", FILE_APPEND);
}
?>
<h3>Add Lesson</h3>
<form method="post">
<textarea name="lesson"></textarea>
<button>Add</button>
</form>"""

    def payfast_checkout(self):
        return """<form action="https://www.payfast.co.za/eng/process" method="post">
<input type="hidden" name="merchant_id" value="YOUR_MERCHANT_ID">
<input type="hidden" name="merchant_key" value="YOUR_MERCHANT_KEY">
<input type="hidden" name="amount" value="199.00">
<input type="hidden" name="item_name" value="Course Access">
<input type="hidden" name="notify_url" value="https://yourdomain/payfast_itn.php">
<button>Pay R199</button>
</form>"""

    def payfast_itn(self):
        return """<?php
// BASIC PayFast ITN
$payment_status = $_POST['payment_status'] ?? '';
if($payment_status == 'COMPLETE'){
session_start();
$_SESSION['paid'] = 1;
}
?>"""

    def eft_upload(self):
        return """<?php
if($_FILES){
move_uploaded_file($_FILES['proof']['tmp_name'], "proofs/".$_FILES['proof']['name']);
}
?>
<h3>EFT Upload</h3>
<form method="post" enctype="multipart/form-data">
<input type="file" name="proof">
<button>Upload</button>
</form>"""

    def verify_eft(self):
        return """<?php
// Admin manually verifies EFT
session_start();
$_SESSION['paid'] = 1;
echo "User marked as paid";
?>"""

    def database(self):
        return """CREATE TABLE payments(
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
method VARCHAR(20),
status VARCHAR(20)
);"""

    def css(self):
        return """body{font-family:Arial;padding:20px;}
button{padding:10px;margin:5px;}"""
