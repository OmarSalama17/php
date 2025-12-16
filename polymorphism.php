<?php


class MessageSender
{
    public function send($text)
    {
        return "Sending generic message : $text";
    }
}


class EmailSender extends MessageSender
{
    public function send($text)
    {
        return "Sending Email : $text";
    }
}

class SmsSender extends MessageSender
{
    public function send($text)
    {
        return "Sending SMS : $text";
    }
}


$senders = [
    new SmsSender(),
    new EmailSender(),
];

foreach ($senders as $sender) {
    echo $sender->send(text: "hello") . "\n";
}
