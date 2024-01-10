<?php
// require 'vendor/autoload.php';
// use Telegram\Bot\Api;

// $telegram = new Api('YOUR_BOT_TOKEN');

// $update = $telegram->getWebhookUpdates();

// $text = $update->getMessage()->getText();
// $chat_id = $update->getMessage()->getChat()->getId();

// if (!file_exists("register/$chat_id.step")) {
//     file_put_contents("register/$chat_id.step", "0");
// }

// $step = file_get_contents("register/$chat_id.step");

// switch ($step) {
//     case 0:
//         if ($text == "/start") {
//             $reply = "لطفا نام خود را وارد کنید.";
//             $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply ]);
//             file_put_contents("register/$chat_id.step", "1");
//         }
//         break;
//     case 1:
//         file_put_contents("register/$chat_id.name", "$text");
//         $reply = "لطفا نام خانوادگی خود را وارد کنید.";
//         $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply ]);
//         file_put_contents("register/$chat_id.step", "2");
//         break;
//     case 2:
//         file_put_contents("register/$chat_id.lastname", "$text");
//         $reply = "لطفا کد ملی خود را وارد کنید.";
//         $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply ]);
//         file_put_contents("register/$chat_id.step", "3");
//         break;
//     case 3:
//         file_put_contents("register/$chat_id.nationalcode", "$text");
//         $reply = "ثبت نام شما با موفقیت انجام شد.";
//         $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply ]);
//         file_put_contents("register/$chat_id.step", "0");
//         break;
// }
?>
