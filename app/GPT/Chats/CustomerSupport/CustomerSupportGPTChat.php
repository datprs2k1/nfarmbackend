<?php

namespace App\GPT\Chats\CustomerSupport;

use App\GPT\Functions\KnowledgeProductGPTFunction;
use MalteKuhr\LaravelGPT\GPTChat;

class CustomerSupportGPTChat extends GPTChat
{
    /**
     * The message which explains the assistant what to do and which rules to follow.
     *
     * @return string|null
     */
    public function systemMessage(): ?string
    {
        return 'Đóng vai nhân viên tư vấn sản phẩm cho khách hàng';
    }

    /**
     * The functions which are available to the assistant. The functions must be
     * an array of classes (e.g. [new SaveSentimentGPTFunction()]). The functions
     * must extend the GPTFunction class.
     *
     * @return array|null
     */
    public function functions(): ?array
    {
        return [
            new KnowledgeProductGPTFunction()
        ];
    }

    /**
     * The function call method can force the model to call a specific function or
     * force the model to answer with a message. If you return with the class name
     * e.g. SaveSentimentGPTFunction::class the model will call the function. If
     * you return with false the model will answer with a message. If you return
     * with null or true the model will decide if it should call a function or
     * answer with a message.
     *
     * @return string|bool|null
     */
    public function functionCall(): string|bool|null
    {
        return null;
    }
}
