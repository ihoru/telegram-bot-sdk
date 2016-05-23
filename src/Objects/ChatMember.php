<?php


namespace Telegram\Bot\Objects;

/**
 * Class ChatMember.
 *
 * This object contains information about one member of the chat.
 *
 * @method User     getUser()       Information about the user
 * @method string   getStatus()     The member's status in the chat. Can be “creator”, “administrator”, “member”, “left” or “kicked”
 */
class ChatMember extends BaseObject
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return [
            'user' => User::class,
        ];
    }
}
