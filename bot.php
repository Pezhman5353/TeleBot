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


if (file_exists("register/" . $chat_id . ".step")) {
    file_put_contents("register/" . $chat_id . ".step", "0");
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => "Yes"]);
} else {
    // $step = file_get_contents(`register/s.step`);
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => "No"]);
}





// switch ($step) {
//     case 0:
//         if ($text == "/start") {
//             $reply = "لطفا نام خود را وارد کنید.";
//             $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply]);
//             file_put_contents("register/$chat_id.step", "1");
//         }
//         break;
//     case 1:
//         file_put_contents("register/$chat_id.name", "$text");
//         $reply = "لطفا نام خانوادگی خود را وارد کنید.";
//         $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply]);
//         file_put_contents("register/$chat_id.step", "2");
//         break;
//     case 2:
//         file_put_contents("register/$chat_id.lastname", "$text");
//         $reply = "لطفا کد ملی خود را وارد کنید.";
//         $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply]);
//         file_put_contents("register/$chat_id.step", "3");
//         break;
//     case 3:
//         file_put_contents("register/$chat_id.nationalcode", "$text");
//         $reply = "ثبت نام شما با موفقیت انجام شد.";
//         $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply]);
//         file_put_contents("register/$chat_id.step", "0");
//         break;
// }

// $content = array('chat_id' => $chat_id, 'text' => "Reza");
// $telegram->sendMessage($content);
