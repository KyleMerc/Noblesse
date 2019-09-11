<?php

namespace Noblesse\Dialogue;

abstract class IntroDialogue
{
    private static $wakeUpMsg = [
        'f'  => "
        \"This place seems familiar... I must find out what that was.\" he said.\n\n",
        'm'  => "
        \"*groaned* How long have I been sleeping..? ohhh This is Raizel's place\" he said.\n\n",
        'm2' => "
        \"That was a nice and creepy sleep. *staring at the painting* I sensed familiarity about this guy\" 
        he said.\n\n",
        'h'  => "
        \"Hey guys wake up!!\" he said. He is the first one who wakes up after that dream and it's only him
        who had that dream.\n\n"
    ];

    /**
     * Display Menu option
     * @return string
     */
    public static function startingMenu()
    {
        $welcome = "
        Welcome to Noblesse - SUD game.
        Choose any 4 of these characters to start the game:
        Frankenstein [F], Muzaka [M], M-21 [M2], Han Shinwoo [H]\n\n";

        echo $welcome;

        $option = readline("Choose your destiny: ");

        return $option;
    }

    /**
     * Start of the story
     * @param string $characterName
     * @return string[]
     */
    public static function introDialogue($charName)
    {
        $intro = "
        As you were waking up, you notice something is different.
        This place seems familiar but can't recall any further.
        You remembered something, a phantom showed in your dreams.
        You were given a task as you are eager to find out who is that phantom.\n\n";

        switch ($charName) {
            case 'Frankenstein':
                return [
                    'intro' => $intro,
                    'charIntro' => self::$wakeUpMsg['f']
                ];
            case 'Muzaka':
                return [
                    'intro' => $intro,
                    'charIntro' => self::$wakeUpMsg['m']
                ];
            case 'M-21':
                return [
                    'intro' => $intro,
                    'charIntro' => self::$wakeUpMsg['m2']
                ];
            case 'Han Shinwoo':
                return [
                    'intro' => $intro,
                    'charIntro' => self::$wakeUpMsg['h']
                ];
        }
    }
}