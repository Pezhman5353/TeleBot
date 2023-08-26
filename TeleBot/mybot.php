<?php
/**
 * Telegram Bot example.
 * @author Gabriele Grillo <gabry.grillo@alice.it>
 * https://github.com/Eleirbag89/TelegramBotPHP
 * https://t.me/howCreateBot
 * 
 * https://api.telegram.org/bot6122399181:AAE9xmO-dZq3nsmqwzJqWhQVtUDyU9mmvVw/setWebhook?url=https://proxyfa.top/TeleBot/mybot.php
 * 
 */

include("Telegram.php");
date_default_timezone_set("asia/tehran");

// Set the bot TOKEN
$bot_id = '6122399181:AAE9xmO-dZq3nsmqwzJqWhQVtUDyU9mmvVw';

// Instances the class
$telegram = new Telegram($bot_id);





$meli = '1270883764';

function checkMeliCode($meli)
{

    $cDigitLast = substr($meli, strlen($meli) - 1);
    $fMeli = strval(intval($meli));

    if ((str_split($fMeli))[0] == "0" && !(8 <= strlen($fMeli) && strlen($fMeli) < 10))
        return false;

    $nineLeftDigits = substr($meli, 0, strlen($meli) - 1);

    $positionNumber = 10;
    $result = 0;

    foreach (str_split($nineLeftDigits) as $chr) {
        $digit = intval($chr);
        $result += $digit * $positionNumber;
        $positionNumber--;
    }

    $remain = $result % 11;

    $controllerNumber = $remain;

    if (2 <= $remain) {
        $controllerNumber = 11 - $remain;
    }

    return $cDigitLast == $controllerNumber;

}


//echo checkMeliCode($meli) ? 'معتبر' : 'نا معتبر';







//$result = $telegram->getData();

// Take text and chat_id from the message
$text = $telegram->Text();
$caption = $telegram->Caption();
$chat_id = $telegram->ChatID();
$username = $telegram->Username();
$name = $telegram->FirstName();
$family = $telegram->LastName();
$message_id = $telegram->MessageID();
$reply_to_message_id = $telegram->ReplyToMessageID();
$user_id = $telegram->UserID();
$replyUserId = $telegram->ReplyToMessageFromUserID();
$msgType = $telegram->getUpdateType();


//jdf
include("jdf.php");
$jdf_DateTime = jdate("l j F Y  ساعت h:i", time()); //// ساعت و تاریخ
$jdf_MessageTime = jdate("Y/m/d  ساعت H:i", time()); //// زمان ارسال پیام
$jdf_Unix = jdate("Y/n/j", time()); //// محاسبه سال تولد
$jdf_Yers = jdate("Y", time()); //// سال
$jdf_Monte = jdate("n", time()); /// ماه
$jdf_Date = jdate("z", time()); //// روز
$jdf_Hafte = jdate("W", time()); /// هفته
$jdf_RoozHafte = jdate("w", time()); /// روز هفته
$jdf_Fasl = jdate("b", time()); //// فصل
$call_Time = jdate("U", time()); //// Unix Time
$EN_Number = tr_num($text); //// تبدیل عدد به انگلیسی
$FA_Number = tr_num($text, 'fa'); //// تبدیل عدد به فارسی





$host = 'localhost';
$db = 'proxyfa1_uniDB';
$user = 'proxyfa1_uniUS';
$pass = 'Pezhman35153515';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}











//------------------------------------------------------------------------------------------------
// //---- SELECT
// $stmt = $pdo->prepare("SELECT * FROM نام_جدول");
// $stmt->execute();
// while ($row = $stmt->fetch()) {
//     // عملیات مورد نظر با ردیف‌های بازگشتی
//     // مثلاً echo $row['نام_ستون'];
// }
//------------------------------------------------------------------------------------------------
// //----  INSERT
// $stmt = $pdo->prepare("INSERT INTO نام_جدول (ستون1, ستون2) VALUES (?, ?)");
// $stmt->execute([$value1, $value2]);
//------------------------------------------------------------------------------------------------
// //---- UPDATE
// $stmt = $pdo->prepare("UPDATE نام_جدول SET ستون1 = ? WHERE شرط");
// $stmt->execute([$newValue]);
//------------------------------------------------------------------------------------------------
// //---- DELETE
// $stmt = $pdo->prepare("DELETE FROM نام_جدول WHERE شرط");
// $stmt->execute();

