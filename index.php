<?php
  include ('main.html');

  if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['send'])) {
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $is_smoke = (isset($_POST['is_smoke']))? 'Курю' : 'Не имею';

    $compare_fio = preg_match('/([А-Яа-я ]+)/u',$fio);
    $compare_email = preg_match('/(.+@.+\..+)/u',$email);

    if(isset($fio) and isset($email)){
        if($compare_fio==1 and $compare_email==1){
            echo <<<EOT
            <div class='info_table'>
                <table class='table table-hover'>
                    <tr>
                    <td>ФИО</td><td>$fio</td>
                    </tr>
                    <tr>
                    <td>E-mail</td><td>$email</td>
                    </tr>
                    <tr>
                    <td>Возраст</td><td>$age</td>
                    </tr>
                    <tr>
                    <td>Пол</td><td>$gender</td>
                    </tr>
                    <tr>
                    <td>Вредные привычки</td><td>$is_smoke</td>
                    </tr>
                </table>
                <input type='button' onClick="window.location.href=window.location.href" class='btn next btn-success  pull-right' value='Ввести еще раз' />
            </div>
EOT;
        }else{
            echo "<div class='info_table'><div class='alert alert-danger alert-dismissible' style='width: 350px;' role='alert'>
             Проверьте правильность ввода данных!
         </div></div>";
        }
    }else{
        echo "<div class='info_table'><div class='alert alert-danger alert-dismissible' style='width: 350px;' role='alert'>
             Поля 'Фамилия Имя' и 'Email' обязательны для заполнения
         </div></div>";
    }
  }
  include ('footer.html');


