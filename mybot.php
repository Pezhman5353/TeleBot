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
//---- برنامه تایید اینزرت رو برمیگردونه
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





$stmt = $pdo->prepare("SELECT * FROM statusUser WHERE chatId = '$chat_id'");
$stmt->execute();
$rows_statusUser = $stmt->fetch(PDO::FETCH_ASSOC);

$action_typing = ['chat_id' => $chat_id, 'action' => "typing"];


if ($rows_statusUser['chatId']) {
    $telegram->sendChatAction($action_typing);

    if ($rows_statusUser['active']) {

        if ($msgType == 'message' && $text == 'Dانتخاب واحد') {
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


    if ($msgType == 'message' && $text == 'ثبت نام ') {
        $start_key = json_encode([
            "keyboard" =>
            [
                [['text' => 'قبول شرایط ']],
                [['text' => 'باز گشت به صفحه اصلی ']],
            ],
            "resize_keyboard" => true
        ]);

        $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "متن تایید قوانین");
        $telegram->sendMessage($content);
    } elseif ($msgType == 'message' && $text == 'ورود دانشجو ') {
        $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "ورود دانشجو را انتخاب کردید");
        $telegram->sendMessage($content);
    } elseif ($msgType == 'message' && $text == 'باز گشت به صفحه اصلی ') {
        $start_key = json_encode([
            "keyboard" =>
            [
                [['text' => 'ورود دانشجو '], ['text' => 'ثبت نام ']],
            ],
            "resize_keyboard" => true
        ]);

        $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "اقدام کنید برای ثبت نام یا ورود");
        $telegram->sendMessage($content);
    } else {
        $start_key = json_encode([
            "keyboard" =>
            [
                [['text' => 'ورود دانشجو '], ['text' => 'ثبت نام ']],
            ],
            "resize_keyboard" => true
        ]);

        $content = array('chat_id' => $chat_id, 'reply_markup' => $start_key, 'text' => "اقدام کنید برای ثبت نام یا ورود");
        $telegram->sendMessage($content);
    }
}







// InlineKeyBoard
$option = array(
    array($telegram->buildInlineKeyBoardButton("Button 1", $url = "http://link1.com"), $telegram->buildInlineKeyBoardButton("Button 2", $url = "http://link2.com")),
    array($telegram->buildInlineKeyBoardButton("Button 3", $url = "http://link3.com"), $telegram->buildInlineKeyBoardButton("Button 4", $url = "http://link4.com"), $telegram->buildInlineKeyBoardButton("Button 5", $url = "http://link5.com")),
    array($telegram->buildInlineKeyBoardButton("Button 6", $url = "http://link6.com"))
);
$keyb = $telegram->buildInlineKeyBoard($option);





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