//------------------------------------------------------------------------------------------------
//---- تا زمانی که اینزرت با موفقیت انجام نشد برنامه منتظر میمونه
// $stmt = $pdo->prepare("INSERT INTO start_user(userID, symbol) VALUES (?,?)");
// $success = false;
// while (!$success) {
//     $stmt->execute([$chat_id, $text]);
//     if ($stmt->rowCount() > 0) {
//         $success = true;

//         $send = ['chat_id' => $chat_id, 'action' => "typing"];
//         $telegram->sendChatAction($send);

//         sleep(10);
//     } else {
//         // متوقف کردن برنامه به مدت زمان خاص
//         sleep(1); // توقف برنامه به مدت 1 ثانیه (اختیاری)
//     }
// }
// $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "OK");
// $telegram->sendMessage($content);
//------------------------------------------------------------------------------------------------
// ---- برنامه تایید اینزرت رو برمیگردونه
// $stmt = $pdo->prepare("INSERT INTO نام_جدول (ستون1, ستون2) VALUES (?, ?)");
// $stmt->execute([$value1, $value2]);

// if ($stmt->rowCount() > 0) {
//     echo "عملیات INSERT با موفقیت انجام شد.";
//     // ادامه برنامه...
// } else {
//     echo "مشکل در انجام عملیات INSERT.";
//     // پردازش خطا یا دستورات دیگر در صورت نیاز
// }
//------------------------------------------------------------------------------------------------
// ---- برنامه برای آپدیت تا زمانی که عملیات آپدیت انجام نشه منتظر میمونه
// $stmt = $pdo->prepare("UPDATE نام_جدول SET ستون1 = ? WHERE شرط");
// $stmt->execute([$newValue]);

// while ($stmt->rowCount() === 0) {
//     // منتظر بمانید
//     usleep(500000); // توقف برنامه به مدت 0.5 ثانیه (اختیاری)

//     // دوباره عملیات UPDATE را اجرا کنید
//     $stmt->execute([$newValue]);
// }

// // عملیات UPDATE با موفقیت انجام شد، ادامه برنامه را اجرا کنید
// echo "OK";
// // دستورات دیگر برنامه...
//------------------------------------------------------------------------------------------------
//---- برنامه تایید آپدیت رو برمیگردونه
// $stmt = $pdo->prepare("UPDATE نام_جدول SET ستون1 = ? WHERE شرط");
// $stmt->execute([$newValue]);

// if ($stmt->rowCount() > 0) {
//     echo "OK";
// } else {
//     echo "عملیات UPDATE با مشکل مواجه شد.";
// }
//------------------------------------------------------------------------------------------------
// ---- برنامه تایید دیلیت میده
// $stmt = $pdo->prepare("DELETE FROM نام_جدول WHERE شرط");
// $stmt->execute();

// if ($stmt->rowCount() > 0) {
//     echo "OK";
// } else {
//     echo "مشکل در انجام عملیات DELETE.";
// }
//------------------------------------------------------------------------------------------------
// ---- برنامه تا زمانی که دیلیت انجام نشد منتظر میمونه
// $stmt = $pdo->prepare("DELETE FROM نام_جدول WHERE شرط");
// $deleted = false;
// while (!$deleted) {
//     $stmt->execute();
//     if ($stmt->rowCount() > 0) {
//         $deleted = true;
//     } else {
//         // متوقف کردن برنامه به مدت زمان خاص
//         usleep(500000); // توقف برنامه به مدت 0.5 ثانیه (اختیاری)
//     }
// }
//------------------------------------------------------------------------------------------------
// ---- برای سلکت از دستور زیر استفاده میکنم
// $stmt = $pdo->prepare("SELECT ستون1, ستون2 FROM نام_جدول WHERE شرط");
// $stmt->execute();

// // برای دریافت یک ردیف از نتیجه
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
// echo $row['ستون1'];
// echo $row['ستون2'];

// // برای دریافت همه ردیف‌ها از نتیجه
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
// foreach ($rows as $row) {
//     echo $row['ستون1'];
//     echo $row['ستون2'];
// }
//------------------------------------------------------------------------------------------------
// ---- پس از تایید سلکت پیغام اوکی چاپ میشه
// $stmt = $pdo->prepare("SELECT ستون1, ستون2 FROM نام_جدول WHERE شرط");
// $stmt->execute();

