<?php
use App\Student;

require_once __DIR__ . '/vendor/autoload.php';

$name = '';
$id = '';
$php = '';
$ruby='';
$java = '';
$nodejs = '';
$cplusplus = '';
$student = '';
$email = '';

if(isset($_POST['php'])){
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $php = $_POST['php'];
    $java = $_POST['java'];
    $nodejs = $_POST['nodejs'];
    $ruby = $_POST['ruby'];
    $cplusplus = $_POST['cplusplus'];
    
    $student = new Student($id, $name);
    $student->setMarks($php, $java, $nodejs, $ruby, $cplusplus);



/**Notification class sends email to the student after each result is computed
 * the email will contain a summary of the result: Final result and Remark
 * a link in the email will lead to a page of the complete result
 */

 $to = $email;
$subject = "Result";
 $message = 'Your performance based on the test is \n Final Result:'. $student->finalResult(). '\n Remark: '.$student->remark();

 mail($to,$subject,$message);

}
