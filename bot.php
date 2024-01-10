<?php
/**
 * Telegram Bot example.
 * @author Gabriele Grillo <gabry.grillo@alice.it>
 * https://github.com/Eleirbag89/TelegramBotPHP
 * https://t.me/howCreateBot
 * 
 * https://api.telegram.org/bot6122399181:AAE9xmO-dZq3nsmqwzJqWhQVtUDyU9mmvVw/setWebhook?url=https://proxyfa.top/TeleBot/bot.php
 * 
 */

include("Telegram.php");
date_default_timezone_set("asia/tehran");

// Set the bot TOKEN
$bot_id = '6122399181:AAE9xmO-dZq3nsmqwzJqWhQVtUDyU9mmvVw';

// Instances the class
$telegram = new Telegram($bot_id);




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





// $host = 'localhost';
// $db = 'proxyfa2_teleBotDB';
// $user = 'proxyfa2_teleBotUS';
// $pass = 'Pezhman35153515';
// $charset = 'utf8mb4';

// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// $options = [
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES => false,
// ];

// try {
//     $pdo = new PDO($dsn, $user, $pass, $options);
// } catch (\PDOException $e) {
//     throw new \PDOException($e->getMessage(), (int) $e->getCode());
// }



$action_typing = ['chat_id' => $chat_id, 'action' => "typing"];