// if ($stmt->rowCount() > 0) {
//     echo "OK";
// } else {
//     echo "مشکل در اجرای دستور SELECT.";
// }
//------------------------------------------------------------------------------------------------
//---- برنامه تا زمانی که فیلد مورد نظرو پیدا نکرد 30 ثانیه صبر میکنه و بعد ادامه برنامه
// $stmt = $pdo->prepare("SELECT ستون1, ستون2 FROM نام_جدول WHERE شرط");

// $start_time = time();
// $found = false;
// while (!$found && (time() - $start_time) <= 30) {
//     $stmt->execute();
//     $row = $stmt->fetch(PDO::FETCH_ASSOC);
//     if ($row) {
//         $found = true;
//     } else {
//         usleep(1000000); // توقف برنامه به مدت 1 ثانیه (اختیاری)
//     }
// }

// if ($found) {
//     echo "فیلد مورد نظر پیدا شد.";
//     // ادامه برنامه...
// } else {
//     echo "فیلد مورد نظر پیدا نشد.";
//     // برخورد با شرایط خطا یا خروج از برنامه
// }

// !empty($_POST['email']) 
// isset($_POST['email'])



$action_typing = ['chat_id' => $chat_id, 'action' => "typing"];




$UR_Query = $pdo->prepare("SELECT * FROM User_Register WHERE UR_Chatid = '$chat_id'");
$UR_Query->execute();
$rows_UR = $UR_Query->fetch(PDO::FETCH_ASSOC);



