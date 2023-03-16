<?php
//assosiative array
// $user = ['email'=> 'user@gmail.com','password'=> '123','username'=>'jasia','phone'=>'1089278146846'];

// $user = 'admin@gmail.com';
// var_dump($user);

//multidiamentional array

// $user = [
//     'contact'=>[
//         'phone'=> [
//          '099379025056',
//          '892148651586',
//         ],
//         'email'=>[
//             'admin@gmail.com',
//             'user@gmail.com',
//         ],
//     ],
//     'name'=>'jasia',
//     'password'=>'123',

//     'socialLinks' =>[
//         'facebook' => 'facebook.com',
//         'twitter' => 'twitter.com',
//         'instra' => [
//             'personal' => 'me.instra.com',
//             'fake' => 'fake.com',
//         ]
//     ]
// ];
// echo "<pre>";
// var_dump($user);
// echo "</pre>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo $user['socialLinks']['instra']['fake'];

//strtoupper

//$name = 'danie crossing';
//echo strtoupper($name);
//echo ucwords($name);
// $email = 'DanielCrossing@gmail.com';
// echo strtolower($email);

// $name = 'daniel crossing';
// echo strrev($name);

//stripos

// $sentence = 'I am Daniel';
// var_dump(stripos($sentence, 'daniel'));


// $name = "I am Daniel";
// $replace = str_replace('Daniel', 'Jasia', $name);
// echo $replace;

// $password = '     483758979    ';
// if(trim($password) == '483758979'){
//     echo 'Login';
// }else{
//     echo 'Incorrect';
// }

// $sentence = "I am Daniel.I am 25 years old.";

// $array = ['i' , 'am' , 'Daniel'];

// $string = implode(' ' , $array);
// echo $string;

$psk = '123';
//echo strlen(md5($psk));
echo strlen(sha1($psk));

// HW-1 GUESS GAME

// function guessWord($gameword){
//     if((str_shuffle($gameword)) == 'playgame'){
//         echo "you win the game";
//     }
//     else{
//         echo "you try again";
//     }
//     }
//     guessWord('emagyalp');
    

// HW-2 VALID MAIL CHECKING

// $email = 'jasiameher@gmail';
// if(strpos($email , '@')){
    
//     if(strpos($email , '.com')){
//         echo "This is valid email";
//     }else{
//         echo "This is invalid email";
//     }
// }else{
//    echo " pls add @ sign";
// }



// HW-3 FILE EXTENTION CHECK

// $img = 'user.jpg.xlsx.png';
// $img_array = explode('.', $img);
// $file_extention = end($img_array);
// if($file_extention == 'png'){
//     echo " We will accept File";
// }else{
//     echo " We will not accept File";
// }


//HW-4 CHARECTER LENGTH

// $msg = 'paragraph';
// echo strlen($msg);

// if ((strlen($msg )>=4) && (strlen($msg )<=10))
// {
//   echo "The string is acceptable";
// }else{
// echo "The string is not acceptable";
// }