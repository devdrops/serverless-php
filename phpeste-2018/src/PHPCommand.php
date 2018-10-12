<?php

declare(strict_type=1);

namespace Bot;

use Telegram\Bot\Commands\Command;

class PHPCommand extends Command
{
    /**
     * @var string
     */
    protected $name = 'action';
    /**
     * @var string
     */
    protected $description = 'Ação principal do Bot.';

    /**
     * @inheritDoc
     */
    public function handle($arguments)
    {
        $this->replyWithMessage([
            'text' => 'BORA PHPEEEEEEEEEEEEEEEEE!!',
        ]);
    }
}