if ($rows_UR['UR_Chatid']) {
    $telegram->sendChatAction($action_typing);

    if ($rows_UR['UR_Name']) {

        if ($msgType == 'message' && $text == 'انتخاب واحد') {
            $content = array('chat_id' => $chat_id, 'text' => "گزینه انتخاب واحد را انتخاب کردید");
            $telegram->sendMessage($content);

        } elseif ($msgType == 'message' && $text == 'بدهی') {
            $content = array('chat_id' => $chat_id, 'text' => "گزینه بدهی را انتخاب کردید");
            $telegram->sendMessage($content);

        } elseif ($msgType == 'message' && $text == 'ارسال پیام به پشتیبانی') {
            $content = array('chat_id' => $chat_id, 'text' => "گزینه ارسال پیام به پشتیبانی را انتخاب کردید");
            $telegram->sendMessage($content);

        } else {
            $Home_key = json_encode([
                "keyboard" =>
                [
                    [['text' => 'بدهی'], ['text' => 'انتخاب واحد']],
                    [['text' => 'ارسال پیام به پشتیبانی']],
                ],
                "resize_keyboard" => true
            ]);

            $content = array('chat_id' => $chat_id, 'reply_markup' => $Home_key, 'text' => "عملیات مورد نظر خود را از قسمت زیر انتخاب کنید");
            $telegram->sendMessage($content);
        }


    } else {
        $Home_key = json_encode([
            "keyboard" =>
            [
                [['text' => 'ثبت نام جدید']],
            ],
            "resize_keyboard" => true
        ]);

        $content = array('chat_id' => $chat_id, 'reply_markup' => $Home_key, 'text' => "متن ثبت نام جدید");
        $telegram->sendMessage($content);
    }
} else {

    $telegram->sendChatAction($action_typing);

    // بررسی لول های ثبت نام
    $SR_Query = $pdo->prepare("SELECT * FROM Start_Register WHERE SR_Chatid = '$chat_id'");
    $SR_Query->execute();
    $rows_SR = $SR_Query->fetch(PDO::FETCH_ASSOC);

    // زمانی که از دکمه استارت برای ریست کردن وضعیت های کاربر استفاده میکنه
    if ($msgType == 'message' && $text == '/start') {
        if (isset($rows_SR['SR_Chatid'])) {
            // حذف یوزر قدیمی برای ثبت نام
            $Dstmt = $pdo->prepare("DELETE FROM Start_Register WHERE SR_Chatid = '$chat_id'");
            $Dstmt->execute();

            // ساخت یوزر جدید برای ثبت نام
            $Istmt = $pdo->prepare("INSERT INTO Start_Register(SR_Chatid) VALUES (?)");
            $Istmt->execute([$chat_id]);

            $start_key = json_encode([
                "keyboard" =>
                [
                    [['text' => 'ورود'], ['text' => "ثبت نام"]],
                ],
                "resize_keyboard" => true
            ]);

            $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "مورد نظر را انتخاب کنید");
            $telegram->sendMessage($content);
        } else {
            // ساخت یوزر جدید برای ثبت نام
            $Istmt = $pdo->prepare("INSERT INTO Start_Register(SR_Chatid) VALUES (?)");
            $Istmt->execute([$chat_id]);

            $start_key = json_encode([
                "keyboard" =>
                [
                    [['text' => 'ورود'], ['text' => "ثبت نام"]],
                ],
                "resize_keyboard" => true
            ]);

            $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "مورد نظر را انتخاب کنید");
            $telegram->sendMessage($content);
        }
    } else if ($rows_SR['SR_Step'] == 1) {
        if ($msgType == 'message' && $text == "ثبت نام") {

            $stmt = $pdo->prepare("UPDATE Start_Register SET SR_Step = ? WHERE SR_Chatid = '$chat_id'");
            $stmt->execute([2]);

            $start_key = json_encode([
                "keyboard" =>
                [
                    [['text' => 'بازگشت']],
                ],
                "resize_keyboard" => true
            ]);
            $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "ملی خود را وارد کنید.");
            $telegram->sendMessage($content);
        } else if ($msgType == 'message' && $text == "ورود") {
            $content = array('chat_id' => $chat_id, 'text' => "ورود زدی");
            $telegram->sendMessage($content);
        } else {
            $start_key = json_encode([
                "keyboard" =>
                [
                    [['text' => 'ورود'], ['text' => "ثبت نام"]],
                ],
                "resize_keyboard" => true
            ]);

            $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "از کیبرد زیر استفاده کن");
            $telegram->sendMessage($content);
        }

    } else if ($rows_SR['SR_Step'] == 2) {

        if ($msgType == 'message' && $text == "بازگشت") {

            $stmt = $pdo->prepare("UPDATE Start_Register SET SR_Step = ? WHERE SR_Chatid = '$chat_id'");
            $stmt->execute([1]);

            $start_key = json_encode([
                "keyboard" =>
                [
                    [['text' => 'ورود'], ['text' => "ثبت نام"]],
                ],
                "resize_keyboard" => true
            ]);

            $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "بازگشت به صفحه قبل");
            $telegram->sendMessage($content);
        } else if ($msgType == 'message' && strlen($EN_Number) == 10 && is_numeric($EN_Number) == 1) {
            if (checkMeliCode($EN_Number)) {
                // بررسی اینکه قبلا کد ملی در دیتابیس ثبت نام شده است یا خیر
                $UR_Query = $pdo->prepare("SELECT UR_Meli FROM User_Register WHERE UR_Meli = '$EN_Number'");
                $UR_Query->execute();
                $rows_UR = $UR_Query->fetch(PDO::FETCH_ASSOC);

                if ($rows_UR['UR_Meli'] == $EN_Number) {

                    $stmt = $pdo->prepare("UPDATE Start_Register SET SR_Step = ? WHERE SR_Chatid = '$chat_id'");
                    $stmt->execute([1]);

                    $start_key = json_encode([
                        "keyboard" =>
                        [
                            [['text' => 'ورود'], ['text' => "ثبت نام"]],
                        ],
                        "resize_keyboard" => true
                    ]);

                    $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "این کد ملی قبلا ثبت نام شده است از قسمت ورود وارد پنل خود شوید");
                    $telegram->sendMessage($content);

                } else {
                    $content = array('chat_id' => $chat_id, 'text' => "نام و نام خانوادگی خود را وارد کنید.");
                    $telegram->sendMessage($content);
                }
            } else {
                $content = array('chat_id' => $chat_id, 'text' => "همچین کد ملی در ثبت احوال وجود ندارد");
                $telegram->sendMessage($content);
            }

        } else if ($msgType == 'message') {
            if (is_numeric($EN_Number) != 1) {
                $start_key = json_encode([
                    "keyboard" =>
                    [
                        [['text' => 'بازگشت']],
                    ],
                    "resize_keyboard" => true
                ]);

                $content = array(
                    'chat_id' => $chat_id,
                    'reply_markup' => $start_key,
                    'text' => "کد ملی فقط شامل اعداد می باشد"
                );
                $telegram->sendMessage($content);
            } else if (strlen($EN_Number) != 10) {
                $start_key = json_encode([
                    "keyboard" =>
                    [
                        [['text' => 'بازگشت']],
                    ],
                    "resize_keyboard" => true
                ]);

                $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "کد ملی 10 کارکتر می باشد");
                $telegram->sendMessage($content);
            }
        } else {
            $start_key = json_encode([
                "keyboard" =>
                [
                    [['text' => 'بازگشت']],
                ],
                "resize_keyboard" => true
            ]);

            $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "کد ملی فقط شامل اعداد می باشد");
            $telegram->sendMessage($content);
        }
    }


}








// Orginal /start
// // زمانی که از دکمه استارت برای ریست کردن وضعیت های کاربر استفاده میکنه
// if ($msgType == 'message' && $text == '/start') {
//     // تنظیمات ثبت نام شده ریست میشه
//     if (isset($rows_UR['UR_Chatid'])) {
//         $content = array('chat_id' => $chat_id, 'text' => "$dd وجود دارد");
//         $telegram->sendMessage($content);
//     } else {
//         // تنظیمات یوزر ثیت نام نشده ریست میشه
//         $SR_Query = $pdo->prepare("SELECT * FROM Start_Register WHERE SR_Chatid = '$chat_id'");
//         $SR_Query->execute();
//         $rows_SR = $SR_Query->fetch(PDO::FETCH_ASSOC);

//         if (isset($rows_SR['SR_Chatid'])) {
//             // حذف یوزر قدیمی برای ثبت نام
//             $Dstmt = $pdo->prepare("DELETE FROM Start_Register WHERE SR_Chatid = '$chat_id'");
//             $Dstmt->execute();

//             // ساخت یوزر جدید برای ثبت نام
//             $Istmt = $pdo->prepare("INSERT INTO Start_Register(SR_Chatid) VALUES (?)");
//             $Istmt->execute([$chat_id]);

//             $start_key = json_encode([
//                 "keyboard" =>
//                 [
//                     [['text' => 'ورود'], ['text' => "ثبت نام"]],
//                 ],
//                 "resize_keyboard" => true
//             ]);

//             $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "مورد نظر را انتخاب کنید");
//             $telegram->sendMessage($content);
//         }
//     }
// }












































if ($msgType == 'message') {


    // $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "سلام داداش");
    // $telegram->sendMessage($content);

    //$stmt = $pdo->prepare("INSERT INTO start_user(userID, symbol) VALUES (?,?)");
    //$stmt->execute([$chat_id, $text]);


    // $option = array(
    //     array($telegram->buildKeyboardButton("ورود"), $telegram->buildKeyboardButton("ثبت نام")),
    //     //array($telegram->buildKeyboardButton("Button 3"), $telegram->buildKeyboardButton("Button 4"), $telegram->buildKeyboardButton("Button 5")),
    //     //array($telegram->buildKeyboardButton("Peezzhhmmaann"))
    // );
    // //$keyb = $telegram->buildKeyBoard($option, $onetime = false);
    // $keyb = $telegram->buildKeyBoard($option,$resize_keyboard = true);


    $start_key = json_encode([
        "keyboard" =>
        [
            [['text' => 'ورود'], ['text' => 'ثبت نام']],
        ],
        "resize_keyboard" => true
    ]);

    $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "");
    $telegram->sendMessage($content);


}

// InlineKeyBoard
$option = array(
    array($telegram->buildInlineKeyBoardButton("Button 1", $url = "http://link1.com"), $telegram->buildInlineKeyBoardButton("Button 2", $url = "http://link2.com")),
    array($telegram->buildInlineKeyBoardButton("Button 3", $url = "http://link3.com"), $telegram->buildInlineKeyBoardButton("Button 4", $url = "http://link4.com"), $telegram->buildInlineKeyBoardButton("Button 5", $url = "http://link5.com")),
    array($telegram->buildInlineKeyBoardButton("Button 6", $url = "http://link6.com"))
);
$keyb = $telegram->buildInlineKeyBoard($option);